<?php
$ddis->breadcrumbs=array(
	'所有用户'=>array('/admin/user/list'),
	'用户列表',
);?>

<div class="user_list list">
		<ul>
			<dl class="hd">
				<dd>用户ID</dd>
				<dd>用户名</dd>
				<dd>姓名</dd>
				<dd>电话</dd>
				<dd>传真</dd>
				<dd>公司名称</dd>
				<dd>注册原因</dd>
				<dd>来源</dd>
				<dd>注册时间</dd>
				<dd>最后登录时间</dd>
			</dl>
	<?php foreach($user_list as $user):?>
			<dl>
				<dd><?=$user['user_id'];?></dd>
				<dd><?=cut_str($user['user_name'], 30);?></dd>
				<dd><?=cut_str($user['contact_name'], 30);?></dd>
				<dd><?=$user['mobile'];?></dd>
				<dd><?=$user['fax'];?></dd>
				<dd><?=$user['company_name'];?> &nbsp;</dd>
				<dd><?=$user['reg_reason'];?> &nbsp;</dd>
				<dd><?=$user['source'];?> &nbsp;</dd>
				<dd><?=date('Y-m-d',$user['ctime']);?></dd>
				<dd><?=$user['last_login_time'];?></dd>
			</dl>
	<?php endforeach;?>
		</ul>
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
