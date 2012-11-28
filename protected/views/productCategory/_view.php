<?php
/* @var $this ProductCategoryController */
/* @var $data ProductCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pc_id), array('view', 'id'=>$data->pc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_name')); ?>:</b>
	<?php echo CHtml::encode($data->pc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_qmeasures')); ?>:</b>
	<?php echo CHtml::encode($data->pc_qmeasures); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_description')); ?>:</b>
	<?php echo CHtml::encode($data->pc_description); ?>
	<br />


</div>
<br /><br /><br />