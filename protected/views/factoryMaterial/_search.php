<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sf_id'); ?>
		<?php echo $form->textField($model,'sf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_id'); ?>
		<?php echo $form->textField($model,'rm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sf_quantity'); ?>
		<?php echo $form->textField($model,'sf_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sf_date'); ?>
		<?php echo $form->textField($model,'sf_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->