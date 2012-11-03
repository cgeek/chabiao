<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="">
	<meta name="author" content="">
  <!-- Le styles -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">
  <style>
    body { padding-top: 60px; /* 60px to make the container go all the way
    to the bottom of the topbar */ }
  </style>
  <link href="/css/bootstrap-responsive.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
  <![endif]-->
  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/libs/seajs/1.1.0/sea.js"></script>
</head>

<body>
  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
          <span class="icon-bar">
          </span>
        </a>
        <a class="brand" href="#">联合招标网管理后台</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="/admin">管理首页</a></li>
            <li><a href="/admin/user">用户管理</a></li>
            <li><a href="/admin/post">内容管理</a></li>
            <li><a href="/admin/sites">站群管理</a></li>
            <li><a target="_blank" href="/">网站首页</a></li>
          </ul>
        </div>
        <form class="navbar-form pull-right">
          <input name="textinput1" type="text" name="username"  placeholder="用户名" class="span2">
          <input name="textinput2" type="password" name="password" placeholder="密码" class="span2">
          <button class="btn">
            登录
          </button>
        </form>
      </div>
    </div>
  </div>
  <div class="content">
<?php echo $content; ?>
  </div>
</body>
</html>
