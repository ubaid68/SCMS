<?php
/* @var $this SaleRmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sale Rms',
);

$this->menu=array(
	array('label'=>'Create SaleRm', 'url'=>array('create')),
	array('label'=>'Manage SaleRm', 'url'=>array('admin')),
);
?>

<div style="margin-right:250px;">
<h1>Sale Rms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>