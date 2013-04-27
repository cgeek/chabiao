<div class="g-mh-20">
	<div class="g-ad-960-70 g-ta-c g-mb-10 g-b-dd">
			<?=ad_show($this->site_info['ad'], 'ad-banner', '960px');?>
<script type="text/javascript">
/*首页横幅960*90，创建于2013-4-24*/
//var cpro_id = "u1269932";
</script>
<!--script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script-->
	</div>
</div>
<div class="g-mh-20 g-pb-10">
    <div class="g-cf">
      <div class="g-w-200 g-f-l g-mh-20">
        <div class="g-box-g caozuo">
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="#" target="_blank" recid="800" rec="">帮助</a>
            <h2 title=""> 特色服务</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-5">
                <table width="80%" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td width="35" height="29"> </td>
                    <td height="29"><strong>发布招标信息</strong></td>
                    <td width="60" align="right">免费发布</td>
                    <td width="15"> </td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td height="30"><strong>发布供应信息</strong></td>
                    <td align="right">产品推广</td>
                    <td> </td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td height="30"><strong>发布求购信息</strong></td>
                    <td align="right">实用采购</td>
                    <td> </td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td height="29"><strong>邀请推荐入围</strong></td>
                    <td align="right">精准投标</td>
                    <td> </td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td height="29"><strong>项目运作支持</strong></td>
                    <td align="right">优质服务</td>
                    <td> </td>
                  </tr>
                </tbody></table>
            </div>
          </div>
        </div>
      </div>
	  <div class="g-w-430 g-f-l g-mh-20 g-ml-10">
		<div class="g-ad-430-189">
			<h3>&nbsp;&nbsp;最新广告</h3>
	  		<script type="text/javascript">
				var cpro_id = "u1269950";
			</script>
				<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
		 </div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
        <div class="g-ad-310-70">
        <img src="/images/ads/tese.gif" width="308" height="68"></div>
        <div class="g-bc-b g-p-r service" id="_userlogin">
		<form method="post" enctype="multipart/form-data" name="userlogin" style="margin:0px; padding:0px;">
	<input type="hidden" name="fmdo" value="login">
                <input type="hidden" name="dopost" value="login">
                <input type="hidden" name="keeptime" value="604800">
          <div class="g-mlr-14 service1">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td><strong>欢迎来到联合招标网</strong></td>
				<td align="right">
<?php if(user()->isGuest):?>
					<a href="/user/resetpassword" target="_blank">忘记密码</a> | <a href="/user/register" target="_blank">立即注册</a>
<?php else:?>
					<a href="/user/home" target="_blank">个人中心</a> | <a href="/user/logout">退出</a>
<?php endif;?>
				</td>
              </tr>
            </tbody></table>
          </div>
		  <div class="g-mlr-14 g-ptb-5 g-bt-ed g-cf service2">
<?php if(!user()->isGuest):?>
				<div class="welcome-panel">
					亲爱的<span class="red"><?=user()->name;?></span>，你可以：
					<ul>
						<li><a href="/user/home" target="_blank">查看定制信息</a></li>
						<li><a href="/user/pub?type=1" target="_blank">发布招标信息</a></li>
						<li><a href="/user/pub?type=2" target="_blank">发布求购信息</a></li>
						<li><a href="/user/pub?type=3" target="_blank">发布供应信息</a></li>
					</ul>
				</div>
<?php else:?>
				<div class="welcome-login-box clearfix">
					<form id="login_form" action="/user/login" method="post">
						<dl>
							<dt>用户名:</dt>
							<dd><input type="text" name="username" value=""></dd>
							<dd><input type="checkbox" name="is" value="">记住登录状态</dd>
						</dl>
						<dl>
							<dt>密码：</dt>
							<dd><input type="password" name="password" value="">
								<input type="submit" class="login_btn" name="login" value="登录">
							</dd>
						</dl>
					</form>
				</div>
		<?php endif;?>
          </div>
        </div>
          
      </div>
    </div>
    <div class="g-cf">
      <div class="g-w-200 g-f-l g-mh-20">
        <div class="g-box-g">
          <div class="bar">
		  <a class="g-c-99 g-bi-n" title="" href="/info/gongying" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">最新采购信息</h2>
          </div>
          <div class="con">
            <ul class="g-list-txt g-list-dot g-mtb-5">
<?php if(!empty($gongying_list)):?>
	<?php foreach($gongying_list as $item):?>
				<li><a title="<?=$item['title'];?>" href="/info/<?=$item['id'];?>.html" target="_blank"><?=$item['title'];?></a> </li>
	<?php endforeach;?>
