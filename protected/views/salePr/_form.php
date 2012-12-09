<?php
/* @var $this SalePrController */
/* @var $model SalePr */
/* @var $form CActiveForm */
?>

<?php
//sample success msg
?>
<?php if(Yii::app()->user->hasFlash('samplesuccess')){ ?>

<div class="flash-success">
	
	<div class="response-msg  ui-corner-all">
<span>New Record Added successfully!</span>
    
</div>

	<?php //echo Yii::app()->user->getFlash('samplesuccess');  ?>
</div>
<?php } ?>

<?php
//sale success msg
?>
<?php if(Yii::app()->user->hasFlash('salesuccess')){ ?>
<div class="flash-success">
<div class="response-msg  ui-corner-all">
<span>Sold successfully!</span>
    
</div>

</div>

 	<?php //echo Yii::app()->user->getFlash('salesuccess');  ?>

<?php } ?>

<?php
//insufficent quantity
?>
<?php if(Yii::app()->user->hasFlash('infq')){ ?>

<div class="flash-error">
	<div class="response-msg  ui-corner-all">
<span>Insuffiecient Quantity</span>
</div>

	<?php //echo Yii::app()->user->getFlash('infq');  ?>
</div>
<?php } ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-pr-form',
	'enableAjaxValidation'=>false,
)); 

$lis=CHtml::listData(Customer::model()->findAll(), 'cu_id', 'cu_name');
$user = (Employee::model()->findByPk(Yii::app()->user->id));
$l=CHtml::listData(Product::model()->findAll(), 'p_id', 'p_name');
$list=CHtml::listData(SaleType::model()->findAll(), 'st_id', 'st_name');

$listp=CHtml::listData(PurchaserType::model()->findAll(), 'purt_id', 'purt_name');
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'p_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'p_id',$l,array('prompt'=>'Select Product','class'=>'cjCombo')); ?>
		<?php echo $form->error($model,'p_id'); ?>
	</div>
	<div class="row">
		
		<?php echo $form->labelEx($model,'login_id'); ?>
		<?php echo $form->hiddenField($model,'login_id', array('value'=>$user->login_id)); ?>
	
		<input type="text" disabled="disabled" value="<?php echo $user->u_fname; ?>" class="fields">
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cu_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cu_id',$lis,array('prompt'=>'Select Customer Name','class'=>'cjCombo')); ?>
		<?php echo $form->error($model,'cu_id'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'st_id'); ?>
		<?phpvar_dump($list['2']);?>
		<?php echo CHtml::activeDropDownList($model,'st_id',$list,array('prompt'=>'Select Sale Type','class'=>'cjCombo','onchange'=>'st_onChange(this.value);')
											);
								?>
		<?php echo $form->error($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purt_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'purt_id',$listp,array('prompt'=>'Select Purchaser Type','class'=>'cjCombo')); ?>
		<?php echo $form->error($model,'purt_id'); ?>
	</div>

	<div class="row">

		<?php 
//built in calender status working :P	
	echo $form->labelEx($model,'sp_date'); ?>
  <?php
	
    $this->widget('zii.widgets.jui.CJuiDatePicker',
      array(
            'attribute'=>'sp_date',
            'model'=>$model,
            'options' => array(
                              'mode'=>'focus',
                              'dateFormat'=>'d MM, yy',
                              'showAnim' => 'slideDown',
                              ),
    'htmlOptions'=>array('size'=>30,'class'=>'date','class'=>'fields'),
          )
    );
  
  ?>
  <?php echo $form->error($model,'sp_date'); ?>
	
	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_unit'); ?>
		<?php echo $form->textField($model,'sp_unit',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		
		<?php echo $form->error($model,'sp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_quantity'); ?>
		<?php echo $form->textField($model,'sp_quantity',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		<?php echo $form->error($model,'sp_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sp_discount'); ?>
		<?php echo $form->textField($model,'sp_discount',array('size'=>50,'maxlength'=>50,'class'=>'fields')); ?>
		
		<?php echo $form->error($model,'sp_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Sale/Send Now' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
function st_onChange(data){
	
	if(data=='2'){
	
	document.getElementById('SalePr_sp_unit').disabled=true;
	document.getElementById('SalePr_sp_discount').disabled=true;
	//document.write("hello");
	//alert(data);
	}
	else
	{
	
	document.getElementById('SalePr_sp_unit').disabled=false;
	document.getElementById('SalePr_sp_discount').disabled=false;
	}
	};
	

</script>
