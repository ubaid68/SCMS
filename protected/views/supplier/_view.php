<?php
/* @var $this SupplierController */
/* @var $data Supplier */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->s_id), array('view', 'id'=>$data->s_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_name')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_person')); ?>:</b>
	<?php echo CHtml::encode($data->s_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_phone')); ?>:</b>
	<?php echo CHtml::encode($data->s_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_address')); ?>:</b>
	<?php echo CHtml::encode($data->s_address); ?>
	<br />


</div>