<?php endif;?>
            </ul>
          </div>
        </div>
		<div class="g-box-g1 g-mtb-10">
			<?=ad_show($this->site_info['ad'], 'ad-1', '218px');?>
		</div>
		<div class="g-box-g">
          <div class="bar">
		  <a class="g-c-99 g-bi-n" title="" href="/info/gongying" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">优秀供应商</h2>
          </div>
          <div class="con">
            <ul class="g-list-txt g-list-dot g-mtb-5">
<?php if(!empty($gongyingshang_list)):?>
	<?php foreach($gongyingshang_list as $item):?>
				<li><a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a></li>
	<?php endforeach;?>
<?php endif;?>
            </ul>
          </div>
        </div>
      </div>
      <div class="g-w-430 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar g-box-t"><a class="g-c-99 g-bi-n" title="" href="/info/zhaobiao" target="_blank" recid="800" rec="">更多</a><a class="g-c-66" title="" href="#" target="_blank" recid="804" rec=""><span style="color:#ff0000;font-weight:bold;">如何能查看招标内容？</span></a>
            <h2 class="cur" title="">招标公告</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-10 g-mlr-5">
			  <ul> 
<?php if(!empty($zhaobiao_list)):?>
	<?php foreach($zhaobiao_list as $item):?>
					<li class="g-h-24 g-lh-24 g-fz-14">
						<span class="g-fz-12 g-pl-10 g-c-99 g-f-r"><?=$item['ctime'];?></span>
						<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
					</li>
	<?php endforeach;?>
<?php endif;?>
             	</ul>
            </div>
          </div>
        </div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
		  <div class="bar">
            <h2 class="cur" title=""><a style="float:left;" href="/info/zhongbiaobang">会员中标榜</a></h2>
			<a class="g-c-99 g-bi-n" title="" href="/user/register" target="_blank" recid="800" rec="">我要成为会员</a>
          </div>
          <div class="con">
            <div class="g-list-cols">
              <ul class="g-bc-f3 g-c-99 g-h-25 g-lh-25">
                <li class="g-w-20">恭喜</li>
                <li class="g-w-206">企业名称</li>
				<li class="g-w-24 g-ws-w">结果</li>
              </ul>
              <div class="g-mtb-5 bid">
<?php if(!empty($zhongbiaobang_list)):?>
	<?php foreach($zhongbiaobang_list as $item):?>
			  	<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
				</ul>
	<?php endforeach;?>
<?php endif;?>
              </div>
            </div>
            
          </div>
        </div>
        
		<div class="g-ad-310-74">
			<?=ad_show($this->site_info['ad'], 'ad-2', '310px');?>
		</div>
		<div class="g-box-g activity">
			<div class="bar">
				<!--a class="g-bi-n" href="#" target="_blank">更多</a-->
            <h2 class="g-c-w">增值服务</h2>
          </div>
          <div class="con">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                  <td width="5" align="center"> </td>
                  <td height="58" align="center"><img src="/images/ads/zz_qytg.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_ad.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_taocan.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_fabu.gif" width="50" height="50"></td>
                  <td width="5" align="center"> </td>
                </tr>
                <tr>
                  <td align="center"> </td>
                  <td height="19" align="center" valign="top">企业推广</td>
                  <td align="center" valign="top"> 购买广告</td>
                  <td align="center" valign="top">套餐服务</td>
                  <td align="center" valign="top">发布信息</td>
                  <td align="center"> </td>
                </tr>
                <tr>
                  <td align="center"> </td>
                  <td height="58" align="center"><img src="/images/ads/zz_mail.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_web.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_pro.gif" width="50" height="50"></td>
                  <td align="center"><img src="/images/ads/zz_dx.gif" width="50" height="50"></td>
                  <td align="center"> </td>
                </tr>
                <tr>
                  <td align="center"> </td>
                  <td height="19" align="center" valign="top">邮件定阅</td>
                  <td align="center" valign="top">网站建设</td>
                  <td align="center" valign="top">产品推广</td>
                  <td align="center" valign="top">短信服务</td>
                  <td align="center"> </td>
                </tr>
              </tbody></table>
          </div>
        </div>

      </div>
    </div>
    <div class="g-cf">
      <div class="g-w-640 g-f-l g-mh-20">
		<div class="g-ad-640-70">
			<?=ad_show($this->site_info['ad'], 'ad-3', '638px');?>
		</div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
		
		<div class="g-ad-310-70">
			<?=ad_show($this->site_info['ad'], 'ad-4', '308px');?>
			</div>
      </div>
    </div>
    <div class="g-cf">
      <div class="g-w-200 g-f-l g-mh-20">
        <div class="g-box-g">
          <div class="bar">
		  <a class="g-c-99 g-bi-n" title="" href="/info/gongying" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">最新供应信息</h2>
          </div>
          <div class="con">
            <ul class="g-list-txt g-list-dot g-mtb-5">
