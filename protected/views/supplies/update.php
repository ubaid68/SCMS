<?php
/* @var $this SuppliesController */
/* @var $model Supplies */

$this->breadcrumbs=array(
	'Supplies'=>array('index'),
	$model->supplies_id=>array('view','id'=>$model->supplies_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supplies', 'url'=>array('index')),
	array('label'=>'Create Supplies', 'url'=>array('create')),
	array('label'=>'View Supplies', 'url'=>array('view', 'id'=>$model->supplies_id)),
	array('label'=>'Manage Supplies', 'url'=>array('admin')),
);
?>

<h1>Update Supplies <?php echo $model->supplies_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>