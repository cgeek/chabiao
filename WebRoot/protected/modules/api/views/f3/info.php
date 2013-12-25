<!DOCTYPE html>
<html>
<head>
	<title><?=isset($title)? cut_str($title, 10) : '招标网';?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<style>
		.form-login {margin-bottom:10px;}
		.form-login input[type="text"] {
			margin-bottom: -1px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}
		.form-login input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	</style>
	<script src="/assets/noseajs/jquery-1.8.3.min.js"></script>
	<script src="/assets/noseajs/jquery.validate.min.js"></script>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="../../assets/libs/html5shiv.js"></script>
		<script src="../../assets/libs/respond.min.js"></script>
	<![endif]-->

</head>
<body >
	
<?php if(Yii::app()->user->isGuest):?>
	<div class="content">
		<div class="container">
			<div class="alert alert-warning" style=" margin-top:10px;">你好，只有付费用户才能查看完整的信息！如果你已经拥有账号，请先登录</div>
			<form class="form-login" action="/user/login" method="POST" name="userlogin">
				<input name="username" type="text" class="form-control" placeholder="用户名" >
				<input name="password" type="password" class="form-control" placeholder="密码">
					<input type="hidden" checked=true name="remember" value="1" >
				<button class="btn btn-primary " type="submit">登录</button>
				<a class="btn btn-info" href="/api/f3/register">注册</a>
			</form>
			<div class="alert alert-info"><strong>内容摘要：</strong><?=cut_str(strip_tags($content), 220);?> </div>
		</div>
	</div>
<?php else :?>
	<div style="padding:10px;font-size:12px;"><?=$content;?></div>
<?php endif;?>
<script>
$(document).ready(function(){
	$info = {
		login:function(){
			var _self = this;
			var $form = $(".form-login");
			var username = $('input[name=username]').val(),
				password = $('input[name=password]').val();
			if(username == '' || password == '') {
				alert('用户名或者密码不能为空');
				return false;
			}
			$.ajax({
				url:"/user/login",
					type:"POST",
					data: {'username':username, 'password':password},
					dataType:'json',
					success:function(data){
						if (data.success == true) {
							window.location.reload();
						} else {
							alert('登录失败');
						}
					}
			});
		},
		init:function(){
			var _self = this;
			$('form[name=userlogin]').submit(function(evt){
				evt.preventDefault();
				_self.login();
			});
		}
	};

	$info.init();
});
</script>
</body>
</html>
