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
		  <a class="g-c-99 g-bi-n" title="" href="/info/action-topic.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">最新采购信息</h2>
          </div>
          <div class="con">
            
            <ul class="g-list-txt g-list-dot g-mtb-5">
              <li><a title="电视知识100问-5" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=708" target="_blank">电视知识芯片业并购不断中</a> </li>
              <li><a title="全球LTE芯片业并购不断中国格局未定" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=702" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  <li><a title="电视知识100问-5" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=708" target="_blank">电视知识100问-5中国格局未定</a> </li>
              <li><a title="全球LTE芯片业并购不断中国格局未定" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=702" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  <li><a title="电视知识100问-5" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=708" target="_blank">电视知识芯片业并购不断中国格</a> </li>
              <li><a title="全球LTE芯片业并购不断中国格局未定" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=702" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
             <li><a title="电视知识100问-5" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=708" target="_blank">电视知识芯片业并购不断中</a> </li>
              <li><a title="全球LTE芯片业并购不断中国格局未定" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=702" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  <li><a title="电视知识100问-5" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=708" target="_blank">电视知识100问-5中国格局未定</a> </li>
              <li><a title="全球LTE芯片业并购不断中国格局未定" href="http://bbs.csau.com/forum.php?mod=viewthread&amp;tid=702" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
            </ul>
            
          </div>
        </div>
		<div class="g-box-g1 g-mtb-10">
			<?=ad_show($this->site_info['ad'], 'ad-1', '218px');?>
		</div>
		<div class="g-box-g">
          <div class="bar">
		  <a class="g-c-99 g-bi-n" title="" href="/info/action-topic.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">优秀供应商</h2>
          </div>
          <div class="con">
            <ul class="g-list-txt g-list-dot g-mtb-5">
			<li><a href="/info/219" target="_blank" title="青岛市开元电气电站设备有限责任公司">青岛市开元电气电站设备有限责任公司</a></li>
<li><a href="/info/218" target="_blank" title="山东凌宝电气有限公司">山东凌宝电气有限公司</a></li>
<li><a href="/info/217" target="_blank" title="成都化工研究设计院水处理技术开发中心">成都化工研究设计院水处理技术开发中心</a></li>
<li><a href="/info/216" target="_blank" title="天津市空气压缩机有限公司">天津市空气压缩机有限公司</a></li>
<li><a href="/info/215" target="_blank" title=" 江苏南天絮凝剂有限公司"> 江苏南天絮凝剂有限公司</a></li>
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
			  <ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16730" target="_blank" title="南京华德仓储设备制造有限公司">南京华德仓储设备制造有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16729" target="_blank" title="河南新开电气集团股份有限公司">河南新开电气集团股份有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16728" target="_blank" title="上海康建防护屏蔽有限公司">上海康建防护屏蔽有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16727" target="_blank" title="开封市盛达水表有限公司">开封市盛达水表有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16726" target="_blank" title="上海施威焊接产业有限公司">上海施威焊接产业有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16725" target="_blank" title="上海阀门二厂有限公司">上海阀门二厂有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16724" target="_blank" title="宁波水表股份有限公司">宁波水表股份有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16723" target="_blank" title="河南省东方（集团）防腐有限公">河南省东方（集团）防腐有限公</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16722" target="_blank" title="江苏元升太阳能集团有限公司">江苏元升太阳能集团有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
