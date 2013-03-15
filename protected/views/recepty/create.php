<?php
/* @var $this ReceptyController */
/* @var $model Recepty */



$this->menu=array(
	array('label'=>'Список рецептов', 'url'=>array('index')),
	array('label'=>'Менеджер рецептов', 'url'=>array('admin')),
);
?>

<h1>Добавить рецепт</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>