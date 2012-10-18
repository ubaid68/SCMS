<?php
/* @var $this SuppliesController */
/* @var $model Supplies */

$this->breadcrumbs=array(
	'Supplies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Supplies', 'url'=>array('index')),
	array('label'=>'Create Supplies', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('supplies-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Supplies</h1>

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
	'id'=>'supplies-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'supplies_id',
		array(
					'name'=>'s_id',
					'type'=>'raw',
					'value'=>'$data->s->supplier_name',
				),
		array(
					'name'=>'rm_id',
					'type'=>'raw',
					'value'=>'$data->rm->rm_name',
				),			
		
		
		//'s_id',
		//'rm_id',
		's_date',
		's_unitprice',
		's_quantity',
		's_discount',
		
		array(
			'header'=>'Discounted Price',
			'type'=>'raw',
			'value'=>'(($data->s_unitprice*$data->s_quantity)*$data->s_discount)/100'
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
