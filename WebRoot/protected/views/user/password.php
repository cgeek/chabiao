<div class="main user_page clearfix">
	<?php $this->renderPartial('user/aside');?>
	<div class="main_body page-account" style="min-height:400px;">
		<h1 class="title">修改密码</h1>
		<div class="change_user_info">
			<form id="change_password_form" action="/user/register" method="post">
				<input type="hidden" name="type" value="personal">
				<fieldset>
					<dl>
						<dt>用户名:</dt>
						<dd>
							<span class="username" style="line-height:25px;"><?=Yii::app()->user->name;?></span>
						</dd>
					</dl>
					<dl>
						<dt for="old_password">旧密码<span class="red">*</span>:</dt>
						<dd>
							<input type="password" size=30 id="old_password" name="old_password" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="fax">新密码:</dt>
						<dd>
							<input type="password" size=30 id="password" name="password" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="qq">重复新密码:</dt>
						<dd>
							<input type="password" size=30 id="check_password" name="check_password" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>

				</fieldset>
				<p class="page-account-alert-message error"></p> 
				<div class="submit_btn">
					<button type="submit" class="register_btn btn">确认修改<strong></strong></button>
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
