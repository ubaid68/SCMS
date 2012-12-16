<?php
/* @var $this SalePrController */
/* @var $model SalePr */

$this->breadcrumbs=array(
	'Sale Prs'=>array('index'),
	$model->sp_id,
);

$this->menu=array(
	array('label'=>'List SalePr', 'url'=>array('index')),
	array('label'=>'Create SalePr', 'url'=>array('create')),
	array('label'=>'Update SalePr', 'url'=>array('update', 'id'=>$model->sp_id)),
	array('label'=>'Delete SalePr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SalePr', 'url'=>array('admin')),
);
?>

<h1>View Sale Product #<?php echo $model->sp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sp_id',
		array(
					'name'=>'p_id',
					'type'=>'raw',
					'value'=>$model->p->p_name,
				),
		array(
					'name'=>'login_id',
					'type'=>'raw',
					'value'=>$model->login->u_fname,
				),
		array(
					'name'=>'cu_id',
					'type'=>'raw',
					'value'=>$model->cu->cu_name,
				),
		array(
					'name'=>'st_id',
					'type'=>'raw',
					'value'=>$model->st->st_name,
				),
		array(
					'name'=>'purt_id',
					'type'=>'raw',
					'value'=>$model->purt->purt_name,
				),			
		//'p_id',
		//'login_id',
		//'cu_id',
		//'st_id',
		//'purt_id',
		'sp_date',
		'sp_unit',
		'sp_quantity',
		'sp_discount',
	),
)); ?>
