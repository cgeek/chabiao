	<div class="g-mh-20 g-pb-10">
		<div class="g-cf">
			<div class="g-w-730 g-f-l g-mh-20">
          		<div class="g-ad-730-90">
       	    	 	<a href="http://www.unionbidding.com/"><img src="http://www.unionbidding.com/images/inner_banner.jpg"></a>
				</div>
				<div class="g-box-g g-b-dd">
					<div class="bar">
						<h2 class="cur"><?=$current_category['name'];?></h2>
					</div>
					<div class="g-list-txt g-mtb-10 g-mlr-5 ">
					<?php if(!empty($post_list)):?>
						<table width="100%" border="0" cellspacing="0" cellpadding="5">
							<tbody>
							<?php foreach($post_list as $post):?>
								<tr height="26">
									<td width="10"></td>
									<td class="g-h-28 g-lh-28 g-fz-14 g-list-dot">【<?=!empty($post['area'])? $post['area']: '全国';?>】<a href="/info/<?=$post['id'];?>.html" target="_blank" title="<?=$post['title'];?>" alt="<?=$post['title'];?>"> <?=$post['title'];?></a></td>
									<td width="75"><?=$post['mtime'];?></td>
								</tr>
							<?php endforeach;?>
							</tbody>
						</table>
					<?php endif;?>
						<div class="page_list">
							<? $this->widget('CLinkPager', array('pages' => $pages, 'prevPageLabel'=>'上一页','nextPageLabel'=>'下一页','cssFile'=>false, 'header'=>false ,'firstPageLabel'=>'首页', 'lastPageLabel'=>'最后一页',)); ?>
						</div>
					</div>
				</div>
			</div>

			<!--导入右边栏 -->
			<?php $this->renderPartial('/info/left_side', array('current_category'=>$current_category));?>
		</div>
	</div>
