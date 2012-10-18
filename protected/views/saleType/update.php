<?php
/* @var $this SaleTypeController */
/* @var $model SaleType */

$this->breadcrumbs=array(
	'Sale Types'=>array('index'),
	$model->st_id=>array('view','id'=>$model->st_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SaleType', 'url'=>array('index')),
	array('label'=>'Create SaleType', 'url'=>array('create')),
	array('label'=>'View SaleType', 'url'=>array('view', 'id'=>$model->st_id)),
	array('label'=>'Manage SaleType', 'url'=>array('admin')),
);
?>

<h1>Update SaleType <?php echo $model->st_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>