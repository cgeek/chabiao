	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider">/</span></li>
		<li><a href="/admin/sites">站群列表</a> <span class="divider">/</span></li>
		<li class="active"><?=isset($site) ? $site['name'] : '添加新网站';?></li>
	</ul>
	<form action="/admin/site/save" method="POST" class="form-horizontal" id="form_site">
		<input type="hidden" name="id" value="<?=$site['id'];?>">
		<ul class="nav nav-tabs" id="setting_tab">
			<li class="active"><a href="#home">基本设置</a></li>
			<li><a href="#column_keywords">栏目关键词设置</a></li>
			<li><a href="#seo">SEO优化</a></li>
			<li><a href="#links">友情链接</a></li>
			<li><a href="#ads">广告设置</a></li>
		</ul>

		<div class="alert alert-error alert-message" style="display:none;"></div>
		<div class="tab-content">
			<div class="tab-pane active" id="home">
				<div class="control-group">
					<label class="control-label" for="name">网站名称：</label>
					<div class="controls">
						<input type="text" id="name" class="input-xlarge" name="name" value="<?=$site['name'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="domain">域名：</label>
					<div class="controls">
						<input type="text" id="domain" name="domain" value="<?=$site['domain'];?>" palceholder="www开头，如：www.unionbidding.com">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="title">网站标题：</label>
					<div class="controls">
						<input type="text" id="title" class="input-xlarge" name="title" value="<?=$site['title'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputWarning">关键词：</label>
					<div class="controls">
						<input type="text" id="keywords" class="input-xlarge" name="keywords" value="<?=$site['keywords'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="logo">Logo：</label>
					<div class="controls">
						<input type="hidden" id="logo" name="logo" value="<?=$site['logo'];?>">
						<style>
							.upload-box { border: 2px dashed #CCC; padding: 2px; width: 230px; height: 80px; text-align: center; position: relative;}
							.upload-box img {max-width:210px;padding:0;}
							.upload-box .dropzone-tips {color:#ccc; margin-top:30px;float:left;width:100%;font-size:14px;}
						</style>
						<div id="dropzone" class="upload-box">
							<div class="preview">
							<?php if(isset($site['logo']) && !empty($site['logo'])):?>
								<img src="<?=$site['logo'];?>">
							<?php else:?>
								<span class="dropzone-tips">拖动图片到虚线框内</span>
							<?php endif;?>
							</div>
						</div>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="footer_html">底部footer：</label>
					<div class="controls">
						<textarea name="footer_html" rows="5"></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="column_keywords">
				<div class="control-group">
					<label class="control-label" for="">招标公告：</label>
					<div class="controls">
						<input type="text" id="" name="keyword[zhaobiao]" value="">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="domain">中标公告：</label>
					<div class="controls">
						<input type="text" id="domain" name="keyword[zhongbiao]" value="">
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="seo">
				<div class="control-group">
					<label class="control-label" for="inputWarning">SEO description：</label>
					<div class="controls">
						<textarea name="description" rows="3"><?=$site['description'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="links">
				<div class="control-group">
					<label class="control-label" for="inputWarning">友情链接：</label>
					<div class="controls">
						<textarea name="links" rows="3"><?=$site['links'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="ads">
				<div class="control-group">
					<label class="control-label" for="inputWarning">广告设置：</label>
					<div class="controls">
						<textarea name="ads" rows="3"><?=$site['ads'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<p>
				<button id="site_save_btn" class="btn btn-large btn-primary" type="submit">保存</button>
			</p>
		</div>
	</form>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('/admin/site');
});
</script>
