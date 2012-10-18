<?php
/* @var $this PurchaserTypeController */
/* @var $model PurchaserType */

$this->breadcrumbs=array(
	'Purchaser Types'=>array('index'),
	$model->purt_id,
);

$this->menu=array(
	array('label'=>'List PurchaserType', 'url'=>array('index')),
	array('label'=>'Create PurchaserType', 'url'=>array('create')),
	array('label'=>'Update PurchaserType', 'url'=>array('update', 'id'=>$model->purt_id)),
	array('label'=>'Delete PurchaserType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->purt_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaserType', 'url'=>array('admin')),
);
?>

<h1>View PurchaserType #<?php echo $model->purt_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'purt_id',
		'purt_name',
		'purt_desp',
	),
)); ?>
