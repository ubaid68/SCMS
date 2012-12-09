<?php
/* @var $this SaleTypeController */
/* @var $model SaleType */

$this->breadcrumbs=array(
	'Sale Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SaleType', 'url'=>array('index')),
	array('label'=>'Create SaleType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sale-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sale Types</h1>

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
	'id'=>'sale-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'st_id',
		'st_name',
		'st_description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
