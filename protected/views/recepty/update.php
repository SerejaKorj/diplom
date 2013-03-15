<?php
/* @var $this ReceptyController */
/* @var $model Recepty */

$this->breadcrumbs=array(
	'Recepties'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список рецептов', 'url'=>array('index')),
	array('label'=>'Добавить рецепт', 'url'=>array('create')),
	array('label'=>'Просмотр рецептов', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Менеджер рецептов', 'url'=>array('admin')),
);
?>

<h1>Обновить рецепты <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>