<?php
/* @var $this MsproductController */
/* @var $model Msproduct */

$this->breadcrumbs=array(
	'Msproducts'=>array('index'),
	$model->ms_id,
);

$this->menu=array(
	array('label'=>'List Msproduct', 'url'=>array('index')),
	array('label'=>'Create Msproduct', 'url'=>array('create')),
	array('label'=>'Update Msproduct', 'url'=>array('update', 'id'=>$model->ms_id)),
	array('label'=>'Delete Msproduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ms_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Msproduct', 'url'=>array('admin')),
);
?>

<h1>View Msproduct #<?php echo $model->ms_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ms_id',
		'product_id',
		'product_name',
		'total_quantity',
		'total_cost',
	),
)); ?>
