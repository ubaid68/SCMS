<?php
/* @var $this PurchaserTypeController */
/* @var $model PurchaserType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'purt_id'); ?>
		<?php echo $form->textField($model,'purt_id',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purt_name'); ?>
		<?php echo $form->textField($model,'purt_name',array('size'=>50,'maxlength'=>20,'class'=>'fields')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purt_desp'); ?>
		<?php echo $form->textField($model,'purt_desp',array('size'=>50,'maxlength'=>200,'class'=>'fields')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->