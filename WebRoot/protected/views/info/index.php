<div class="g-mh-20">
	<div class="g-ad-990-70 g-ta-c g-mb-10 g-b-dd">
		<?=ad_show($this->site_info['ad'], 'ad-banner', '990px');?>
	</div>
</div>
<div class="g-mh-20 g-pb-10">
    <div class="g-cf">
      <div class="g-w-220 g-f-l g-mh-20">
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
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
        <div class="g-ad-440-189">
          <object id="FlashIDName" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="438" align="middle" height="187">
            <param name="movie" value="http://www.hqewimg.com/file/ASFile/Flash/stock/ASInfoPlayer.swf?adHeight=187&amp;adWidth=438&amp;PicNameList=http://www.hqewimg.com/File/ASFile/G01/20120503151152693H54L4M.SWF|http://www.hqewimg.com/File/ASFile/G01/20120530134235825EHMJJA.SWF|http://www.hqewimg.com/File/ASFile/G01/20120523154245791DQJQTB.SWF|http://www.hqewimg.com/File/ASFile/G01/201202231104046046YYTO7.SWF&amp;urlList=">
            <param name="quality" value="high">
            <param name="bgcolor" value="#ffffff">
            <param name="wmode" value="transparent">
            <param name="allowScriptAccess" value="always">
            <param name="FlashVars" value="adHeight=187&amp;adWidth=438&amp;FlashNameList=http://www.hqewimg.com/File/ASFile/G01/20120503151152693H54L4M.SWF|http://www.hqewimg.com/File/ASFile/G01/20120530134235825EHMJJA.SWF|http://www.hqewimg.com/File/ASFile/G01/20120523154245791DQJQTB.SWF|http://www.hqewimg.com/File/ASFile/G01/201202231104046046YYTO7.SWF&amp;urlList=">
            <embed width="438" height="187" align="middle" src="http://www.hqewimg.com/file/ASFile/Flash/stock/ASInfoPlayer.swf?adHeight=187&amp;adWidth=438&amp;PicNameList=http://www.hqewimg.com/File/ASFile/G01/20120503151152693H54L4M.SWF|http://www.hqewimg.com/File/ASFile/G01/20120530134235825EHMJJA.SWF|http://www.hqewimg.com/File/ASFile/G01/20120523154245791DQJQTB.SWF|http://www.hqewimg.com/File/ASFile/G01/201202231104046046YYTO7.SWF&amp;urlList=" flashvars="adHeight=187&amp;adWidth=438&amp;FlashNameList=http://www.hqewimg.com/File/ASFile/G01/20120503151152693H54L4M.SWF|http://www.hqewimg.com/File/ASFile/G01/20120530134235825EHMJJA.SWF|http://www.hqewimg.com/File/ASFile/G01/20120523154245791DQJQTB.SWF|http://www.hqewimg.com/File/ASFile/G01/201202231104046046YYTO7.SWF&amp;urlList=" name="Flash_Net" quality="high" bgcolor="#ffffff" allowscriptaccess="always" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
          </object>
        </div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
        <div class="g-ad-310-70">
        <img src="/images/ads/tese.gif" width="308" height="68">        </div>
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
      <div class="g-w-220 g-f-l g-mh-20">
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
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
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
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="/user/register" target="_blank" recid="800" rec="">我要成为会员</a>
            <h2 class="cur" title="">会员中标榜</h2>
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
      <div class="g-w-670 g-f-l g-mh-20">
		<div class="g-ad-670-70">
			<?=ad_show($this->site_info['ad'], 'ad-3', '668px');?>
		</div>
      </div>
      <div class="g-w-310 g-f-l g-mh-20 g-ml-10">
		
		<div class="g-ad-310-70">
			<?=ad_show($this->site_info['ad'], 'ad-4', '308px');?>
			</div>
      </div>
    </div>
    <div class="g-cf">
      <div class="g-w-220 g-f-l g-mh-20">
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
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
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
                <li>华东   山东 | 安徽 | 上海 | 江苏 | 浙江 | 福建 | 江西</li>
                <li>华中  【河南】【湖北】【湖南】</li>
                <li>华南  【广东】【广西】【海南】</li>
                <li>西南  【云南】【贵州】【四川】【重庆】【西藏】</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="g-cf">
      <div class="g-w-220 g-f-l g-mh-20">
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
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
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
        
        <div class="g-ad-310-42"><a href="#" target="_blank"><img border="0" name="g_AsImageG0133_name" src="/images/ads/201202221518042201M95H9.gif" width="308" height="40"> </a></div>
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

<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('info');
});
</script>