<ul class="g-h-22 g-lh-22">
                  <li class="g-w-20 g-fw-b"><span class="red">恭贺:</span></li>
				  <li class="g-w-200"><a href="/info/16721" target="_blank" title="河北三环太阳能有限公司">河北三环太阳能有限公司</a></li>
                  <li class="g-w-30"><span class="red">中标</span></li>
                </ul>
	
              </div>
            </div>
            
          </div>
        </div>
        
		<div class="g-ad-310-74">
			<?=ad_show($this->site_info['ad'], 'ad-2', '310px');?>
		</div>
		<div class="g-box-g activity">
          <div class="bar"><a class="g-bi-n" href="/activity/show.html" target="_blank">更多</a>
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
		  <a class="g-c-99 g-bi-n" title="" href="/info/action-topic.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">最新供应信息</h2>
          </div>
          <div class="con">
            <ul class="g-list-txt g-list-dot g-mtb-5">
              	<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  				<li><a title="电视知识100问-5" href="" target="_blank">电视知识芯片业并购不断中国格</a> </li>
              	<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
             	<li><a title="电视知识100问-5" href="" target="_blank">电视知识芯片业并购不断中</a> </li>
              	<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
 			 	<li><a title="电视知识100问-5" href="" target="_blank">电视知识100问-5中国格局未定</a> </li>
              	<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  				<li><a title="电视知识100问-5" href="" target="_blank">电视知识芯片业并购不断中国格</a> </li>
              	<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
  				<li><a title="全球LTE芯片业并购不断中国格局未定" href="" target="_blank">全球LTE芯片业并购不断中国格局未定</a> </li>
            </ul>
          </div>
        </div>
		<div class="g-box-g1 g-mt-10"><img border="0" src="/images/ads/goca.jpg" width="218" height="136"></div>
      </div>
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar g-box-t"><a class="g-bi-n" href="/activity/show.html" target="_blank">更多</a><a class="g-c-66" title="" href="/info-c12.html" target="_blank" recid="804" rec=""><span style="color:#ff0000;font-weight:bold;">如何提升中标几率？</span></a>
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
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="/job/search.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">行业动态</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-5">
              <ul>
                
                <li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/12664" target="_blank" title="多地提前遭遇“电荒” 煤价创两年半新高">多地提前遭遇“电荒” 煤价创两年半新高</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/12662" target="_blank" title="业界专家：缓解电荒需调整电力结构">业界专家：缓解电荒需调整电力结构</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/8588" target="_blank" title="中国2010年新增风电装机逾1300万千瓦">中国2010年新增风电装机逾1300万千瓦</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/8587" target="_blank" title="中国大规模建设“智能电网”总投资将超4万亿元">中国大规模建设“智能电网”总投资将超4万亿元</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/8586" target="_blank" title="“十二五”西藏将建成四大水电站">“十二五”西藏将建成四大水电站</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/6646" target="_blank" title="2010年全国十佳集采机构获奖单位">2010年全国十佳集采机构获奖单位</a></li>
<li><span class="g-fz-12 g-pl-10 g-c-99 g-f-r">06-11</span><a href="/info/6645" target="_blank" title="联合体中标 采购合同应“联合”签订">联合体中标 采购合同应“联合”签订</a></li>

  
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
                <li>华北  【北京】【天津】【河北】【山西】【内蒙古】</li>
                <li>东北  【吉林】【辽宁】【黑龙江】</li>
                <li>西北  【陕西】【甘肃】【宁夏】【青海】【新疆】</li>
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
		  <a class="g-c-99 g-bi-n" title="" href="/info/action-topic.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">招投标指南</h2>
          </div>
          <div class="con">
            <div class="g-pb-5 g-mt-10 g-mlr-82">
            <img src="/images/ads/left_1.gif" width="200" height="67">            </div>
            <ul class="g-list-txt g-list-dot g-mb-10">
			<li><a href="/info/8596" target="_blank" title="招标人员应注意的20个细节问题">招标人员应注意的20个细节问题</a></li>
<li><a href="/info/8595" target="_blank" title="投标人八个最应该知道的问题">投标人八个最应该知道的问题</a></li>
<li><a href="/info/8594" target="_blank" title="参与招标的5大关键技巧">参与招标的5大关键技巧</a></li>
<li><a href="/info/8593" target="_blank" title="招标项目成功的要素">招标项目成功的要素</a></li>
<li><a href="/info/8592" target="_blank" title="招标投标中的哪些行为属于不正当竞争？">招标投标中的哪些行为属于不正当竞争？</a></li>
<li><a href="/info/8591" target="_blank" title="哪些投标文件会按废标处理？">哪些投标文件会按废标处理？</a></li>
<li><a href="/info/8590" target="_blank" title="供应商质疑须把握好“四个环节”">供应商质疑须把握好“四个环节”</a></li>
<li><a href="/info/8589" target="_blank" title="评审专家管理中的问题及其对策">评审专家管理中的问题及其对策</a></li>
<li><a href="/info/6426" target="_blank" title="竞争谈判流程图">竞争谈判流程图</a></li>
<li><a href="/info/6425" target="_blank" title="邀请招标流程图">邀请招标流程图</a></li>
<li><a href="/info/6424" target="_blank" title="公开招标流程图">公开招标流程图</a></li>
<li><a href="/info/5733" target="_blank" title="如何合理设置和科学评审“技术性指标”">如何合理设置和科学评审“技术性指标”</a></li>

            </ul>
            
          </div>
        </div>
      </div>
      <div class="g-w-440 g-f-l g-mh-20 g-ml-10">
        <div class="g-box-g">
          <div class="bar g-box-t"><a class="g-c-99 g-bi-n" title="" href="http://bbs.hqew.com/" target="_blank" recid="800" rec="">更多</a><a class="g-c-66" title="" href="http://bbs.hqew.com/forumdisplay.php?fid=4" target="_blank" recid="804" rec=""><span style="color:#ff0000;font-weight:bold;">更多商机先知先觉</span></a>
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
        
        <div class="g-ad-310-42"><a href="http://im.hqew.com/" target="_blank"><img border="0" name="g_AsImageG0133_name" src="/images/ads/201202221518042201M95H9.gif" width="308" height="40"> </a></div>
        <div class="g-ad-310-42"><a href="/chinachips/service_index.html" target="_blank"><img border="0" name="g_AsImageG0134_name" src="/images/ads/20120222151854205XUFUJ6.gif" width="308" height="40"> </a></div>
        <div class="g-box-g">
          <div class="bar"><a class="g-c-99 g-bi-n" title="" href="/job/search.html" target="_blank" recid="800" rec="">更多</a>
            <h2 class="cur" title="">会展信息</h2>
          </div>
          <div class="con">
            <div class="g-list-txt g-mtb-5">
              <ul>
			  <li><a href="/info/8585" target="_blank" title="2011年国际太阳能及光伏会议暨展览会">2011年国际太阳能及光伏会议暨展览会</a></li>
