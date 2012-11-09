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
				<input type="text" name="keyword" class="span12 search-query" placeholder="用户名 或 用户id 或 Email"><button class="btn" type="submit">搜索</button>
			</div>
		</form>
	</p>
	<div class="user-list" style="font-size:12px;font-weight:normal;">
		<ul class="nav nav-tabs" id="setting_tab">
			<li <?php if(!isset($_GET['status']) && !isset($_GET['reg_reason'])):?>class="active"<?php endif;?>>
				<a href="/admin/user">所有用户</a>
			</li>
			<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 0):?>class="active"<?php endif;?>>
				<a href="/admin/user?reg_reason=0">免费浏览</a>
			</li>
			<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 1):?>class="active"<?php endif;?>>
				<a href="/admin/user?reg_reason=1">咨询入网</a>
			</li>
			<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 2):?>class="active"<?php endif;?>>
				<a href="/admin/user?reg_reason=2">要成为付费会员</a>
			</li>
			<li <?php if(isset($_GET['status']) && $_GET['status'] == -1):?>class="active"<?php endif;?>>
				<a href="/admin/user?status=-1">已经删除用户</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="home">
<?php if(empty($user_list)):?>
				<p>没有找到符合条件的用户</p>
<?php else:?>
			<table class="table table-striped">
              <thead>
                <tr>
					<th>ID</th>
					<th>注册时间</th>
					<th>用户名</th>
					<th>客户名称</th>
					<th>客户职位</th>
					<th>电话/手机</th>
					<th>公司名称</th>
					<th>注册目地</th>
					<th>来源</th>
					<th>最后登录</th>
					<th>操作</th>
                </tr>
              </thead>
              <tbody>
			<?php foreach($user_list as $user):?>
				<tr user_id="<?=$user['user_id'];?>" class="item_user user_id_<?=$user['user_id'];?>">
					<th><?=$user['user_id'];?></th>
					<th><?=date('Y-m-d',$user['ctime']);?></th>
					<th><?=cut_str($user['user_name'], 30);?></th>
					<th><?=cut_str($user['contact_name'], 30);?></th>
					<th><?=cut_str($user['position'], 30);?></th>
					<th><?=$user['mobile'];?></th>
					<th><?=$user['company_name'];?></th>
					<th><?=$user['reg_reason'];?> &nbsp;</th>
					<th><?=$user['source_cn'];?> &nbsp;</th>
					<th><?=$user['last_login_time'];?></th>
					<th>
						<a class="more_user_info_btn" href="/admin/user/ajax" user_id="<?=$user['user_id'];?>">更多信息</a>
						<?php if(isset($_GET['status']) && $_GET['status'] == -1):?>
						<?php else:?>
						 | <a class="delete_user_btn" user_id="<?=$user['user_id'];?>" href="/admin/user/delete?user_id=<?=$user['user_id'];?>" target="_blank">删除</a>
						<?php endif;?>
					</th>
                </tr>
			<?php endforeach;?>
              </tbody>
		</table>
		<div class="pagination pagination-small">  
<?php
$this->widget('CLinkPager',array(  
	'header'=>'', 
	'cssFile' => false,
	'firstPageLabel' => '首页',  
	'lastPageLabel' => '末页',  
	'prevPageLabel' => '上一页',  
	'nextPageLabel' => '下一页',  
	'pages' => $pages,  
	'maxButtonCount'=>10 
));  
?>  
		</div>  
<?php endif; ?> <!--用户列表结束-->
		</div>
	</div>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('/admin/user');
});
</script>
