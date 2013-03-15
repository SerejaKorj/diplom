<?php


$this->menu=array(
	array('label'=>'Добавить категорию', 'url'=>array('create')),
	array('label'=>'Менеджер категорий', 'url'=>array('admin')),
        

);
?>

<h1>Разделы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