<li><a href="/info/8584" target="_blank" title="2011第77届中国电子展（春季展--深圳）">2011第77届中国电子展（春季展--深圳）</a></li>
<li><a href="/info/8583" target="_blank" title="2011第十九届中国国际服装服饰博览会">2011第十九届中国国际服装服饰博览会</a></li>
<li><a href="/info/8582" target="_blank" title="2011第二十二届国际制冷、空调、供暖、通风及食品冷冻加工展览会">2011第二十二届国际制冷、空调、供暖、通风及食品冷冻加工展览会</a></li>
<li><a href="/info/8581" target="_blank" title="2011第十九届中国国际五金博览会">2011第十九届中国国际五金博览会</a></li>
<li><a href="/info/8580" target="_blank" title="2011第十一届中国厦门国际石材展览会亚洲最大的石材专业展览会">2011第十一届中国厦门国际石材展览会亚洲最大的石材专业展览会</a></li>
<li><a href="/info/5964" target="_blank" title="第十一届中国(北京)国际工程机械、建材机械及矿山机械展览与技术交流会">第十一届中国(北京)国际工程机械、建材机械及矿山机械展览与技术交流会</a></li>
<li><a href="/info/299" target="_blank" title="2011中国（北京）国际涂料博览会">2011中国（北京）国际涂料博览会</a></li>
<li><a href="/info/298" target="_blank" title="2011中国热泵展">2011中国热泵展</a></li>
<li><a href="/info/296" target="_blank" title="第十一届中国国际电力电工高低压电器展览会">第十一届中国国际电力电工高低压电器展览会</a></li>
<li><a href="/info/289" target="_blank" title="2011中国（重庆）国际软件及信息服务展览会">2011中国（重庆）国际软件及信息服务展览会</a></li>

			 </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="g-mh-20">
	  <div class="g-b-dd g-p-10 g-lh-22 link g-c-99">
<?php if(isset($this->site_info) && !empty($this->site_info['links'])):?>
	<?=$this->site_info['links'];?>
