<?php
/* @var $this SupplierController */
/* @var $model Supplier */
/* @var $form CActiveForm */
?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('suppsuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('suppsuccess');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_name'); ?>
		<?php echo $form->textField($model,'supplier_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'supplier_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_person'); ?>
		<?php echo $form->textField($model,'s_person',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'s_person'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_phone'); ?>
		<?php echo $form->textField($model,'s_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'s_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_address'); ?>
		<?php echo $form->textField($model,'s_address',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'s_address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->