<?php

class SitesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	private $_data = null;

	public $layout = '/layouts/column2';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all domains to perform 'index' and 'view' actions
				'actions'=>array(),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated domain to perform 'create' and 'update' actions
				'actions'=>array('list', 'save'),
				'users'=>array('@'),
			),
			array('allow', // allow admin domain to perform 'admin' and 'delete' actions
				'actions'=>array('create','admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all domains
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->actionList();
	}

	public function actionList()
	{
		$p = intval($_GET['p']) > 1 ? intval($_GET['p']) : 1;
		$pageSize = 10;
		$offset = ($p - 1) * $per_page;
		$limit = $pageSize;
		$criteria = new CDbCriteria;
		$criteria->addCondition("status='0'");
		$criteria->order = ' `mtime` DESC,`id` DESC';
		$criteria->limit = $limit;
		$criteria->offset = $offset;
		$count = Site::model()->count($criteria);
		$data = Site::model()->findAll($criteria);
		$domain_list = array();
		foreach($data as $domain) {
			/*
			$domain_id = $domain['domain_id'];
			$domainMeta = SiteMeta::model()->find("domain_id=:domain_id",array(":domain_id"=>"$domain_id"))->attributes;
			if(!empty($domainMeta)) {
				$domain = array_merge($domain, $domainMeta);
			}
			 */
			$domain = $domain->attributes;
			$domain_list[] = $domain;
		}
		$pager = new CPagination($count);
		$pager->pageSize = $pageSize;
		$pager->applyLimit($criteria);
		
		$this->_data['site_list'] = $domain_list;
		$this->_data['pages'] = $pager;

		$this->render('list', $this->_data);
	}

	public function actionAdd()
	{
		$this->render('edit');
	}

	public function actionEdit()
	{
		$id = intval($_GET['id']) > 0 ? intval($_GET['id']) : 0;
		$site_db = Site::model()->findByPk($id)->attributes;
		$this->_data['site'] = $site_db;
		//debug_json($this->_data);
		$this->render('edit', $this->_data);
	}

	public function actionSave()
	{
		$required_fields = array('name' => '网站名称不能空', 'domain' => '域名不能为空', 'title'=> '标题不能为空', 'keywords' => '关键词不能为空', 'logo'=>'网站Logo不能为空');
		foreach($required_fields as $key=>$msg) {
			if(!isset($_POST[$key]) || empty($_POST[$key])) {
				$this->ajax_response(false, $msg);
				die();
			}
		}
		$field_array = array('name', 'domain', 'title', 'keywords', 'logo', 'description', 'footer_html', 'links');
		$data = array();
		foreach($field_array as $field) {
			if(isset($_POST[$field])) {
				$data[$field] = trim($_POST[$field]);
			}
		}
		$site_id = trim($_POST['id']);
		if(empty($site_id)) {
			$this->_save_add_site($data);
		} else {
			$this->_save_edit_site($site_id, $data);
		}
	}

	private function _save_add_site($data)
	{
		$field_array = array('name', 'domain', 'title', 'keywords', 'logo', 'description', 'footer_html', 'links');
		$new_site = new Site;
		foreach($field_array as $field) {
			if(isset($data[$field])) {
				$new_site->$field = $data[$field];
			}
		}
		$new_site->status = 0;
		$new_site->ctime = time();
		$new_site->mtime = time();
		
		if($new_site->save()) {
			$site_id = Yii::app()->db->getLastInsertId();
			$this->ajax_response(true, '保存成功', array('site_id' => $site_id));
		} else {
			$error = $new_site->getErrors();
			$this->ajax_response(false, '添加失败', $error);
		}
	}

	private function _save_edit_site($site_id, $data) 
	{
		$site_db = Site::model()->findByPk($site_id);

		$field_array = array('name', 'domain', 'title', 'keywords', 'logo', 'description', 'footer_html', 'links');
		foreach($field_array as $field) {
			if(isset($data[$field])) {
				$site_db->$field = $data[$field];
			}
		}
		$site_db->mtime = time();
		if($site_db->update()) {
			$this->ajax_response(true, '保存成功', array('site_id' => $site_id));
		} else {
			$this->ajax_response(false, '保存失败');
		}
	}

	public function actionDelete()
	{
		$site_id = trim($_POST['site_id']);
		$site_db = Site::model()->findByPk($site_id);
		$site_db->status = -1;
		$site_db->mtime = time();
		if($site_db->update()) {
			$this->ajax_response(true, '保存成功', array('site_id' => $site_id));
		} else {
			$this->ajax_response(false, '保存失败');
		}
	}

}
