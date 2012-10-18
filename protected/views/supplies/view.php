<?php
/* @var $this SuppliesController */
/* @var $model Supplies */

$this->breadcrumbs=array(
	'Supplies'=>array('index'),
	$model->supplies_id,
);

$this->menu=array(
	array('label'=>'List Supplies', 'url'=>array('index')),
	array('label'=>'Create Supplies', 'url'=>array('create')),
	array('label'=>'Update Supplies', 'url'=>array('update', 'id'=>$model->supplies_id)),
	array('label'=>'Delete Supplies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->supplies_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supplies', 'url'=>array('admin')),
);
?>

<h1>View Supplies #<?php echo $model->supplies_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'supplies_id',
		's_id',
		'rm_id',
		's_date',
		's_unitprice',
		's_quantity',
		's_discount',
	),
)); ?>
