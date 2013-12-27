<!DOCTYPE html>
<html>
<head>
	<title>用户注册</title>
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
		.error {color:red;}
		.page-account-alert-message {color:red; line-height:30px;}
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
	<div class="content">
		<div class="container">
			<div class="alert alert-warning" style=" margin-top:10px;">欢迎你注册联合招标网的会员！</div>
			<form class="form-register form-horizontal" role="form" action="/user/login" method="POST" name="userReg">
				<div class="form-group">
					<label for="inputUsername" class="col-sm-2 control-label">用户名</label>
					<div class="col-sm-10">
						<input type="text" name="username" class="form-control" id="inputUsername" placeholder="用户名">
						<span class="help-inline"></span>
					</div>
					
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
					<div class="col-sm-10">
						<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="密码">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
			    	<label for="inputContact" class="col-sm-2 control-label">联系人姓名</label>
					<div class="col-sm-10">
						<input type="text" name="contact_name" class="form-control" id="inputContact" placeholder="姓名">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
			    	<label for="inputCompany" class="col-sm-2 control-label">公司名称</label>
					<div class="col-sm-10">
						<input type="text" name="company_name" class="form-control" id="inputCompany" placeholder="公司名称">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
			    	<label for="inputMobile" class="col-sm-2 control-label">手机号码</label>
					<div class="col-sm-10">
						<input type="text" name="mobile" class="form-control" id="inputMobile" placeholder="手机号码">
						
					</div>
				</div>
				
				<div class="form-group">
					<label for="optionsRadios1" class="col-sm-2 control-label">注册目的</label>
					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="reg_reason" value="0" id="optionsRadios1" value="option1" checked>
								我只想免费浏览信息
							  </label>
						  </div>
						  <div class="radio">
						  	<label>
								  <input type="radio" name="reg_reason" value="1" id="optionsRadios2" value="option2">
								  我要咨询入网事宜，请人工联系我
							  </label>
						  </div>
						  <div class="radio">
						  	<label>
								  <input type="radio" name="reg_reason" value="2" id="optionsRadios2" value="option2">
								  我要成为付费会员，请联系我
							  </label>
						  </div>
					  </div>
				  </div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">提交注册</button>
						<span class="help-inline page-account-alert-message"></span>
					</div>
				</div>
			</form>
		</div>
	</div>
<script>

$(document).ready(function(){
	var $form = $(".form-register");
	$account = {
		showError:function(error) {
			$form.find('.page-account-alert-message').show('fast').fadeOut('fast', function() {$(this).html(error)}).fadeIn('fast');
		},
		register:function() {
			var _self = this;
			$.ajax({
				url:"/user/register",
				type:"POST",
				data:$form.serialize(),
				dataType:'json',
				success:function(data){
					if (data.success == true) {
						alert('恭喜你注册成功！');
						window.history.go(-1);
					} else {
						_self.showError(data.message);
					}
					$('button', $form).attr('disabled', false);
				}
			});
		},
		validate:function(form) {
			var _self = this;
			$form.validate({
				debug:true,
				submitHandler: function(form) {
					_self.loadingElement = $('button', form).attr('disabled', true);
					_self.register();
				},
				validClass:'success',
				highlight: function(element, errorClass, validClass) {
					$(element).closest('.clearfix').addClass(errorClass).removeClass(validClass);
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).closest('.clearfix').addClass(validClass).removeClass(errorClass);
				},
				errorPlacement: function(error, element) {
					error.appendTo( element.next("span") );
				},
				errorElement: "span",
				rules:{
					username:{
						required:true,
						minlength: 3,
						maxlength: 16
					},
					email:{
						required:true,
						email: true
					},
					password: {
						required:true,
						minlength: 6,
						maxlength: 32
					},
					contact_name: {required:true},
					mobile: {required:true},
					company_name: {required:true},
					products: {required:true}
				},
				messages:{
					contact_name:{
						required:"请填写联系人"
					},
					mobile:{
						required:"请填写电话/手机"
					},
					company_name:{
						required:"请填写公司名称"
					},
					products:{
						required:"请填写主营产品"
					},
					email:{
						required:"请填写邮箱",
						email:"邮箱是不合法的邮箱"
					},
					username: {
						required:"请填写用户名",
						minlength:$.format("用户名最少 {0} 位"),
						maxlength:$.format("用户名最多 {0} 位")
					},
					password: {
						required:"请填写密码",
						minlength:$.format("密码最少 {0} 位"),
						maxlength:$.format("用户名最多 {0} 位")
					},
					check_password: {
						required:"请填写密码",
						minlength:$.format("密码最少 {0} 位"),
						maxlength:$.format("用户名最多 {0} 位"),
						equalTo: "两次输入密码不一致不一致"
					}
				}
			});
		},
		init:function(){
			var _self = this;
			_self.validate();
			
			$form.find(':input[value=""]:first').select();
			_self.saveKeywords();
		},
		saveKeywords:function()
		{
			$('#save_keywords_btn').click(function(event){
				event.preventDefault();
				var btn = $(this),
					btn_txt = btn.html(),
					doing = btn.attr('doing'),
					$form = $(this).parents('form');
				var keywords = $form.find('input[name=keywords]').val();
				if(keywords == '') {
					alert('关键词不能为空');
					return false;
				}
				if(doing && doing == true) {
					return ;
				}
				btn.html(' 保存中...');
				btn.attr('doing',true);

				$.ajax({
					type: 'POST',
					url: '/user/keywords',
					data: {'keywords':keywords},
					dataType:'json',
					cache:false
				}).success(function(result){
					if(result.success == true) {
						alert('修改成功!');
						window.location.href = '/user/home';
					} else {
						alert(result.message);
					}
					btn.html(btn_txt);
					btn.attr('doing',false);
				}).error(function(){
					btn.html(btn_txt);
					btn.attr('doing',false);
				});
			});
		}
	};

	$account.init();
});

</script>
</body>
</html>
