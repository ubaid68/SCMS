<?php
/* @var $this TransactionPrController */
/* @var $model TransactionPr */

$this->breadcrumbs=array(
	'Transaction Prs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TransactionPr', 'url'=>array('index')),
	array('label'=>'Create TransactionPr', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('transaction-pr-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Transaction Prs</h1>
<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

-->

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaction-pr-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'tpr_id',
		'type',
		'name',
		'quantity',
		array(
		'class'=>'CButtonColumn',
		//	'template'=>'{delete}',
		//	'template'=>'{update}',
		//	'template'=>'{view}',
		),
	
	
	),
)); ?>
