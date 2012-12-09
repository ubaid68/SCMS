<?php
/* @var $this SaleTypeController */
/* @var $model SaleType */
/* @var $form CActiveForm */
?>

<?php//flash msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('stydup')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('stydup');  ?>
</div>
<?php } ?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('stysuccess')){ ?>

<div class="flash-success">
	<div class="response-msg success ui-corner-all">
<span>New Record Added successfully!</span>
    
</div> 
</div>
<?php } ?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'st_name'); ?>
		<?php echo $form->textField($model,'st_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'st_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'st_description'); ?>
		<?php echo $form->textField($model,'st_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'st_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->