<div class="main user_page clearfix">
	<?php $this->renderPartial('/user/aside');?>
	<div class="main_body" style="min-height:400px;">
		<h1 class="title">今日推荐信息</h1>
		<div class="list_box">

				<div class="search-filter-box" >
					<form action="/user/home" method="GET">
					<div class="icon"><img src="/images/search_list_shaixuan.gif"></div>
					<dl class="">
						<dt>关键词:</dt>
						<dd><input type="text" name="keyword" value="<?=$keyword;?>"></dd>
						<dt>范围：</dt>
						<dd>
							<select name="f">
								<option value="all" <?=($_GET['f'] == 'all') ? 'selected' :'';?>>按全文搜索</option>
								<option value="title" <?=($_GET['f'] == 'title') ? 'selected' :'';?>>按标题搜索</option>
							</select>
						</dd>
					</dl>
					<dl>
						<dt>栏目：</dt>
						<dd>
							<select name="cat">
								<option value="1" <?=($_GET['cat'] == 1) ? 'selected' :'';?>>招标信息</option>
								<option value="2" <?=($_GET['cat'] == 2) ? 'selected' :'';?>>拟在建项目</option>
								<option value="3" <?=($_GET['cat'] == 3) ? 'selected' :'';?>>中标公示</option>
								<option value="4" <?=($_GET['cat'] == 4) ? 'selected' :'';?>>求购信息</option>
								<option value="5" <?=($_GET['cat'] == 5) ? 'selected' :'';?>>供应信息</option>
							</select>
						</dd>
						<dt>地区：</dt>
						<dd>
							<select name="area">
								<option value="">全国</option>
								<option value="浙江" <?=($_GET['area'] == '浙江') ? 'selected' :'';?>>浙江</option>
								<option value="江苏" <?=($_GET['area'] == '江苏') ? 'selected' :'';?>>江苏</option>
							</select>
						</dd>
						<dt>按时间段：</dt>
						<dd>
							<select name="st">
								<option value="month">最近一个月</option>
								<option value="half_year">最近半年</option>
								<option value="all">全部</option>
							</select>
						</dd>
					</dl>
						<button type="submit" class="search_submit_btn">搜索</button>
					</form>
				</div>
<div class="post_list">
	<table class="table table-bordered ">
		<thead>
			<tr>
				<th>文章标题</th>
				<th style="width:50px;">地区</th>
				<th style="width:65px;">栏目</th>
				<th style="width:65px;">发布时间</th>
			</tr>
		</thead>
		<tbody>
	<?php foreach($post_list as $post):?>
			<tr>
				<th><a href="/info/<?=$post['id'];?>.html" target="_blank"><?=cut_str($post['title'], 60);?></a></th>
				<th><?=$post['area'];?></th>
				<th><?=getCategoryName($post['category']);?></th>
				<th><?=$post['ctime'];?></th>
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
		</div>		
	</div>
</div>
