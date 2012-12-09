<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/general.css"/>
<!--<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery-1.3.2.js"></script>-->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/superfish.js"></script>
<!--<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery-ui-1.7.2.js"></script>-->
 
<?php Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' ); ?>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/tooltip.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/tablesorter.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/tablesorter-pager.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/cookie.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/thickbox-compressed.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery-dynamic-form.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ui.css" />
<?php Yii::app()->getClientScript()->registerCssFile('/fira/css/ui.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/forms.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/thickbox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/messages.css" />
<?php Yii::app()->getClientScript()->registerCssFile('/fira/css/messages.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatable.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/general.css" />


</head>

<body>

 <?php if(!Yii::app()->user->isGuest)
   {
   ?>
   
<div id="header">

	
  <div id="top-menu">
	<?php 
	 
   echo "<font color=#E6E6E6 style='padding-right:1px'>My account </font>|".CHtml::link("Setting",Yii::app()->baseUrl.'/index.php/Employee/Admin',array("style"=>"color:#E6E6E6;padding-left:3px"))."<font color=#E6E6E6 style='padding-left:9px'>Logged in as </font> ";
	
	 $user=(Employee::model()->findByPk(Yii::app()->user->id));
	//echo $user->role;
	$con=$user->role;
	switch($con)
	{
	case 'manager':
	echo "<font color=#E6E6E6 style='padding-right:2px'>Manager</font>";
	break;
	case 'productManager':
	echo "<font color=#E6E6E6 style='padding-right:2px'>Product Manager </font>";
	break;
	case 'materialManager':
	echo "<font color=#E6E6E6 style='padding-right:2px'> Raw Material Manager</font>";
	break;
	case 'salesMan':
	echo "<font color=#E6E6E6 style='padding-right:2px'>Salesman</font>";
	break;
	}
	echo "|";
	echo CHtml::link("Logout",Yii::app()->baseUrl.'/index.php/site/logout',array("style"=>"color:#E6E6E6;padding-left:3px")); 
	?> 
  <?php
 
  ?>
        
		
		<div id="mainmenu">
		
	</div>
  </div>
  <div id="sitename"> <a href="<?php echo Yii::app()->baseUrl.'/index.php';?>" class="logo float-left"  title="Admintasia">SCMS | Supply Chain Management System</a>
  			<!--<div class="ui-corner-all float-right worth">
			<p><b>Stock Worth: </b>Rs 1,002,230,668,096</p>
			</div>-->
  </div>
  
   
   
  <ul id="navigation" class="sf-navbar">
  
  
		<?php
$this->widget('zii.widgets.CMenu',array(
  'activeCssClass'=>'active',
  'activateParents'=>true,
  'items'=>array(
	 array(
      'label'=>'Home',
      'url'=>array('/site/index'),
	  ),
	  array(
      'label'=>'Reports',
      'url'=>array(''),
      'linkOptions'=>array('id'=>'menuChange'),
      'itemOptions'=>array('id'=>'itemChange'),
      'items'=>array(
        array('label'=>'Product','url'=>array('#'),
		
		'items'=>array(
        array('label'=>'Stock Report','url'=>array('/product/StockReportPR')),),),
        array('label'=>'Raw Material','url'=>array('#'),
		
		'items'=>array(
        array('label'=>'Stock Report', 'url'=>array('/rawmaterial/StockReportRM')),),),
        array('label'=>'Most Saleable Product(Rs)', 'url'=>array('/Msproduct/MostSaleableProductRs')),
		array('label'=>'Most Saleable Product(Qty)', 'url'=>array('/Msproduct/MostSaleableProductQty')),
      ),
    ),
	array(
      'label'=>'Store Management',
      'url'=>array('#'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'Product Store', 'url'=>array('#'),
		'items'=>array(
        array('label'=>'Store Inward', 'url'=>array('/finishedProduct/Index')),
        array('label'=>'Store Outward', 'url'=>array('/salePr/Index')))),
        array('label'=>'Raw Material Store', 'url'=>array('#'),
		'items'=>array(
        array('label'=>'Store Inward', 'url'=>array('/supplies/Index')),
        array('label'=>'Store Outward', 'url'=>array('/saleRm/Index')))),
       
      ),
    ),
    array(
      'label'=>'Product Management',
      'url'=>array('/product/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'View All Products', 'url'=>array('/product/index')),
        array('label'=>'View All Categories', 'url'=>array('/productCategory/index')),
        array('label'=>'Add a New Product', 'url'=>array('/product/create')),
        array('label'=>'Add a new Category', 'url'=>array('/productCategory/create')),
        array('label'=>'Sale Product', 'url'=>array('/salePr/create')),
		array('label'=>'Manage Products', 'url'=>array('/product/admin')),
		array('label'=>'Manage Sale', 'url'=>array('/salePr/admin')),
		array('label'=>'Product Invoice', 'url'=>array('/SalePr/InvoicePR')),
      ),
    ),
	 array(
      'label'=>'Raw Material Management',
      'url'=>array('/rawmaterial/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'View All material', 'url'=>array('/rawmaterial/index')),
        array('label'=>'View All Categories', 'url'=>array('/rawmaterialCategory/index')),
        array('label'=>'Add a New Material', 'url'=>array('/rawmaterial/create')),
        array('label'=>'Add a new Category', 'url'=>array('/rawmaterialCategory/create')),
        array('label'=>'Sale Material', 'url'=>array('/saleRm/create')),
		array('label'=>'Manage Material', 'url'=>array('/rawmaterial/Admin')),
		array('label'=>'Manage Sale', 'url'=>array('/saleRm/admin')),
		array('label'=>'Material Invoice', 'url'=>array('/SaleRm/InvoiceRM')),
      ),
    ),
	array(
      'label'=>'User Management',
      'url'=>array('/product/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'View All Users', 'url'=>array('/employee/index')),
        array('label'=>'Add a New User', 'url'=>array('/employee/create')),
        array('label'=>'Manage Users', 'url'=>array('/employee/admin')),
		
		
       
	  ),
    ),
	 array(
      'label'=>'Supplier & Customers',
      'url'=>array('/supplier/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'View All Suppliers', 'url'=>array('/supplier/index')),
        array('label'=>'Add a new Suppliers', 'url'=>array('/supplier/create')),
        array('label'=>'Manage Suppliers', 'url'=>array('/supplier/admin')),
        array('label'=>'View All Customers', 'url'=>array('/customer/index')),
        array('label'=>'Add a new Customers', 'url'=>array('/customer/create')),
        array('label'=>'Manage Customers', 'url'=>array('/customer/admin')),
	  ),
    ),
	
	
))); ?>

  </ul>
  
</div>
  <?php }?>   
<div id="page-wrapper">
  <div id="main-wrapper">
    
        <?php echo $content; ?>  
		
     <div class="clearfix"></div>
  </div>
   <?php if(!Yii::app()->user->isGuest){?>
<div id="sidebar">
  <div class="side-col ui-sortable">
 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
      <div class="portlet-header ui-widget-header">Navigation Menu</div>
      <div class="portlet-content">
        <div id="accordion">
          <div>
            <h3><a href="#">Product Management</a></h3>
            <div>
              <ul class="side-menu">
                <li><?php echo CHtml::link('View All Products',array('product/index')); ?></li>
				<li><?php echo CHtml::link('View All categories',array('productCategory/index')); ?></li>
				<li><?php echo CHtml::link('Add a New Product',array('product/create')); ?></li>
				<li><?php echo CHtml::link('Add a new Category',array('productCategory/create')); ?></li>
				<li><?php echo CHtml::link('Sale Product',array('salePr/create')); ?></li>
				<li><?php echo CHtml::link('Manage Products',array('product/admin')); ?></li>
				<li><?php echo CHtml::link('Manage Sale',array('salePr/admin')); ?></li>
				
				
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">Raw Material Management</a></h3>
            <div>
              <ul class="side-menu">
                <li><?php echo CHtml::link('View All Raw Material',array('rawmaterial/index')); ?></li>
				<li><?php echo CHtml::link('View All Categories',array('rawmaterialcategory/index')); ?></li>
				<li><?php echo CHtml::link('View Sales ',array('saleRm/index')); ?></li>
				<li><?php echo CHtml::link('Add a new Raw Material',array('rawmaterial/create')); ?></li>
				<li><?php echo CHtml::link('Add a new Category',array('rawmaterialcategory/create')); ?></li>
				<li><?php echo CHtml::link('Sale Material',array('saleRm/create')); ?></li>
				<li><?php echo CHtml::link('Manage Raw Material',array('rawmaterial/admin')); ?></li>
				<li><?php echo CHtml::link('Manage Material Category',array('rawmaterialcategory/admin')); ?></li>
				<li><?php echo CHtml::link('Manage Sale',array('saleRm/admin')); ?></li>
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">User Management</a></h3>
            <div>
              <ul class="side-menu">
                <li><?php echo CHtml::link('View All Users',array('employee/index')); ?></li>
				<li> <?php echo CHtml::link('Add a new User',array('employee/create')); ?> </li>
				<li> <?php echo CHtml::link('Manage Users',array('employee/admin')); ?> </li>
				
              </ul>
            </div>
			<h3><a href="#">Suppliers & Customers </a></h3>
            <div>
              <ul class="side-menu">
                <li><?php echo CHtml::link('View All Suppliers',array('/supplier/index')); ?></li>
				<li> <?php echo CHtml::link('Add a new Supplier',array('/supplier/Create')); ?> </li>
				<li> <?php echo CHtml::link('Manage Suppliers',array('/supplier/admin')); ?> </li>
				<li><?php echo CHtml::link('View All Customers',array('/customer/index')); ?></li>
				<li> <?php echo CHtml::link('Add a new Customers',array('/customer/create')); ?> </li>
				<li> <?php echo CHtml::link('Manage Customers',array('/customer/admin')); ?> </li>
				
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">Reports</a></h3>
            <div>
              <ul class="side-menu">
               <li><?php echo CHtml::link('Product Stock Report',array('product/StockReportPR')); ?></li>
                <li><?php echo CHtml::link('Raw Material Stock Report',array('rawmaterial/StockReportRM')); ?></li></a> </li>
				<li><?php echo CHtml::link('Most Saleable product(Rs)',array('/Msproduct/MostSaleableProductRs')); ?></li></a>
				</li><li><?php echo CHtml::link('Most saleable Product(Qty)',array('/Msproduct/MostSaleableProductQty')); ?></li></a> </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
      
	 
	  <div class="portlet-header ui-widget-header">Calendar</div>
      <div class="portlet-content">
        <div id="datepicker"></div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</div>

<div class="clearfix"></div>
	<div id="footer">
		<div id="menu">
			<a href="<?php echo Yii::app()->baseUrl.'/index.php/site/Index';?>" title="Home">Home</a>
			<a href="" title="Administration">Administration</a>
			<a href="?act=settings" title="Settings">Settings</a>
			<a href="<?php echo Yii::app()->baseUrl.'/index.php/site/Contact';?>" title="Contact">Contact</a>
		</div>
		Copyright &copy; 2012- 2013 
	</div>
	<?php } ?>
	</body>
</html>