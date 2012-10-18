<?php
/* @var $this RawmaterialController */
/* @var $data Rawmaterial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rawmaterial(id)')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rm_id), array('view', 'id'=>$data->rm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_name')); ?>:</b>
	<?php echo CHtml::encode($data->rm_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('rmc_id')); ?>:</b>
	<?php echo CHtml::encode($data->rmc->rmc_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_code')); ?>:</b>
	<?php echo CHtml::encode($data->rm_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rmp_unit')); ?>:</b>
	<?php echo CHtml::encode($data->rmp_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->rm_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_reservelevel')); ?>:</b>
	<?php echo CHtml::encode($data->rm_reservelevel); ?>
	<br />


</div>