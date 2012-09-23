<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
	<title>联合招标网-招标|招标网|招标信息|招标公告|投标|招标采购|中国权威招标采购信息门户网站</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />
	<meta name="description" content="联合招标网致力于为企业提供招标、采购、拟在建项目信息及网上招标采购等一系列商务服务。联合招标网是中国招标采购领域的权威资讯和交易网站，为各级政府采购、招标代理机构、招标企业、供应商提供强大的专业招标采购信息查询和相关服务。" />
	<meta name="keywords" content="招标,招标网,招标信息,招标采购,工程招标,政府采购,拟在建项目,招标文件,招标公告,求购信息,行业动态,商机,标讯,销售,标书,电子商务,产品,企业,服务,供应,求购,二手,投标" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/libs/seajs/1.1.0/sea.js"></script>
</head>
<body>
<DIV class="g-mh-20">
	<DIV class="g-top">
		<UL class="g-cf g-w-990 g-mlr-a">
			<LI class="right"><a onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.unionbidding.com');" href="#"><font  color="#666666">设为首页</font></a></LI>
			<LI class="right"><a href="#" onClick="javascript:window.external.AddFavorite('http://www.unionbidding.com','联合招标网')" title="联合招标网"><font  color="#666666">收藏本站</font></a></LI>
			<LI class="right en g-p-r"><A href="#">广告服务</A></LI>
			<LI class="right en g-p-r"><A href="#">邮件订阅</A></LI>
			<LI class="right g-bi-n"><A href="#">企业入网</A> </LI>
			<LI class="left g-c-66 en">联合招标网-中国权威招标与采购信息服务商 </LI>
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
			<div style="width:220px;float:left;">
				<A class="g-f-l" title="联合招标网(www.unionbidding.com)" href="/">
					<IMG width=200 id="topLogo" src="/images/logo.png">
				</A>
			</div>
			<DIV class=g-search>
				<UL id=search_tabs class="g-cf g-p-r">
					<LI class="en cur" value=1><A class=g-c-66>全站搜索 </A></LI>
				</UL>
				<form id=search_form action="/search/" method="GET" >
					<UL class=g-cf>
						<LI class="g-f-l g-p-r text">
							<INPUT style="WIDTH: 380px" id=search_keywords class="g-f-l " placeholder="请输入您要查询的关键字..." name="keyword" maxLength=30 value="<?=$_GET['keyword'];?>">
							<DIV id=search_tip class="g-notice g-d-n">请输入您要查询的关键字...<I></I></DIV>
						</LI>
						<LI class="g-f-l submit">
							<INPUT hideFocus id=search_submit type=submit style="overflow:hidden;"> 
						</LI>
					</UL>
					<INPUT id=search_type value=1 type=hidden>
					<INPUT id=select_type type=hidden>
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
				<LI class="first cur fcur"><A class=g-c-66 href="/">首页<?=$current_nav;?></A><B></B> </LI>
				<LI class="<?=($current_nav == 'zhaobiao') ? 'cur':'';?>"><A class=g-c-66 href="/info/zhaobiao">招标信息 </A><B></B> </LI>
				<LI class="<?=($current_nav == 'nizaijian') ? 'cur':'';?>"><A class=g-c-66 href="/info/nizaijian">拟在建项目</A><B></B> </LI>
				<LI class="<?=($current_nav == 'zhongbiao') ? 'cur':'';?>"><A class=g-c-66 href="/info/zhongbiao">中标公示</A><B></B> </LI>
				<LI class="<?=($current_nav == 'qiugou') ? 'cur':'';?>"><A class=g-c-66 href="/info/qiugou">求购信息</A><B></B> </LI>
				<LI class="<?=($current_nav == 'gongying') ? 'cur':'';?>"><A class=g-c-66 href="/info/gongying">供应信息</A><B></B> </LI>
				<LI class="<?=($current_nav == 'dongtai') ? 'cur':'';?>"><A class=g-c-66 href="/info/dongtai">行业动态</A><B></B> </LI>
				<LI class="<?=($current_nav == 'fagui') ? 'cur':'';?>"><A class=g-c-66 href="/info/fagui">法规中心</A><B></B> </LI>
				<LI class="<?=($current_nav == 'zhaobiao') ? 'cur':'';?>"><A class=g-c-66 href="/page/services"   target=_blank>客服中心</A><B></B> </LI>
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
			<a href="/plus/view.php?aid=10302" target="_blank">关于我们</a> 
			| <a href="/plus/view.php?aid=10303" target="_blank">联系我们</a> 
			| <a href="/plus/view.php?aid=10305" target="_blank">供应商入网办法</a> 
			| <a style="cursor:hand" onClick="this.style.behavior='url(#default#homepage)'; this.setHomePage('www.unionbidding.com');" style="color:#000; font-weight:normal;">设为首页</a> 
			| <a style="cursor:hand"  onclick="window.external.AddFavorite(location.href,document.title);" style="color:#000;font-weight:normal;">加入收藏</a> 
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
		<div style="line-height:22px;margin-top:10px;">Copyright &copy; 2009-2012 (www.unionbidding.com) Inc All Rights Reserved. [中网高科·中国联合招标网] 版权所有 <br/>
				禁止任何单位和个人以任何方式复制或建立镜像 建议使用IE浏览器 1024×768模式浏览本网站<br/>
			 关键词：联合招标网 | 中国联合招标网 | 中网高科招标网 | 中国联合招标采购网<br/>
						 总机：4006-333-959  电话010-52883369  010-52889099 传真010-80537538<br/>
									 京ICP备09106887号<br/>
		</div>
	</div>
</div>
</body>
</html>