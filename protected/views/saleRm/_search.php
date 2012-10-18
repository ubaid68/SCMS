<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'srm_id'); ?>
		<?php echo $form->textField($model,'srm_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id'); ?>
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
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purt_id'); ?>
		<?php echo $form->textField($model,'purt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_date'); ?>
		<?php echo $form->textField($model,'srm_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srmp_unit'); ?>
		<?php echo $form->textField($model,'srmp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_quantity'); ?>
		<?php echo $form->textField($model,'srm_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_discount'); ?>
		<?php echo $form->textField($model,'srm_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->