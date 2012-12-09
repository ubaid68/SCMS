<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */





Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rawmaterial-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
$ds='Discounted Price'
?>
<div style="margin-right:300px;">
<h1>Manage Rawmaterials</h1>

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
	'id'=>'rawmaterial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'rm_id',
		array(
					'name'=>'rmc_id',
					'type'=>'raw',
					'value'=>'$data->rmc->rmc_name',
				),
		
		
		'rm_name',
		'rm_code',
		'rmp_unit',
		'rm_quantity',
		'rm_reservelevel',
		array(
			'class'=>'CButtonColumn',
		),
	),
));?></div> 

