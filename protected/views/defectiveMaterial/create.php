<?php
/* @var $this DefectiveMaterialController */
/* @var $model DefectiveMaterial */

$this->breadcrumbs=array(
	'Defective Materials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DefectiveMaterial', 'url'=>array('index')),
	array('label'=>'Manage DefectiveMaterial', 'url'=>array('admin')),
);
?>

<h1>Add DefectiveMaterial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>