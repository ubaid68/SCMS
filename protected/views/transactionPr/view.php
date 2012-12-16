<?php
/* @var $this TransactionPrController */
/* @var $model TransactionPr */

$this->breadcrumbs=array(
	'Transaction Prs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TransactionPr', 'url'=>array('index')),
	array('label'=>'Create TransactionPr', 'url'=>array('create')),
	array('label'=>'Update TransactionPr', 'url'=>array('update', 'id'=>$model->tpr_id)),
	array('label'=>'Delete TransactionPr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tpr_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransactionPr', 'url'=>array('admin')),
);
?>

<h1>View TransactionPr #<?php echo $model->tpr_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tpr_id',
		'type',
		'name',
		'quantity',
	),
)); ?>
