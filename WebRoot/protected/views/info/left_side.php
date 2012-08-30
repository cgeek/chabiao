	<div class="g-w-250 g-f-l g-mh-20 g-ml-10">
		<div class="g-box-g">
			<div class="bar">
				<h2>搜索<?=$current_category['name'];?></h2>
			</div>
			<div style="padding:10px;">
				<form name="form2" method="get" action="/search/" target="_blank">
					<input type="hidden" name="cat" value="<?=$current_category['category_id'];?>">
					<input name="keyword" type="text" id="search-keyword" value="" size="26" class="search-keyword" style="width:90px; height:16px ">
					<select name="area" style="width:60px">
						<option value="">全国</option>
						<option value="北京">北京</option>
						<option value="上海">上海</option>
						<option value="天津">天津</option>
						<option value="重庆">重庆</option>
						<option value="河北">河北</option>
						<option value="山西">山西</option>
						<option value="内蒙古">内蒙古</option>
						<option value="辽宁">辽宁</option>
						<option value="吉林">吉林</option>
						<option value="黑龙江">黑龙江</option>
						<option value="江苏">江苏</option>
						<option value="浙江">浙江</option>
						<option value="安徽">安徽</option>
						<option value="福建">福建</option>
						<option value="江西">江西</option>
						<option value="山东">山东</option>
						<option value="河南">河南</option>
						<option value="湖北">湖北</option>
						<option value="湖南">湖南</option>
						<option value="广东">广东</option>
						<option value="广西">广西</option>
						<option value="海南">海南</option>
						<option value="四川">四川</option>
						<option value="贵州">贵州</option>
						<option value="云南">云南</option>
						<option value="西藏">西藏</option>
						<option value="陕西">陕西</option>
						<option value="甘肃">甘肃</option>
						<option value="青海">青海</option>
						<option value="宁夏">宁夏</option>
						<option value="新疆">新疆</option>
					</select>
					<input name="imageField3" type="image" src="/images/ss.gif" width="45" height="20" border="0" align="absmiddle" style="width: 55px;height: 28px;margin-bottom: 10px;">
				</form>
			</div>
		</div>
<!--Hqew一热门资讯-->
		<div class="g-box-g">
			<div class="bar">
				<h2 class="cur">区域导航</h2>
			</div>
			<div class="con">
				<div class="g-list-txt g-mtb-5">
				<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="f_ct">
					<tbody>
					  	<tr>
							<td width="4%" align="center"> </td>
							<td width="16%" align="left"><a href="/search/" target="_blank">全国</a></td>
							<td width="16%" align="left"><a href="/search/?area=北京" title="北京" target="_blank">北京</a></td>
							<td width="16%" align="left"><a href="/search/?area=上海" title="上海" target="_blank">上海</a></td>
							<td width="16%" align="left"><a href="/search/?area=天津" title="天津" target="_blank">天津</a></td>
							<td width="16%" align="left"><a href="/search/?area=重启" title="重庆" target="_blank">重庆</a></td>
							<td width="16%" align="left"><a href="/search/?area=河北" title="河北" target="_blank">河北</a></td>
						</tr>
						<tr>
							<td align="center"> </td>
							<td align="left"><a href="/search/?area=山西" title="山西" target="_blank">山西</a></td>
							<td align="left"><a href="/search/?area=吉林" title="吉林" target="_blank">吉林</a></td>
							<td align="left"><a href="/search/?area=江苏" title="江苏" target="_blank">江苏</a></td>
							<td align="left"><a href="/search/?area=浙江" title="浙江" target="_blank">浙江</a></td>
							<td align="left"><a href="/search/?area=安徽" title="安徽" target="_blank">安徽</a></td>
							<td align="left"><a href="/search/?area=福建" title="福建" target="_blank">福建</a></td>
						</tr>
						<tr>
							<td align="center"> </td>
							<td align="left"><a href="/search/?area=152" title="河南" target="_blank">河南</a></td>
							<td align="left"><a href="/search/?area=155" title="湖北" target="_blank">湖北</a></td>
							<td align="left"><a href="/search/?area=158" title="湖南" target="_blank">湖南</a></td>
							<td align="left"><a href="/search/?area=161" title="广东" target="_blank">广东</a></td>
							<td align="left"><a href="/search/?area=164" title="广西" target="_blank">广西</a></td>
							<td align="left"><a href="/search/?area=167" title="海南" target="_blank">海南</a></td>
						</tr>
						<tr>
							<td height="26" align="center"> </td>
							<td align="left"><a href="/search/?area=云南" title="云南" target="_blank">云南</a></td>
							<td align="left"><a href="/search/?area=西藏" title="西藏" target="_blank">西藏</a></td>
							<td align="left"><a href="/search/?area=陕西" title="陕西" target="_blank">陕西</a></td>
							<td align="left"><a href="/search/?area=甘肃" title="甘肃" target="_blank">甘肃</a></td>
							<td align="left"><a href="/search/?area=青海" title="青海" target="_blank">青海</a></td>
							<td align="left"><a href="/search/?area=宁夏" title="宁夏" target="_blank">宁夏</a></td>
						</tr>
						<tr>
							<td align="center"> </td>
							<td align="left"><a href="/search/?area=辽宁" title="辽宁" target="_blank">辽宁</a></td>
							<td align="left"><a href="/search/?area=山东" title="山东" target="_blank">山东</a></td>
							<td align="left"><a href="/search/?area=贵州" title="贵州" target="_blank">贵州</a></td>
							<td align="left"><a href="/search/?area=四川" title="四川" target="_blank">四川</a></td>
							<td align="left"><a href="/search/?area=江西" title="江西" target="_blank">江西</a><a href="/plus/list.php?tid=92" title="内蒙古" target="_blank"></a></td>
							<td align="left"><a href="/search/?area=新疆" title="新疆" target="_blank">新疆</a></td>
						</tr>
						<tr>
							<td align="center"> </td>
							<td align="left"><a href="/search/?area=黑龙江" title="黑龙江" target="_blank">黑龙江</a></td>
							<td align="left"><a href="/search/?area=内蒙古" title="内蒙古" target="_blank">内蒙古</a><a href="/plus/list.php?tid=194" title="新疆" target="_blank"></a></td>
							<td align="left"> </td>
							<td align="left"> </td>
							<td align="left"></td>
							<td align="left"></td>
						</tr>
					</tbody>
				</table>
				</div>
		  </div>
	</div>
		<div class="g-box-g">
		  <div class="bar">
			<h2 class="cur">会员中标榜</h2>
		  </div>
		  <div class="con">
			<div class="g-list-txt g-mtb-5">
			  <ul>
				<li><span class="red"><b>恭贺</b></span><a href="/plus/view.php?aid=16730" target="_blank" title="南京华德仓储设备制造有限公司">南京华德仓储设备制造有限公司</a><span class="red">中标</span></li>
			  </ul>
			</div>
		  </div>
		</div>
		<div class="g-box-g">
		  <div class="bar">
			<h2 class="cur">最新相关信息</h2>
		  </div>
		  <div class="con">
			<div class="g-list-txt g-mtb-5">
			  <ul>
			   <li class="g-list-dot"><a href="/plus/view.php?aid=8585" target="_blank">2011年国际太阳能及光伏会议暨展览会</a></li>
			  </ul>
			</div>
		  </div>
		</div>

		<!--相关资讯-->
	  </div>
