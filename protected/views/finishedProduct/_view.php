<?php
/* @var $this FinishedProductController */
/* @var $data FinishedProduct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fp_id), array('view', 'id'=>$data->fp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login->u_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_id')); ?>:</b>
	<?php echo CHtml::encode($data->p->p_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fp_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->fp_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fp_date')); ?>:</b>
	<?php echo CHtml::encode($data->fp_date); ?>
	<br />


</div>