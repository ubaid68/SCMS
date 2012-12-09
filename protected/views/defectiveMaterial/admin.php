<?php
/* @var $this DefectiveMaterialController */
/* @var $model DefectiveMaterial */

$this->breadcrumbs=array(
	'Defective Materials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DefectiveMaterial', 'url'=>array('index')),
	array('label'=>'Create DefectiveMaterial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('defective-material-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Defective Materials</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<div class="as">
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> </div><div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'defective-material-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'dm_id',
		array(
					'name'=>'rm_id',
					'type'=>'raw',
					'value'=>'$data->rm->rm_name',
				),
		array(
					'name'=>'login_id',
					'type'=>'raw',
					'value'=>'$data->login->u_fname',
				),
		//'login_id',
		//'rm_id',
		'dm_quantity',
		'dm_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
