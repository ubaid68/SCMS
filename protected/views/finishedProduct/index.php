<?php
/* @var $this FinishedProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Finished Products',
);

$this->menu=array(
	array('label'=>'Create FinishedProduct', 'url'=>array('create')),
	array('label'=>'Manage FinishedProduct', 'url'=>array('admin')),
);
?>

<h1>Finished Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
