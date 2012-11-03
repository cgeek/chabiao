<?php

defined('DS') or define('DS',DIRECTORY_SEPARATOR);
function app() 
{
	return Yii::app();
}

function user() 
{
	return Yii::app()->user;
}
function search()
{
	return Yii::app()->search;
}
function h($text)
{
	return htmlspecialchars($text,ENT_QUOTES,Yii::app()->charset);
}

function l($text, $url = '#', $htmlOptions = array()) 
{
	return CHtml::link($text, $url, $htmlOptions);
}

function debug_json($data)
{
	echo json_encode($data);
	die();
}
/*
Utf-8、gb2312都支持的汉字截取函数
cut_str(字符串, 截取长度, 开始长度, 编码);
编码默认为 utf-8
开始长度默认为 0
*/
function cut_str($string, $sublen, $start = 0, $code = 'UTF-8')
{
	if($code == 'UTF-8')
	{
		$pa ="/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
		preg_match_all($pa, $string, $t_string);        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
		return join('', array_slice($t_string[0], $start, $sublen));
	}
	else
	{
		$start = $start*2;
		$sublen = $sublen*2;
		$strlen = strlen($string);
		$tmpstr = '';        for($i=0; $i<$strlen; $i++)
	{
		if($i>=$start && $i<($start+$sublen))
		{
			if(ord(substr($string, $i, 1))>129)
			{
				$tmpstr.= substr($string, $i, 2);
			}
			else
			{
				$tmpstr.= substr($string, $i, 1);
			}
		}
		if(ord(substr($string, $i, 1))>129) $i++;
	}
		if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";
		return $tmpstr;
	}
}

//format time to human
function human_time($small_ts, $large_ts=false) {
	if(!$large_ts) $large_ts = time();
	$n = $large_ts - $small_ts;
	if($n <= 1) return '1 秒前';
	if($n < (60)) return $n . ' 秒前';
	if($n < (60*60)) { $minutes = round($n/60); return '' . $minutes . '分钟' .'前'; }
	if($n < (60*60*16)) { $hours = round($n/(60*60)); return '' . $hours . '小时' . '前'; }
		if($n < (time() - strtotime('yesterday'))) return '昨天';
	if($n < (60*60*24)) { $hours = round($n/(60*60)); return '' . $hours . '小时' . '前'; }
		if($n < (60*60*24*6.5)) return '' . round($n/(60*60*24)) . '天前';
	if($n < (time() - strtotime('last week'))) return '上周';
	if(round($n/(60*60*24*7))  == 1) return '一周前';
	if($n < (60*60*24*7*3.5)) return '' . round($n/(60*60*24*7)) . '周前';
	if($n < (time() - strtotime('last month'))) return '上个月';
	if(round($n/(60*60*24*7*4))  == 1) return '一个月前';
	if($n < (60*60*24*7*4*11.5)) return '' . round($n/(60*60*24*7*4)) . '月前';
	if($n < (time() - strtotime('last year'))) return '去年';
	if(round($n/(60*60*24*7*52)) == 1) return '一年以前';
	if($n >= (60*60*24*7*4*12)) return '' . round($n/(60*60*24*7*52)) . '年前'; 
	return false;
}

function filterHtml($str)
{
	$str=str_replace(" ", '', $str);
	$str=str_replace("\n", '', $str);
	$str=str_replace("\t", '', $str);
	$str=str_replace("::", ':', $str);
	$str=str_replace(" ", '', $str);
	return $str;
}

//获取所有栏目
function getCategorys()
{
	$category_array = array(
		'1'=> '招标公告',
		'2'=> '拟在建项目',
		'3'=> '中标公告',
		'4'=> '供应信息',
		'5'=> '求购信息',
		'6'=> '法规中心',
		'7'=> '行业动态',
	);
	return $category_array;
}

//根据栏目id获取栏目名称
function getCategoryName($category_id)
{
	$category_array = getCategorys();
	if(isset($category_array[$category_id]))
	{
		return $category_array[$category_id];
	} else {
		return NULL;
	}
}

function getProvinces()
{
	$province_arr = array('安徽','北京','重庆','福建','甘肃','广东','广西','贵州','海南','河北','黑龙江','河南','香港','湖北','湖南','江苏','江西','吉林','辽宁','澳门','内蒙古','宁夏','青海','山东','上海','山西','陕西','四川','台湾','天津','新疆','西藏','云南','浙江','海外');
	return $province_arr;
}

function getAccess()
{
	$access_arr = array(
		'0'=>'开放浏览',
		'1'=>'免费会员',
		'2'=>'付费会员',
	);
	return $access_arr;
}

function getAccessName($access_id)
{
	$access_arr = getAccess();
	if(isset($access_arr[$access_id])) {
		return $access_arr[$access_id];
	} else {
		return NULL;
	}	
}

function ad_show($data, $position , $width, $type = 'image') {
	if(!isset($data[$position]) || empty($width)) {
		return false;
	}
	//$target = $this->site_info['ad'][$position]['target'];
	//$src = $this->site_info['ad'][$position]['src'];
	$target = "#";
	$src = "http://www.unionbidding.com" . $data[$position];
	$str = "<a href=\"$target\" target=\"_blank\"><img src=\"$src\" width=\"$width\"></a>";
	return $str;
}

//========search ========
function _generateQueryString($keyword = '')
{
	$param = $_GET;
	if(!empty($keyword) && !isset($_GET['keyword'])) {
		$param['keyword'] = $keyword;
	}
	if($param) {
		$query = $param['keyword'] ? $param['keyword'] : '';
		$param['f'] = $param['f'] ? $param['f'] : 'all';
		if($param['f'] == 'title')  //是否为标题搜索
		{
			$sk = 'title:'.$query;
			search()->setQuery($sk); 
		}
		elseif($param['f'] == 'all')  //全文搜索
		{
			search()->setQuery($query);
		}

		if($param['cat'] > 0) //分类区间
		{
			search()->addRange('category_id', $param['cat'] ,$param['cat']);
		}
		if(!empty($param['area'])) //分类区间
		{
			search()->addRange('area', $param['area'] ,$param['area']);
		}

		if($param['st'] > 0)  //时间区间
		{
			$arr = $this->_st($param['st']);
			search()->addRange('ctime',date('Ymd',$arr['s']) ,date('Ymd',$arr['e']));
		}
	}

}

function _st($st)  //处理日期区间
{
	$time = getdate();
	$s = time();
	switch ($st){
	case "1":               //一周
		$e = strtotime('-7 days');
		break;
	case "2":   //一月
		$e = strtotime('-30 days');
		break;
	case "3":   //季度
		$e = strtotime('-90 days');
		break;
	case "4": //半年年
		$e = strtotime('-180 days');
	}
	return $e;
}
