<?php
/* @var $this ReceptyController */
/* @var $data Recepty */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('Название блюда')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name),  array('/recepty/view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Описание')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>   
	<b><?php echo CHtml::encode($data->getAttributeLabel('')); ?></b>
        <div><?php echo CHtml::image(Yii::app()->baseUrl.'/images/'.$data->image,'картинка',array('wight'=>50,'height'=>50,'style'=>'margin-left:620px;margin-top:-35px')); ?></div>
        <div class="row buttons">
        <?php echo CHtml::link(CHtml::encode('Подробнее'), array('/recepty/view', 'id'=>$data->id)); ?>
        </div>
        </div>