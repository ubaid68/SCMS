<?php
/* @var $this RawmaterialController */
/* @var $model Rawmaterial */

$this->breadcrumbs=array(
	'Rawmaterials'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Rawmaterial', 'url'=>array('index')),
	array('label'=>'Create Rawmaterial', 'url'=>array('create')),
);*/

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
<div style="margin-right:250px;">
<h1>View Stock Report(Rawmaterial)</h1>

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
	'id'=>'rawmaterial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'rm_id',
		'rm_code',
		'rm_name',
		array(
					'name'=>'rmc_id',
					'type'=>'raw',
					'value'=>'$data->rmc->rmc_name',
				),
		
		//'rmp_unit',
		'rm_quantity',
		'rm_reservelevel',
		array(
            'header'=>'image',
            'type'=>'html',
			'value' => '$data->getpath()'
			//'CHtml::image(Yii::app()->request->baseUrl."/images/red.png","",array("style"=>"width:25px;height:25px;"))'
			
			/*'$data-> p_reservelevel < 150 ? CHtml::image(Yii::app()->request->baseUrl."/images/red.png","",array("style"=>"width:25px;height:25px;")):CHtml::image(Yii::app()->request->baseUrl."/images/green.png","",array("style"=>"width:25px;height:25px;"))'*/
			
 
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>