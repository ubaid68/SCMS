<?php
/* @var $this TransactionPrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaction Prs',
);

$this->menu=array(
	array('label'=>'Create TransactionPr', 'url'=>array('create')),
	array('label'=>'Manage TransactionPr', 'url'=>array('admin')),
);
?>

<h1>Transaction Prs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
