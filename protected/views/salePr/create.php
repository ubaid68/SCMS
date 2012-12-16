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
<div style="margin-right:250px;">
<h1>Sale Product</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>