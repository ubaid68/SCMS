<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */

$this->breadcrumbs=array(
	'Finished Products'=>array('index'),
	$model->fp_id=>array('view','id'=>$model->fp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FinishedProduct', 'url'=>array('index')),
	array('label'=>'Create FinishedProduct', 'url'=>array('create')),
	array('label'=>'View FinishedProduct', 'url'=>array('view', 'id'=>$model->fp_id)),
	array('label'=>'Manage FinishedProduct', 'url'=>array('admin')),
);
?>

<h1>Update FinishedProduct <?php echo $model->fp_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>