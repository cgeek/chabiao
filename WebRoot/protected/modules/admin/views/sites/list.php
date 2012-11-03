<?php
$this->menu = array(
	array('label'=>'网站列表','url'=> array('/admin/sites/list')),
	array('label'=>'添加网站','url'=> array('/admin/sites/add')),
);
?>
	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider">/</span></li>
		<li class="active">站群列表</li>
	</ul>
	<p>
		<a class="btn" href="/admin/sites">网站列表</a>
		<a class="btn btn-primary" href="/admin/sites/add">添加网站</a>
	</p>
	<div class="site-list">
			<table class="table table-striped">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>网站域名</th>
                  <th>网站名称</th>
                  <th>关键词</th>
                  <th>最后修改时间</th>
                  <th>所在服务器</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
			<?php foreach($site_list as $site):?>
				<tr class="site_id_<?=$site['id'];?>">
                  <td><?=$site['id'];?></td>
				  <td><a href="http://<?=$site['domain'];?>" target="_blank"><?=cut_str($site['domain'], 38);?></a></td>
                  <td><?=$site['name'];?></td>
                  <td><?=cut_str($site['keywords'], 30);?></td>
 				  <td><?=date('Y-m-d h:i:s',$site['mtime']);?></td>
                  <td>127.0.0.1</td>
				  <td><a href="sites/edit?id=<?=$site['id'];?>">管理</a> | <a class="delete_site_btn" site_id="<?=$site['id'];?>" href="sites/delete?id=<?=$site['id'];?>">删除</a></td>
                </tr>
			<?php endforeach;?>
              </tbody>
            </table>
	</div>
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
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('/admin/site');
});
</script>
