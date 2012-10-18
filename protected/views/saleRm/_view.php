<?php
/* @var $this SaleRmController */
/* @var $data SaleRm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('srm_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->srm_id), array('view', 'id'=>$data->srm_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::encode($data->cu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_id')); ?>:</b>
	<?php echo CHtml::encode($data->rm_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::encode($data->st_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purt_id')); ?>:</b>
	<?php echo CHtml::encode($data->purt_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('srm_date')); ?>:</b>
	<?php echo CHtml::encode($data->srm_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('srmp_unit')); ?>:</b>
	<?php echo CHtml::encode($data->srmp_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('srm_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->srm_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('srm_discount')); ?>:</b>
	<?php echo CHtml::encode($data->srm_discount); ?>
	<br />

	*/ ?>

</div>