<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'p_id'); ?>
		<?php echo $form->textField($model,'p_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_id'); ?>
		<?php echo $form->textField($model,'pc_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_name'); ?>
		<?php echo $form->textField($model,'p_name',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_code'); ?>
		<?php echo $form->textField($model,'p_code',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_quantity'); ?>
		<?php echo $form->textField($model,'p_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_reservelevel'); ?>
		<?php echo $form->textField($model,'p_reservelevel',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->