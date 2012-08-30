	<div class="g-mh-20 g-pb-10">
		<div class="g-crumb g-arr-g g-mb-10"></div>
		<div class="g-cf">
			<div class="g-w-730 g-f-l g-mh-20">
          	<div class="g-ad-730-90">
            	<a href="http://www.unionbidding.com/"><img src="http://www.unionbidding.com/images/inner_banner.jpg"></a>
			</div>
          	<div class="g-box-g g-b-dd pd15" style="border-top:2px solid #1057A7;">
				<div class="article" style="padding:10px;">
              	<h3 class="g-ta-c g-fz-16" style="border-bottom:1px dotted #d1d1d1;padding-bottom:10px;"><?=$info['title'];?></h3>
			  	<p class="g-c-99 g-pb-10 g-ta-c" style="padding-top:10px;">发布日期：<?=$info['ptime'];?>　&nbsp;&nbsp;地区：<?=$info['area'];?></p>
				<div class="g-fz-14 article_body g-mt-10">
<?=$info['content'];?>
			</div>
		</div>
            <div class="mg15 g-ta-r article_op g-pt-5 "></div>
            
          </div>
        </div>
			<!--导入右边栏 -->
			<?php $this->renderPartial('/info/left_side', array('current_category'=>$current_category));?>
      </div>
    </div>
