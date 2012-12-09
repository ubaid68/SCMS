<?php
/* @var $this SaleRmController */
/* @var $model SaleRm */

$this->breadcrumbs=array(
	'Sale Rms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SaleRm', 'url'=>array('index')),
	array('label'=>'Create SaleRm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sale-rm-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div style="margin-right:250px;">
<h1>Manage Sale Rms</h1>

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
	'id'=>'sale-rm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'srm_id',
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
		array(
					'name'=>'cu_id',
					'type'=>'raw',
					'value'=>'$data->cu->cu_name',
				),
		array(
					'name'=>'st_id',
					'type'=>'raw',
					'value'=>'$data->st->st_name',
				),	
		array(
					'name'=>'purt_id',
					'type'=>'raw',
					'value'=>'$data->purt->purt_name',
				),
		
		//'cu_id',
		//'login_id',
		//'rm_id',
		//'st_id',
		//'purt_id',
		'srm_date',
		'srmp_unit',
		'srm_quantity',
		'srm_discount',
		array(
			'header'=>'Discounted Price',
			'type'=>'raw',
			'value'=>'(($data->srmp_unit*$data->srm_quantity)*$data->srm_discount)/100'
		),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>