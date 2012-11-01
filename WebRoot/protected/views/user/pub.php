<div class="main user_page clearfix">
	<?php $this->renderPartial('user/aside');?>
	<div class="main_body page-account" style="min-height:400px;">
		<h1 class="title">发布招标信息</h1>
		<div class="change_user_info">
			<form id="register_form" action="/user/register" method="post">
				<input type="hidden" name="type" value="">
				<fieldset>
					<dl>
						<dt for="title">标题：<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="title" name="title" style="width:500px;" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="mobile">所属栏目：<span class="red">*</span>:</dt>
						<dd>
							<select name="category">
								<option value="1" <?=($_GET['category'] == 1)? 'selected':'';?>>招标信息</option>
								<option value="4" <?=($_GET['category'] == 4)? 'selected':'';?>>供应信息</option>
								<option value="5" <?=($_GET['category'] == 5)? 'selected':'';?>>求购信息</option>
							</select>
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="mobile">所属区域：<span class="red">*</span>:</dt>
						<dd>
							<select name="area">
								<option value="">全国</option>
							<?php foreach(getProvinces() as $province):?>
								<option value="<?=$province;?>" <?=(isset($post_db['area']) && $post_db['area'] == $province) ? 'selected' :'';?>><?=$province;?></option>
							<?php endforeach;?>
							</select>
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="qq">信息内容：</dt>
						<dd class="clearfix">
							<textarea id="post_content" style="width:640px;float:left;" name="content"></textarea>
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt>&nbsp;</dt>
						<dd>
							<button type="submit" id="save_post_btn" class="save_post_btn btn">提交<strong></strong></button>
						</dd>
					</dl>

				</fieldset>
				<p class="page-account-alert-message error"></p> 
			</form>
		</div>		
	</div>
</div>
<script type="text/javascript">
<!--
 window.UEDITOR_HOME_URL = '/assets/js/libs/ueditor/1.2.2/';
 //-->
</script>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('user_add_info');
});
</script>
