<?php
/* @var $this SaleTypeController */
/* @var $model SaleType */

$this->breadcrumbs=array(
	'Sale Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SaleType', 'url'=>array('index')),
	array('label'=>'Manage SaleType', 'url'=>array('admin')),
);
?>

<h1>Create SaleType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>