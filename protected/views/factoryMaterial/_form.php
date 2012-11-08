<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */
/* @var $form CActiveForm */
?>
<?php
//insuffient msg
?>
<?php if(Yii::app()->user->hasFlash('insuf')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('insuf');  ?>
</div>
<?php } ?>
<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('sended')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('sended');  ?>
</div>
<?php } ?>

<?php
$l=CHtml::listData(Rawmaterial::model()->findAll(), 'rm_id', 'rm_name');

$user = (Employee::model()->findByPk(Yii::app()->user->id));
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factory-material-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rm_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'rm_id',$l,array('prompt'=>'Select Rawmaterial')); ?>
		<?php echo $form->error($model,'rm_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'login_id'); ?>	
		<?php echo $form->hiddenField($model,'login_id', array('value'=>$user->login_id)); ?>
	
		<input type="text" disabled="disabled" value="<?php echo $user->u_fname; ?>">
	
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sf_quantity'); ?>
		<?php echo $form->textField($model,'sf_quantity'); ?>
		<?php echo $form->error($model,'sf_quantity'); ?>
	</div>

	<div class="row">

		<?php 
//built in calender status working :P	
	echo $form->labelEx($model,'sf_date'); ?>
  <?php
	
    $this->widget('zii.widgets.jui.CJuiDatePicker',
      array(
            'attribute'=>'sf_date',
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
  <?php echo $form->error($model,'sf_date'); ?>
	
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send Now' : 'Save'); ?>
	</div>

	

<?php $this->endWidget(); ?>

</div><!-- form -->