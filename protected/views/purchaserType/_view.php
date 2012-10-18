<?php
/* @var $this PurchaserTypeController */
/* @var $data PurchaserType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('purt_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->purt_id), array('view', 'id'=>$data->purt_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purt_name')); ?>:</b>
	<?php echo CHtml::encode($data->purt_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purt_desp')); ?>:</b>
	<?php echo CHtml::encode($data->purt_desp); ?>
	<br />


</div>