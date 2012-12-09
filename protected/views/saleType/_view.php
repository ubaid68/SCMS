<?php
/* @var $this SaleTypeController */
/* @var $data SaleType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->st_id), array('view', 'id'=>$data->st_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_name')); ?>:</b>
	<?php echo CHtml::encode($data->st_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_description')); ?>:</b>
	<?php echo CHtml::encode($data->st_description); ?>
	<br />


</div>
