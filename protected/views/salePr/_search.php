<?php
/* @var $this SalePrController */
/* @var $model SalePr */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sp_id'); ?>
		<?php echo $form->textField($model,'sp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_id'); ?>
		<?php echo $form->textField($model,'p_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purt_id'); ?>
		<?php echo $form->textField($model,'purt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_date'); ?>
		<?php echo $form->textField($model,'sp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_unit'); ?>
		<?php echo $form->textField($model,'sp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_quantity'); ?>
		<?php echo $form->textField($model,'sp_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sp_discount'); ?>
		<?php echo $form->textField($model,'sp_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->