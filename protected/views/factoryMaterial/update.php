<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */

$this->breadcrumbs=array(
	'Factory Materials'=>array('index'),
	$model->sf_id=>array('view','id'=>$model->sf_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FactoryMaterial', 'url'=>array('index')),
	array('label'=>'Create FactoryMaterial', 'url'=>array('create')),
	array('label'=>'View FactoryMaterial', 'url'=>array('view', 'id'=>$model->sf_id)),
	array('label'=>'Manage FactoryMaterial', 'url'=>array('admin')),
);
?>

<h1>Update FactoryMaterial <?php echo $model->sf_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>