<?php
/* @var $this MsproductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Msproducts',
);

$this->menu=array(
	array('label'=>'Create Msproduct', 'url'=>array('create')),
	array('label'=>'Manage Msproduct', 'url'=>array('admin')),
);
?>

<h1>Msproducts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
