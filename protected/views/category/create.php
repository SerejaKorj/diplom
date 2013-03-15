<?php


$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Менеджер категорий', 'url'=>array('admin')),
);
?>

<h1>Добавить категорию</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>