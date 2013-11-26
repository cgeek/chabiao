<?php
$this->breadcrumbs=array(
	'所有用户'=>array('/admin/user/list'),
	'用户列表',
);?>
	<ul class="breadcrumb">
		<li><a href="/admin">首页</a> <span class="divider"></span></li>
		<li class="active">用户管理</li>
	</ul>
	<p>
		<form class="form-search" method="get">
			<div class="input-append">
				<input type="text" name="keyword" class="span12 search-query" placeholder="用户名 或 用户id 或 Email"><button class="btn" type="submit">搜索</button>
			</div>
		</form>
	</p>
	<div class="user-list" style="font-size:12px;font-weight:normal;">
		<ul class="nav nav-tabs" id="setting_tab">
			<li <?php if(!isset($_GET['status'])):?>class="active"<?php endif;?>>
				<a href="/admin/user">所有用户</a>
			</li>
			<li <?php if(isset($_GET['status']) && $_GET['status'] == 1):?>class="active"<?php endif;?>>
				<a href="/admin/user?status=1">付费用户</a>
			</li>
			<li <?php if(isset($_GET['status']) && $_GET['status'] == 0):?>class="active"<?php endif;?>>
				<a href="/admin/user?status=0">免费用户</a>
			</li>
			<li <?php if(isset($_GET['status']) && $_GET['status'] == -1):?>class="active"<?php endif;?>>
				<a href="/admin/user?status=-1">已经删除用户</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="home">
<?php if(empty($user_list)):?>
				<p>没有找到符合条件的用户</p>
<?php else:?>
	<?php if(!isset($_GET['status']) || $_GET['status'] ==0):?>
			<div class="reason_filter">
				<span class="label label-warning">入网原因筛选:</span>
				<ul class="list-inline">
					<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 1):?>class="active"<?php endif;?>>
						<a href="/admin/user?reg_reason=1">咨询入网</a>
					</li>
					<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 2):?>class="active"<?php endif;?>>
						<a href="/admin/user?reg_reason=2">要成为付费会员</a>
					</li>
					<li <?php if(isset($_GET['reg_reason']) && $_GET['reg_reason'] == 0):?>class="active"<?php endif;?>>
						<a href="/admin/user?reg_reason=0">免费浏览</a>
					</li>
				</ul>
			</div>
	<?php endif;?>
			<table class="table table-striped">
              <thead>
                <tr>
					<th>ID</th>
					<th>注册时间</th>
					<th>客户名称</th>
					<th>手机号码</th>
					<th>公司名称</th>
					<th>注册目地</th>
					<th>来源</th>
					<th>最后登录</th>
					<th>操作</th>
                </tr>
              </thead>
              <tbody>
			<?php foreach($user_list as $user):?>
				<tr user_id="<?=$user['user_id'];?>" class="item_user user_id_<?=$user['user_id'];?>">
					<th><?=$user['user_id'];?></th>
					<th><?=date('Y-m-d',$user['ctime']);?></th>
					<th><?=cut_str($user['contact_name'], 30);?></th>
					<th><?=$user['mobile'];?></th>
					<th><?=$user['company_name'];?></th>
					<th><?=$user['reg_reason'];?> &nbsp;</th>
					<th><?=$user['source_cn'];?> &nbsp;</th>
					<th><?=$user['last_login_time'];?></th>
					<th>
						<?php if(isset($_GET['status']) && $_GET['status'] == -1):?>

						<?php elseif(isset($_GET['status']) && $_GET['status'] == 1):?>
						  <a class="delete_payment_user_btn" user_id="<?=$user['user_id'];?>" href="/admin/user/delete_payment_user?user_id=<?=$user['user_id'];?>" target="_blank">取消付费状态</a>
						<?php else:?>
						  <a class="delete_user_btn" user_id="<?=$user['user_id'];?>" href="/admin/user/delete?user_id=<?=$user['user_id'];?>" target="_blank">删除</a>
						<?php endif;?>
					</th>
                </tr>
			<?php endforeach;?>
              </tbody>
		</table>
		<?php 
			$this->widget('LinkPager', array('pages' => $pages, 'prevPageLabel'=>'«','nextPageLabel'=>'»','cssFile'=>false, 'header'=>false)); 
		?>
<?php endif; ?> <!--用户列表结束-->
		</div>
	</div>
<div class="modal fade" id="user_more_info_modal">
	<div class="modal-dialog">
	    <div class="modal-content">
		</div>
	</div>
