$(document).ready(function(){
	$info = {
		login:function(){
			var _self = this;
			var $form = $(".welcome-login-box form");
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
						window.location.href = '/user/home';
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
