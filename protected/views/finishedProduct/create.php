<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */

$this->breadcrumbs=array(
	'Finished Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FinishedProduct', 'url'=>array('index')),
	array('label'=>'Manage FinishedProduct', 'url'=>array('admin')),
);
?>

<h1>Recieve Product</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>