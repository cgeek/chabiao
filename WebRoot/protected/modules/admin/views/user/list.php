<?php
$this->breadcrumbs=array(
	'所有用户'=>array('/admin/user/list'),
	'用户列表',
);?>

	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider">/</span></li>
		<li class="active">用户管理</li>
	</ul>
	<p>
		<form class="form-search" method="get">
			<div class="input-append">
				<input type="text" name="keyword" class="span12 search-query"><button class="btn" type="submit">搜索</button>
			</div>
		</form>
	</p>
	
			<table class="table table-striped">
              <thead>
                <tr>
					<th>用户ID</th>
					<th>用户名</th>
					<th>姓名</th>
					<th>电话</th>
					<th>注册原因</th>
					<th>来源</th>
					<th>注册时间</th>
					<th>最后登录时间</th>
					<th>操作</th>
                </tr>
              </thead>
              <tbody>
			<?php foreach($user_list as $user):?>
				<tr class="user_id_<?=$user['user_id'];?>">
					<th><?=$user['user_id'];?></th>
					<th><?=cut_str($user['user_name'], 30);?></th>
					<th><?=cut_str($user['contact_name'], 30);?></th>
					<th><?=$user['mobile'];?></th>
					<th><?=$user['reg_reason'];?> &nbsp;</th>
					<th><?=$user['source'];?> &nbsp;</th>
					<th><?=date('Y-m-d',$user['ctime']);?></th>
					<th><?=$user['last_login_time'];?></th>
					<th><a href="/admin/user/edit?user_id=<?=$user['user_id'];?>">修改</a> | <a class="delete_user_btn" user_id="<?=$user['user_id'];?>" href="/admin/user/delete?user_id=<?=$user['user_id'];?>" target="_blank">删除</a></th>
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
