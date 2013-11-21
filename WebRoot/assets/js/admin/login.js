define(function(require, exports, module) {
	var $ = require('jquery');

	require('jquery-validate');
	var cookie = require('cookie');

	var $form = $(".content form");
	
	return {
		init:function(){
			var _self = this;
			_self.validate();
		},
		showError:function(error) {
			//$form.find('.page-account-alert-message').show('fast').addClass('alert alert-error').fadeOut('fast', function() {$(this).html(error)}).fadeIn('fast');
		},
		validate:function() {
			var _self = this;
			$form.validate({
				debug:true,
				submitHandler: function() {
					$.ajax({
						url: '/admin/admin/login',
						data: $form.serialize(),
						type: 'POST',
						dataType: 'JSON',
						success : function(result){
							if(result.code == 200) {
								location.href = '/admin'
							} else {
								alert(result.message);
							}	
						},
						error: function(){
							alert('暂时无法登录,请稍后再试');
						}
					});
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
						maxlength: 16,
					},
					password: {
						required:true,
						minlength: 6,
						maxlength: 32
					}
				},
				messages:{
					username: {
						required:"请填写用户名",
						minlength:$.format("用户名最少 {0} 位"),
						maxlength:$.format("用户名最多 {0} 位")
					},
					password: {
						required:"请填写密码",
						minlength:$.format("密码最少 {0} 位"),
						maxlength:$.format("用户名最多 {0} 位")
					}
				}
			});
		}
	};
});
