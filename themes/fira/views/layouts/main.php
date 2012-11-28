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
<?phpYii::app()->getClientScript()->registerCssFile('/fira/css/ui.css');?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/forms.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/thickbox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/messages.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatable.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/general.css" />


</head>

<body>

 <?php if(!Yii::app()->user->isGuest)
   {
   ?>
<div id="header">

  <div id="top-menu"> 
 
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
        array('label'=>'Product', 'url'=>array('#'),
		'linkOptions'=>array('id'=>'menuChange'),
        'itemOptions'=>array('id'=>'itemChange'),
		'items'=>array(
        array('label'=>'Stock Report', 'url'=>array('/product/StockReportPR')),),),
        array('label'=>'Raw Material', 'url'=>array('#'),
		'linkOptions'=>array('id'=>'menuChange'),
        'itemOptions'=>array('id'=>'itemChange'),
		'items'=>array(
        array('label'=>'Stock Report', 'url'=>array('/rawmaterial/StockReportRM')),),),
        array('label'=>'Most Saleable Product(Rs)', 'url'=>array('/product/MostProfitableProducts')),
		array('label'=>'Most Saleable Product(Qty)', 'url'=>array('/product/MostProfitableProducts')),
      ),
    ),
	array(
      'label'=>'Store Management',
      'url'=>array('#'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'Store Inward', 'url'=>array('#')),
        array('label'=>'Store Outward', 'url'=>array('#')),
       
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
		array('label'=>'Manage Material', 'url'=>array('/rawmaterial/admin')),
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
        array('label'=>'View User Type', 'url'=>array('/employeeType/index')),
		array('label'=>'Add User Type', 'url'=>array('/employeeType/create')),
		array('label'=>'Manage User Type', 'url'=>array('/employeeType/admin')),
	  ),
    ),
	 array(
      'label'=>'Supplier',
      'url'=>array('/product/index'),
      'linkOptions'=>array('id'=>'menuCompany'),
      'itemOptions'=>array('id'=>'itemCompany'),
      'items'=>array(
        array('label'=>'View All Suppliers', 'url'=>array('/supplier/index')),
        array('label'=>'Add a new Suppliers', 'url'=>array('/supplier/create')),
        array('label'=>'Manage Suppliers', 'url'=>array('/supplier/admin')),
        
	  ),
    ),
	array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
	
))); ?>

  </ul>
  
</div>
  <?php }?>   
<div id="page-wrapper">
  <div id="main-wrapper">
   <div id="content"> 
     
         <?php echo $content; ?>    
    </div>
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
				<li><?php echo CHtml::link('Product Invoice',array('salePr/invoiceproduct')); ?></li>
				
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
				<li> <?php echo CHtml::link('View User Type',array('employeeType/index')); ?> </li>
				<li> <?php echo CHtml::link('Add User Type',array('employeeType/create')); ?> </li>
				<li> <?php echo CHtml::link('Manage User Type',array('employeeType/admin')); ?> </li>
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">Reports</a></h3>
            <div>
              <ul class="side-menu">
               <li><?php echo CHtml::link('Product Stock Report',array('product/StockReportPR')); ?></li>
                <li><?php echo CHtml::link('Raw Material Stock Report',array('rawmaterial/StockReportRM')); ?></li></a> </li>
                <li> <a href="?act=reports&sub=lowstock" class="tooltip" title="Product Low Report"> Low Stock </a> </li>
                <li> <a href="?act=reports&sub=lowstock&type=r" class="tooltip" title="Materials Low Report"> Low Stock </a> </li>
                <li> <a href="?act=reports&sub=transactions" class="tooltip" title="Transactions"> Transactions </a> </li>
				<li><?php echo CHtml::link('Most Profitable',array('product/MostProfitableProducts')); ?></li> 
				<li><?php echo CHtml::link('Top Seller',array('product/Topseller')); ?></li> 
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
			<a href="#" title="Home">Home</a>
			<a href="#" title="Administration">Administration</a>
			<a href="?act=settings" title="Settings">Settings</a>
			<a href="#" title="Contact">Contact</a>
		</div>
		Copyright &copy; 2012- 2013 
	</div>
	<?php } ?>
	</body>
</html>