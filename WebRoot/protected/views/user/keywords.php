<div class="main user_page clearfix">
	<?php $this->renderPartial('aside');?>
	<div class="main_body page-account" style="min-height:400px;">
		<h1 class="title">修改关键词</h1>
		<div class="change_user_info">
			<form id="change_password_form" action="/user/register" method="post">
				<input type="hidden" name="type" value="personal">
				<fieldset>
					<dl>
						<dt>你现在设置的关键词是：:</dt>
						<dd>
							<input type="text" name="keywords" value="<?=$keywords;?>">
						</dd>
					</dl>

				</fieldset>
				<p class="page-account-alert-message error"></p> 
				<div class="submit_btn">
					<button type="submit" id="save_keywords_btn" class="save_keywords_btn btn">确认修改<strong></strong></button>
				</div>
			</form>
		</div>		
	</div>
</div>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('account');
});
</script>
