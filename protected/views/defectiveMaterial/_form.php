<?php
/* @var $this DefectiveMaterialController */
/* @var $model DefectiveMaterial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'defective-material-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id'); ?>
		<?php echo $form->error($model,'login_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rm_id'); ?>
		<?php echo $form->textField($model,'rm_id'); ?>
		<?php echo $form->error($model,'rm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dm_quantity'); ?>
		<?php echo $form->textField($model,'dm_quantity'); ?>
		<?php echo $form->error($model,'dm_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dm_date'); ?>
		<?php echo $form->textField($model,'dm_date'); ?>
		<?php echo $form->error($model,'dm_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->