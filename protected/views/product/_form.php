<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<?php
//flash msg for duplication
?>

<?php if(Yii::app()->user->hasFlash('ppd')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('ppd');  ?>
</div>
<?php } ?>

<?php
//success msg for
?>
<?php if(Yii::app()->user->hasFlash('pps')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('pps');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); 

$list=CHtml::listData(ProductCategory::model()->findAll(), 'pc_id', 'pc_name');
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'p_name'); ?>
		<?php echo $form->textField($model,'p_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_code'); ?>
		<?php echo $form->textField($model,'p_code',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_code'); ?>
	</div>
	
	<div class="row">
				<?php echo $form->labelEx($model,'pc_id'); ?>
			<?php echo CHtml::activeDropDownList($model,'pc_id',$list,
			array(
			'prompt'=>'Select Category',
			'onChange'=>
									CHtml::ajax(array(
									'url' => CController::createUrl('ProductCategory/GetCategory'),
									'type' => 'POST',                     
								   'update'=>'#rmc',
									)),'style'=>'width:180px;'        
										)
									)?>
									
		<?php echo $form->error($model,'rmc_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price'); ?>
		<?php echo $form->error($model,'p_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_quantity'); ?>
		<?php echo $form->textField($model,'p_quantity');?>	
		<div id="rmc" style="display:inline;">  unit</div>
		<?php echo $form->error($model,'p_quantity'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'p_reservelevel'); ?>
		<?php echo $form->textField($model,'p_reservelevel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'p_reservelevel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->