<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */

$this->breadcrumbs=array(
	'Factory Materials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FactoryMaterial', 'url'=>array('index')),
	array('label'=>'Manage FactoryMaterial', 'url'=>array('admin')),
);
?>

<h1>Send Materials</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>