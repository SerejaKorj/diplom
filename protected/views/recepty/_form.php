<?php
/* @var $this ReceptyController */
/* @var $model Recepty */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recepty-form',
	'enableAjaxValidation'=>false,
     'htmlOptions'=>array (  'enctype'=>'multipart/form-data')
)); ?>

	<p class="note">Поля со <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Выберите категорию'); ?>
		<?php echo $form->dropDownList($model,'id_category', Category::getCategory()); ?>
		<?php echo $form->error($model,'id_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Название рецепта'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Описание'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ингридиенты'); ?>
		<?php echo $form->textArea($model,'ingridients',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ingridients'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Приготовление'); ?>
		<?php echo $form->textArea($model,'prigotovlenie',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prigotovlenie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Картинка блюда'); ?>
                <?php echo $form->fileField($model, 'image'); ?>
                <?php echo $form->error($model,'image'); ?>
            
              
	</div>
       
             
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>
 
<!-- form -->