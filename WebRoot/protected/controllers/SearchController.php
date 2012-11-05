<?php

class SearchController extends Controller
{

	private $_data; 
	
	public function actionIndex($keyword = NULL)
	{
		$post_list = array();

		$pageSize = 20;
		$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$offset = ($page - 1) * $pageSize;

		_generateQueryString();
		$search_begin = microtime(true);
		$docs = search()->setSort('ctime')->setLimit($pageSize, $offset)->search(); 
		$search_cost = microtime(true) - $search_begin;

		$count = search()->getLastCount();
		$dbTotal = search()->getDbTotal();
		foreach($docs as $doc)
		{
			//$post = Post::model()->findByPk($doc->id);
			$post = array();
			$title = search()->highlight($doc->title);
			$content = strip_tags($doc->content);
			$desc = search()->highlight($content);
			$post = array(
				'id' => $doc->id,
				'title' => $title,
				'desc' => $desc,
				'area' => $doc->area,
				'ctime' => date('Y-m-d', strtotime($doc->ctime)),
			);
			$post_list[] = $post;
		}

		//分页
		$criteria=new CDbCriteria;
		$criteria->limit = $pageSize;
		$criteria->offset = $offset;

		$pages=new CPagination($count);
		$pages->pageSize= $pageSize;
		$pages->pageVar = 'page';
		$pages->route = '/search/index';
		$pages->applyLimit($criteria);

		$this->_data['pages'] = $pages;

		$this->_data['count'] = $count;
		$this->_data['dbTotal'] = $dbTotal;
		$this->_data['search_cost'] = $search_cost;
		$this->_data['post_list'] = $post_list;
		$this->_data['keyword'] = $keyword;
		$this->_data['relatedkey'] = search()->getRelatedQuery();
		$this->render('/info/search', $this->_data);
	}

}
