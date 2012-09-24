<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->login_id), array('view', 'id'=>$data->login_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('et_id')); ?>:</b>
	<?php //echo CHtml::encode($data->et_id); ?>
	<?php echo CHtml::encode($data->et->et_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_fname')); ?>:</b>
	<?php echo CHtml::encode($data->u_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('u_lname')); ?>:</b>
	<?php echo CHtml::encode($data->u_lname); ?>
	<br />


</div>