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
	<?php echo Yii::app()->user->getFlash('empsuccess');  ?>
</div>
<?php } ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
));

$list=CHtml::listData(EmployeeType::model()->findAll(), 'et_id', 'et_name');
 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'et_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'et_id',$list,array('prompt'=>'Select Employee Type')); ?>
		<?php echo $form->error($model,'et_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_fname'); ?>
		<?php echo $form->textField($model,'u_fname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'u_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'u_lname'); ?>
		<?php echo $form->textField($model,'u_lname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'u_lname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add Employee' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->