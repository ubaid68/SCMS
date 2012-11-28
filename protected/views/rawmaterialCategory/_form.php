<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */
/* @var $form CActiveForm */
?>
<?php
//flash msg for duplication
?>

<?php if(Yii::app()->user->hasFlash('rmcategoryduplicate')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('rmcategoryduplicate');  ?>
</div>
<?php } ?>

<?php
//success msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('rmcategorysuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('rmcategorysuccess');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rawmaterial-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rmc_name'); ?>
		<?php echo $form->textField($model,'rmc_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rmc_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rmc_qmeasures'); ?>
		<?php echo $form->textField($model,'rmc_qmeasures',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rmc_qmeasures'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rmc_description'); ?>
		<?php echo $form->textField($model,'rmc_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'rmc_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->