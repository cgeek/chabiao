<?php

class AdminController extends Controller
{

	public $_identity;

	public function actionChangePassword()
	{
		$this->pageTitle = "修改密码";

		if(Yii::app()->adminUser->isGuest) {
			$this->redirect('/admin/admin/login');
		}

		if(Yii::app()->request->isAjaxRequest) {
			$old_password = Yii::app()->request->getParam('old_password');
			$new_password = Yii::app()->request->getParam('new_password');

			if(empty($old_password) || empty($new_password)) {
				ajax_response('404', '参数不正确');
			}
			$admin_id = Yii::app()->adminUser->id;
			$admin = Admin::model()->findByPk($admin_id);
			if(empty($admin)) {
				ajax_response('500', '用户不存在或者未登录');
			}
			$admin = $admin->attributes;
			if(md5($old_password) != $admin['password']) {
				ajax_response('500', '原密码错误');
			}

			$update['password'] = md5($new_password);
			Admin::model()->updateByPk($admin_id, $update);
			
			ajax_response('200', '修改成功');
			
		} else {
			$this->render('changePassword');
		}
	}

	public function actionLogin()
	{
		if(!Yii::app()->adminUser->isGuest) {
			$this->redirect('/admin');
		}

		if(Yii::app()->request->isAjaxRequest) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(empty($username) || empty($password)) {
				$this->ajax_response(false, "用户名或者密码不能为空");
			}
			if($this->_identity===null)
			{
				$this->_identity=new AdminIdentity($username, $password);
				$this->_identity->authenticate();
			}
			if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
			{
				$rememberMe = Yii::app()->request->getParam('remember');
				$duration= ($rememberMe == 1) ? 3600*24*30 : 0; // 30 days
				Yii::app()->adminUser->login($this->_identity,$duration);
				//update last login time
				Admin::model()->updateByPk($this->_identity->id, array('last_login_time' => new CDbExpression('NOW()'))); 
				$this->ajax_response(200, "恭喜你，登录成功！");
			} else {
				if($this->_identity->errorCode === UserIdentity::ERROR_PASSWORD_INVALID) {
					$this->ajax_response(200, "密码不正确，请重新输入");
				} else if($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID) { 
					$this->ajax_response(200, "用户名不存在，请重新输入");
				}
			}
		} else {
			$this->renderPartial('login');
		}
	}


	public function actionLogout()
	{
		Yii::app()->adminUser->logout(false);
		$referrer = Yii::app()->request->getUrlReferrer();
		$referrer = !empty($referrer) ? $referrer : '/';
		$this->redirect($referrer);
	}

}
