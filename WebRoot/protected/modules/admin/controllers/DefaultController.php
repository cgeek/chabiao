<?php

class DefaultController extends Controller
{
	private $_data;

	public $layout = '/layouts/column2';

	public function actionIndex()
	{
		$today = date('Y-m-d' ,time());
		$today = strtotime($today);

		$criteria = new CDbCriteria;
		$post_total_count = Post::model()->count($criteria);
		unset($criteria);
		$this->_data['post_total_count'] = $post_total_count;

		$criteria = new CDbCriteria;
		$criteria->addCondition("ctime > $today");
		$criteria->addCondition("source_type=3");
		$post_spider_count = Post::model()->count($criteria);
		unset($criteria);
		$this->_data['post_spider_count'] = $post_spider_count;

		$criteria = new CDbCriteria;
		$criteria->addCondition("ctime > $today");	
		$criteria->addCondition("source_type=2");		
		$post_user_count = Post::model()->count($criteria);
		unset($criteria);
		$this->_data['post_user_count'] = $post_user_count;

		$criteria = new CDbCriteria;
		$criteria->addCondition("ctime > $today");	
		$user_increase_count = User::model()->count($criteria);
		unset($criteria);
		$this->_data['user_increase_count'] = $user_increase_count;

		$criteria = new CDbCriteria;
		$user_total_count = User::model()->count($criteria);
		unset($criteria);
		$this->_data['user_total_count'] = $user_total_count;

		$this->render('index' ,$this->_data);
	}
}
