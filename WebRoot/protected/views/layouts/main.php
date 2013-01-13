<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<title><?=$this->title;?><?=$this->site_info['title'];?>  <?=$this->site_info['seo_title'];?></title>
	<?=$this->site_info['head_meta'];?>
	<meta name="description" content="<?=$this->site_info['description'];?>" />
	<meta name="keywords" content="<?=$this->site_info['seo_keyword'];?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" />
	<script src="/assets/noseajs/jquery-1.8.3.min.js"></script>
	<script src="/assets/noseajs/jquery.validate.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/libs/seajs/2.0.0/sea.js"></script>
</head>
<body>
<DIV class="g-mh-20">
	<DIV class="g-top">
		<UL class="g-cf g-w-990 g-mlr-a">
			<LI class="right"><a onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.unionbidding.com');" href="#"><font  color="#666666">设为首页</font></a></LI>
			<LI class="right"><a href="#" onClick="javascript:window.external.AddFavorite('http://www.unionbidding.com','<?=$this->site_info['name'];?>')" title="<?=$this->site_info['name'];?>"><font  color="#666666">收藏本站</font></a></LI>
			<!--LI class="right en g-p-r"><A href="#">邮件订阅</A></LI-->
			<LI class="right g-bi-n"><A href="/page/access.html">企业入网</A> </LI>
			<LI class="left g-c-66 en"><?=$this->site_info['name'];?>-中国权威招标与采购信息服务商 </LI>
			<LI class="left g-drop"><A class="menu g-c-66" href="javascript:;"><b>中网高科旗下网站</b></A>
				<DIV class="list sub g-d-n">
					<P><A title="中国石化采购网" href="http://#" target="_blank">中国石化采购网</A></P>
					<P><A title="中国电力设备采购网" href="http://#/" target="_blank">中国电力设备采购网</A></P>
					<P><A title="中国水利工程招标网" href="http://#/" target="_blank">中国水利工程招标网</A></P>
				</DIV>
			</LI>
			<LI class="left g-bi-n">
			<?php if(Yii::app()->user->isGuest):?>
				<DIV id="login" class="g-c-66">请<A class="g-c-c0 " href="/user/login">登录</A>，<A class="g-c-66 g-ml-5" href="/user/register">免费注册</A></DIV>
			<?php else:?>
				<a href="/user/home"><?=Yii::app()->user->name;?></a> | <a href="/user/logout">退出</a>
				<DIV id=login_tip class="g-notice g-d-n"><SPAN>登录</SPAN><I></I><B></B></DIV>
			<?php endif;?>
			</LI>
		</UL>
	</DIV>
