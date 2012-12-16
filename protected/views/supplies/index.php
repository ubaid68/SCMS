<?php
/* @var $this SuppliesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplies',
);

$this->menu=array(
	array('label'=>'Create Supplies', 'url'=>array('create')),
	array('label'=>'Manage Supplies', 'url'=>array('admin')),
);
?>

<h1>View Supplies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
