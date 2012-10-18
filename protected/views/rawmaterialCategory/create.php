<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */

$this->breadcrumbs=array(
	'Rawmaterial Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RawmaterialCategory', 'url'=>array('index')),
	array('label'=>'Manage RawmaterialCategory', 'url'=>array('admin')),
);
?>

<h1>Add Rawmaterial Category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>