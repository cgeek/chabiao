<?php
$this->breadcrumbs=array(
	'所有文章'=>array('/admin/post'),
	'文章列表',
);?>

<div class="option_box">
	<ul class="clearfix">
		<li><a target="_blank" href="/admin/post/add">添加文章</a></li>
		<li><a href="/admin/post/list?status=-1">回收站列表</a></li>
	</ul>
</div>
<div class="filter_box">
	<form action="/admin/post/list" method="GET">
	<span>筛选条件：</span>
	<dl>
		<dt>类目:</dt>
		<dd>
			<select name="category">
				<option value="">全部</option>
				<?php foreach(getCategorys() as $key=>$category):?>
				<option value="<?=$key;?>" <?=($key == $_GET['category']) ? 'selected' :'';?>><?=$category;?></option>
				<?php endforeach;?>
			</select>
		</dd>
		<dt>权限：</dt>
		<dd>
			<select name="access">
				<option value="">全部</option>
				<?php foreach(getAccess() as $key=>$access):?>
				<option value="<?=$key;?>" <?=($key == $_GET['access']) ? 'selected' :'';?>><?=$access;?></option>
				<?php endforeach;?>
			</select>
		</dd>
		<dt>地区：</dt>
		<dd>
			<select name="area">
				<option value="">全部</option>
				<?php foreach(getProvinces() as $province):?>
				<option value="<?=$province;?>" <?=($province == $_GET['area']) ? 'selected' :'';?>><?=$province;?></option>
				<?php endforeach;?>
			</select>
		</dd>
		<dt>状态：</dt>
		<dd>
			<select name="status">
				<option value="">全部</option>
				<option value="0" <?=('0' == $_GET['status']) ? 'selected':'';?>>未审核</option>
				<option value="1" <?=('1' == $_GET['status']) ? 'selected':'';?>>审核通过</option>
			</select>
		</dd>
		<button type="submit">提交</button>
	</dl>
	</form>
</div>
<div class="post_list list">
	<table class="table table-bordered ">
		<thead>
			<tr>
				<th>ID</th>
				<th>文章标题</th>
				<th>录入时间</th>
				<th>类目</th>
				<th>地区</th>
				<th>权限</th>
				<th>发布人</th>
				<th>状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($post_list as $post):?>
			<tr>
				<th><?=$post['id'];?></th>
				<th><?=cut_str($post['title'], 40);?></th>
				<th><?=date('Y-m-d H:i',strtotime($post['ptime']));?></th>
				<th><?=getCategoryName($post['category']);?></th>
				<th><?=$post['area'];?></th>
				<th><?=getAccessName($post['access']);?></th>
				<th><?=$post['user']['user_name'];?></th>
				<th><?php if($post['status'] == 1 ):?>
					审核通过
					<?php else:?>
					 <a href="javascript:void(0);" class="red">未审核</a>
					<?php endif;?>
				</th>
				<th><a href="/admin/post/edit?id=<?=$post['id'];?>" target="_blank">编辑</a> | <a href="javascript:void(0);">删除</a></th>
			</tr>
	<?php endforeach;?>
		</tbody>
	</table>

	<div id="pager">  
<?php
$this->widget('CLinkPager',array(  
	'header'=>'', 
	'firstPageLabel' => '首页',  
	'lastPageLabel' => '末页',  
	'prevPageLabel' => '上一页',  
	'nextPageLabel' => '下一页',  
	'pages' => $pages,  
	'maxButtonCount'=>13 
));  
?>  
	</div>  
</div>
