<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('cussuccess')){ ?>

<div class="flash-success">

	<div class="response-msg  ui-corner-all">
<span>New Record Added successfully!</span>

</div> 

<?php //echo Yii::app()->user->getFlash('cussuccess');?>

</div>

<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_name'); ?>
		<?php echo $form->textField($model,'cu_name',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'cu_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_desp'); ?>
		<?php echo $form->textField($model,'cu_desp',array('size'=>60,'maxlength'=>200,'class'=>'fields')); ?>
		<?php echo $form->error($model,'cu_desp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->