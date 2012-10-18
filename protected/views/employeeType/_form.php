<?php
/* @var $this EmployeeTypeController */
/* @var $model EmployeeType */
/* @var $form CActiveForm */
?>
<?php//flash msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('emptduplicate')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('emptduplicate');  ?>
</div>
<?php } ?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('emptsuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('emptsuccess');  ?>
</div>
<?php } ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'et_name'); ?>
		<?php echo $form->textField($model,'et_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'et_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'et_desp'); ?>
		<?php echo $form->textField($model,'et_desp',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'et_desp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->