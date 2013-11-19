<div class="container">
	<form class="form-horizontal" role="form" action="/admin/user/changePassword" method="POST">
		<div class="form-group">
    		<label for="inputOldPassword" class="col-sm-2 control-label">原密码</label>
			<div class="col-sm-3">
				<input type="password" name="old_password" class="form-control" id="inputOldPassword" placeholder="">
				<span class="help-block"></span>
			</div>
		</div>
		<div class="form-group">
    		<label for="inputNewPassword" class="col-sm-2 control-label">新密码</label>
    		<div class="col-sm-3">
      			<input type="password" name="new_password" class="form-control" id="inputNewPassword" placeholder="">
				<span class="help-block"></span>
			</div>
  		</div>
		<div class="form-group">
    		<label for="inputCheckNewPassword" class="col-sm-2 control-label">确认新密码</label>
    		<div class="col-sm-3">
				<input type="password" name="check_new_password" class="form-control" id="inputCheckNewPassword" placeholder="">
				<span class="help-block"></span>
			</div>
  		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" id="submit-btn" class="btn btn-default">确认修改</button>
			</div>
		</div>
	</form>
</div>


<script>
	seajs.use('/assets/js/router.js', function(router){
		router.load('admin/changePassword');
	});
</script>
