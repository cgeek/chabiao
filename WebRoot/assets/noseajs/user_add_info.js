$(document).ready(function(){
	var editor = new UE.ui.Editor();

	$pub = {
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
					post_id = $form.find('input[name=post_id]').val();
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
					url: '/user/savePost',
					data: {'post_id':post_id,'category':category, 'content':content,'title':title,'area':area,'post_id':post_id},
					dataType:'json',
					cache:false
				}).success(function(result){
					if(result.success == true) {
						alert('恭喜你！ 已经提交到后台进行审核，审核通过以后将会出现在网站里面！');
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
		},
		init:function(){
			var _self = this;
			editor.render('post_content');
			_self.save();
		}
	};

	$pub.init();
});
