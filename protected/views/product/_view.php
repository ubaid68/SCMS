<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->p_id), array('view', 'id'=>$data->p_id)); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('p_name')); ?>:</b>
	<?php echo CHtml::encode($data->p_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_id')); ?>:</b>
	<?php echo CHtml::encode($data->pc->pc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_code')); ?>:</b>
	<?php echo CHtml::encode($data->p_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_price')); ?>:</b>
	<?php echo CHtml::encode($data->p_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->p_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_reservelevel')); ?>:</b>
	<?php echo CHtml::encode($data->p_reservelevel); ?>
	<br />


</div>