<?php if(!empty($gongying_list)):?>
	<?php foreach($gongying_list as $item):?>
				<li><a title="<?=$item['title'];?>" href="/info/<?=$item['id'];?>.html" target="_blank"><?=$item['title'];?></a> </li>
	<?php endforeach;?>
<?php endif;?>
            </ul>
          </div>
        </div>
		<div class="g-box-g1 g-mt-10"><img border="0" src="/images/ads/goca.jpg" width="218" height="136"></div>
      </div>
      <div class="g-w-430 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar g-box-t"><a class="g-bi-n" href="/info/zhongbiao" target="_blank">更多</a><a class="g-c-66" title="" href="/info-c12.html" target="_blank" recid="804" rec=""><span style="color:#ff0000;font-weight:bold;">如何提升中标几率？</span></a>
            <h2 class="cur" title="">中标公告</h2>
          </div>
          <div class="con ">
            <div class="g-list-txt g-mtb-10 g-mlr-5">
              <ul> 
<?php if(!empty($zhongbiao_list)):?>
	<?php foreach($zhongbiao_list as $item):?>
					<li class="g-h-24 g-lh-24 g-fz-14">
						<span class="g-fz-12 g-pl-10 g-c-99 g-f-r"><?=$item['ctime'];?></span>
						<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
					</li>
	<?php endforeach;?>
<?php endif;?>
             </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="/info/dongtai" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">行业动态</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-5">
              <ul>
<?php if(!empty($dongtai_list)):?>
	<?php foreach($dongtai_list as $item):?>
				<li>
					<span class="g-fz-12 g-pl-10 g-c-99 g-f-r"><?=$item['ctime'];?></span>
					<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
				</li>
	<?php endforeach;?>
<?php endif;?>
              </ul>
            </div>
          </div>
        </div>
		<div class="g-box-g_area" g-mt-10="">
          <div class="bar">
            <h2 class="cur" title="">区域导航</h2>
          </div>
          <div class="con">
            <div class="g-list-txt_area g-mtb-6">
              <ul>
				<li>华北  【<a href="/search/?area=北京" target="_blank">北京</a>】
 						  【<a href="/search/?area=天津" target="_blank">天津</a>】
 						  【<a href="/search/?area=河北" target="_blank">河北</a>】
 						  【<a href="/search/?area=山西" target="_blank">山西</a>】
 						  【<a href="/search/?area=内蒙古" target="_blank">内蒙古</a>】
				</li>
				<li>东北  
 						 【<a href="/search/?area=吉林" target="_blank">吉林</a>】
 						 【<a href="/search/?area=辽宁" target="_blank">辽宁</a>】
 						 【<a href="/search/?area=黑龙江" target="_blank">黑龙江</a>】
				</li>
				<li>西北 
 						 【<a href="/search/?area=陕西" target="_blank">陕西</a>】
 						 【<a href="/search/?area=甘肃" target="_blank">甘肃</a>】
 						 【<a href="/search/?area=宁夏" target="_blank">宁夏</a>】
 						 【<a href="/search/?area=青海" target="_blank">青海</a>】
 						 【<a href="/search/?area=新疆" target="_blank">新疆</a>】
				</li>	
				<li>华东
 						 【<a href="/search/?area=山东" target="_blank">山东</a>】
 						 【<a href="/search/?area=安徽" target="_blank">安徽</a>】
 						 【<a href="/search/?area=上海" target="_blank">上海</a>】
 						 【<a href="/search/?area=江苏" target="_blank">江苏</a>】
 						 【<a href="/search/?area=浙江" target="_blank">浙江</a>】
 						 【<a href="/search/?area=福建" target="_blank">福建</a>】
 						 【<a href="/search/?area=江西" target="_blank">江西</a>】
				</li>
				<li>华中  
 						 【<a href="/search/?area=河南" target="_blank">河南</a>】
 						 【<a href="/search/?area=湖北" target="_blank">湖北</a>】
 						 【<a href="/search/?area=湖南" target="_blank">湖南</a>】
				</li>
                <li>华南  
 						 【<a href="/search/?area=广东" target="_blank">广东</a>】
 						 【<a href="/search/?area=广西" target="_blank">广西</a>】
						 【<a href="/search/?area=海南" target="_blank">海南</a>】
				</li>
				<li>西南  
 						 【<a href="/search/?area=云南" target="_blank">云南</a>】
 						 【<a href="/search/?area=贵州" target="_blank">贵州</a>】
						 【<a href="/search/?area=四川" target="_blank">四川</a>】
 						 【<a href="/search/?area=重庆" target="_blank">重庆</a>】
 						 【<a href="/search/?area=西藏" target="_blank">西藏</a>】
				</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="g-cf">
      <div class="g-w-200 g-f-l g-mh-20">
        <div class="g-box-g">
          <div class="bar">
		  <a class="g-c-99 g-bi-n" title="" href="/info/toubiaozhinang" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">招投标指南</h2>
          </div>
          <div class="con">
            <div class="g-pb-5 g-mt-10 g-mlr-82">
			   <img src="/images/ads/left_1.gif" width="200" height="67">
			</div>
            <ul class="g-list-txt g-list-dot g-mb-10">
