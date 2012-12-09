<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>



<?php if(Yii::app()->user->hasFlash('ppd')){ ?>

<div class="flash-error">

<div class="response-msg  ui-corner-all">
<span>Product Name or code Duplicate Entry..</span>
</div>

	<?php //echo Yii::app()->user->getFlash('ppd');  ?>
</div>
<?php } ?>


<?php if(Yii::app()->user->hasFlash('pps')){ ?>
   <!-- start of messages -->
<!-- start of messages -->
<div class="flash-success">
<div class="response-msg  ui-corner-all">
<span>New Record Added successfully!</span>
</div>


	<?php //echo Yii::app()->user->getFlash('pps');  ?>
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
		<?php echo $form->textField($model,'p_name',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'p_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_code'); ?>
		<?php echo $form->textField($model,'p_code',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
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
									)),'class'=>'cjCombo'      
										)
									)?>
									
		<?php echo $form->error($model,'rmc_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'p_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_quantity'); ?>
		<?php echo $form->textField($model,'p_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields'));?>	
		<div id="rmc" style="float: right; margin-top: -32px; width: 557px;">  unit</div>
		<?php echo $form->error($model,'p_quantity'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'p_reservelevel'); ?>
		<?php echo $form->textField($model,'p_reservelevel',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'p_reservelevel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->