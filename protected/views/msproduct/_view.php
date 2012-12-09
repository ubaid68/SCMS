<?php
/* @var $this MsproductController */
/* @var $data Msproduct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ms_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ms_id), array('view', 'id'=>$data->ms_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->total_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_cost')); ?>:</b>
	<?php echo CHtml::encode($data->total_cost); ?>
	<br />


</div>