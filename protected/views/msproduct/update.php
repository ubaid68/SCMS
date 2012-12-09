<?php
/* @var $this MsproductController */
/* @var $model Msproduct */

$this->breadcrumbs=array(
	'Msproducts'=>array('index'),
	$model->ms_id=>array('view','id'=>$model->ms_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Msproduct', 'url'=>array('index')),
	array('label'=>'Create Msproduct', 'url'=>array('create')),
	array('label'=>'View Msproduct', 'url'=>array('view', 'id'=>$model->ms_id)),
	array('label'=>'Manage Msproduct', 'url'=>array('admin')),
);
?>

<h1>Update Msproduct <?php echo $model->ms_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>