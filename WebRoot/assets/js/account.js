define(function(require, exports, module){
	var $ = require('jquery');
	require('plugins')($);
	var cookie = require('cookie');

	var $form = $(".page-account form");
	
	return {
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
						window.location.href = '/user/home';
					} else {
						_self.showError(data.message);
					}
					$('button', $form).attr('disabled', false);
				}
			});
		},
		update:function() {
			var _self = this;
			$.ajax({
				url:"/user/info",
				type:"POST",
				data:$form.serialize(),
				dataType:'json',
				success:function(data){
					if (data.success == true) {
						alert('修改成功');
						$('button', $form).attr('disabled', false);
					} else {
						$('button', $form).attr('disabled', false);
						_self.showError(data.message);
					}
				}
			});
		},
		login:function(){
			var _self = this;
			$.ajax({
				url:"/user/login",
				type:"POST",
				data:$form.serialize(),
				dataType:'json',
				success:function(data){
					if (data.success == true) {
						$('button', $form).attr('disabled', false);
						var referrer = $form.find('input[name=referrer]').val();
						if(referrer != undefined && referrer != '') {
							window.location.href = referrer;
						} else {
							window.location.href = '/user/home';
						}
					} else {
						$('button', $form).attr('disabled', false);
						_self.showError(data.message);
					}
				}
			});
		},
		validate:function(form) {
			var _self = this;
			$form.validate({
				debug:true,
				submitHandler: function(form) {
					_self.loadingElement = $('button', form).attr('disabled', true);
					if (form.id == 'register_form') {
						_self.register();
					} else if(form.id == 'login_form') {
						_self.login();
					} else if(form.id == 'update_form') {
						_self.update();
					}
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
					check_password: {
						required:true,
						minlength: 6,
						maxlength:32,
						equalTo: '#password'
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
});
