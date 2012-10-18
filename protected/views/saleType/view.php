<?php
/* @var $this SaleTypeController */
/* @var $model SaleType */

$this->breadcrumbs=array(
	'Sale Types'=>array('index'),
	$model->st_id,
);

$this->menu=array(
	array('label'=>'List SaleType', 'url'=>array('index')),
	array('label'=>'Create SaleType', 'url'=>array('create')),
	array('label'=>'Update SaleType', 'url'=>array('update', 'id'=>$model->st_id)),
	array('label'=>'Delete SaleType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->st_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SaleType', 'url'=>array('admin')),
);
?>

<h1>View SaleType #<?php echo $model->st_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'st_id',
		'st_name',
		'st_description',
	),
)); ?>
