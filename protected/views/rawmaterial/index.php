<?php
/* @var $this RawmaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rawmaterials',
);

$this->menu=array(
	array('label'=>'Create Rawmaterial', 'url'=>array('create')),
	array('label'=>'Manage Rawmaterial', 'url'=>array('admin')),
);
?>

<h1>Rawmaterials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
