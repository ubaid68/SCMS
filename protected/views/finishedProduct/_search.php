<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fp_id'); ?>
		<?php echo $form->textField($model,'fp_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_id'); ?>
		<?php echo $form->textField($model,'p_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fp_quantity'); ?>
		<?php echo $form->textField($model,'fp_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fp_date'); ?>
		<?php echo $form->textField($model,'fp_date',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->