<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */

$this->breadcrumbs=array(
	'Sale Rms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SaleRm', 'url'=>array('index')),
	array('label'=>'Manage SaleRm', 'url'=>array('admin')),
);
?>

<h1>Create SaleRm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>