<?php
/* @var $this RawmaterialCategoryController */
/* @var $model RawmaterialCategory */

$this->breadcrumbs=array(
	'Rawmaterial Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RawmaterialCategory', 'url'=>array('index')),
	array('label'=>'Create RawmaterialCategory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rawmaterial-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div style="margin-right:250px;">
<h1>Manage Rawmaterial Categories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rawmaterial-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rmc_id',
		'rmc_name',
		'rmc_qmeasures',
		'rmc_description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
