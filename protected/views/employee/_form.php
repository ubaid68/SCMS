<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>
<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('empsuccess')){ ?>

<div class="flash-success">
<div class="response-msg  ui-corner-all">
<span>New Record Added successfully!</span>
    
</div>

<?php //echo Yii::app()->user->getFlash('empsuccess'); ?>
</div>
<?php } ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_fname'); ?>
		<?php echo $form->textField($model,'u_fname',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'u_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_lname'); ?>
		<?php echo $form->textField($model,'u_lname',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'u_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->dropDownList($model,'role', array('manager'=>'manager',
                    'productManager'=>'productManager','materialManager'=>'materialManager','salesMan'=>'salesMan',),array('prompt'=>'Select Role','title'=>'Select your Role in University','class'=>'cjCombo')); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->