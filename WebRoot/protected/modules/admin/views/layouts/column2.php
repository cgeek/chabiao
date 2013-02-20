<?php $this->beginContent('/layouts/main'); ?>
  <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">
                快捷操作
              </li>
              <li>
              </li>
              <li class="">
                <a href="/admin/user">用户列表</a>
              </li>
              <li class="">
                <a href="/admin/post/add">添加文章</a>
              </li>
              <li class="">
                <a href="/admin/sites">站群列表</a>
              </li>
              <li class="">
                <a href="/admin/sites/add">添加新网站</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="span10">
			<?php echo $content; ?>
			<p></p>
        </div>
      </div>
    </div>
<?php $this->endContent(); ?>
