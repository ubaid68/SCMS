<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */

$this->breadcrumbs=array(
	'Sale Rms'=>array('index'),
	$model->srm_id=>array('view','id'=>$model->srm_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SaleRm', 'url'=>array('index')),
	array('label'=>'Create SaleRm', 'url'=>array('create')),
	array('label'=>'View SaleRm', 'url'=>array('view', 'id'=>$model->srm_id)),
	array('label'=>'Manage SaleRm', 'url'=>array('admin')),
);
?>

<h1>Update Sale Raw material <?php echo $model->srm_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>