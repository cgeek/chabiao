<?php $this->beginContent('/layouts/main'); ?>
<div class="wrap">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'快捷操作',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
		<div id="main">
			<?php echo $content; ?>
		</div><!-- content -->
</div>
<?php $this->endContent(); ?>
