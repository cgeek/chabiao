<div class="main">
	<div class="box page-account clearfix">
		<div class="left w520">
			<form id="register_form" action="/user/register" method="post">
				<input type="hidden" name="type" value="personal">
				<p class="red"> 所有注册资料请认真填写，否则您将不能够正常登录，并且我们将直将删除非正常用户。</p>
				<fieldset>
					<dl class="title"> + 登录信息</dl>
					<dl>
						<dt for="username">用户名<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="username" name="username" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="password">密码<span class="red">*</span>:</dt>
						<dd>
							<input type="password" size=30 id="password" name="password" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="check_password">确认密码<span class="red">*</span>:</dt>
						<dd>
							<input type="password" size=30 id="check_password" name="check_password" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="email">电子邮箱<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="email" name="email" value="">
							<span class="help-inline"> </span>
						</dd>
					</dl>
					<dl class="title"> + 联系人信息:</dl>
					<dl>
						<dt for="contact_name">联系人<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="contact_name" name="contact_name" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="position">职位<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="position" name="position" value="" placeholder="如：经理，普通员工">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="mobile">电话/手机<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="mobile" name="mobile" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<!--dl>
						<dt for="fax">传真:</dt>
						<dd>
							<input type="text" size=30 id="fax" name="fax" value="">
							<span class="help-inline"></span>
						</dd>
					</dl-->
					<!--dl>
						<dt for="qq">QQ/MSN:</dt>
						<dd>
							<input type="text" size=30 id="qq" name="qq" value="">
							<span class="help-inline"></span>
						</dd>
					</dl-->

					<dl class="title"> + 公司信息:</dl>
					<dl>
						<dt for="company_name">公司名称<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="company_name" name="company_name" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="products">主营产品<span class="red">*</span>:</dt>
						<dd>
							<input type="text" size=30 id="products" name="products" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<!--dl>
						<dt for="address">公司地址:</dt>
						<dd>
							<input type="text" size=30 id="address" name="address" value="">
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="company_desc">公司简介:</dt>
						<dd>
							<textarea id="company_desc" name="company_desc" placeholder="120个字以内"></textarea>
							<span class="help-inline"></span>
						</dd>
					</dl>
					<dl>
						<dt for="website">公司网址:</dt>
						<dd>
							<input type="text" size=30 id="website" name="website" value="">
							<span class="help-inline"></span>
						</dd>
					</dl-->
					<dl class="title"></dl>
					<dl>
						<dt>注册理由：</dt>
						<dd>
							<ul class="reason">
								<li><input type="radio" value="0" checked=true name="reg_reason"><span>我只想免费浏览信息</span></li>
								<li><input type="radio" value="1" name="reg_reason"><span>我要咨询入网事宜，请人工联系我</span></li>
								<li><input type="radio" value="2" name="reg_reason"><span>我要成为付费会员，请联系我</span></li>
							</ul>
						</dd>
				</fieldset>
				<p class="page-account-alert-message error"></p> 
				<div class="submit_btn">
					<button type="submit" class="register_btn btn">注册<strong></strong></button>
				</div>
			</form>
		</div>
		<div class="aside w300">
			<p>已经有账号? <a href="/user/login">马上登录</a></p>
		</div>
	</div>
</div>
<script type="text/javascript">
	seajs.use('/assets/js/router.js',function(router){
		router.load('account');
	});

</script>
