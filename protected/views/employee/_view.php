<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->login_id), array('view', 'id'=>$data->login_id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />


</div>