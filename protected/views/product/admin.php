<?php
/* @var $this ProductController */
/* @var $model Product */


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



	
<div style="margin-right:300px;">
<h1>Manage Products</h1>

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
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'p_id',
		
		array(
					'name'=>'pc_id',
					'type'=>'raw',
					'value'=>'$data->pc->pc_name',
				),
		//'pc_id',
		'p_name',
		'p_code',
		'p_price',
		'p_quantity',
		/*
		'p_reservelevel',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
