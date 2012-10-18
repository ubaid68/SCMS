<?php
/* @var $this ProductCategoryController */
/* @var $model ProductCategory */

$this->breadcrumbs=array(
	'Product Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductCategory', 'url'=>array('index')),
	array('label'=>'Manage ProductCategory', 'url'=>array('admin')),
);
?>

<h1>Add Product Category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>