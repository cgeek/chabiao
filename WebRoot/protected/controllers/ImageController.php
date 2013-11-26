<?php
Yii::import('ext.upyun.UpYun',true);

class ImageController extends Controller
{
	private $_data;
	
	private $upyun;

	public function actionUploadMulti()
	{
		$image = CUploadedFile::getInstanceByName('file'); 
		$retValue = "";  
		if($image->size > 3*1024*1024){  
			$retValue = "提示：文件大小不能超过3M";  
		}else{
			$f = file_get_contents($image->tempName);
			$file_name = md5($f);
			$file_type = $image->extensionName;
			if(is_object($image) && get_class($image) === 'CUploadedFile') {
				$image->saveAs(Yii::app()->basePath.'/../uploads/'.$file_name . ".$file_type");
			}
			$retValue = $file_name;
		}

		$this->_data['image'] = array('image_id'=>$file_name, 'image_path' => '/uploads/' . $file_name .".$file_type");
		$this->ajax_response(200, '', $this->_data);
	}

	public function actionUpload()
	{
		$image = file_get_contents('php://input');
		if(empty($image))
		{
			$this->ajax_response(404,'图片为空');
		}
		$image_id = md5($image);
		$imgObj = imagecreatefromstring($image);
		$width = imagesx($imgObj);
		$height = imagesy($imgObj);
		$image_info = array('image_id' => $image_id, 'image_url_s' => upimage($image_id,'small'),'image_url_b' => upimage($image_id,'big'),'width' => $width, 'height' => $height);
		$this->_save2upyun($image_id,$image);
		$this->_data['image'] = $image_info;
		$this->ajax_response(200,'',$this->_data);
	}

	private function _save2upyun($image_id,$image_string)
	{
		$this->upyun = new Upyun();
		$status = $this->upyun->writeFile('/'. $image_id, $image_string);
		if(FALSE === $status)
		{
			Yii::log("image upload to upyun error, image_id: $image_id", 'error');
		}
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
