<?php
/* @var $this FactoryMaterialController */
/* @var $model FactoryMaterial */

$this->breadcrumbs=array(
	'Factory Materials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FactoryMaterial', 'url'=>array('index')),
	array('label'=>'Create FactoryMaterial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('factory-material-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Factory Materials</h1>

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
	'id'=>'factory-material-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sf_id',
		
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
		'sf_quantity',
		'sf_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
