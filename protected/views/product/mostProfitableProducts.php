<?php


$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

?>

<h1>Most Profitable Products</h1>





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
					'header'=>'Total Sale',
					//'name'=>'total',
					'type'=>'raw',
					//'value'=>'$data->getTotalSale($data->salePrs)',
					'value'=> function($data){
						return $data->getTotalSale($data->salePrs);
					},
					'sortable'=>TRUE,
				),
		
	),
)); ?>
