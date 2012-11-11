<?php

class PageController extends Controller
{
	private $_data = array();

	public function actionServices()
	{
		$this->title = '客服中心';
		$this->actionView('1013352');
	}

	public function actionContact()
	{
		$this->title = '联系我们';
		$this->actionView('1013355');
	}


	public function actionAccess()
	{
		$this->title = '入网申请';
		$this->actionView('1013353');
	}

	public function actionAbout()
	{
		$this->title = '关于我们';
		$this->actionView('1013354');
	}


	public function actionView($id = NULL) 
	{
		if(empty($id) || $id <= 0) {
			throw new CHttpException(404,'The specified post cannot be found.');
		}
		$post = Post::model()->findByPk($id);
		if(empty($post)) {
			 header('HTTP/1.1 301 Moved Permanently');   
			 header('Location: '. Yii::app()->request->hostInfo);
		}
		$post['content'] = preg_replace("/(<div([^>]*)>)|(<\/div>)/isU","",$post['content']);
		$post['content'] = preg_replace("/class=['\"]*([^'\"]*)['\"]*/is","",$post['content']);
		$this->_data['info'] = $post;
		$current_category = array(
			'category' => $post['category'],
			'name'    => getCategoryName($post['category'])
		);
		if(!empty($post)) {
			$this->title = $post['title'];
		}
		$this->_data['current_category'] = $current_category;
		$this->render('/info/view', $this->_data);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
