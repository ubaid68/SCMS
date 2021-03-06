<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('product-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div style="margin-right:250px;">
<h1>Top seller</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'p_id',
		array(
					'name'=>'p_id',
					'type'=>'raw',
					'value'=>'$data->p_name',
				),
		array(
					'name'=>'pc_id',
					'type'=>'raw',
					'value'=>'$data->pc->pc_name',
				),
		array(
					'header'=>'Total quantity',
					'type'=>'raw',
					'value'=>'Product::model()->GetTotalQuantity($data->salePrs)',
				),
		
	),
)); ?>
</div>