<?php
/* @var $this DefectiveMaterialController */
/* @var $data DefectiveMaterial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dm_id), array('view', 'id'=>$data->dm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_id')); ?>:</b>
	<?php echo CHtml::encode($data->rm_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->dm_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dm_date')); ?>:</b>
	<?php echo CHtml::encode($data->dm_date); ?>
	<br />


</div>