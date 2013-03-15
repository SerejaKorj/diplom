<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Раздел')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('/recepty/index', 'cid'=>$data->id)); ?>
    
     
        
        <br />
       



</div>