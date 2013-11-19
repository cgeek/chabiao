<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="">
	<meta name="author" content="">
  <!-- Le styles -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">
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
	<div id="topbar" class="navbar navbar-inverse navbar-fixed-top">
		<div class="">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/admin">联合招标网管理后台</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="<?=($this->id == 'default') ? 'active' : '';?>"><a href="/admin">首页</a></li>
					<li class="<?=($this->id == 'user' || $this->id == 'traveler') ? 'active' : '';?>"><a href="/admin/user">客户</a></li>
					<li class="<?=($this->id == 'post') ? 'active' : '';?>"><a href="/admin/post">信息</a></li>
					<li class="<?=($this->id == 'sites') ? 'active' : '';?>"><a href="/admin/sites">站群</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/" target="_blank">前台</a></li>
<?php if(Yii::app()->adminUser->isGuest):?>
					<li><a href="/admin/admin/login">登录</a></li>
<?php else:?>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">账号设置 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/admin/admin/changePassword">修改密码</a></li>
							<li><a href="/admin/admin/logout">退出登录</a></li>
						</ul>
					</li>
<?php endif;?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<div id="content" class="clearfix">
			<?php echo $content; ?>
	</div>

  <!--div class="navbar navbar-fixed-top navbar-inverse">
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
  </div-->
</body>
</html>
