define(function(require, exports, module){
	var $ = require('jquery');
	require('plugins')($);
	require('filedrop')($);
	Mustache = require('mustache');
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
					if (data.code == 200) {
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
			_self.update_user_info();
			_self.payment_user();
			_self.delete_payment_user();
		},
		more_user_info : function() {
			$('body').delegate('.item_user', 'click', function(e){
				e.preventDefault();
				var user_id = $(this).attr('user_id');
				$.ajax({
					url:"/admin/user/detail",
					type:"POST",
					data: {'user_id':user_id},
					dataType:'json',
					success:function(data){
						if (data.code == 200) {
							$('#user_more_info_modal').html(Mustache.to_html($('#user_more_info_tpl').html(), data.data));
							$('#user_more_info_modal').modal({});

							$('#user_info_tab a:first').tab('show');
						} else {
							alert(data.message);
						}
					}
				});
			});
		},
		update_user_info: function() {
			$('body').delegate('#save_user_info_btn', 'click', function(e) {
				e.preventDefault();
				var $form = $('#user_info_form');
				$.ajax({
					url:"/admin/user/save",
					type:"POST",
					data: $form.serialize(),
					dataType:'json',
					success:function(data){
						if (data.code == 200) {
							$('.ajax_response_info').html('恭喜你，保存成功！').show().fadeOut(5000);
						} else {
							$('.ajax_response_info').html('保存失败，请联系管理员！').show().fadeOut(5000);
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
						if (data.code == 200) {
							$('.user_id_' + user_id).fadeOut();
						} else {
							//_self.loadingElement.hideLoading();
							_self.showError(data.message);
						}
					}
				});
			});
		},
		delete_payment_user: function() {
			$('body').delegate('.delete_payment_user_btn', 'click', function(e){
				e.preventDefault();
				if(confirm("确定取消?")){
				} else {
					return false;
				}
				var user_id = $(this).attr('user_id');
				$.ajax({
					url:"/admin/user/deletePayment",
					type:"POST",
					data: {'user_id':user_id},
					dataType:'json',
					success:function(data){
						if (data.code == 200) {
							$('.user_id_' + user_id).fadeOut();
							return false;
						} else {
							//_self.loadingElement.hideLoading();
							_self.showError(data.message);
						}
					}
				});
				return false;
			});
		},
		payment_user: function() {
			$('body').delegate('#payment_btn', 'click', function(e){
				e.preventDefault();
				var payment = $('#payment_amount').val();
				if(payment == '' || payment <= 0) {
					alert('请先完善付费信息，才能设置为付费会员');
					return false;
				}
				if(confirm("确定用户已付款，成为付费用户?")){
				} else {
					return false;
				}
				var user_id = $(this).attr('user_id');
				$.ajax({
					url:"/admin/user/payment",
					type:"POST",
					data: {'user_id':user_id},
					dataType:'json',
					success:function(data) {
						if (data.code == 200) {
							$('#payment_btn').attr("disabled", "true").html('已经是付费会员');
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
