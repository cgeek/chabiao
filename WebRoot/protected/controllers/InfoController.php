<?php

class InfoController extends Controller
{
	private $_data;

	public $site_info = array();

	public function __construct()
	{
		$hostInfo = Yii::app()->request->hostInfo;
		$domain = substr($hostInfo, 7);
		if(empty($domain)) {
			$domain = 'www.unionbidding.com';
		}
		$this->site_info = Site::model()->find("domain=:domain", array(':domain'=>$domain))->attributes;
		$this->_data['site_info'] = $this->site_info;
	}

	public function actionIndex()
	{

		$keywords = $this->site_info['keywords'];
		//首页栏目1
		$this->_data['zhaobiao_list'] = $this->_get_column_list(array('category_id'=>1, 'keywords'=>"$keywords", 'limit'=>20));
		$this->_data['zhongbiao_list'] = $this->_get_column_list(array('category_id'=>3, 'keywords'=>"$keywords", 'limit'=>15));
		$this->_data['nizaijian_list'] = $this->_get_column_list(array('category_id'=>2, 'keywords'=>"$keywords", 'limit'=>15));

		//debug_json($this->_data);
		$this->render('/info/index', $this->_data);
	}

	private function _get_column_list($config)
	{
		if(!empty($config['keywords'])) {
			$arr = explode(',', $config['keywords']);
			$keywords = implode(" OR ", $arr);
			search()->setQuery("$keywords");
		}
		search()->addRange('category', $config['category_id'] , $config['category_id']);
		search()->setSort('ptime');

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
				'ctime' => date('Y-m-d', strtotime($doc->ptime))
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
		$post['content'] = preg_replace("/(<div([^>]*)>)|(<\/div>)/isU","",$post['content']);
		$post['content'] = preg_replace("/class=['\"]*([^'\"]*)['\"]*/is","",$post['content']);
		$this->_data['info'] = $post;
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
			'zhaobiao' => array('name'=>'招标信息','category_id'=>'1', 'keywords'=>''),
			'nizaijian' => array('name'=>'拟在建项目','category_id'=>'2', 'keywords'=>''),
			'zhongbiao' => array('name'=>'中标公告','category_id'=>'3', 'keywords'=>''),
			'qiugou' => array('name'=>'求购信息','category_id'=>'5', 'keywords'=>''),
			'gongying' => array('name'=>'供应信息','category_id'=>'5', 'keywords'=>''),
			'fagui' => array('name'=>'法规中心','category_id'=>'11', 'keywords'=>''),
			'dongtai' => array('name'=>'行业动态','category_id'=>'7', 'keywords'=>''),
		);

		$current_category = $type_array[$type];
		if(empty($current_category)) {
			throw new CHttpException(404,'The specified post cannot be found.');
		}
		$keywords = '';
		if(!empty($this->site_info['keywords'])) {
			$keywords = $this->site_info['keywords'];
		}
		if(!empty($current_category['keywords'])) {
			$keywords = $keywords . " $current_category[keywords]";
		}
		if(!empty($keywords)) {
			search()->setQuery("keywords:$keywords");
		}

		search()->addRange('category', $current_category['category_id'] , $current_category['category_id']);
		search()->setSort('ptime');

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
				'ctime' => date('Y-m-d', strtotime($doc->ptime))
			);
			$post_list[] = $post;
		}
		//分页
		$criteria=new CDbCriteria;
		$pages=new CPagination($count);
		$pages->pageSize= $pageSize;
		$pages->applyLimit($criteria);
		$this->_data['pages'] = $pages;

		$this->_data['count'] = $count;
		$this->_data['dbTotal'] = $dbTotal;
		$this->_data['post_list'] = $post_list;
		$this->_data['current_category'] = $current_category;
		$this->render('/info/list', $this->_data);
	}
}