</div>
<script type="text/templete" id="user_more_info_tpl">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>用户详细信息</h3>
	</div>
	<div class="modal-body">	
	<form class="form-horizontal" id="user_info_form">
		<input type="hidden" name="user_id" value="{{user_id}}">
		<ul class="nav nav-tabs" id="user_info_tab">
			<li class="active"><a href="#metaInfo" data-toggle="tab" >公司信息</a></li>
			<li><a href="#baseInfo" data-toggle="tab" >注册信息</a></li>
			<li><a href="#payInfo" data-toggle="tab" >付费信息</a></li>
			<li><a href="#callInfo" data-toggle="tab" >电话反馈或备注</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="metaInfo">
				<div class="form-group">
					<label class="control-label col-lg-2" for="reg_reason">来源网站：</label>
					<div class="col-lg-4">
						<input type="text" id="" class="form-control" name="" value="{{source_cn}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="content_name">客户姓名：</label>
					<div class="col-lg-4">
						<input type="text" class="form-control" id="content_name" name="userMeta[contact_name]" value="{{contact_name}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="mobile">手机号码：</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" id="mobile" name="userMeta[mobile]" value="{{mobile}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="position">职位：</label>
					<div class="controls col-lg-4">
						<input  class="form-control" type="text" id="position" name="userMeta[position]" value="{{position}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="company_name">公司名称：</label>
					<div class="controls col-lg-6">
						<input class="form-control" type="text" id="company_name" name="userMeta[company_name]" value="{{company_name}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="products">主要产品：</label>
					<div class="controls col-lg-6">
						<textarea class="form-control" name="userMeta[products]">{{products}}</textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="company_desc">公司简介：</label>
					<div class="controls col-lg-6">
						<textarea class="form-control" row=4 name="userMeta[company_desc]">{{company_desc}}</textarea>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="fax">传真：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="fax" name="userMeta[fax]" value="{{fax}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="qq">qq：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="qq" name="userMeta[qq]" value="{{qq}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="address">公司地址：</label>
					<div class="controls col-lg-6">
						<input class="form-control" type="text" id="address" name="userMeta[address]" value="{{address}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="website">公司网站：</label>
					<div class="controls col-lg-6">
						<input class="form-control" type="text" id="website" name="userMeta[website]" value="{{website}}">
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="baseInfo">
				<div class="form-group">
					<label class="control-label col-lg-2" for="user_id">用户id：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="user_id" name="user[user_id]" value="{{user_id}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="user_name">用户名：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="user_name" name="user[user_name]" value="{{user_name}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="email">Email：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="email" name="user[email]" value="{{email}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="reg_reason">注册原因：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="" value="{{reg_reason}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="">最后登录时间：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="" value="{{last_login_time}}" disabled>
						<span class="help-inline"></span>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="payInfo">
				<div class="form-group">
					<label class="control-label col-lg-2" for="payment_type">付费类型：</label>
					<div class="controls col-lg-4">
						<select class="form-control" name="userMeta[payment_type]">
							<option value="0">免费浏览</option>
							<option value="1" {{#payment}} selected {{/payment}} >一年付费</option>
						</select>
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="payment_amount">金额：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="payment_amount" name="userMeta[payment_amount]" value="{{payment_amount}}">
						<span class="help-inline"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-2" for="payment_date">付费日期：</label>
					<div class="controls col-lg-4">
						<input class="form-control" type="text" id="" name="userMeta[payment_date]" value="{{payment_date}}">
						<span class="help-inline">2013-02-14</span>
					</div>
				</div>

			</div>
			<div class="tab-pane" id="callInfo">
				<div class="form-group">
					<label class="control-label col-lg-2" for="company_desc">反馈备注：</label>
					<div class="controls col-lg-4">
						<textarea class="form-control" name="userMeta[remark]" style="width:300px;height:200px;">{{remark}}</textarea>
						<span class="help-inline"></span>
					</div>
				</div>

			</div>
		</div>
		</form>
	</div>
	<div class="modal-footer">
		<div class="label label-important ajax_response_info" style="float:left;display:none;padding:5px;"></div>
		<button class="btn {{^payment_user}}btn-success{{/payment_user}}" {{#payment_user}}disabled=true{{/payment_user}}user_id="{{user_id}}" id="payment_btn">成为付费会员</button>
		<button class="btn btn-primary" id="save_user_info_btn">保存修改</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>

</script>
<script>
seajs.use('/assets/js/router.js',function(router){
	router.load('/admin/user');
});
</script>
