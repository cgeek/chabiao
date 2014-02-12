	<ul class="breadcrumb">
		<li><a href="/admin">首页</a></li>
		<li><a href="/admin/sites">站群列表</a></li>
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
				<div class="form-group">
					<label class="control-label col-sm-2" for="name">网站名称：</label>
					<div class="col-sm-2">
						<input type="text" id="name" class="form-control input-xlarge" name="name" value="<?=$site['name'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="domain">域名：</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="domain" name="domain" value="<?=$site['domain'];?>" palceholder="www开头，如：www.unionbidding.com">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="title">网站标题：</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="title" class="input-xlarge" name="title" value="<?=$site['title'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="inputWarning">数据获取关键词：</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" id="keywords" class="input-xlarge" name="keywords" value="<?=$site['keywords'];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="logo">Logo：</label>
					<div class="col-sm-4">
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
				<div class="form-group">
					<label class="control-label col-sm-2" for="head_meta">自定义头部meta信息：</label>
					<div class="col-sm-4">
						<textarea class="form-control" name="head_meta" rows="2" class="input-xlarge" placeholder="<meta *****=****>"><?=$site['head_meta'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="tongji_script">流量统计代码：</label>
					<div class="col-sm-4">
						<textarea  name="tongji_script" rows="3" class="form-control" placeholder="如百度统计的统计代码"><?=$site['tongji_script'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="footer_html">底部footer：</label>
					<div class="col-sm-4">
						<textarea name="footer_html" rows="5" class="form-control"><?=$site['footer_html'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="column_keywords">
				<p>为每个栏目设置关键词来获取数据</p>
				<?php foreach(getCategorys() as $key=>$cate_name):?>
				<div class="form-group">
				<label class="control-label col-sm-2" for=""><?=$cate_name;?>：</label>
					<div class="col-sm-4">
						<input class="form-control"  type="text" id="" name="column_keywords[<?=$key;?>]" value="<?=$site['column_keywords'][$key];?>">
						<span class="help-inline"></span>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<div class="tab-pane" id="seo">
				<div class="form-group">
					<label class="control-label col-sm-2" for="inputWarning">SEO Title：</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="seo_title" rows="3" value="<?=$site['seo_title'];?>" >
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="inputWarning">SEO keyword：</label>
					<div class="col-sm-6">
						<textarea  class="form-control" name="seo_keyword" rows="3" style="width:80%;height:50px;"><?=$site['seo_keyword'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="inputWarning">SEO description：</label>
					<div class="col-sm-6">
						<textarea  class="form-control" name="description" rows="3" style="width:80%;height:100px;"><?=$site['description'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="links">
				<div class="form-group">
					<label class="control-label col-sm-2" for="inputWarning">友情链接：</label>
					<div class="col-sm-6">
						<textarea class="form-control"  name="links" rows="3" style="width:80%;height:300px;"><?=$site['links'];?></textarea>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="ads">
				<?=$this->renderPartial('/sites/ad-edit-tpl', $site);?>
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
