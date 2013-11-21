<div class="span12">
	<div class="alert alert-info">
		<h3>欢迎来到联合招标网站群管理系统</h3>
	 </div>
	<div class="row">
		<div class="col-lg-4 col-md-4">
			<div>
				<h3>信息统计</h3>
				<p>今日采集信息:<span class="badge badge-warning"><?=$post_spider_count;?></span>条</p>
				<p>今日用户添加信息:<span class="badge badge-important"><?=$post_user_count;?></span>条</p>
				<p>信息总条数:<span class="badge"><?=$post_total_count;?></span>条</p>
			</div>
	        <a class="btn  btn-success" href="/admin/post">查看列表»</a>
		</div>
		<div class="col-lg-4 col-md-4">
			<div>
				<h3>用户统计</h3>
				<p>
					今日新增用户数:<span class="badge badge-important"><?=$user_increase_count;?></span>人
				</p>
				<p>
					总共用户数:<span class="badge"><?=$user_total_count;?></span>人
				</p>
			</div>
	        <a class="btn btn-warning" href="/admin/user">查看列表»</a>
		</div>
		<div class="col-lg-4 col-md-4">
			<div>
				<h3>流量统计</h3>
			</div>
	        <a class="btn btn-info" target="_blank" href="http://tongji.baidu.com/web/5683082/overview/multi?siteId=2057434">查看百度统计»</a>
		</div>
	</div>
</div>
