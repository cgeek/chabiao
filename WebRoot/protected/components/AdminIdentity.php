<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class AdminIdentity extends CUserIdentity
{
	private $_id;
	public $user;
	
	public function __construct($username,$password)
	{
		$this->username = $username;
		$this->password = $password;
	}
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user = Admin::model()->findByAttributes(array('username'=>CHtml::encode($this->username)));
		if($user == null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} else {
			if ($user->password !== md5($this->password)) {
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			} else {
				$this->_id = $user->id;
				$this->errorCode = self::ERROR_NONE;
				if(isset($user['password'])) { 
					unset($user['password']); 
				}
				$this->setUser($user);
			}
		}
		return !$this->errorCode;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser(CActiveRecord $user)
	{
		$this->user = $user->attributes;
	}
}
