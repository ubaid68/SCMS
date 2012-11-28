<?php
/* @var $this SuppliesController */
/* @var $model Supplies */
/* @var $form CActiveForm */
?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('buysuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('buysuccess');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplies-form',
	'enableAjaxValidation'=>false,
)); 
$list=CHtml::listData(Supplier::model()->findAll(), 's_id', 'supplier_name');

$lis=CHtml::listData(Rawmaterial::model()->findAll(), 'rm_id', 'rm_name');

$event;

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'s_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'s_id',$list,array('prompt'=>'Select Supplier Name')); ?>
		<?php echo $form->error($model,'s_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'rm_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'rm_id',$lis,array('prompt'=>'Select Raw-Material')); ?>
		<?php echo $form->error($model,'rm_id'); ?>
	</div>

	<div class="row">
	
	
		<?php  
//built in calender status working :P	
	echo $form->labelEx($model,'s_date'); ?>
  <?php
	
    $this->widget('zii.widgets.jui.CJuiDatePicker',
      array(
            'attribute'=>'s_date',
            'model'=>$model,
            'options' => array(
                              'mode'=>'focus',
                              'dateFormat'=>'d MM, yy',
                              'showAnim' => 'slideDown',
                              ),
    'htmlOptions'=>array('size'=>30,'class'=>'date'),
          )
    );
  
  ?>
  <?php echo $form->error($model,'s_date'); ?>
	
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_unitprice'); ?>
		<?php echo $form->textField($model,'s_unitprice'); ?>
		<?php echo $form->error($model,'s_unitprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_quantity'); ?>
		<?php echo $form->textField($model,'s_quantity'); ?>
		<?php echo $form->error($model,'s_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_discount'); ?>
		<?php echo $form->textField($model,'s_discount'); ?>
		<?php echo $form->error($model,'s_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php /* if (isset($this->language) && $this->language != 'en_us'){
			$this->registerScriptFile($this->i18nScriptFile);
			
			*/
			?>