<?php

class InfoController extends Controller
{
	private $_data;

	public function actionIndex()
	{

		$keywords = $this->site_info['keywords'];
		//首页栏目1
		$this->_data['zhaobiao_list'] = $this->_get_column_list(array('category'=>1, 'keywords'=>"$keywords", 'limit'=>20));
		$this->_data['zhongbiao_list'] = $this->_get_column_list(array('category'=>3, 'keywords'=>"$keywords", 'limit'=>15));
		$this->_data['nizaijian_list'] = $this->_get_column_list(array('category'=>2, 'keywords'=>"$keywords", 'limit'=>14));

		$this->_data['dongtai_list'] = $this->_get_column_list(array('category'=>7, 'keywords'=>"", 'limit'=>7));
		$this->_data['gongying_list'] = $this->_get_column_list(array('category'=>4, 'keywords'=>"", 'limit'=>10));
		$this->_data['qiugou_list'] = $this->_get_column_list(array('category'=>5, 'keywords'=>"", 'limit'=>10));
		$this->_data['zhongbiaobang_list'] = $this->_get_column_list(array('category'=>11, 'keywords'=>"", 'limit'=>8));
		$this->_data['gongyingshang_list'] = $this->_get_column_list(array('category'=>10, 'keywords'=>"", 'limit'=>5));
		
		$this->_data['toubiaozhinang_list'] = $this->_get_column_list(array('category'=>8, 'keywords'=>"", 'limit'=>12));
		$this->_data['zhanghui_list'] = $this->_get_column_list(array('category'=>9, 'keywords'=>"", 'limit'=>11));

		//debug_json($this->_data);
		$this->render('/info/index', $this->_data);
	}

	private function _get_column_list($config)
	{
		if(!empty($config['keywords'])) {
			$arr = explode(',', $config['keywords']);
			$keywords = implode(" OR ", $arr);
			search()->setQuery("$keywords");
		} else {
			search()->setQuery("");
		}
		search()->addRange('category', $config['category'] , $config['category']);
		search()->setSort('ctime');

		$docs = search()->setLimit($config['limit'], 0)->search(); 
		$count = search()->getLastCount();

		$list = array();
		foreach($docs as $doc)
		{
			//$post = Post::model()->findByPk($doc->id);
			$post = array();
			$title = $doc->title;
			$post = array(
				'id' => $doc->id,
				'title' => cut_str($title, 40),
				'area' => $doc->area,
				'ctime' => date('Y-m-d', strtotime($doc->ctime))
			);
			$list[] = $post;
		}
		return $list;
	}

	public function actionView($id = NULL)
	{
		if(empty($id) || $id <= 0) {
			throw new CHttpException(404,'The specified post cannot be found.');
		}
		$post = Post::model()->findByPk($id);
		if(empty($post)) {
			 header('HTTP/1.1 301 Moved Permanently');   
			 header('Location: '. Yii::app()->request->hostInfo);
		}
		$post['content'] = preg_replace("/(<div([^>]*)>)|(<\/div>)/isU","",$post['content']);
		$post['content'] = preg_replace("/class=['\"]*([^'\"]*)['\"]*/is","",$post['content']);
		$this->_data['info'] = $post;
		$current_category = array(
			'category' => $post['category'],
			'name'    => getCategoryName($post['category'])
		);
		if(!empty($post)) {
			$this->title = $post['title'];
		}
		$this->_data['current_category'] = $current_category;
		$this->render('/info/view', $this->_data);
	}

	private function _removeDivTag($str)
	{
		$str=str_replace("<div", '', $str);
		return $str;
	}

	public function actionList($type)
	{
		$post_list = array();

		$type_array = array(
			'zhaobiao' => array('name'=>'招标信息','category'=>'1'),
			'nizaijian' => array('name'=>'拟在建项目','category'=>'2'),
			'zhongbiao' => array('name'=>'中标公告','category'=>'3'),
			'qiugou' => array('name'=>'求购信息','category'=>'4'),
			'gongying' => array('name'=>'供应信息','category'=>'5'),
			'fagui' => array('name'=>'法规中心','category'=>'6'),
			'dongtai' => array('name'=>'行业动态','category'=>'7'),
			'toubiaozhinang' => array('name'=>'投标指南','category'=>'8'),
			'zhanghui' => array('name'=>'展会信息','category'=>'9'),
			'zhongbiaobang' => array('name'=>'会员中标榜','category'=>'11'),
		);

		$current_category = $type_array[$type];
		if(isset($current_category) && !empty($current_category)) {
			$this->title = $current_category['name'];
		} else {
			throw new CHttpException(404,'The specified post cannot be found.');
		}
		$keywords = '';
		if(!empty($this->site_info['keywords'])) {
			$keywords = $this->site_info['keywords'];
		}
		if(!empty($keywords)) {
			$arr = explode(',', $keywords);
			$keywords = implode(" OR ", $arr);
			search()->setQuery("$keywords");
		}

		search()->addRange('category', $current_category['category'] , $current_category['category']);
		search()->setSort('ctime');

		$pageSize = 20;
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$offset = ($page - 1) * $pageSize;

		$docs = search()->setLimit($pageSize, $offset)->search(); 
		$count = search()->getLastCount();
		$dbTotal = search()->getDbTotal();
		foreach($docs as $doc)
		{
			//$post = Post::model()->findByPk($doc->id);
			$post = array();
			$title = $doc->title;
			$content = strip_tags($doc->content);
			$desc = search()->highlight($content);
			$post = array(
				'id' => $doc->id,
				'title' => cut_str($title, 40),
				'desc' => $desc,
				'area' => $doc->area,
				'mtime' => date('Y-m-d', strtotime($doc->ctime))
			);
			$post_list[] = $post;
		}
		//分页
		$criteria=new CDbCriteria;
		$criteria->offset = $offset;
		$criteria->limit = $pageSize;

		$pages=new CPagination($count);
		$pages->pageSize= $pageSize;
		$pages->pageVar = 'page';
		$pages->route = '/info/' . $type;
		$pages->applyLimit($criteria);
		$this->_data['pages'] = $pages;

		$this->_data['count'] = $count;
		$this->_data['dbTotal'] = $dbTotal;
		$this->_data['post_list'] = $post_list;
		$this->_data['current_category'] = $current_category;
		$this->render('/info/list', $this->_data);
	}
}
