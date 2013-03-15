<?php


$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Добавить категорию', 'url'=>array('create')),
        
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Менеджер категорий</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_recepty',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
