<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Supplier', 'url'=>array('index')),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
);
?>
<div style="margin-right:250px;">
<h1>Add Supplier</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>