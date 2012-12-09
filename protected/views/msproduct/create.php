<?php
/* @var $this MsproductController */
/* @var $model Msproduct */

$this->breadcrumbs=array(
	'Msproducts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Msproduct', 'url'=>array('index')),
	array('label'=>'Manage Msproduct', 'url'=>array('admin')),
);
?>

<h1>Create Msproduct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>