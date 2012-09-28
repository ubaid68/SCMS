<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rmc_id'); ?>
		<?php echo $form->textField($model,'rmc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmc_name'); ?>
		<?php echo $form->textField($model,'rmc_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmc_qmeasures'); ?>
		<?php echo $form->textField($model,'rmc_qmeasures',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rmc_description'); ?>
		<?php echo $form->textField($model,'rmc_description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->