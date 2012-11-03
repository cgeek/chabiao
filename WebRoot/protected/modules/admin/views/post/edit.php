<?php
$this->breadcrumbs=array(
	'内容管理'=>array('/admin/post/list'),
	'编辑',
);?>

	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider">/</span></li>
		<li><a href="/admin/post">文章列表</a> <span class="divider">/</span></li>
		<li class="active">编辑内容</li>
	</ul>
	<form action="/admin/post/save" method="POST" class="form-horizontal">
		<input type="hidden" name="post_id" value="<?=isset($post_db['id']) ? $post_db['id'] :'';?>">
		<div class="post_box">
			<div class="control-group">
				<label class="control-label" for="name">文章标题：</label>
				<div class="controls">
					<input class="input-xxlarge title_input" placeholder="60个字以内" type="text" name="title" value="<?= empty($post_db) ? '':$post_db['title'];?>">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">所属栏目：</label>
				<div class="controls">
					<select name="category">
						<option>选择类目</option>
					<?php foreach(getCategorys() as $key=>$category_name):?>
						<option value="<?=$key;?>" <?=(isset($post_db['category']) && $post_db['category'] == $key) ? 'selected' :'';?>><?=$category_name;?></option>
					<?php endforeach;?>
					</select>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">所属地区：</label>
				<div class="controls">
					<select name="area">
						<option value="">全国</option>
					<?php foreach(getProvinces() as $province):?>
						<option value="<?=$province;?>" <?=(isset($post_db['area']) && $post_db['area'] == $province) ? 'selected' :'';?>><?=$province;?></option>
					<?php endforeach;?>
					</select>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">浏览权限：</label>
				<div class="controls">
					<select name="access">
						<option value="1" <?=(isset($post_db['access']) && $post_db['access'] == 1) ? 'selected' :'';?>>免费会员</option>
						<option value="2" <?=(isset($post_db['access']) && $post_db['access'] == 2) ? 'selected' :'';?>>付费会员</option>
						<option value="0" <?=(isset($post_db['access']) && $post_db['access'] == 0) ? 'selected' :'';?>>开放浏览</option>
					</select>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">发布时间：</label>
				<div class="controls">
					<input class="input_text" type="text" name="ptime" value="<?= empty($post_db) ? date('Y-m-d h:m:s',mktime()):$post_db['ptime'];?>">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">关键词：</label>
				<div class="controls">
					<input class="input_text keyword_input" type="text" name="keywords" value="<?= empty($post_db) ? '':$post_db['keywords'];?>">
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">文章内容：</label>
				<div class="controls">
					<textarea id="post_content" style="width:700px;" name="content"><?= empty($post_db) ? '':stripslashes(htmlspecialchars_decode($post_db['content']));?></textarea>
					<span class="help-inline"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">文章状态：</label>
				<div class="controls">
					<label class="radio">
						<input type="radio" <?=(isset($post_db['status']) && $post_db['status'] == 1) ? 'checked=true' :'';?> value="1" name="status"><label> 审核通过</input>
					</label>
					<label class="radio">
						<input type="radio" <?=(isset($post_db['status']) && $post_db['status'] == 0) ? 'checked=true' :'';?>  name="status" value="0"><label> 未审核</input>
					</label>
					<span class="help-inline"></span>
				</div>
			</div>
		<p><button id="save_post_btn" type="submit">保存</button></p>
		</div>
</form>

<script type="text/javascript">
<!--
	window.UEDITOR_HOME_URL = '/assets/js/libs/ueditor/1.2.2/';
//-->
</script>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('/admin/post');
});
</script>
