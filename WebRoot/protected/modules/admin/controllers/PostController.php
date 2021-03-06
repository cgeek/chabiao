<?php

class PostController extends Controller
{
	private $_data;

	public $layout = '/layouts/column2';

	public function filters()
	{
		return array(
			'adminAccess',
		);
	}

	public function filterAdminAccess($filterChain)
	{
		if ($filterChain->action->id==='login' || !Yii::app()->adminUser->isGuest)
			$filterChain->run();
		else
			Yii::app()->adminUser->loginRequired();
	}


	public function actionIndex()
	{
		$this->actionList();
	}

	public function actionList()
	{
		$p = isset($_GET['p']) && intval($_GET['p']) > 1 ? intval($_GET['p']) : 1;

		$pageSize = 15;
		$offset = ($p - 1) * $pageSize;
		$limit = $pageSize;
		$criteria = new CDbCriteria;
		if(isset($_GET['category']) && !empty($_GET['category']) && ($_GET['category'] > 0)) {
			$criteria->addCondition("category=$_GET[category]");		
		}
		if(isset($_GET['access']) ) {
			$criteria->addCondition("access=" . intval($_GET['access']));		
		}
		if(isset($_GET['status']) && $_GET['status'] != '' ) {
			$criteria->addCondition("status=" .intval($_GET['status']));
		}
		if(isset($_GET['area']) && !empty($_GET['area'])) {
			$criteria->addSearchCondition('area', "{$_GET['area']}");
		}
		$criteria->order = ' `ctime` DESC, `id` DESC';
		$criteria->limit = $limit;
		$criteria->offset = $offset;
		$count = Post::model()->count($criteria);
		$data = Post::model()->findAll($criteria);
		$post_list = array();
		foreach($data as $post) {
			$post_arr = $post->attributes;
			if(!empty($post_arr['user_id'])) {
				$user = User::model()->findByPk($post_arr['user_id'])->attributes;
			}  else {
				$user = array();
			}
			$post_arr['user'] = $user;
			$post_list[] = $post_arr;
		}
		
		$pager = new CPagination($count);
		$pager->pageVar = 'p';
		$pager->route =  '/admin/post';
		$pager->pageSize = $pageSize;
		$pager->applyLimit($criteria);
		
		$this->_data['post_list'] = $post_list;
		$this->_data['pages'] = $pager;

		$this->render('list', $this->_data);
	}
	
	public function actionEdit($id)
	{
		$post_db = Post::model()->findByPk($id);
		if(empty($post_db))
			throw new CHttpException(404,'Not found');
		$this->_data['post_db'] = $post_db->attributes;
		$this->render('edit',$this->_data);
	}

	public function actionAdd()
	{
		$this->render('edit');
	}

	public function actionSave()
	{
		$data = array();
		$data['title'] = $_POST['title'];
		$data['content'] = $_POST['content'];
		$data['category'] = $_POST['category'];
		$data['area'] = $_POST['area'];
		$data['access'] = $_POST['access'];
		$data['ptime'] = $_POST['ptime'];
		$data['status'] = $_POST['status'];
		$data['keywords'] = $_POST['keywords'];

		$post_id = $_POST['post_id'];
		if(isset($post_id) && $post_id > 0) {
			$this->_save_edit($post_id,$data);
		} else {
		    $this->_save_add($data);
		}
	}

	private function _save_add($data)
	{
		$title_md5 = md5($data['title']);
		$post_db = Post::model()->find("source_md5=:source_md5", array(':source_md5' => $title_md5));
		if(!empty($post_db)) {
			$this->ajax_response(500, '已经添加过,不能重复添加');
		}
		$new_post = new Post;
		$new_post->title = $data['title'];
		$new_post->content = $data['content'];
		$new_post->category = $data['category'];
		$new_post->area = $data['area'];
		$new_post->access = $data['access'];
		$new_post->ptime = $data['ptime'];
		$new_post->status = $data['status'];
		$new_post->keywords = $data['keywords'];

		$new_post->user_id = user()->id;

		$new_post->ctime = time();
		$new_post->mtime = date('Y-m-d h:i:s', time());

		$new_post->source_md5 = $title_md5;
		if($new_post->save()) {
			$post_id = Yii::app()->db->getLastInsertId();
			$this->_data['post_id'] = $post_id;
			if($data['status'] == 1) {
				$this->_update_index($post_id, $data);
			}
			$this->ajax_response(200,'',$this->_data);
		} else {
			//var_dump($new_post->getErrors());
			$this->ajax_response(500,'添加失败',$this->_data);
		}
	}


	private function _save_edit($post_id, $data)
	{
		$post_db = Post::model()->findByPk($post_id);
		if(empty($post_db))
		        throw new CHttpException(404,'Not found');
		
		Post::model()->updateByPk($post_id, $data);
		$this->_data['post_id'] = $post_id;
		
		$this->_update_index($post_id, $data);
		
		$this->ajax_response(200,'',$this->_data);
	}

	public function _update_index($post_id, $data) 
	{
		$x_data = array(
			'id' => $post_id,
			'category' => $data['category'],
			'area' => $data['area'],
			'keywords' => $data['keywords'],
			'title' => $data['title'],
			'content' => $data['content'],
			'ctime' => time(),
			'status' => $data['status']
		);

		search()->update($x_data);
	}

	public function actionDelete($post_id)
	{
	
	}


}
