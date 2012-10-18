<?php
/* @var $this PurchaserTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Purchaser Types',
);

$this->menu=array(
	array('label'=>'Create PurchaserType', 'url'=>array('create')),
	array('label'=>'Manage PurchaserType', 'url'=>array('admin')),
);
?>

<h1>Purchaser Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
