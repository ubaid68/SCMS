<?php
/* @var $this SalePrController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sale Prs',
);

$this->menu=array(
	array('label'=>'Create SalePr', 'url'=>array('create')),
	array('label'=>'Manage SalePr', 'url'=>array('admin')),
);
?>

<h1>View Sale of Product</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
