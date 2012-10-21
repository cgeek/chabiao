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
			_self.validate();
			$form.find(':input[value=""]:first').select();

			$('#setting_tab a').click(function (e) {
				  e.preventDefault();
				  $(this).tab('show');
			})

			_self.uploadLogo();
			_self.remove_site();
		},
		remove_site: function() {
			$('body').delegate('.delete_site_btn', 'click', function(e){
				e.preventDefault();
				var site_id = $(this).attr('site_id');
				$.ajax({
					url:"/admin/sites/delete",
					type:"POST",
					data: {'site_id':site_id},
					dataType:'json',
					success:function(data){
						if (data.success == true) {
							$('.site_id_' + site_id).remove();
						} else {
							//_self.loadingElement.hideLoading();
							_self.showError(data.message);
						}
					}
				});
			});
		},
		uploadLogo: function() {
			//拖动上传图片
			$('#dropzone').filedrop({
				paramname:'file',
				maxfiles: 5,
				maxfilesize: 2,
				url: '/image/uploadMulti',
				uploadFinished:function(i,file,response) {
	
				},
				error: function(err, file) {
					switch(err) {
						case 'BrowserNotSupported':
							alert('你的浏览器不支持，请换成Chrome浏览器或者Safari浏览器');
							break;
						case 'TooManyFiles':
							alert('你选择太多文件了');
							break;
						case 'FileTooLarge':
							alert(file.name + '文件太大了！！');
							break;
						case 'FileTypeNotAllowed':
							alert(file.name + '文件类型不允许');
							break;
						default:
							break;
					}
				},
				allowedfiletypes: ['image/jpg','image/png','image/gif', 'image/jpeg'],
				maxfiles: 5,
				maxfilesize: 5,
				dragOver: function() {
					$('#dropzone').css('border-color','#FB3');
				},
				dragLeave: function() {
					$('#dropzone').css('border-color','#ccc');
				},
				uploadStarted: function(i, file, len){
					$('#dropzone .dropzone-tips').html('真正上传');
				},
				globalProgressUpdated: function(progress) {
					$('#dropzone .dropzone-tips').html('已上传' + progress+"%");
				},
				uploadFinished: function(i, file, response, time) {
					if(response && response.success == true) {
						var image_url = response.data.image.image_path;
						console.log(response);
						console.log(image_url);
						$('input[name=logo]').val(image_url);
						$('#dropzone .preview').html('<img src=\"'+ image_url + '\" >');
						$('#dropzone .dropzone-tips').remove();
						$('#dropzone').css('border-color','#ccc');
					}
				}
			});
		}
	};
});
