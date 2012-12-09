<?php
/* @var $this SalePrController */
/* @var $model SalePr */

$this->breadcrumbs=array(
	'Sale Prs'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List SalePr', 'url'=>array('index')),
	array('label'=>'Create SalePr', 'url'=>array('create')),
	
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sale-pr-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Invoice(Product)</h1>

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
	'id'=>'sale-pr-grid',
	'dataProvider'=>$model->invoiceprsearch(),
	//'filter'=>$model,
	'columns'=>array(
		'sp_id',
		//'st_id',
		/*array(
					'name'=>'st_id',
					'type'=>'raw',
					'value'=>'$data->st->st_name',
				),*/
		/*array(
					'name'=>'st_id',
					'type'=>'raw',
					'value'=>'$data->st->st_name',
				),*/
		array(
					'name'=>'p_id',
					'type'=>'raw',
					'value'=>'$data->p->p_name',
				),
		'sp_date',
		'sp_quantity',
		
		/*array(
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
					'name'=>'purt_id',
					'type'=>'raw',
					'value'=>'$data->purt->purt_name',
				),
		*/			
		//'p_id',
		//'login_id',
		//'cu_id',
		
		//'purt_id',
		
		
		'sp_unit',
		
		
		//'sp_discount',
		/*array(
			'header'=>'Discounted Price',
			'type'=>'raw',
			'value'=>'(($data->sp_unit*$data->sp_quantity)*$data->sp_discount)/100'
		),*/
		
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
