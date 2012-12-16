<?php
/* @var $this TransactionPrController */
/* @var $model TransactionPr */

$this->breadcrumbs=array(
	'Transaction Prs'=>array('index'),
	$model->name=>array('view','id'=>$model->tpr_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransactionPr', 'url'=>array('index')),
	array('label'=>'Create TransactionPr', 'url'=>array('create')),
	array('label'=>'View TransactionPr', 'url'=>array('view', 'id'=>$model->tpr_id)),
	array('label'=>'Manage TransactionPr', 'url'=>array('admin')),
);
?>

<h1>Update TransactionPr <?php echo $model->tpr_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>