</DIV>
<DIV class="g-w-990 g-mlr-a">
	<DIV class="g-mh-20">
		<DIV id="head" class="g-cf g-mb-10  g-p-r">
			<div style="width:220px;height:80px;float:left;">
				<A  title="<?=$this->site_info['name'];?>" href="/">
					<IMG width=200px height="75px" id="topLogo" src="http://www.unionbidding.com<?=$this->site_info['logo']; ?>">
				</A>
			</div>
			<DIV class=g-search>
				<UL id=search_tabs class="g-cf g-p-r">
					<LI class="en cur" value=1><A class=g-c-66>全站搜索 </A></LI>
				</UL>
				<form id=search_form action="/search/" method="GET" >
					<UL class=g-cf>
						<LI class="g-f-l g-p-r text">
							<INPUT style="WIDTH: 380px" id=search_keywords class="g-f-l " placeholder="请输入您要查询的关键字..." name="keyword" maxLength=30 value="<?=isset($_GET['keyword']) ? $_GET['keyword']:'';?>">
							<DIV id=search_tip class="g-notice g-d-n">请输入您要查询的关键字...<I></I></DIV>
						</LI>
						<LI class="g-f-l submit">
							<INPUT hideFocus id=search_submit type=submit style="overflow:hidden;"> 
						</LI>
					</UL>
				</form>
			</DIV>
			<div class="gaoji"><a href="">高级搜索</a><br/><a href="">使用帮助</a></div>
			<div class="buwei">
				<ul>
					<li>中华人民共和国发改委</li>
					<li>中华人民共和国建设部</li>
					<li>中华人民共和国财政部</li>
					<li>中华人民共和国商务部</li>
				</ul>
			</div>
		</DIV>
		<DIV class="g-p-r g-menu ">
			<UL class=g-cf>
				<LI class="first cur fcur"><A class=g-c-66 href="/">首页<?=$this->current_nav;?></A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'zhaobiao') ? 'cur':'';?>"><A class=g-c-66 href="/info/zhaobiao">招标信息 </A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'nizaijian') ? 'cur':'';?>"><A class=g-c-66 href="/info/nizaijian">拟在建项目</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'zhongbiao') ? 'cur':'';?>"><A class=g-c-66 href="/info/zhongbiao">中标公示</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'qiugou') ? 'cur':'';?>"><A class=g-c-66 href="/info/qiugou">求购信息</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'gongying') ? 'cur':'';?>"><A class=g-c-66 href="/info/gongying">供应信息</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'dongtai') ? 'cur':'';?>"><A class=g-c-66 href="/info/dongtai">行业动态</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'fagui') ? 'cur':'';?>"><A class=g-c-66 href="/info/fagui">法规中心</A><B></B> </LI>
				<LI class="<?=($this->current_nav == 'zhaobiao') ? 'cur':'';?>"><A class=g-c-66 href="/page/services"   target=_blank>客服中心</A><B></B> </LI>
				<LI class=g-drop> 全国免费咨询:<span style="font-family:microsoft yahei;">4006-333-959</span></LI>
				<LI class=last></LI>
			</UL>
		</DIV>
	</div>
</Div>
<DIV class="g-w-990 g-mlr-a">
<?php echo $content; ?>
</div>
<DIV class="g-w-990 g-mlr-a clearfix">
		<a href="#" id="return_top" class="back_to_top" style="">回到顶部</a>
	<!-- footer -->
	<div style="width:950px;float:left;border-top:1px solid #ccc;padding:10px 20px 20px 20px;TEXT-ALIGN:CENTER;margin-top:20px;"> 
		<div style="width:950px;line-height:30px;height:30px;margin-bottom:6px;">
			<a href="/page/about.html" target="_blank">关于我们</a> 
			| <a href="/page/contact.html" target="_blank">联系我们</a> 
			| <a href="/page/access.html" target="_blank">供应商入网办法</a> 
		</div>
		<div style="width:950px;">
			<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td width="5%" align="center" valign="middle"><a href="http://www.miibeian.gov.cn/" target=_blank><img  style="float:left; " alt=经营性网站备案信息 src="/images/icon01.gif" border=0></a>
					</td>
					<td width="11%" align="left" valign="middle">
						<span><a href="http://www.miibeian.gov.cn/" target=_blank>经营性网站备案信息</a></span>
					</td>
					<td width="5%" align="center" valign="middle">
						<A href="http://net.china.com.cn/index.htm" target=_blank>
							<IMG class=left alt=中国互联网违法和不良信息举报中心 src="/images/94_04a33883_0fb6_4c9c_860b_449af7934ab9_0.gif" border=0>
						</A>
					</td>
					<td width="9%" align="left" valign="middle">
						<span><a href="http://net.china.com.cn/index.htm" target=_blank>中国互联网违法和不良信息举报中心</a></span>
					</td>
					<td width="6%" align="center" valign="middle">
						<A href="http://www.bjjubao.org/index.htm" target=_blank><IMG class=left alt=北京互联网违和不良信息举报热线 src="/images/94_ca1710ed_3dd2_4b9b_b3ea_7709eee98cbf_0.gif" border=0></A>
					</td>
					<td width="8%" align="left" valign="middle">
						<span><a href="http://www.bjjubao.org/index.htm" target=_blank>北京互联网违法和不良信息举报热线</a></span>
					</td>
					<td width="6%" align="center" valign="middle">
						<A href="http://www.netbj.org.cn/" target=_blank><IMG class=left alt=北京网络行业协会 src="/images/icon03.gif" border=0></A>
					</td>
					<td width="8%" align="left" valign="middle">
						<span><a href="http://www.netbj.org.cn/" target=_blank>北京网络<br>行业协会</a></span>
					</td>
					<td width="6%" align="center" valign="middle"><A href="http://www.bj.cyberpolice.cn/index.htm" target=_blank><IMG class=left alt=网络110报警服务 src="/images/icon04.gif" border=0></A></td>
					<td width="8%" align="left" valign="middle"><span><a href="http://www.bj.cyberpolice.cn/index.htm" target=_blank>网络 110<br>
			报警服务</a></span></td>
					<td width="6%" align="center" valign="middle"><A href="http://www.ctws.com.cn/" target=_blank><IMG class=left alt=无线互联网业自律同盟 src="/images/icon05.gif" border=0></A></td>
					<td width="8%" align="left" valign="middle"><span><a href="http://www.ctws.com.cn/" target=_blank>无线互联网业自律同盟</a></span> </td>
					<td width="5%" align="center" valign="middle"><A href="http://www.itrust.org.cn" target=_blank><IMG class=left alt=中国互联网协会网络诚信推进联盟 src="/images/icon06.gif" border=0></A></td>
					<td width="9%" align="left" valign="middle"><span><a href="http://www.itrust.org.cn" target=_blank>中国互联网协会网络诚信推进联盟</a></span> </td>
				</tr>
			</table>
		</div>
