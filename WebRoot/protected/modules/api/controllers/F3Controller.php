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
		echo json_encode($result);die();
	}

	public function actionGetCategory()
	{
		$mtype = request()->getParam('mtype');
		
		$categorys = array(
			array(
				'categoryid' => 1,
				'categoryname' => '招标信息',
				'iconurl' => ''
			),
			array(
				'categoryid' => 2,
				'categoryname' => '拟在建项目',
				'iconurl' => ''
			),
			array(
				'categoryid' => 3,
				'categoryname' => '中标公告',
				'iconurl' => ''
			),
			array(
				'categoryid' => 4,
				'categoryname' => '供应信息',
				'iconurl' => ''
			),
			array(
				'categoryid' => 5,
				'categoryname' => '求购信息',
				'iconurl' => ''
			),
			array(
				'categoryid' => 999,
				'categoryname' => '关于我们',
				'iconurl' => ''
			)
		);

		$result = array(
			'result' => true,
			"notice" => "操作成功",
			"info" => $categorys
		);
		echo json_encode($result);die();
	}

	public function actionGetInfoListByPage()
	{
		$category_id = request()->getParam('categoryid');
		$size = request()->getParam('size');
		$p = request()->getParam('pageindex');
		
		$filter = request()->getParam('filter');

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
		echo json_encode($result);
	}

	public function actionGetInfoContent()
	{
		$id = request()->getParam('msgid');
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
			'shareurl' => '',
			'content' => array(
				'letter' => cut_str(strip_tags($post['content']), 120),
				'imageurl' => '',
				'imagedesc' => ''
			)
		);
		echo json_encode($result);die();
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
		echo $post['content'];
	}
}
