<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);*/

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
<h1>View Stock Report(product)</h1>

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
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'p_id',
		'p_code',
		'p_name',
		array(
					'name'=>'pc_id',
					'type'=>'raw',
					'value'=>'$data->pc->pc_name',
				),
		//'pc_id',
		'p_quantity',
		
		//'p_price',
	/*	array(
					'header'=>'Quantity',
					'type'=>'raw',
					'value'=>'$data->p_quantity.$data->pc->pc_qmeasures' ,
				),
	*/	
	'p_reservelevel',		
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
)); 
?>
</div>