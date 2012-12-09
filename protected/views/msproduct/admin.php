<?php
/* @var $this MsproductController */
/* @var $model Msproduct */

$this->breadcrumbs=array(
	'Msproducts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Msproduct', 'url'=>array('index')),
	array('label'=>'Create Msproduct', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('msproduct-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Msproducts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="as">
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> </div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'msproduct-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ms_id',
		'product_id',
		'product_name',
		'total_quantity',
		'total_cost',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
