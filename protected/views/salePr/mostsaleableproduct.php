<?php


$this->breadcrumbs=array(
	'Sale Prs'=>array('index'),
	'Most Profitable Product',
);

?>

<h1>Most Profitable Products</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'MOST-pp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		
	
	),
	
)); ?>