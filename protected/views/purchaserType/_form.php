<?php
/* @var $this PurchaserTypeController */
/* @var $model PurchaserType */
/* @var $form CActiveForm */
?>

<?php//flash msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('purtduplicate')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('purtduplicate');  ?>
</div>
<?php } ?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('purtsuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('purtsuccess');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchaser-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'purt_name'); ?>
		<?php echo $form->textField($model,'purt_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'purt_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purt_desp'); ?>
		<?php echo $form->textField($model,'purt_desp',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'purt_desp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add Purchaser Type' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->