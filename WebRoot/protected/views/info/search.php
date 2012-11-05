	<div class="g-mh-20 g-pb-10">
 		<div class="g-cf">
			<div class="g-w-730 g-f-l g-mh-20">
				<div class="search-notice">以下为您搜索到的结果，您可在此对结果进行再次筛选！也可以致电4006-333-959或给我们留言,请点击</div>	
				<div class="search-filter-box" >
					<form action="/search" method="GET">
					<div class="icon"><img src="/images/search_list_shaixuan.gif"></div>
					<dl class="">
						<dt>关键词:</dt>
						<dd><input type="text" name="keyword" value="<?=$keyword;?>"></dd>
						<dt>范围：</dt>
						<dd>
							<select name="f">
								<option value="all" <?=(isset($_GET['f']) && $_GET['f'] == 'all') ? 'selected' :'';?>>按全文搜索</option>
								<option value="title" <?=( isset($_GET['f']) && $_GET['f'] == 'title') ? 'selected' :'';?>>按标题搜索</option>
							</select>
						</dd>
					</dl>
					<dl>
						<dt>栏目：</dt>
						<dd>
							<select name="cat">
								<option value="1" <?=(isset($_GET['cat']) && $_GET['cat'] == 1) ? 'selected' :'';?>>招标信息</option>
								<option value="2" <?=(isset($_GET['cat']) && $_GET['cat'] == 2) ? 'selected' :'';?>>拟在建项目</option>
								<option value="3" <?=(isset($_GET['cat']) && $_GET['cat'] == 3) ? 'selected' :'';?>>中标公示</option>
								<option value="4" <?=(isset($_GET['cat']) && $_GET['cat'] == 4) ? 'selected' :'';?>>求购信息</option>
								<option value="5" <?=(isset($_GET['cat']) && $_GET['cat'] == 5) ? 'selected' :'';?>>供应信息</option>
							</select>
						</dd>
						<dt>地区：</dt>
						<dd>
							<select name="area">
								<option value="">全国</option>
<?php foreach(getProvinces() as $area):?>
								<option value="<?=$area;?>" <?=(isset($_GET['area']) && $_GET['area'] == $area) ? 'selected' :'';?>><?=$area;?></option>
<?php endforeach;?>
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
				<div class="g-box-g g-b-dd">
					<div class="bar">
					<h2 class="cur">搜索结果:<span style="font-weight:normal;font-size:12px;padding-left:10px;">(大约有<span class="red"><?=$count;?></span>项符合查询结果，数据总数：<span class="red"><?=$dbTotal;?></span>条；搜索耗时:<span class="red"><?=substr($search_cost, 0, 7);?></span>秒) <span></h2>
					</div>
					<div class="result-list">
						<?php if(empty($post_list)):?>
						<div class="no-result">如没有找到您想要的信息，您可以修改关键词重新搜索！也可以致电4006-333-959或给我们留言,请点击</div>	
						<?php else:?>
						<ul class="post-list">
							<?php foreach($post_list as $post):?>
							<li class="clearfix">
								<div class="">
									<?php if(!empty($post['area'])):?>
										<span class="area">【<?=$post['area'];?>】</span>
									<?php else:?>
										<span class="area">【全国】</span>
									<?php endif;?>
									<span class="title"><a href="/info/<?=$post['id'];?>.html" target="_blank"><?=$post['title'];?></a></span>
									
									<span class="ptime"><?=$post['ctime'];?></span>
								</div>
								<div class="desc">
								</div>
							</li>
							<?php endforeach;?>
						</ul>
						<?php endif;?>
					</div>
					<div class="g-list-txt g-mtb-10 g-mlr-5 "></div>
					<div class="page_list">
							<? $this->widget('CLinkPager', array('pages' => $pages, 'prevPageLabel'=>'上一页','nextPageLabel'=>'下一页','cssFile'=>false, 'header'=>false ,'firstPageLabel'=>'首页', 'lastPageLabel'=>'最后一页',)); ?>
					 </div>	

					<div class="relatedkey">
						<?php if(!empty($relatedkey)):?>
						相关搜索：
							<?php foreach($relatedkey as $key):?>
								<a href="/search?keyword=<?=$key;?>"><?=$key;?></a>、
							<?php endforeach;?>
						<?php endif;?>
					</div>
				</div>
			</div>

			<!--导入右边栏 -->
			<?php $this->renderPartial('/info/left_side', array('current_category' => $current_category));?>
		</div>
	</div>
