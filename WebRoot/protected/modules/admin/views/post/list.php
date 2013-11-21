<?php
$this->breadcrumbs=array(
	'所有文章'=>array('/admin/post'),
	'文章列表',
);?>
	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider"></span></li>
		<li class="active">文章列表</li>
	</ul>
	<p>
		<a href="/admin/post/list" class="btn">文章列表</a>
		<a href="/admin/post/list?status=-1" class="btn">回收站列表</a>
		<a href="/admin/post/add" class="btn btn-primary" >添加文章</a>
	</p>
<div class="filter_box" style="margin-bottom:10px;">
	<form action="/admin/post/list" class="form-inline" method="GET">
		<div class="form-group controls-row">
			<select class="span2 form-control" name="category">
				<option value="">全部类目</option>
				<?php foreach(getCategorys() as $key=>$category):?>
				<option value="<?=$key;?>" <?=isset($_GET['category']) && ($key == $_GET['category']) ? 'selected' :'';?>><?=$category;?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group controls-row">
			<select  class="col-sm-2 form-control" class="" name="access">
				<option value="">选择权限</option>
				<?php foreach(getAccess() as $key=>$access):?>
				<option value="<?=$key;?>" <?=isset($_GET['access']) && ($key == $_GET['access']) ? 'selected' :'';?>><?=$access;?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group controls-row">
			<select  class="col-sm-2 form-control" name="area">
				<option value="">全部区域</option>
				<?php foreach(getProvinces() as $province):?>
				<option value="<?=$province;?>" <?=isset($_GET['area']) && ($province ==  $_GET['area']) ? 'selected' :'';?>><?=$province;?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group controls-row">
			<select  class="col-sm-2 form-control" name="status">
				<option value="">选择状态</option>
				<option value="0" <?=isset($_GET['status']) && ('0' == $_GET['status']) ? 'selected':'';?>>未审核</option>
				<option value="1" <?=isset($_GET['status']) && ('1' == $_GET['status']) ? 'selected':'';?>>审核通过</option>
			</select>
		</div>
		<div class="form-group controls-row">
			<button class="btn btn-success" type="submit">筛选</button>
			<a class="btn " href="/admin/post/list">清除筛选条件</a>
		</div>
	</form>
</div>
<div class="post_list list">
	<table class="table table-bordered ">
		<thead>
			<tr>
				<th>#ID</th>
				<th>文章标题</th>
				<th>录入时间</th>
				<th>类目</th>
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
				<th><a target="_blank" href="/info/<?=$post['id'];?>"><?=cut_str($post['title'], 30);?></a></th>
				<th><?=date('Y-m-d h:i',strtotime($post['mtime']));?></th>
				<th><?=getCategoryName($post['category']);?></th>
				<th><?=getAccessName($post['access']);?></th>
				<th><?=($post['user_id'] == 0) ? '采集器': $post['user']['user_name'];?></th>
				<th><?php if($post['status'] == 1 ):?>
					审核通过
					<?php else:?>
					 <a href="javascript:void(0);" class="red">未审核</a>
					<?php endif;?>
				</th>
				<th><a href="/info/<?=$post['id'];?>" target="_blank">查看</a> | <a href="/admin/post/edit?id=<?=$post['id'];?>">编辑</a> | <a href="javascript:void(0);">删除</a> </th>
			</tr>
	<?php endforeach;?>
		</tbody>
	</table>

		<?php 
			$this->widget('LinkPager', array('pages' => $pages, 'prevPageLabel'=>'«','nextPageLabel'=>'»','cssFile'=>false, 'header'=>false)); 
		?>
</div>
