<?php
/* @var $this SuppliesController */
/* @var $model Supplies */

$this->breadcrumbs=array(
	'Supplies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Supplies', 'url'=>array('index')),
	array('label'=>'Manage Supplies', 'url'=>array('admin')),
);
?>

<h1>Buy rawmaterial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>