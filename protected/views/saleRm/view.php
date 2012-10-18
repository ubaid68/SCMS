<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */

$this->breadcrumbs=array(
	'Sale Rms'=>array('index'),
	$model->srm_id,
);

$this->menu=array(
	array('label'=>'List SaleRm', 'url'=>array('index')),
	array('label'=>'Create SaleRm', 'url'=>array('create')),
	array('label'=>'Update SaleRm', 'url'=>array('update', 'id'=>$model->srm_id)),
	array('label'=>'Delete SaleRm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->srm_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SaleRm', 'url'=>array('admin')),
);
?>

<h1>View SaleRm #<?php echo $model->srm_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'srm_id',
		'cu_id',
		'login_id',
		'rm_id',
		'st_id',
		'purt_id',
		'srm_date',
		'srmp_unit',
		'srm_quantity',
		'srm_discount',
	),
)); ?>
