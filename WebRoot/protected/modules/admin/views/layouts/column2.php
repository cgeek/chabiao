<?php $this->beginContent('/layouts/main'); ?>
		<div class="main"><?php echo $content; ?></div>
		<div class="sidebar-nav">
			<ul class="nav nav-list">
				<li class="nav-header">客户管理</li>
				<li class="nav-sub"><a href="/admin/user">所有用户</a></li>
				<li class="nav-sub"><a href="/admin/user?status=1">付费用户</a></li>
				<li class="nav-sub"><a href="/admin/user?status=0">免费用户</a></li>
			</ul>
			<ul class="nav nav-list">
				<li class="nav-header">信息管理</li>
				<li class="nav-sub"><a href="/admin/post/list">所有信息</a></li>
				<li class="nav-sub"><a href="/admin/post/list?status=-1">回收站</a></li>
				<li class="nav-sub"><a href="/admin/post/add">添加信息</a></li>
			</ul>
			<ul class="nav nav-list">
				<li class="nav-header">站群管理</li>
				<li class="nav-sub"><a href="/admin/sites">站群列表</a></li>
				<li class="nav-sub"><a href="/admin/sites/add">添加网站</a></li>
			</ul>
		</div>
		</div>
<?php $this->endContent(); ?>
