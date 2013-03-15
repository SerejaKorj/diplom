<?php
/* @var $this ReceptyController */
/* @var $model Recepty */



$this->menu=array(
        array('label'=>'Менеджер рецептов', 'url'=>array('admin')),
	array('label'=>'Список рецептов', 'url'=>array('index')),
        array('label'=>'Обновить рецепт', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Добавить рецепт', 'url'=>array('create')),	
	array('label'=>'Удалить рецепт', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>Как захерячить <?php echo $model->name; ?></h1>

<div class="view">	

	<b><?php echo CHtml::encode($model->getAttributeLabel('Название блюда')); ?>:</b>
	<?php echo CHtml::encode($model->name); ?>
	<br />
	<b><?php echo CHtml::encode($model->getAttributeLabel('Описание')); ?>:</b>
	<?php echo CHtml::encode($model->content); ?>
	<br />
        <b><?php echo CHtml::encode($model->getAttributeLabel('Приготовление'));?>:</b>
        <?php echo CHtml::encode($model->prigotovlenie); ?>
        <br />
	<b><?php echo CHtml::encode($model->getAttributeLabel('Картинки')); ?>:</b>
	<?php echo CHtml::image(Yii::app()->baseUrl.'/images/'.$model->image,'123',array('wight'=>50,'height'=>50,)); ?>
        <br/>        
       </div>
