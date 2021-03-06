<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pc_id'); ?>
		<?php echo $form->textField($model,'pc_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_name'); ?>
		<?php echo $form->textField($model,'pc_name',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_qmeasures'); ?>
		<?php echo $form->textField($model,'pc_qmeasures',array('size'=>50,'maxlength'=>20,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_description'); ?>
		<?php echo $form->textField($model,'pc_description',array('size'=>50,'maxlength'=>200,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->