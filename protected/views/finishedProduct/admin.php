<?php
/* @var $this FinishedProductController */
/* @var $model FinishedProduct */

$this->breadcrumbs=array(
	'Finished Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FinishedProduct', 'url'=>array('index')),
	array('label'=>'Create FinishedProduct', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('finished-product-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Finished Products</h1>

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
	'id'=>'finished-product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fp_id',
		
		
		array(
					'name'=>'p_id',
					'type'=>'raw',
					'value'=>'$data->p->p_name',
				),
		array(
					'name'=>'login_id',
					'type'=>'raw',
					'value'=>'$data->login->u_fname',
				),
		//'login_id',
		//'p_id',
		'fp_quantity',
		'fp_date',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
