<?php
/* @var $this EmployeeTypeController */
/* @var $data EmployeeType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('et_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->et_id), array('view', 'id'=>$data->et_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('et_name')); ?>:</b>
	<?php echo CHtml::encode($data->et_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('et_desp')); ?>:</b>
	<?php echo CHtml::encode($data->et_desp); ?>
	<br />


</div>