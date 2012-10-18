<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */
/* @var $form CActiveForm */
?>
<?php
//flash msg for duplication
?>

<?php if(Yii::app()->user->hasFlash('Duplicate')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('Duplicate');  ?>
</div>
<?php } ?>

<?php
//success msg for duplication
?>
<?php if(Yii::app()->user->hasFlash('successmsg')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('successmsg');  ?>
</div>
<?php } ?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rawmaterial-form',
	'enableAjaxValidation'=>false,
)); 
$list=CHtml::listData(RawmaterialCategory::model()->findAll(), 'rmc_id', 'rmc_name');

	
	?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'rm_name'); ?>
		<?php echo $form->textField($model,'rm_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rm_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rm_code'); ?>
		<?php echo $form->textField($model,'rm_code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rm_code'); ?>
	</div>
	
	<div class="row">
				<?php echo $form->labelEx($model,'rmc_id'); ?>
			<?php echo CHtml::activeDropDownList($model,'rmc_id',$list,
			array(
			'prompt'=>'Select Category',
			'onChange'=>
									CHtml::ajax(array(
									'url' => CController::createUrl('RawmaterialCategory/GetCategory'),
									'type' => 'POST',                     
								   'update'=>'#rmc',
									)),'style'=>'width:180px;'        
										)
									)?>
									
		<?php echo $form->error($model,'rmc_id'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'rmp_unit'); ?>
		<?php echo $form->textField($model,'rmp_unit'); ?>
		<?php echo $form->error($model,'rmp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rm_quantity'); ?>
		<?php echo $form->textField($model,'rm_quantity');?>	
		<div id="rmc" style="display:inline;">  unit</div>
		<?php echo $form->error($model,'rm_quantity'); ?>
	</div>
	
	

	<div class="row">
		<?php echo $form->labelEx($model,'rm_reservelevel'); ?>
		<?php echo $form->textField($model,'rm_reservelevel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rm_reservelevel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

