<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
*/
?>
<div style="margin-right:240px;">

<h1>Add Product</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>