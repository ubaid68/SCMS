<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */

$this->breadcrumbs=array(
	'Finished Products'=>array('index'),
	$model->fp_id,
);

$this->menu=array(
	array('label'=>'List FinishedProduct', 'url'=>array('index')),
	array('label'=>'Create FinishedProduct', 'url'=>array('create')),
	array('label'=>'Update FinishedProduct', 'url'=>array('update', 'id'=>$model->fp_id)),
	array('label'=>'Delete FinishedProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FinishedProduct', 'url'=>array('admin')),
);
?>

<h1>View FinishedProduct #<?php echo $model->fp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fp_id',
		array(
					'name'=>'login_id',
					'type'=>'raw',
					'value'=>$model->login->u_fname,
				),
		array(
					'name'=>'p_id',
					'type'=>'raw',
					'value'=>$model->p->p_name,
				),
		//'login_id',
		//'p_id',
		'fp_quantity',
		'fp_date',
	),
)); ?>
