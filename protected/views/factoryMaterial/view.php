<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */

$this->breadcrumbs=array(
	'Factory Materials'=>array('index'),
	$model->sf_id,
);

$this->menu=array(
	array('label'=>'List FactoryMaterial', 'url'=>array('index')),
	array('label'=>'Create FactoryMaterial', 'url'=>array('create')),
	array('label'=>'Update FactoryMaterial', 'url'=>array('update', 'id'=>$model->sf_id)),
	array('label'=>'Delete FactoryMaterial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sf_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FactoryMaterial', 'url'=>array('admin')),
);
?>

<h1>View FactoryMaterial #<?php echo $model->sf_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sf_id',
		array(
					'name'=>'login_id',
					'type'=>'raw',
					'value'=>$model->login->u_fname,
				),
		array(
					'name'=>'rm_id',
					'type'=>'raw',
					'value'=>$model->rm->rm_name,
				),
		//'login_id',
		//'rm_id',
		'sf_quantity',
		'sf_date',
	),
)); ?>
