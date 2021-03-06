<?php
/* @var $this SuppliesController */
/* @var $model Supplies */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'supplies_id'); ?>
		<?php echo $form->textField($model,'supplies_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_id'); ?>
		<?php echo $form->textField($model,'s_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_id'); ?>
		<?php echo $form->textField($model,'rm_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_date'); ?>
		<?php echo $form->textField($model,'s_date',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_unitprice'); ?>
		<?php echo $form->textField($model,'s_unitprice',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_quantity'); ?>
		<?php echo $form->textField($model,'s_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_discount'); ?>
		<?php echo $form->textField($model,'s_discount',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->