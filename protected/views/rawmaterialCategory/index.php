<?php
/* @var $this RawmaterialCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rawmaterial Categories',
);

$this->menu=array(
	array('label'=>'Create RawmaterialCategory', 'url'=>array('create')),
	array('label'=>'Manage RawmaterialCategory', 'url'=>array('admin')),
);
?>
<div style="margin-right:250px;">
<h1>View Rawmaterial Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>