<?php
/* @var $this PurchaserTypeController */
/* @var $model PurchaserType */

$this->breadcrumbs=array(
	'Purchaser Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchaserType', 'url'=>array('index')),
	array('label'=>'Manage PurchaserType', 'url'=>array('admin')),
);
?>

<h1>Create PurchaserType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>