<?php else:?>
        <p class="link_p"><strong class="link_s">成员网站</strong> <a title="华强集团" href="http://www.szhq.com/" rel="nofollow" target="_blank">华强集团</a><span class="g-f-l">I</span><a title="华强实业股份" href="http://www.szhq0062.com/" rel="nofollow" target="_blank">华强实业股份</a><span class="g-f-l">I</span><a title="中华车网" href="http://www.hqgps.com/" rel="nofollow" target="_blank">中华车网</a><span class="g-f-l">I</span><a title="华强新城市" href="http://www.hqnewcity.com/" rel="nofollow" target="_blank">华强新城市</a><span class="g-f-l">I</span><a title="华强物业" href="http://www.hqwy.com.cn/" rel="nofollow" target="_blank">华强物业</a><span class="g-f-l">I</span><a title="方特主题公园" href="http://www.fantawild.com/" rel="nofollow" target="_blank">方特主题公园</a><span class="g-f-l">I</span><a title="方特网" href="http://www.fangte.com/" rel="nofollow" target="_blank">方特网</a><span class="g-f-l">I</span><a title="华强旅游城" href="http://www.hqtourcity.com/" rel="nofollow" target="_blank">华强旅游城</a><span class="g-f-l">I</span><a title="华强供应链" href="http://www.hqscm.com/" rel="nofollow" target="_blank">华强供应链</a><span class="g-f-l">I</span><a title="LED交易中心" href="/topic/LED/led.aspx" rel="nofollow" target="_blank">LED交易中心</a><span class="g-f-l">I</span><a title="华强商城" href="http://www.hqbuy.com/" rel="nofollow" target="_blank">华强商城</a><span class="g-f-l">I</span><a title="半导体应用联盟" href="http://www.csau.com/" rel="nofollow" target="_blank">半导体应用联盟</a><span class="g-f-l">I</span><a title="华强电子世界" href="http://www.hq-mart.com/Index.html" rel="nofollow" target="_blank">华强电子世界</a> </p>
		<p class="link_p"><strong class="link_s">友情链接</strong> <a title="21IC电子网" href="http://www.21ic.com/" target="_blank" p="0">21IC电子网</a><span class="g-f-l">I</span><a title="中国单片机培训网" href="http://www.mcuchina.cn/" target="_blank" p="0">中国单片机培训网</a><span class="g-f-l">I</span><a title="电子产品世界网" href="http://www.eepw.com.cn/" target="_blank" p="0">电子产品世界网</a><span class="g-f-l">I</span><a title="中国照明网" href="http://www.lightingchina.com/" target="_blank" p="0">中国照明网</a><span class="g-f-l">I</span><a title="电子工程师之家" href="http://www.eehome.cn/" target="_blank" p="0">电子工程师之家</a><span class="g-f-l">I</span><a title="EETOP电子网" href="http://www.eetop.cn/" target="_blank" p="0">EETOP电子网</a><span class="g-f-l">I</span><a title="光电新闻网" href="http://www.ofweek.com/" target="_blank" p="0">光电新闻网</a><span class="g-f-l">I</span><a title="电子电路网" href="http://www.dziuu.com/" target="_blank" p="0">电子电路网</a><span class="g-f-l">I</span><a title="老古开发网" href="http://www.laogu.com/" target="_blank" p="0">老古开发网</a><span class="g-f-l">I</span><a title="工业电器网" href="http://www.cnelc.com/" target="_blank" p="0">工业电器网</a><span class="g-f-l">I</span><a title="中国电子企业协会" href="http://www.ceea.org.cn/" target="_blank" p="0">中国电子企业协会</a><span class="g-f-l">I</span><a title="世纪电源网" href="http://www.21dianyuan.com/" target="_blank" p="0">世纪电源网</a><span class="g-f-l">I</span><a title="与非网" href="http://www.eefocus.com/" target="_blank" p="0">与非网</a><span class="g-f-l">I</span><a title="LED在线" href="http://www.ledinside.cn/" target="_blank" p="0">LED在线</a><span class="g-f-l">I</span><a title="LED论坛" href="http://ledbbs.hqew.com/" target="_blank" p="0">LED论坛</a><span class="g-f-l">I</span><a title="通信产业网" href="http://www.ccidcom.com/" target="_blank" p="0">通信产业网</a><span class="g-f-l">I</span><a title="中华液晶网" href="http://www.fpdisplay.com/" target="_blank" p="0">中华液晶网</a><span class="g-f-l">I</span><a title="鼎好电子网" href="http://www.icmade.com/IC/" target="_blank" p="0">鼎好电子网</a><span class="g-f-l">I</span><a title="广东IC网" href="http://www.gdicw.com/" target="_blank" p="0">广东IC网</a><span class="g-f-l">I</span><a title="新电子" href="http://www.memchina.cn/" target="_blank" p="0">新电子</a><span class="g-f-l">I</span><a title="行业网" href="http://www.hangye5.com/" target="_blank" p="0">行业网</a><span class="g-f-l">I</span><a title="中国安防网" href="http://www.c-ps.net/" target="_blank" p="0">中国安防网</a><span class="g-f-l">I</span><a title="电子展" href="http://www.elexcon.com/" target="_blank" p="0">电子展</a><span class="g-f-l">I</span><a title="电源网" href="http://www.dianyuan.com/" target="_blank" p="0">电源网</a><span class="g-f-l">I</span><a title="电子创新网" href="http://www.eetrend.com/" target="_blank" p="0">电子创新网</a><span class="g-f-l">I</span><a title="电子站点联盟" href="http://www.hq300.com/" rel="nofollow" target="_blank" p="1">电子站点联盟</a><span class="g-f-l">I</span><a title="大比特资讯网" href="http://www.big-bit.com/" rel="nofollow" target="_blank" p="1">大比特资讯网</a><span class="g-f-l">I</span><a title="电子贸促会" href="http://www.ccpitecc.com/" target="_blank" p="0">电子贸促会</a><span class="g-f-l">I</span><a title="商城" href="http://www.zol.com/" target="_blank" p="0">商城</a><span class="g-f-l">I</span><a title="CPS中安网" href="http://www.cps.com.cn/" target="_blank" p="0">CPS中安网</a><span class="g-f-l">I</span><a title="全球IC采购网" href="http://www.qic.com.cn/" target="_blank" p="0">全球IC采购网</a> </p>
<?php endif;?>
      </div>
    </div>
</div>

<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('info');
});
</script>
