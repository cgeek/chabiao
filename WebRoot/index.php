<?php
// www 301 redirect
$host = $_SERVER['HTTP_HOST'];
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';  
if(!strstr($host,'www.'))
{   
	header('HTTP/1.1 301 Moved Permanently');//发出301头部   
	header("Location: http://www.$host"."/$request_uri");//跳转到你希望的地址格式   
	die();
}  
// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

$globals =dirname(__FILE__).'/protected/globals.php';
require_once($globals);

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
