<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */
/* @var $form CActiveForm */
?>

<?php
//success msg
?>
<?php if(Yii::app()->user->hasFlash('salermsuccess')){ ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('salermsuccess');  ?>
</div>
<?php } ?>

<?php
//insufficent quantity
?>
<?php if(Yii::app()->user->hasFlash('infqrm')){ ?>

<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('infqrm');  ?>
</div>
<?php } ?>

<?php
$lis=CHtml::listData(Customer::model()->findAll(), 'cu_id', 'cu_name');

$user = (Employee::model()->findByPk(Yii::app()->user->id));

$l=CHtml::listData(Rawmaterial::model()->findAll(), 'rm_id', 'rm_name');

$list=CHtml::listData(SaleType::model()->findAll(), 'st_id', 'st_name');

$listp=CHtml::listData(PurchaserType::model()->findAll(), 'purt_id', 'purt_name');

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-rm-form',
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
		<?php echo $form->labelEx($model,'cu_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'cu_id',$lis,array('prompt'=>'Select Customer Name')); ?>
		<?php echo $form->error($model,'cu_id'); ?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($model,'st_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'st_id',$list,array('prompt'=>'Select Sale Type','onchange'=>'st_onChange(this.value);')); ?>
		<?php echo $form->error($model,'st_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purt_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'purt_id',$listp,array('prompt'=>'Select Purchaser Type')); ?>
		<?php echo $form->error($model,'purt_id'); ?>
	</div>

	<div class="row">

		<?php 
//built in calender status working :P	
	echo $form->labelEx($model,'srm_date'); ?>
  <?php
	
    $this->widget('zii.widgets.jui.CJuiDatePicker',
      array(
            'attribute'=>'srm_date',
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
  <?php echo $form->error($model,'srm_date'); ?>
	
	
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'srmp_unit'); ?>
		<?php echo $form->textField($model,'srmp_unit'); ?>
		<?php echo $form->error($model,'srmp_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'srm_quantity'); ?>
		<?php echo $form->textField($model,'srm_quantity'); ?>
		<?php echo $form->error($model,'srm_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'srm_discount'); ?>
		<?php echo $form->textField($model,'srm_discount'); ?>
		<?php echo $form->error($model,'srm_discount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Sale Now' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
function st_onChange(data){
	
	if(data=='2'){
	
	document.getElementById('SaleRm_srmp_unit').disabled=true;
	document.getElementById('SaleRm_srm_discount').disabled=true;
	//document.write("hello");
	//alert(data);
	}
	else
	{
	
	document.getElementById('SaleRm_srmp_unit').disabled=false;
	document.getElementById('SaleRm_srm_discount').disabled=false;
	}
	};
	

</script>