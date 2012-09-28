<?php
/* @var $this RawmaterialCategoryController */
/* @var $data RawmaterialCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rawmaterial category id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rmc_id), array('view', 'id'=>$data->rmc_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rawmaterial category name')); ?>:</b>
	<?php echo CHtml::encode($data->rmc_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rawmaterial category quantity measures')); ?>:</b>
	<?php echo CHtml::encode($data->rmc_qmeasures); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rawmaterial category description')); ?>:</b>
	<?php echo CHtml::encode($data->rmc_description); ?>
	<br />


</div>