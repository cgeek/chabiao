<?php

class F3Controller extends Controller
{
	private $_data;

	private function _f3_error($notice = '') 
	{
		$result = array(
			'result' => false,
			'notice' => $notice,
			'info'=>array()
		);
		$this->_f3_response($result);
	}

	private function _f3_response($result) {
		if(empty($result)) {
			die('err');
		}
		header("Content-type: text/html; charset=utf-8"); 
		echo urldecode(json_encode($this->_url_encode($result)));
		die();
	}

	public function actionIndex()
	{
		error_reporting(E_ALL);
		var_dump($r);
	}

	public function actionGetCategory()
	{
		$post = file_get_contents("php://input");
		file_put_contents('/data/htdocs/cgeek/chabiao/WebRoot/protected/runtime/aaa.txt', $post);
		$post = json_decode($post, TRUE);

		$mtype = $post['mtype'];
		$categorys = array(
			'12654' => array(
				'categoryid' => 1,
				'categoryname' => '招标信息',
				'iconurl' => ''
			),
			'12655' =>array(
				'categoryid' => 2,
				'categoryname' => '拟在建项目',
				'iconurl' => ''
			),
			'12655' =>array(
				'categoryid' => 3,
				'categoryname' => '中标公告',
				'iconurl' => ''
			),
			'10478' =>array(
				'categoryid' => 4,
				'categoryname' => '供应信息',
				'iconurl' => ''
			),
			'10483' =>array(
				'categoryid' => 5,
				'categoryname' => '求购信息',
				'iconurl' => ''
			),
			'12056' =>array(
				'categoryid' => 999,
				'categoryname' => '关于我们',
				'iconurl' => ''
			)
		);

		if(!empty($mtype)) {
			$categorys = array($categorys[$mtype]);
		}
		$result = array(
			'result' => true,
			"notice" => "操作成功",
			"info" => $categorys
		);
		$this->_f3_response($result);
	}

	public function actionGetInfoListByPage()
	{
		$post = file_get_contents("php://input");
		$post = json_decode($post, TRUE);

		$category_id = $post['categoryid'];
		$size = $post['size'];
		$p = $post['pageindex'];
		$filter = $post['filter'];
		if(!empty($filter)) {
			search()->setQuery($filter);
		} else {
			search()->setQuery('');
		}
		$category_id = empty($category_id) ? 0 : $category_id;
		if(!empty($category_id)) {
			search()->addRange('category', $category_id, $category_id);
		}
		search()->setSort('ctime');

		$pageSize = empty($size) ? 10 : $size;
		$page = !empty($p) ? intval($p) : 1;
		$offset = ($page - 1) * $pageSize;

		$docs = search()->setLimit($pageSize, $offset)->search(); 
		$count = search()->getLastCount();
		$dbTotal = search()->getDbTotal();
		$post_list = array();
		foreach($docs as $doc)
		{
			$post = Post::model()->findByPk($doc->id);
			/*
			$post = array();
			$title = $doc->title;
			$content = strip_tags($doc->content);
			$desc = search()->highlight($content);
			 */
			$post = array(
				'msgid' => $doc->id,
				'categoryid' => $post['category'],
				'title' => cut_str($doc->title, 40),
				'linkurl' => 'http://www.unionbidding.com/api/f3/infoHtml?id=' . $doc->id,
				'iconurl' => '',
				'addtime' => date('Y-m-d h:i:s', strtotime($doc->ctime))
			);
			$post_list[] = $post;
		}

		$hasMore = false;
		if($pageSize * $page < $count) {
			$hasMore = true;
		}
		$result = array(
			'result' => true,
			'notice' => '操作成功',
			'hasmore' => $hasMore,
			'info' => $post_list
		);
		$this->_f3_response($result);
	}

	private function _url_encode($str)
	{
		if(is_array($str)) {  
			foreach($str as $key=>$value) { 
				if($key == 'result' || $key == 'hasmore') {
					continue;
				}
				$str[urlencode($key)] = $this->_url_encode($value);  
			}  
		} else {  
			$str = urlencode($str);  
		}  
		return $str; 
	}

	public function actionGetInfoContent()
	{
		$post = file_get_contents("php://input");
		$post = json_decode($post, TRUE);
		$id = $post['msgid'];

		if(empty($id) || $id <= 0) {
			$this->_f3_error('miss param');
		}
		$post = Post::model()->findByPk($id);
		if(empty($post)) {
			$this->_f3_error('找不到内容');
		}
		$post = $post->attributes;
		$this->_data = $post;
		$current_category = array(
			'category' => $post['category'],
			'name'    => getCategoryName($post['category'])
		);
		$this->_data['current_category'] = $current_category;

		$result = array(
			'result' => true,
			'notice' => '操作成功',
			'title' => empty($post['title']) ? '' : $post['title'],
			'addtime' => date('Y-m-d h:i:s' ,$post['ctime']),
			'wapurl' => 'http://www.unionbidding.com/api/f3/infoHtml?id=' . $post['id'],
			'linkurl' => 'http://www.unionbidding.com/api/f3/infoHtml?id=' . $post['id'],
			'shareurl' => '',
			'content' => array(
				array(
					'letter' => urlencode(cut_str(trim(strip_tags($post['content'])), 10020)),
					//'letter' => urlencode($post['content']),
					'imageurl' => '',
					'imagedesc' => ''
				)
			)
		);
		$this->_f3_response($result);
	}

	public function actionInfoHtml()
	{
		$id = request()->getParam('id');
		if(empty($id) || $id <= 0) {
			$this->_f3_error('miss param');
		}
		$post = Post::model()->findByPk($id);
		if(empty($post)) {
			$this->_f3_error('miss post');
		}
		header("Content-type: text/html; charset=utf-8");
		echo $post['content'];
	}
}
