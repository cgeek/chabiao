define(function(require, exports, module){
	var $ = require('jquery');
	require('plugins')($);
	require('filedrop')($);

	var $form = $("#form_site");
	
	return {
		showError:function(error) {
			$form.find('.alert-message').show('fast').fadeOut('fast', function() {$(this).html(error)}).fadeIn('fast');
			$(".alert").alert()
		},
		save: function() {
			var _self = this;
			$.ajax({
				url:"/admin/sites/save",
				type:"POST",
				data:$form.serialize(),
				dataType:'json',
				success:function(data){
					if (data.success == true) {
						alert('修改成功');
						window.location.href="/admin/sites";
					} else {
						//_self.loadingElement.hideLoading();
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
					//_self.loadingElement = $('site_save_btn').showLoading({img:false});
					_self.save();
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
					name:{
						required:true,
						minlength: 3,
						maxlength: 200
					},
					domain:{
						required:true,
						minlength: 3,
						maxlength: 200
					},
					title: {
						required:true,
						minlength: 3,
						maxlength: 200
					},
					logo: {required:true}
				},
				messages:{
					name:{
						required:"网站名称不能为空",
						minlength:$.format("网站名称最少 {0} 个字符"),
						maxlength:$.format("网站名称最多 {0} 个字符")
					},
					domain:{
						required:"域名不能为空",
						minlength:$.format("域名最少 {0} 个字符")
					},
					title:{
						required:"标题不能为空",
						minlength:$.format("标题最少 {0} 个字符"),
						maxlength:$.format("标题最多 {0} 个字符")
					},
					logo: {
						required:"请上传网站Logo"
					}
				}
			});
		},
		init:function(){
			var _self = this;
			_self.more_user_info();
			_self.delete_user();
		},
		more_user_info : function() {
			$('.item_user').hover(function(){
				$(this).addClass('success');
			}, function(){
				$(this).removeClass('success');
			});
			$('body').delegate('.item_user', 'click', function(e){
				e.preventDefault();
				var user_id = $(this).attr('user_id');
				$.ajax({
					url:"/admin/user/detail",
					type:"POST",
					data: {'user_id':user_id},
					dataType:'json',
					success:function(data){
						if (data.success == true) {
						}
					}
				});
			});
		},
		delete_user: function() {
			$('body').delegate('.delete_user_btn', 'click', function(e){
				e.preventDefault();
				if(confirm("确定删除该用户?")){
				} else {
					return false;
				}
				var user_id = $(this).attr('user_id');
				$.ajax({
					url:"/admin/user/delete",
					type:"POST",
					data: {'user_id':user_id},
					dataType:'json',
					success:function(data){
						if (data.success == true) {
							$('.user_id_' + user_id).fadeOut();
						} else {
							//_self.loadingElement.hideLoading();
							_self.showError(data.message);
						}
					}
				});
			});
		}
	};
});
