<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>



<div id="page-wrapper">
  <div id="main-wrapper">
    <div id="main-content"> 
   
    
      <div class="page-title ui-widget-content ui-corner-all">
  <h2><?php
   $user=(Employee::model()->findByPk(Yii::app()->user->id));
	//echo $user->role;
	$con=$user->role;
	switch($con)
	{
	case 'manager':
	echo "<font>Manager</font>";
	break;
	case 'productManager':
	echo "<font>Product Manager </font>";
	break;
	case 'materialManager':
	echo "<font> Raw Material Manager</font>";
	break;
	case 'salesMan':
	echo "<font>Salesman</font>";
	break;
	}
  ?> Options</h2>
  <br />

  <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Product Management</a></li>
      <li><a href="#tabs-2">Raw Materials Management</a></li>
      <li><a href="#tabs-3">User Management</a></li>
	  <li><a href="#tabs-5">Supplier & Customer </a></li>
      <li><a href="#tabs-4">Reports</a></li>
	  
    </ul>
    <div id="tabs-1">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
		     
		    
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/product/Create';?>" class="Add_product tooltip" title="Add Product"> Add Product </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/productCategory/Create';?>" class="Add tooltip" title="Add Categories">Add Categories</a></li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/salePr/Create';?>" class="Sale tooltip" title="Sale Products"> Sale </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/finishedProduct/Create';?>" class="Receive tooltip" title="Receive Product"> Receive Product</a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/product/Index';?>" class="Clipboard_3 tooltip" title="Product List"> Product List </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/productCategory/Index';?>" class="Box_recycle tooltip" title="View Categories">View Categories</a></li>
             <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/salePr/Index';?>" class="Sale tooltip" title="Sale Products"> View Sale </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/finishedProduct/Index';?>" class="Receive tooltip" title="View Receive Product"> View  Received Products </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/product/Admin';?>" class="manage tooltip" title="Manage Products"> Manage Products </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/productCategory/Admin';?>" class="manage tooltip" title="Manage Categories">Manage Categories</a></li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/salePr/admin';?>" class="manageSales tooltip" title="Manage Sale"> Manage Sales </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/finishedProduct/admin';?>" class="managerecieveproduct tooltip" title="Manage Recieved product"> Manage Recieve Product </a> </li>
              <div class="clearfix"></div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div id="tabs-2">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
		   
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterial/Create';?>" class="Add_material tooltip" title="Add Materials"> Add Material </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterialcategory/Create';?>" class="Add tooltip" title="Add Category"> Add Category </a>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/saleRm/Create';?>" class="Sale tooltip" title="Sale Raw Materials"> Sale </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplies/Create';?>" class="Buy tooltip" title="Buy Raw Materials"> Buy </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/factoryMaterial/Create';?>" class="Send_factory tooltip" title="Send to Factory"> Send Factory </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/defectiveMaterial/Create';?>" class="Receive_back tooltip" title="Receive From Factory (defected material)"> Receive Back </a> </li>
			 <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterial/Index';?>" class="User_list tooltip" title="Material List"> Material List </a> </li>
			
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterialcategory/Index';?>" class="Box_recycle tooltip" title="View Categories">View Categories</a></li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/saleRm/Index';?>" class="Sale tooltip" title="View Sale"> View Sales </a> </li>
           	<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplies/Index';?>" class="Buy tooltip" title="View Supplies">View Supplies </a> </li>
			
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/factoryMaterial/Index';?>" class="viewfactory tooltip" title="View Factory Material">View Factory Material </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/defectiveMaterial/Index';?>" class="viewfactory tooltip" title="View Defective Material"> View Defective Material </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterial/Admin';?>" class="manage tooltip" title="Manage Materials"> Manage Material </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterialcategory/Admin';?>" class="manage tooltip" title="Manage Category"> Manage Category </a>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/saleRm/Admin';?>" class="manageSales tooltip" title="Manage Sale"> Manage Sales </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplies/Admin';?>" class="manage tooltip" title="Manage Supplies"> Manage Supplies </a>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/factoryMaterial/Admin';?>" class="manage tooltip" title="Manage Factory Material">Manage Factory Material </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/defectiveMaterial/Admin';?>" class="manage tooltip" title="Manage Defective Material">Manage Defective Material</a> </li>
			
            
            
              <div class="clearfix"></div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div id="tabs-3">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
		    			
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/employee/Create';?>" class="Add_user tooltip" title="Add User who can use SCMS"> Add User </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/employee/Index';?>" class="User_list tooltip" title="List of users who can use SCMS"> User List </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/employee/Admin';?>" class="manage tooltip" title="Manage Users"> Manage User </a> </li>
                       
			 <div class="clearfix"></div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
	<div id="tabs-5">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
		  <div class="clearfix"></div>
              
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplier/Create';?>" class="Add_vendor tooltip" title="Add Supplier"> Add Supplier </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplier/Index';?>" class="Vendor_list tooltip" title="Supplier List"> Supplier List </a></li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/supplier/Admin';?>" class="manage tooltip" title="Manage Supplier"> Manage Suppliers </a></li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/customer/Create';?>" class="Add_vendor tooltip" title="Add Customer"> Add Customer </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/customer/Index';?>" class="Vendor_list tooltip" title="Customer List"> Customer List </a></li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/customer/Admin';?>" class="manage tooltip" title="Manage Customers"> Manage Customers </a></li>
			
			
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div id="tabs-4">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
		   
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/product/StockReportPR';?>" class="Report tooltip" title="Stock Product Report"> Product Stock Report </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/rawmaterial/StockReportRM';?>" class="Report tooltip" title="Stock Material Report"> Material Stock Report </a> </li>
            
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/Msproduct/MostSaleableProductRs';?>" class="Top_sale tooltip" title="Most SaleAble Product(Rs)">Most SaleAble Product(Rs) </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/Msproduct/MostSaleableProductQty';?>" class="Top_sale tooltip" title="Most SaleAble Product(Qty)">Most SaleAble Product(Qty) </a> </li>
            <li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/salePr/InvoicePR';?>" class="invoice tooltip" title="Invoice">Invoice </a> </li>
			<li> <a href="<?php echo Yii::app()->baseUrl.'/index.php/TransactionPr/admin';?>" class="Transaction tooltip" title="Transaction">Transaction </a> </li>
                <div class="clearfix"></div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!----- Custom Dashboard Edited End ------> 
</div>
    </div>
    <div class="clearfix"></div>
  </div>
   
   
</div>
     <div style="background-color:#e0e0e0; ">
     
        <?php// echo Yii::app()->baseUrl.'/index.php/TransactionPr/Admin';
		
	
		//$mo=new TransactionPr('search');
    
		//$this->renderPartial('//TransactionPr/admin', array('model'=>$mo))
		
		//Yii::app()->controller->renderFile(Yii::app()->basePath.'/TransactionPr/admin',$params);
		
				?>
		<?php /*$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaction-pr-grid',
	'dataProvider'=>$prmodel,
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
)); */?>
 </div>

	</body>
</html>
