<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */
/* @var $form CActiveForm */
?>
<?php
//flash msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('pd')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('pd');  ?>
</div>
<?php } ?>
<?php
//success msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('ps')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('ps');  ?>
</div>
<?php } ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-category-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pc_name'); ?>
		<?php echo $form->textField($model,'pc_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pc_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pc_qmeasures'); ?>
		<?php echo $form->textField($model,'pc_qmeasures',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pc_qmeasures'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pc_description'); ?>
		<?php echo $form->textField($model,'pc_description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'pc_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->