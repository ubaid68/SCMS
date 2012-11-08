<?php
/* @var $this DefectiveMaterialController */
/* @var $model DefectiveMaterial */

$this->breadcrumbs=array(
	'Defective Materials'=>array('index'),
	$model->dm_id=>array('view','id'=>$model->dm_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DefectiveMaterial', 'url'=>array('index')),
	array('label'=>'Create DefectiveMaterial', 'url'=>array('create')),
	array('label'=>'View DefectiveMaterial', 'url'=>array('view', 'id'=>$model->dm_id)),
	array('label'=>'Manage DefectiveMaterial', 'url'=>array('admin')),
);
?>

<h1>Update DefectiveMaterial <?php echo $model->dm_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>