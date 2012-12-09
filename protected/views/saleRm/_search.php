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
		<?php echo $form->textField($model,'srm_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cu_id'); ?>
		<?php echo $form->textField($model,'cu_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_id'); ?>
		<?php echo $form->textField($model,'login_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rm_id'); ?>
		<?php echo $form->textField($model,'rm_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'st_id'); ?>
		<?php echo $form->textField($model,'st_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purt_id'); ?>
		<?php echo $form->textField($model,'purt_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_date'); ?>
		<?php echo $form->textField($model,'srm_date',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srmp_unit'); ?>
		<?php echo $form->textField($model,'srmp_unit',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_quantity'); ?>
		<?php echo $form->textField($model,'srm_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'srm_discount'); ?>
		<?php echo $form->textField($model,'srm_discount',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->