<?php if(!empty($toubiaozhinang_list)):?>
	<?php foreach($toubiaozhinang_list as $item):?>
				<li>
					<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
				</li>
	<?php endforeach;?>
<?php endif;?>
            </ul>
          </div>
        </div>
      </div>
      <div class="g-w-430 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar g-box-t"><a class="g-c-99 g-bi-n" title="" href="/info/nizaijian" target="_blank" recid="800" rec="">更多</a><a class="g-c-66" title="" href="/info/nizaijian" target="_blank" recid="804" rec=""><span style="color:#ff0000;font-weight:bold;">更多商机先知先觉</span></a>
            <h2 class="cur" title="">拟在建项目</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-10 g-mlr-5">
               <ul> 
	
<?php if(!empty($nizaijian_list)):?>
	<?php foreach($nizaijian_list as $item):?>
					<li class="g-h-24 g-lh-24 g-fz-14">
						<span class="g-fz-12 g-pl-10 g-c-99 g-f-r"><?=$item['ctime'];?></span>
						<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
					</li>
	<?php endforeach;?>
<?php endif;?>
             </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
        
        <div class="g-ad-310-42"><a href="#" target="_blank"><img border="0" name="g_AsImageG0133_name" src="/images/ads/201202221518042001M95H9.gif" width="308" height="40"> </a></div>
        <div class="g-ad-310-42"><a href="/chinachips/service_index.html" target="_blank"><img border="0" name="g_AsImageG0134_name" src="/images/ads/20120222151854205XUFUJ6.gif" width="308" height="40"> </a></div>
        <div class="g-box-g">
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="/info/zhanghui" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">会展信息</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-5">
              <ul>
<?php if(!empty($zhanghui_list)):?>
	<?php foreach($zhanghui_list as $item):?>
				<li>
					<a href="/info/<?=$item['id'];?>.html" target="_blank" title="<?=$item['title'];?>"><?=$item['title'];?></a>
				</li>
	<?php endforeach;?>
<?php endif;?>
            </ul>
            </div>
          </div>
        </div>
      </div>
	</div>
	</div>
    <div class="g-mh-20">
	  <div class="g-b-dd g-p-10 g-lh-22 link g-c-99" style="border-top:1px solid #c8c8c8;">
<?php if(isset($this->site_info) && !empty($this->site_info['links'])):?>
		<?=$this->site_info['links'];?>
<?php else:?>
		<p class="link_p">
			<strong class="link_s">友情连接:</strong>
			<a href="http://www.qiugonglue.com" target="_blank">求攻略</a>
			<span class="g-f-l">I</span>
			<a href="http://www.tyncg.org/" target="_blank">中国太阳能采购网</a>
			<span class="g-f-l">I</span>
			<a href="http://www.hnmec.org" target="_blank">华能物质招标网</a>
			<span class="g-f-l">I</span>
			<a href="http://www.hnmec.org" target="_blank">中电投招标网</a>
			<span class="g-f-l">I</span>
			<a href="http://www.ztbw.org/" target="_blank"></a>
		</p>
<?php endif;?>
      </div>
    </div>
</div>
<script src="/assets/noseajs/info.js"></script>
<script>
/*
seajs.use('/assets/js/router.js',function(router){
	router.load('info');
});
 */
</script>
