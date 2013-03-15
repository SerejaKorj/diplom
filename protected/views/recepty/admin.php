<?php
/* @var $this ReceptyController */
/* @var $model Recepty */
$this->menu=array(
	array('label'=>'Список рецептов', 'url'=>array('index')),
	array('label'=>'Добавить рецепт', 'url'=>array('create')),
        
);
?>
<a href="">Назад</a>
<!--
javascript:history.back();
$this->widget('bootstrap.widgets.TbButton',array(
    'label'=>'Primary',
    'type'=>'primary',
    'size'=>'mini',
))-->

<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#recepty-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер рецептов</h1>




<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'recepty-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_category',
		'name',
		'content',
		'ingridients',
		'prigotovlenie',
		'image',
                
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
