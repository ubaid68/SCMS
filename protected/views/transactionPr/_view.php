<?php
/* @var $this TransactionPrController */
/* @var $data TransactionPr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tpr_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tpr_id), array('view', 'id'=>$data->tpr_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />


</div>