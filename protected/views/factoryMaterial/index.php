<?php
/* @var $this FactoryMaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Factory Materials',
);

$this->menu=array(
	array('label'=>'Create FactoryMaterial', 'url'=>array('create')),
	array('label'=>'Manage FactoryMaterial', 'url'=>array('admin')),
);
?>

<h1>View Send Materials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
