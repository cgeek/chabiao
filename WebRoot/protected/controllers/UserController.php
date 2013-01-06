<?php
Yii::import('ext.sinaWeibo.SinaWeibo',true);

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	private $_identity = null;
	private $_data = null;
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
				'actions'=>array('signup','register','login','logout'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('home', 'settings', 'sub', 'password','info','pub','keywords','savePost'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionHome()
	{
		$id = Yii::app()->user->user_id;
		$user_db = User::model()->findByPk($id);

		$user_meta = UserMeta::model()->find("user_id=:user_id",array(":user_id"=>$id))->attributes;

		$keyword = $user_meta['keywords'];

		$post_list = array();

		_generateQueryString($keyword);
		$search_begin = microtime(true);
		$docs = search()->setLimit(20, 0)->search(); 
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
				'category' => $doc->category,
				'area' => $doc->area,
				'ctime' => date('Y-m-d', strtotime($doc->ctime))
			);
			$post_list[] = $post;
		}
		//分页
		$this->_data['count'] = $count;
		$this->_data['dbTotal'] = $dbTotal;
		$this->_data['search_cost'] = $search_cost;
		$this->_data['post_list'] = $post_list;
		$this->_data['keyword'] = $keyword;
		$this->_data['post_list'] = $post_list;
		$this->_data['user'] = $user_db;

		$this->render('/user/home',$this->_data);
	}

	public function actionPassword()
	{
		$id = Yii::app()->user->user_id;
		if(Yii::app()->request->isAjaxRequest) {
			$user_meta = array();
			$user_meta['website'] = $_POST['website'];

			$r = UserMeta::model()->updateAll($user_meta, "user_id=$id");
			$this->ajax_response(true,'',$this->_data);
		} else {

		} else {
			$this->render('/user/password');
		}
	}

	public function actionInfo()
	{
		$id = Yii::app()->user->user_id;
		if(Yii::app()->request->isAjaxRequest) {
			$user = User::model()->findByPk($id)->attributes;
			$old_password = $_POST['old_password'];
			$password = $_POST['password'];
			if($old_password != $user['password']) {
				$this->ajax_response(false,'原密码不正确，请重试');
			}
			$r = User::model()->updateAll(array('password'=> md5($password)), "user_id=$id");
			$this->ajax_response(true,'',$this->_data);
		} else {
			$user_meta = UserMeta::model()->find("user_id=:user_id",array(":user_id"=>$id))->attributes;
	
			$this->_data['user_meta'] = $user_meta;
			$this->render('user/info', $this->_data);
		}
	}
	
	public function actionPub()
	{
		$this->render('user/pub');
	}

	public function actionKeywords()
	{
		$id = Yii::app()->user->user_id;
		if(Yii::app()->request->isAjaxRequest) {
			$user_meta = array();
			$user_meta['keywords'] = htmlspecialchars(addslashes($_POST['keywords']));
			$r = UserMeta::model()->updateAll($user_meta, "user_id=$id");
			$this->_data['user_meta'] = $user_meta;
			$this->ajax_response(true,'',$this->_data);
		} else {
			$id = user()->id;
			$user_meta = UserMeta::model()->find("user_id=:user_id",array(":user_id"=>$id))->attributes;
			$this->_data['keywords'] = $user_meta['keywords'];
			$this->render('user/keywords', $this->_data);
		}
	}

	public function actionSub()
	{

		$this->render('sub');
	}

	public function actionSavePost()
	{
		$data = array();
		$data['title'] = htmlspecialchars(addslashes(trim($_POST['title'])));
		$data['content'] = htmlspecialchars(addslashes(trim($_POST['content'])));
		$data['category'] = $_POST['category'];
		$data['area'] = $_POST['area'];
		$data['access'] = 0;
		$data['ptime'] = date('Y-m-d H:i:s',time());
		$data['status'] = 0;
		$data['keywords'] = '';

		$post_id = $_POST['post_id'];
		if(isset($post_id) && $post_id > 0) {
			$this->_save_edit_post($post_id,$data);
		} else {
		    $this->_save_add_post($data);
		}
	}

	private function _save_add_post($data)
	{
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
		$new_post->source_type = 2;

		$new_post->ctime = time();
		$new_post->mtime = time();

		$new_post->source_md5 = md5($data['title']);
		if($new_post->save()) {
			$this->ajax_response(true,'',$this->_data);
		} else {
			//var_dump($new_post->getErrors());
			$this->ajax_response(false,'添加失败',$this->_data);
		}
	}

	private function _save_edit_post($post_id, $data)
	{
		$post_db = Post::model()->findByPk($post_id);
	}


	public function actionLogin()
	{
		if(Yii::app()->request->isAjaxRequest) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(empty($username) || empty($password)) {
				$this->ajax_response(false, "用户名或者密码不能为空");
			}
			if($this->_identity===null)
			{
				$this->_identity=new UserIdentity($username, $password);
				$this->_identity->authenticate();
			}
			if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
			{
				$rememberMe = $_POST['remember'];
				$duration=($rememberMe === 1) ? 3600*24*30 : 0; // 30 days
				Yii::app()->user->login($this->_identity,$duration);
				//update last login time
				User::model()->updateByPk($this->_identity->id, array('last_login_time' => new CDbExpression('NOW()'))); 
				$this->ajax_response(true, "恭喜你，登录成功！");
			} else {
				if($this->_identity->errorCode === UserIdentity::ERROR_PASSWORD_INVALID) {
					$this->ajax_response(false, "密码不正确，请重新输入");
				} else if($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID) { 
					$this->ajax_response(false, "你输入的用户名，请重新输入");
				}
			}
		} else {
			if(Yii::app()->user->isGuest) {
				$this->render('user/login');
			} else {
				$this->redirect(array('user/home'));
			}
		}
	}

	public function actionRegister()
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
				$this->ajax_response(false, "该用户名已经被使用，请换其他用户名");
			}
			$user_model = new User;
			$user_model->user_name = $username;
			$user_model->email = $email;
			$user_model->password =  md5($password);
			$user_model->ctime = time();
			$user_model->reg_reason = intval($_POST['reg_reason']);
			$success = false;
			$message = "";
	
			$user_meta = array();
			$user_meta['contact_name'] = $_POST['contact_name'];
			$user_meta['mobile'] = $_POST['mobile'];
			$user_meta['fax'] = $_POST['fax'];
			$user_meta['qq'] = $_POST['qq'];
			$user_meta['company_name'] = $_POST['company_name'];
			$user_meta['company_desc'] = $_POST['company_desc'];
			$user_meta['address'] = $_POST['address'];
			$user_meta['products'] = $_POST['products'];
			$user_meta['website'] = $_POST['website'];
			$user_meta['reg_reason'] = intval($_POST['reg_reason']);
			$user_meta['source'] = isset($this->site_info['domain']) ? $this->site_info['domain'] : '';
			$user_meta['source_cn'] = isset($this->site_info['name']) ? $this->site_info['name']:'';

			if($user_model->save()) {
				$user_meta['user_id'] = Yii::app()->db->getLastInsertId();

				$this->_identity=new UserIdentity($username, $password);
				$this->_identity->authenticate();
				Yii::app()->user->login($this->_identity,3600*24*30);

				$this->_add_user_meta($user_meta);

				$this->ajax_response(true, "恭喜你注册成功!");
			} else {
				$this->ajax_response(false, "注册失败，请重新注册");
			}
		} else {
			$this->render('user/register');
		}
	}

	private function _add_user_meta($user_meta)
	{
		if(empty($user_meta))
			return false;
		$userMeta_model = new UserMeta;
		foreach($user_meta as $key => $val) {
			if(!empty($val)) {
				$userMeta_model->$key = $val;
			}
		}
		$userMeta_model->save();
		
	}
	
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$referrer = Yii::app()->request->getUrlReferrer();
		$referrer = !empty($referrer) ? $referrer : '/';
		$this->redirect($referrer);
	}
}
