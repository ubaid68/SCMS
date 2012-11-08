<?php
/* @var $this FactoryMaterialController */
/* @var $data FactoryMaterial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sf_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sf_id), array('view', 'id'=>$data->sf_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rm_id')); ?>:</b>
	<?php echo CHtml::encode($data->rm->rm_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::encode($data->login->u_fname); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sf_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->sf_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sf_date')); ?>:</b>
	<?php echo CHtml::encode($data->sf_date); ?>
	<br />


</div>