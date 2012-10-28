<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */

	public $breadcrumbs=array();

	public $site_info = array();

	public function ajax_response($success=true,$message="",$data = array())
	{
		$result['success'] = $success;
		$result['message'] = $message;
		$result['data'] = $data;
		echo json_encode($result);
		exit();
	}

	public function __construct()
	{
		$hostInfo = Yii::app()->request->hostInfo;
		$domain = substr($hostInfo, 7);
		if(empty($domain)) {
			$domain = 'www.unionbidding.com';
		}
		$site_db = Site::model()->find("domain=:domain", array(':domain'=>$domain))->attributes;
		if(!empty($site_db) && !empty($site_db['ad'])) {
			$site_db['ad'] = json_decode($site_db['ad'], true);
		}
		if(!empty($site_db) && !empty($site_db['column_keywords'])) {
			$site_db['column_keywords'] = json_decode($site_db['column_keywords'], true);
		}
		$this->site_info = $site_db;
	}

}
