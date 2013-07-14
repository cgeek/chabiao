<?php

class ApiController extends Controller
{
	private $_data;

	public function actionGetCategorys()
	{
		$str = '';
		$categorys = getCategorys();
		foreach($categorys as $key=> $name) {
			$str .= $key . ':' . $name . ';';
		}
		echo $str;
	}

	public function actionLocoyAdd()
	{
		$data = array();
		$data['title'] = trim($_POST['title']);
		$data['content'] = trim($_POST['content']);
		$data['category'] = $_POST['category'];
		$data['area'] = $_POST['area'];
		$data['ptime'] = $_POST['ptime'];
		$data['access'] = 2;
		$data['status'] = 1;
		$data['keywords'] = '';
		$data['source_url'] = $_POST['source_url'];

		$data['ctime'] = time();
		$data['mtime'] = date('Y-m-d h:i:s', time());

		$this->_save_add($data);
	}

	private function _save_add($data)
	{
		$title_md5 = md5($data['title']);
		$post_db = Post::model()->find("source_md5=:source_md5", array(':source_md5' => $title_md5));
		if(!empty($post_db)) {
			echo 'success';
			return ;
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
		$new_post->source_url = $data['source_url'];
		$new_post->source_type = 3;

		$new_post->user_id = 0;

		$new_post->ctime = time();
		$new_post->mtime = date('Y-m-d h:i:s', time());

		$new_post->source_md5 = md5($data['title']);
		if($new_post->save()) {
			$post_id = Yii::app()->db->getLastInsertId();
			$this->_update_index($post_id, $data);
			echo 'success';
		} else {
			var_dump($new_post->getErrors());
			echo 'failed';
		}
	}

	private function _update_index($post_id, $data) 
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

}
