<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
                if(!Yii::app()->user->isGuest):
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Операции'
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
                        'htmlOptions'=>array('class'=>'operations'),
		));
                     
		$this->endWidget();
                endif;
	?>
<!--            <div id="sidebar">
               
                if(!Yii::app()->user->isGuest) $this->widget('UserMenu');?>
          $this->widget('TagCloud',array(
                    'maxTags'=>Yii::app()->params['tagCloudCount'],
                    )) ?>
            </div>   -->
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>