<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */

$this->breadcrumbs=array(
	'Rawmaterial Categories'=>array('index'),
	$model->rmc_id,
);

$this->menu=array(
	array('label'=>'List RawmaterialCategory', 'url'=>array('index')),
	array('label'=>'Create RawmaterialCategory', 'url'=>array('create')),
	array('label'=>'Update RawmaterialCategory', 'url'=>array('update', 'id'=>$model->rmc_id)),
	array('label'=>'Delete RawmaterialCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rmc_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RawmaterialCategory', 'url'=>array('admin')),
);
?>

<h1>View RawmaterialCategory #<?php echo $model->rmc_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rmc_id',
		'rmc_name',
		'rmc_qmeasures',
		'rmc_description',
	),
)); ?>
