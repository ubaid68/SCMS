<?php
/* @var $this SalePrController */
/* @var $model SalePr */

$this->breadcrumbs=array(
	'Sale Prs'=>array('index'),
	$model->sp_id=>array('view','id'=>$model->sp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SalePr', 'url'=>array('index')),
	array('label'=>'Create SalePr', 'url'=>array('create')),
	array('label'=>'View SalePr', 'url'=>array('view', 'id'=>$model->sp_id)),
	array('label'=>'Manage SalePr', 'url'=>array('admin')),
);
?>

<h1>Update Sale Product <?php echo $model->sp_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>