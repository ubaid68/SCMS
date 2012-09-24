<?php
/* @var $this EmployeeTypeController */
/* @var $model EmployeeType */

$this->breadcrumbs=array(
	'Employee Types'=>array('index'),
	$model->et_id=>array('view','id'=>$model->et_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeType', 'url'=>array('index')),
	array('label'=>'Create EmployeeType', 'url'=>array('create')),
	array('label'=>'View EmployeeType', 'url'=>array('view', 'id'=>$model->et_id)),
	array('label'=>'Manage EmployeeType', 'url'=>array('admin')),
);
?>

<h1>Update EmployeeType <?php echo $model->et_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>