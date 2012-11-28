<?php
/* @var $this SuppliesController */
/* @var $data Supplies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplies_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->supplies_id), array('view', 'id'=>$data->supplies_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_id')); ?>:</b>
	<?php echo CHtml::encode($data->s->supplier_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_id')); ?>:</b>
	<?php echo CHtml::encode($data->rm_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_date')); ?>:</b>
	<?php echo CHtml::encode($data->s_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_unitprice')); ?>:</b>
	<?php echo CHtml::encode($data->s_unitprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->s_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_discount')); ?>:</b>
	<?php echo CHtml::encode($data->s_discount); ?>
	<br />


</div>
<br /><br /><br />