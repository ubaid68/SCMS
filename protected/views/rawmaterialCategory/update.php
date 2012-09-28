<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */

$this->breadcrumbs=array(
	'Rawmaterial Categories'=>array('index'),
	$model->rmc_id=>array('view','id'=>$model->rmc_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RawmaterialCategory', 'url'=>array('index')),
	array('label'=>'Create RawmaterialCategory', 'url'=>array('create')),
	array('label'=>'View RawmaterialCategory', 'url'=>array('view', 'id'=>$model->rmc_id)),
	array('label'=>'Manage RawmaterialCategory', 'url'=>array('admin')),
);
?>

<h1>Update RawmaterialCategory <?php echo $model->rmc_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>