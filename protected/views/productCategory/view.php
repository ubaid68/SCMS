<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Product Categories'=>array('index'),
	$model->pc_id,
);

$this->menu=array(
	array('label'=>'List ProductCategory', 'url'=>array('index')),
	array('label'=>'Create ProductCategory', 'url'=>array('create')),
	array('label'=>'Update ProductCategory', 'url'=>array('update', 'id'=>$model->pc_id)),
	array('label'=>'Delete ProductCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductCategory', 'url'=>array('admin')),
);
?>
<div style="margin-right:240px;">
<h1>View ProductCategory #<?php echo $model->pc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pc_id',
		'pc_name',
		'pc_qmeasures',
		'pc_description',
	),
)); ?></div>
