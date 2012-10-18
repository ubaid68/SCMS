<?php
/* @var $this SaleTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sale Types',
);

$this->menu=array(
	array('label'=>'Create SaleType', 'url'=>array('create')),
	array('label'=>'Manage SaleType', 'url'=>array('admin')),
);
?>

<h1>Sale Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
