<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */
/* @var $form CActiveForm */
?>
<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('recieve')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('recieve');  ?>
</div>
<?php } ?>
<?php
$l=CHtml::listData(Product::model()->findAll(), 'p_id', 'p_name');

$user = (Employee::model()->findByPk(Yii::app()->user->id));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'finished-product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'p_id',$l,array('prompt'=>'Select Product')); ?>
		<?php echo $form->error($model,'p_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>	
		<?php echo $form->hiddenField($model,'login_id', array('value'=>$user->login_id)); ?>
	
		<input type="text" disabled="disabled" value="<?php echo $user->u_fname; ?>">
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fp_quantity'); ?>
		<?php echo $form->textField($model,'fp_quantity'); ?>
		<?php echo $form->error($model,'fp_quantity'); ?>
	</div>

	<div class="row">

		<?php 
//built in calender status working :P	
	echo $form->labelEx($model,'fp_date'); ?>
  <?php
	
    $this->widget('zii.widgets.jui.CJuiDatePicker',
      array(
            'attribute'=>'fp_date',
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
  <?php echo $form->error($model,'fp_date'); ?>
	
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Recieve Now' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->