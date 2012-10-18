<?php
/* @var $this PurchaserTypeController */
/* @var $model PurchaserType */

$this->breadcrumbs=array(
	'Purchaser Types'=>array('index'),
	$model->purt_id=>array('view','id'=>$model->purt_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchaserType', 'url'=>array('index')),
	array('label'=>'Create PurchaserType', 'url'=>array('create')),
	array('label'=>'View PurchaserType', 'url'=>array('view', 'id'=>$model->purt_id)),
	array('label'=>'Manage PurchaserType', 'url'=>array('admin')),
);
?>

<h1>Update PurchaserType <?php echo $model->purt_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>