<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rm_id'); ?>
		<?php echo $form->textField($model,'rm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmc_id'); ?>
		<?php echo $form->textField($model,'rmc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_name'); ?>
		<?php echo $form->textField($model,'rm_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_code'); ?>
		<?php echo $form->textField($model,'rm_code',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmp_unit'); ?>
		<?php echo $form->textField($model,'rmp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_quantity'); ?>
		<?php echo $form->textField($model,'rm_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_reservelevel'); ?>
		<?php echo $form->textField($model,'rm_reservelevel',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->