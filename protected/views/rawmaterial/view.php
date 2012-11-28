<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */

$this->breadcrumbs=array(
	'Rawmaterials'=>array('index'),
	$model->rm_id,
);

$this->menu=array(
	array('label'=>'List Rawmaterial', 'url'=>array('index')),
	array('label'=>'Create Rawmaterial', 'url'=>array('create')),
	array('label'=>'Update Rawmaterial', 'url'=>array('update', 'id'=>$model->rm_id)),
	array('label'=>'Delete Rawmaterial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rm_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rawmaterial', 'url'=>array('admin')),
);
?>
<d
<h1>View Rawmaterial #<?php echo $model->rm_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rm_id',
		array(
					'name'=>'rmc_id',
					'type'=>'raw',
					'value'=>$model->rmc->rmc_name,
				),
		
		'rm_name',
		'rm_code',
		'rmp_unit',
		'rm_quantity',
		'rm_reservelevel',
	),
)); ?>
