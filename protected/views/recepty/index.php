<?php
/* @var $this ReceptyController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Добавить рецепт', 'url'=>array('create')),
	
);
?>

<h1>Рецепты</h1>

<?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