<?php if(isset($this->site_info) && !empty($this->site_info['footer_html'])):?>
	<?=$this->site_info['footer_html'];?>
<?php else:?>
		<p style="text-align:center">京ICP备09106887号</p>
	</div>
<?php endif;?>
<?=$this->site_info['tongji_script'];?>
</div>

<!--- qq online--->
<div id="floatTools" class="float0831">
	<div class="floatL">
		<a id="aFloatTools_Show" class="btnOpen" style="display:none;" href="javascript:void(0);" onclick="javascript:jq('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){jq('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.021bbs.com.cn'); });jq('#aFloatTools_Show').attr('style','display:none');jq('#aFloatTools_Hide').attr('style','display:block');return false;" title="查看在线客服">展开</a>
		<a id="aFloatTools_Hide" class="btnCtn" href="javascript:void(0);" onclick="javascript:jq('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ jq('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.021bbs.com.cn'); });jq('#aFloatTools_Show').attr('style','display:block');jq('#aFloatTools_Hide').attr('style','display:none');return false;" title="关闭在线客服">收缩</a>
	</div>
	<div class="floatR" id="divFloatToolsView">
		<div class="tp"></div>
			<div class="cn">
				<ul>
					<li class="top"><h3 class="titZx">&nbsp;</h3></li>
					<li>
						<span class="icoZx" title="咨询客服">咨询客服</span>
					</li>
					<li>
						<a class="icoTc" href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=50639503&site=qq&menu=yes', '_blank', 'heig    ht=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" title="咨询客服">入网咨询</a>
					</li>
					<li>
						<a class="icoTc" href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=3795937&site=qq&menu=yes', '_blank', 'heig    ht=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" title="咨询客服">入网咨询2</a>
					</li>
					<li>
						<a class="icoTc" href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=2858216996&site=qq&menu=yes', '_blank', 'heig    ht=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" title="业务合作">业务合作</a>
					</li>
					<li>
						<span class="icoFf" title="VIP通道">VIP通道</span>
					</li>
					<li class="bot">
						<a class="icoTc" href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=1055939988&site=qq&menu=yes', '_blank', 'heig    ht=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" title="Vip客服">VIP用户客服</a>
					</li>
				</ul>
				<!--ul class="webZx">
					<li class="webZx-in">
						<a style="float: left;" href="javascript:void(0);" onclick="javascript:window.open('http://www.unionbidding.com/page/access.html', '_blank', '');" title="网页咨询"><img src="http://www.manyou88.com/source/plugin/blood_kefu/images/right_float_web.png" alt="网页咨询"></a>
					</li>
				</ul-->
			<ul>
				<li><h3 class="titDh">电话咨询</h3></li>
				<li class="bot">
					<span class="icoTl" title="客服电话：4006-333-959">4006-333-959</span>
				</li>
			</ul>
		</div>
	</div>
</div>
<!----- end of qq online---->
</body>
</html>
