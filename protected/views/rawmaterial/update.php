<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */

$this->breadcrumbs=array(
	'Rawmaterials'=>array('index'),
	$model->rm_id=>array('view','id'=>$model->rm_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rawmaterial', 'url'=>array('index')),
	array('label'=>'Create Rawmaterial', 'url'=>array('create')),
	array('label'=>'View Rawmaterial', 'url'=>array('view', 'id'=>$model->rm_id)),
	array('label'=>'Manage Rawmaterial', 'url'=>array('admin')),
);
?>

<h1>Update Rawmaterial <?php echo $model->rm_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>