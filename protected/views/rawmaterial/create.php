<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */

$this->breadcrumbs=array(
	'Rawmaterials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rawmaterial', 'url'=>array('index')),
	array('label'=>'Manage Rawmaterial', 'url'=>array('admin')),
);
?>
<div style="margin-right:240px;">
<h1>Add Rawmaterial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div> 