define(function(require, exports, module){
	var $ = require('jquery');
	require('plugins')($);
	require('datepicker')($);
	require('datepicker-css');
	require('ueditor');
	require('ueditor-css');

	var editor = new UE.ui.Editor();

	return {
		save: function() {
			$('#save_post_btn').click(function(event){
				event.preventDefault();
				var btn = $(this),
					btn_txt = btn.html(),
					doing = btn.attr('doing'),
					$form = $(this).parents('form');
				if(!editor.hasContents()) {
					alert('内容不能为空');
					return false;
				}

				var content = editor.getContent(),
					title = $form.find('input[name=title]').val(),
					category = $form.find('select[name=category]').val(),
					area = $form.find('select[name=area]').val(),
					access = $form.find('select[name=access]').val(),
					ptime = $form.find('input[name=ptime]').val(),
					keywords = $form.find('input[name=keywords]').val(),
					post_id = $form.find('input[name=post_id]').val(),
					status = $form.find('input[name=status]:checked').val();
				if(title == '') {
					alert('标题不能为空');
					return false;
				}

				if(doing && doing == true) {
					return ;
				}
				btn.html(' 保存中...');
				btn.attr('doing',true);

				$.ajax({
					type: 'POST',
					url: '/admin/post/save',
					data: {'post_id':post_id,'category':category, 'content':content,'title':title,'area':area,'access':access,'ptime':ptime,'keywords':keywords,'post_id':post_id,'status':status},
					dataType:'json',
					cache:false
				}).success(function(result){
					if(result.success == true) {
						alert('保存成功');
						window.history.go(-1);
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
		},
		datepick:function(){
			var _self = this;
			$('#datepicker').glDatePicker({
				startDate: new Date(),
				allowOld: false,
				onChange: function(target, newDate)
				{
					var new_date = newDate.getFullYear() + "-" +(newDate.getMonth() + 1) + "-" +newDate.getDate();
					target.val(new_date);
					var cron_time = new_date + ' ' + $('input[name=hour]').val() + ':'+ $('input[name=minute]').val();
					$('input[name=cron_time]').val(cron_time);
				}
			});
			
		},
		init:function(){
			var _self = this;
			$('input[name=post_title]').textlimit('span.counter',120);
			
			editor.render('post_content');
			
			_self.save();		
			
		}
	}
});
