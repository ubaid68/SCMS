<?php
/* @var $this SalePrController */
/* @var $model SalePr */

$this->breadcrumbs=array(
	'Sale Prs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SalePr', 'url'=>array('index')),
	array('label'=>'Manage SalePr', 'url'=>array('admin')),
);
?>

<h1>Create SalePr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>