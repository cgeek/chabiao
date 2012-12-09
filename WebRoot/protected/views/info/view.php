	<div class="g-mh-20 g-pb-10">
		<div class="g-crumb g-arr-g g-mb-10"></div>
		<div class="g-cf">
			<div class="g-w-730 g-f-l g-mh-20">
          	<div class="g-ad-730-90">
            	<a href="http://www.unionbidding.com/"><img src="http://www.unionbidding.com/images/inner_banner.jpg"></a>
			</div>
          	<div class="g-box-g g-b-dd pd15 clearfix" style="border-top:2px solid #1057A7;">
				<div class="article" style="padding:10px;">
              	<h3 class="g-ta-c g-fz-16" style="border-bottom:1px dotted #d1d1d1;padding-bottom:10px;"><?=$info['title'];?></h3>
				<p class="g-c-99 g-pb-10 g-ta-c" style="padding-top:10px;">发布日期：<?=$info['ptime'];?>　&nbsp;&nbsp;地区：<?=$info['area'];?></p>
<?php if(in_array($info['category'], array( 1, 2, 3) ) && Yii::app()->user->isGuest):?>
				<div class="no_login page-account">
					<div class="red"><p>该条信息登录后才能浏览，请先<a href="/user/login/">登录</a>或<a href="/user/register">注册</a>为会员。</p></div>
					<div class="no_login_box clearfix">
						<div class="login_form">
							<p style="padding:30px 0;"><img width="144px" height="25px" src="/images/is_user.png"></p>
							<form id="login_form" action="/user/login" method="post" class="form-horizontal">
								<p class="page-account-alert-message error"></p>
								<div class="control-group">
									<label class="control-label" for="inputEmail">用户名：</label>
									<div class="controls">
										<input type="text" name="username" id="inputEmail" placeholder="用户名">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">密码：</label>
									<div class="controls">
										<input type="password" name="password" id="inputPassword" placeholder="密码">
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<label class="checkbox">
											<input type="checkbox"> 记住密码
										</label>
										<button type="submit" class="btn">登录</button>
									</div>
								</div>
							</form>
						</div>
						<div class="reg_form">
							<p style="padding-top:30px;"><img width="150px" height="25px" src="/images/no_user.png"></p>
							<p style="text:align;padding:10px 0;"><a class="btn btn-large btn-success" href="/user/register">免费注册用户</a></p>
							<!--p>注册之后你可以:</p>
							<p><a href="/user/register"><img src="/images/reg_todo.png"></a></p-->
						</div>
					</div>
				</div>
				<div style="border:1px solid #ccc;padding:10px; margin-top:20px;">
					<p style="color:#000;font-size:14px;">内容概要：</p>
					<p><?=cut_str(strip_tags($info['content']), 320);?> ......</p>
				</div>
<?php else:?>
				<div class="g-fz-14 article_body g-mt-10">
					<?=$info['content'];?>
				</div>
<?php endif;?>

			</div>
			<div class="mg15 g-ta-r article_op g-pt-5 "></div>
		  </div>
		</div>
			<!--导入右边栏 -->
			<?php $this->renderPartial('/info/left_side', array('current_category'=>$current_category));?>
	  </div>
	</div>

<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('account');
});
</script>
