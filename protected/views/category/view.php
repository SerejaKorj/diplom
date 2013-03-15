<?php
$this->menu=array(
        array('label'=>'Менеджер рецептов', 'url'=>array('/recepty/admin')),
	array('label'=>'Список рецептов', 'url'=>array('/recepty/index','cid'=>$model->id)),
	array('label'=>'Добавить рецепт', 'url'=>array('/recepty/create','cid'=>$model->id)),
);
?>

<h1>Раздел <?php echo $model->name; ?></h1>
<?php 

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_recepty',
		'name',
	),
));
?>

