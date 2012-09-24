<?php
/* @var $this EmployeeTypeController */
/* @var $model EmployeeType */

$this->breadcrumbs=array(
	'Employee Types'=>array('index'),
	$model->et_id,
);

$this->menu=array(
	array('label'=>'List EmployeeType', 'url'=>array('index')),
	array('label'=>'Create EmployeeType', 'url'=>array('create')),
	array('label'=>'Update EmployeeType', 'url'=>array('update', 'id'=>$model->et_id)),
	array('label'=>'Delete EmployeeType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->et_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeType', 'url'=>array('admin')),
);
?>

<h1>View EmployeeType #<?php echo $model->et_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'et_id',
		'et_name',
		'et_desp',
	),
)); ?>
