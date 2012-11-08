<?php
/* @var $this DefectiveMaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Defective Materials',
);

$this->menu=array(
	array('label'=>'Create DefectiveMaterial', 'url'=>array('create')),
	array('label'=>'Manage DefectiveMaterial', 'url'=>array('admin')),
);
?>

<h1>Defective Materials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
