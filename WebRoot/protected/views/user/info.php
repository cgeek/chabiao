<div class="main user_page clearfix">
	<?php $this->renderPartial('user/aside');?>
	<div class="main_body page-account" style="min-height:400px;">
		<h1 class="title">修改个人信息</h1>
		<div class="change_user_info">
			<form id="update_form" action="/user/info" method="post">
				<fieldset>
					<dl>
						<dt for="contact_name">联系人<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="contact_name" name="contact_name" value="<?=$user_meta['contact_name'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="mobile">电话/手机<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="mobile" name="mobile" value="<?=$user_meta['mobile'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="fax">传真:</dt>
						<dd>
							<input type="text" size=30 id="fax" name="fax" value="<?=$user_meta['fax'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="qq">QQ/MSN:</dt>
						<dd>
							<input type="text" size=30 id="qq" name="qq" value="<?=$user_meta['qq'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>

					<dl class="title"> + 公司信息:</dl>
					<dl>
						<dt for="company_name">公司名称<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="company_name" name="company_name" value="<?=$user_meta['company_name'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="products">主营产品<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="products" name="products" value="<?=$user_meta['products'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="address">公司地址:</dt>
						<dd>
							<input type="text" size=30 id="address" name="address" value="<?=$user_meta['address'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="company_desc">公司简介:</dt>
						<dd>
							<textarea id="company_desc" name="company_desc" placeholder="120个字以内"><?=$user_meta['company_desc'];?></textarea>
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="website">公司网址:</dt>
						<dd>
							<input type="text" size=30 id="website" name="website" value="<?=$user_meta['website'];?>">
							<span class="help-inline"></span>
						</dd>
					</dl>
				</fieldset>
				<p class="page-account-alert-message error"></p> 
				<div class="submit_btn">
					<button type="submit" class="register_btn btn">保存修改<strong></strong></button>
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
