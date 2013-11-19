<!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<meta name="description" content="小狗旅行定制" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" />
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/libs/seajs/1.1.0/sea.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="../../assets/libs/html5shiv.js"></script>
		<script src="../../assets/libs/respond.min.js"></script>
	<![endif]-->

</head>
<body class="login-page" style="background:#efefef; margin:0;">
	<div class="content">
		<div class="container">
		<form class="form-login" action="/admin/admin/login" method="POST">
			<h4 class="form-signin-heading">后台登陆</h4>
			<input name="username" type="text" class="form-control" placeholder="用户名" autofocus>
			<input name="password" type="password" class="form-control" placeholder="密码">
			<label class="checkbox">
				<input type="checkbox" checked=true name="remember" value="1"> 记住密码
			</label>
			<button class="btn btn-primary btn-block" type="submit">登录</button>
		</form>
		</div>
	</div>

<script>
	seajs.use('/assets/js/router.js', function(router){
		router.load('admin/login');
	});
</script>
</body>
</html>
