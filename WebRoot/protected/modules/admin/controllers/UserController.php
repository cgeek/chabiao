<?php

class UserController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('signup','register','login','logout','followers','following','timeline','detail', 'index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('list'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
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
		if(isset($_GET['keyword']) && !empty($_GET['keyword'])) {
			$criteria->addSearchCondition('user_name', $_GET['keyword']);
		}

		$criteria->order = ' `ctime` DESC,`user_id` DESC';
		$criteria->limit = $limit;
		$criteria->offset = $offset;
		$count = User::model()->count($criteria);
		$data = User::model()->findAll($criteria);
		$user_list = array();
		foreach($data as $user) {
			$user = $user->attributes;
			$user_id = $user['user_id'];
			$userMeta = UserMeta::model()->find("user_id=:user_id",array(":user_id"=>"$user_id"))->attributes;
			if(!empty($userMeta)) {
				$user = array_merge($user, $userMeta);
			}
			$user_list[] = $user;
		}
		
		$pager = new CPagination($count);
		$pager->pageSize = $pageSize;
		$pager->applyLimit($criteria);
		
		$this->_data['user_list'] = $user_list;
		$this->_data['pages'] = $pager;

		$this->render('list', $this->_data);

	}

	public function actionAdd()
	{
		if(Yii::app()->request->isAjaxRequest) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			if(empty($email) || empty($password) || empty($username)) {
				$this->ajax_response(false, "邮箱或者密码不能为空");
			}
			$user = User::model()->find("user_name=:username",array(":username"=>$username));
			if(!empty($user)) {
				$this->ajax_response(false, "该邮箱已经使用，请换其他邮箱");
			}
			$user_model=new User;
			$user_model->user_name = $username;
			$user_model->email = $email;
			$user_model->password =  md5($password);
			$user_model->ctime = time();
			$success = false;
			$message = "";
			if($user_model->save()) {
				$this->_identity=new UserIdentity($email,$password);
				$this->_identity->authenticate();
				Yii::app()->user->login($this->_identity,3600*24*30);
				$this->ajax_response(true, "恭喜你注册成功!");
			} else {
				$this->ajax_response(false, "注册失败，请重新注册");
			}
		} else {
			$this->render('register');
		}
	}
	
}
