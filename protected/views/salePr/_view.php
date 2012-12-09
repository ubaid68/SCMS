<?php
/* @var $this SalePrController */
/* @var $data SalePr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sp_id), array('view', 'id'=>$data->sp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::encode($data->p->p_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login->u_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cu_id')); ?>:</b>
	<?php echo CHtml::encode($data->cu->cu_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::encode($data->st->st_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purt_id')); ?>:</b>
	<?php echo CHtml::encode($data->purt->purt_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_date')); ?>:</b>
	<?php echo CHtml::encode($data->sp_date); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_unit')); ?>:</b>
	<?php echo CHtml::encode($data->sp_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->sp_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sp_discount')); ?>:</b>
	<?php echo CHtml::encode($data->sp_discount); ?>
	<br />

	

</div>
