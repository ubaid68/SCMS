<?php
/* @var $this CustomerController */
/* @var $data Customer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cu_id), array('view', 'id'=>$data->cu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_name')); ?>:</b>
	<?php echo CHtml::encode($data->cu_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_desp')); ?>:</b>
	<?php echo CHtml::encode($data->cu_desp); ?>
	<br />


</div>