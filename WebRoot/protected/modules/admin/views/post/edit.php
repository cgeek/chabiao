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
<form action="/admin/post/save" method="POST">
	<input type="hidden" name="post_id" value="<?=isset($post_db['id']) ? $post_db['id'] :'';?>">
<div class="post_box">
	<div class="control-group">
		<label for="textinput1">
			文章标题:
		</label>
		<input class="input-xxlarge title_input" placeholder="60个字以内" type="text" name="title" value="<?= empty($post_db) ? '':$post_db['title'];?>">
	</div>
	<dl>
		<dt>所属栏目：</dt>
		<dd>
			<select name="category">
				<option>选择类目</option>
<?php foreach(getCategorys() as $key=>$category_name):?>
				<option value="<?=$key;?>" <?=(isset($post_db['category']) && $post_db['category'] == $key) ? 'selected' :'';?>><?=$category_name;?></option>
<?php endforeach;?>
			</select>
		</dd>
		<dt>所属地区：</dt>
		<dd>
			<select name="area">
				<option value="">全国</option>
<?php foreach(getProvinces() as $province):?>
				<option value="<?=$province;?>" <?=(isset($post_db['area']) && $post_db['area'] == $province) ? 'selected' :'';?>><?=$province;?></option>
<?php endforeach;?>
			</select>
		</dd>
	</dl>
	<dl>
		<dt>浏览权限：</dt>
		<dd>
			<select name="access">
				<option value="1" <?=(isset($post_db['access']) && $post_db['access'] == 1) ? 'selected' :'';?>>免费会员</option>
				<option value="2" <?=(isset($post_db['access']) && $post_db['access'] == 2) ? 'selected' :'';?>>付费会员</option>
				<option value="0" <?=(isset($post_db['access']) && $post_db['access'] == 0) ? 'selected' :'';?>>开放浏览</option>
			</select>
		</dd>
	</dl>
	<dl>
		<dt>发布时间：</dt>
		<dd><input class="input_text" type="text" name="ptime" value="<?= empty($post_db) ? date('Y-m-d h:m:s',mktime()):$post_db['ptime'];?>"></dd>
	</dl>
	<dl>
		<dt>关键词：</dt>
		<dd><input class="input_text keyword_input" type="text" name="keywords" value="<?= empty($post_db) ? '':$post_db['keywords'];?>"></dd>
	</dl>
	<dl>
		<dt>文章内容：</dt>
		<dd class="post_content" style="width:700px;">
			<textarea id="post_content" name="content"><?= empty($post_db) ? '':stripslashes(htmlspecialchars_decode($post_db['content']));?></textarea>
		</dd>
	</dl>
	<dl>
		<dt>文章状态：</dt>
		<dd>
			<input type="radio" <?=(isset($post_db['status']) && $post_db['status'] == 1) ? 'checked=true' :'';?> value="1" name="status"><label> 审核通过</input>
		</dd>
		<dd>
			<input type="radio" <?=(isset($post_db['status']) && $post_db['status'] == 0) ? 'checked=true' :'';?>  name="status" value="0"><label> 未审核</input>
		</dd>
	</dl>
	<dl>
		<dt> &nbsp;</dt>
		<dd><button id="save_post_btn" type="submit">保存</button></dd>
	</dl>
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
