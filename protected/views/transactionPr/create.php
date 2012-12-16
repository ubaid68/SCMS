<?php
/* @var $this TransactionPrController */
/* @var $model TransactionPr */

$this->breadcrumbs=array(
	'Transaction Prs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransactionPr', 'url'=>array('index')),
	array('label'=>'Manage TransactionPr', 'url'=>array('admin')),
);
?>

<h1>Create TransactionPr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>