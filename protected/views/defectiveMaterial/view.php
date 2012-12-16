<?php
/* @var $this DefectiveMaterialController */
/* @var $model DefectiveMaterial */

$this->breadcrumbs=array(
	'Defective Materials'=>array('index'),
	$model->dm_id,
);

$this->menu=array(
	array('label'=>'List DefectiveMaterial', 'url'=>array('index')),
	array('label'=>'Create DefectiveMaterial', 'url'=>array('create')),
	array('label'=>'Update DefectiveMaterial', 'url'=>array('update', 'id'=>$model->dm_id)),
	array('label'=>'Delete DefectiveMaterial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dm_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DefectiveMaterial', 'url'=>array('admin')),
);
?>

<h1>View Defective Material #<?php echo $model->dm_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dm_id',
		array(
					'name'=>'rm_id',
					'type'=>'raw',
					'value'=>$model->rm->rm_name,
				),
		array(
				'name'=>'login_id',
				'type'=>'raw',
				'value'=>$model->login->u_fname,
				),
		//'login_id',
		//'rm_id',
		'dm_quantity',
		'dm_date',
	),
)); ?>
