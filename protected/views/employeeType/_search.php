<?php
/* @var $this EmployeeTypeController */
/* @var $model EmployeeType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'et_id'); ?>
		<?php echo $form->textField($model,'et_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'et_name'); ?>
		<?php echo $form->textField($model,'et_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'et_desp'); ?>
		<?php echo $form->textField($model,'et_desp',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->