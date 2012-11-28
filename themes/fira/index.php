<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/general.css">
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.js"></script>
<script type="text/javascript" src="js/tooltip.js"></script>
<script type="text/javascript" src="js/tablesorter.js"></script>
<script type="text/javascript" src="js/tablesorter-pager.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/thickbox-compressed.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery-dynamic-form.js"></script>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/ui.css">
<link rel="stylesheet" type="text/css" href="css/forms.css">
<link rel="stylesheet" type="text/css" href="css/tables.css">
<link rel="stylesheet" type="text/css" href="css/thickbox.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/messages.css">

</head>

<body>


<div id="header">
  <div id="top-menu"> <a href="?act=user&sub=edit&id=1" title="My account">My account</a> | <a href="?act=settings" title="Settings">Settings</a> <span>Logged in as <a href="#" title="Logged in as Admin">
    Admin    </a></span> | <a href="?act=user&sub=edit&id=1" title="Edit profile">Edit profile</a> | <a href="logout.php" title="Logout">Logout</a> </div>
  <div id="sitename"> <a href="index.php" class="logo float-left"  title="Admintasia">SCMS | Supply Chain Management System</a>
  			<div class="ui-corner-all float-right worth">
			<p><b>Stock Worth: </b>Rs 1,002,230,668,096</p>
			</div>
  </div>
  
  <ul id="navigation" class="sf-navbar">
    <li> <a href="index.php">Home</a></li>
    <li> <a href="#">Reports</a> 
	    <ul>
         <li><a href="#">Finished Products</a> <ul>
            <li> <a href="?act=reports&sub=stock" title="Stock Product Report">Stock Report</a> </li>
            <li> <a href="?act=reports&sub=lowstock" title="Low stock alert">Low Stock Alert</a> </li>
         </ul></li>
         <li><a href="#">Raw Material</a> <ul>
            <li> <a href="?act=reports&sub=stock&type=r" title="Stock Report Materials">Stock Report</a> </li>
            <li> <a href="?act=reports&sub=lowstock&type=r" title="Low stock alert">Low Stock Alert</a> </li>
         </ul></li>
            <li> <a href="?act=reports&sub=invoice" title="Generate Invoice">Invoices </a></li>
            <li> <a href="?act=reports&sub=transactions" title="Transactions"> Transactions </a> </li>
            <li> <a href="?act=reports&sub=topsellers" title="Top Selling Products"> Top Seller </a> </li>
            <li> <a href="?act=reports&sub=mostprofitable" title="Most Profitable Products"> Most Profitable </a> </li>
          </ul>
    </li>
    <li> <a href="?act=store">Store Management</a>
      <ul>
        <li> <a href="?act=products&sub=receive" title="Receive finished products from factory">Store Inward</a> </li>
        <li> <a href="?act=products&sub=send&type=r" title="Send raw material to factory">Store Outward</a> </li>
      </ul>
    </li>
    <li> <a href="?act=products&type=r">Raw Material</a>
      <ul>
        <li> <a href="?act=products&type=r">View All Raw Material</a> </li>
        <li> <a href="?act=cat&type=r">View All Categories</a> </li>
		<li><a href="#">Add to List</a><ul>
        <li> <a href="?act=products&sub=add&type=r">Add a new Raw Material</a> </li>
        <li> <a href="?act=cat&sub=add&type=r">Add a new Category</a> </li>
        </ul></li>
        <li> <a href="?act=products&sub=buy&type=r" title="Buy Material"> Buy Material</a> </li>
        <li> <a href="?act=products&sub=sale&type=r" title="Sale Material"> Sale Material</a> </li>
      </ul>
    </li>
    <li> <a href="?act=products">Product Management</a>
      <ul>
        <li> <a href="?act=products">View All Products</a> </li>
        <li> <a href="?act=cat">View All Categories</a> </li>
		<li><a href="#">Add to List</a><ul>
        <li> <a href="?act=products&sub=add">Add a new Product</a> </li>
        <li> <a href="?act=cat&sub=add">Add a new Category</a> </li>
        </ul></li>
        <li> <a href="?act=products&sub=buy" title="Buy Products"> Buy </a> </li>
        <li> <a href="?act=products&sub=sale" title="Sale Products"> Sale </a> </li>
		<li> <a href="?act=materialproducts"  title="Add Materials to a Product"> Material Consumption</a> </li>
      </ul>
    </li>
        <li> <a href="?act=user">User Management</a>
      <ul>
        <li> <a href="?act=user">View All Users</a> </li>
        <li> <a href="?act=user&type=e">View All Employees</a> </li>
		<li><a href="#">Add User/Employee</a><ul>
        <li> <a href="?act=user&sub=add">Add a new User</a> </li>
        <li> <a href="?act=user&sub=addemp">Add a new Employee</a> </li>
        </ul></li>
              </ul>
    </li>
        <li> <a href="?act=supplier">Supplier</a>
      <ul>
        <li> <a href="?act=supplier">View All Suppliers</a> </li>
        <li> <a href="?act=supplier&sub=add">Add a new Supplier</a> </li>
      </ul>
    </li>
  </ul>
</div>
<div id="page-wrapper">
  <div id="main-wrapper">
    <div id="main-content"> 
      <!-- start of messages -->
            <!-- start of messages -->
      <div class="page-title ui-widget-content ui-corner-all">
  <h1>Administration Options</h1>
  <br />
  <!----- Custom Dashboard Edited ------>
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Product Management</a></li>
      <li><a href="#tabs-2">Raw Materials Management</a></li>
      <li><a href="#tabs-3">User Management</a></li>
      <li><a href="#tabs-4">Reports</a></li>
    </ul>
    <div id="tabs-1">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
            <li> <a href="?act=products&sub=add" class="Add_product tooltip" title="Add Product"> Add Product </a> </li>
            <li> <a href="?act=products&sub=buy" class="Buy tooltip" title="Buy Products"> Buy </a> </li>
            <li> <a href="?act=products&sub=sale" class="Sale tooltip" title="Sale Products"> Sale </a> </li>
            <li> <a href="?act=products" class="Clipboard_3 tooltip" title="Product List"> Product List </a> </li>
            <li> <a href="?act=products&sub=receive" class="Receive tooltip" title="Receive Product"> Receive </a> </li>
            <li> <a href="?act=products&sub=sample" class="Send_product tooltip" title="Send Sample"> Send Sample </a> </li>
            <li> <a href="?act=products&sub=return" class="Return_product tooltip" title="Sample Return"> Sample Return </a> </li>
            <li> <a href="?act=products&sub=sreturn" class="Return_product tooltip" title="Sale Return"> Sale Return </a> </li>
            <li> <a href="?act=cat" class="Box_recycle tooltip" title="View Categories">View Categories</a></li>
            <li> <a href="?act=cat&sub=add" class="Add tooltip" title="Add Categories">Add Categories</a></li>
            <li> <a href="?act=cat&sale=true" class="Box_recycle tooltip" title="View Categories">Sale Categories</a></li>
            <li> <a href="?act=cat&sub=add&sale=true" class="Add tooltip" title="Add Category"> Add Sale Category </a>
			<li> <a href="?act=materialproducts" class="Clipboard_3 tooltip" title="Add Materials to a Product"> Material Consumption</a>
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
            <li> <a href="?act=products&sub=add&type=r" class="Add_material tooltip" title="Add Materials"> Add Material </a> </li>
            <li> <a href="?act=products&sub=buy&type=r" class="Buy_material tooltip" title="Buy Raw Materials"> Buy </a> </li>
            <li> <a href="?act=products&sub=sale&type=r" class="Sale tooltip" title="Sale Raw Materials"> Sale </a> </li>
            <li> <a href="?act=products&type=r" class="Clipboard_3 tooltip" title="Stock List"> Stock List </a> </li>
            <li> <a href="?act=products&sub=send&type=r" class="Send_factory tooltip" title="Send to Factory"> Send Factory </a> </li>
            <li> <a href="?act=products&sub=receive&type=r" class="Receive_back tooltip" title="Receive From Factory (defected material)"> Receive Back </a> </li>
            <li> <a href="?act=products&sub=return&type=r" class="Return_factory tooltip" title="Return Product to Supplier (defected material)"> Return to Supplier </a></li>
            <li> <a href="?act=cat&type=r" class="Box_recycle tooltip" title="View Categories">View Categories</a></li>
            <li> <a href="?act=cat&sub=add&type=r" class="Add tooltip" title="Add Category"> Add Category </a>
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
            <li> <a href="?act=user&sub=add" class="Add_user tooltip" title="Add User who can use SCMS"> Add User </a> </li>
            <li> <a href="?act=user" class="User_list tooltip" title="List of users who can use SCMS"> User List </a> </li>
            <li> <a href="?act=user&sub=addemp" class="Add_employee tooltip" title="Add Employee, who can send/receive products"> Add Employe </a> </li>
            <li> <a href="?act=user&type=e" class="Employee_list tooltip" title="Employee List, who can send/receive products"> Employe List </a> </li>
            <li> <a href="?act=supplier&sub=add" class="Add_vendor tooltip" title="Add Supplier"> Add Supplier </a> </li>
            <li> <a href="?act=supplier" class="Vendor_list tooltip" title="Supplier List"> Supplier List </a>
              <div class="clearfix"></div>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div id="tabs-4">
      <div class="page-title ui-widget-content ui-corner-all">
        <div class="other">
          <ul id="dashboard-buttons">
            <li> <a href="?act=reports&sub=stock" class="Report tooltip" title="Stock Product Report"> Stock Report </a> </li>
            <li> <a href="?act=reports&sub=stock&type=r" class="Report_high tooltip" title="Stock Report Materials"> Stock Report </a> </li>
            <li> <a href="?act=reports&sub=lowstock" class="Report_low tooltip" title="Product Low Report"> Low Stock </a> </li>
            <li> <a href="?act=reports&sub=lowstock&type=r" class="Low_report_materials tooltip" title="Materials Low Report"> Low Stock </a> </li>
            <li> <a href="?act=reports&sub=transactions" class="Transactions tooltip" title="Transactions"> Transactions </a> </li>
            <li> <a href="?act=reports&sub=topsellers" class="Top_sale tooltip" title="Top Seller"> Top Seller </a> </li>
            <li> <a href="?act=reports&sub=mostprofitable" class="Sale tooltip" title="Most Profitable"> Most Profitable </a> </li>
            <li> <a href="?act=reports&sub=invoice" class="Invoice tooltip" title="Generate Invoice"> Invoice </a>
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
<div class="portlet form-bg ui-corner-all">
<div class="portlet-header">Latest Transactions</div>

<div class="portlet-content">
<iframe src="index2.php?act=reports&sub=transactions&sort=desc" width="100%" height="400px" scrolling="auto"></iframe>
</div>
</div>    </div>
    <div class="clearfix"></div>
  </div>
  
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
                <li> <a href="?act=products&sub=add" class="tooltip" title="Add Product"> Add Product </a> </li>
                <li> <a href="?act=products&sub=buy" class="tooltip" title="Buy Products"> Buy </a> </li>
                <li> <a href="?act=products&sub=sale" class="tooltip" title="Sale Products"> Sale </a> </li>
                <li> <a href="?act=products" class="tooltip" title="Product List"> Product List </a> </li>
                <li> <a href="?act=products&sub=receive" class="tooltip" title="Receive Product"> Receive </a> </li>
                <li> <a href="?act=products&sub=sample" class="tooltip" title="Send Sample"> Send Sample </a> </li>
                <li> <a href="?act=products&sub=return" class="tooltip" title="Sample Return"> Sample Return </a> </li>
                <li> <a href="?act=products&sub=sreturn" class="Return_product tooltip" title="Sale Return"> Sales Return </a> </li>
                <li> <a href="?act=cat" class="tooltip" title="View Categories">View Categories</a>
                <li> <a href="?act=cat&sub=add" class="tooltip" title="Add Category"> Add Category </a> </li>
                <li> <a href="?act=materialproducts" class="tooltip" title="Add Materials to a Product"> Material Consumption</a> </li>
				
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">Raw Material Management</a></h3>
            <div>
              <ul class="side-menu">
                <li> <a href="?act=products&sub=add&type=r" class="tooltip" title="Add Materials"> Add Material </a> </li>
                <li> <a href="?act=products&sub=buy&type=r" class="tooltip" title="Buy Raw Materials"> Buy </a> </li>
                <li> <a href="?act=products&sub=sale&type=r" class="tooltip" title="Sale Raw Materials"> Sale </a> </li>
                <li> <a href="?act=products&type=r" class="tooltip" title="Stock List"> Stock List </a> </li>
                <li> <a href="?act=products&sub=send&type=r" class="tooltip" title="Send to Factory"> Send Factory </a> </li>
                <li> <a href="?act=products&sub=receive&type=r" class="tooltip" title="Receive From Factory (defected material)"> Receive Back </a> </li>
                <li> <a href="?act=products&sub=return&type=r" class="tooltip" title="Return Product to Supplier (defected material)"> Return to Supplier </a></li>
                <li> <a href="?act=cat&type=r" class="Box_recycle tooltip" title="View Categories">View Categories</a></li>
                <li> <a href="?act=cat&sub=add&type=r" class="Add tooltip" title="Add Category"> Add Category </a></li>
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">User Management</a></h3>
            <div>
              <ul class="side-menu">
                <li><a href="?act=user&sub=add" class="tooltip" title="Add User">Add User</a></li>
                <li><a href="?act=user" class="tooltip" title="User List">User List</a></li>
                <li><a href="?act=user&sub=addemp" class="tooltip" title="Add Employee">Add Employee</a></li>
                <li><a href="?act=user&type=e" class="tooltip" title="Employee List">Employee List</a></li>
                <li><a href="?act=supplier&sub=add" class="tooltip" title="Add Supplier">Add Supplier</a></li>
                <li><a href="?act=supplier" class="tooltip" title="User List">Supplier List</a></li>
              </ul>
            </div>
          </div>
          <div>
            <h3><a href="#">Reports</a></h3>
            <div>
              <ul class="side-menu">
                <li> <a href="?act=reports&sub=stock" class="tooltip" title="Stock Product Report"> Stock Report </a> </li>
                <li> <a href="?act=reports&sub=stock&type=r" class="tooltip" title="Stock Report Materials"> Stock Report </a> </li>
                <li> <a href="?act=reports&sub=lowstock" class="tooltip" title="Product Low Report"> Low Stock </a> </li>
                <li> <a href="?act=reports&sub=lowstock&type=r" class="tooltip" title="Materials Low Report"> Low Stock </a> </li>
                <li> <a href="?act=reports&sub=transactions" class="tooltip" title="Transactions"> Transactions </a> </li>
                <li> <a href="?act=reports&sub=topsellers" class="tooltip" title="Top Seller"> Top Seller </a> </li>
                <li> <a href="?act=reports&sub=mostprofitable" class="tooltip" title="Most Profitable"> Most Profitable </a> </li>
                <li> <a href="?act=reports&sub=invoice" class="tooltip" title="Generate Invoice"> Invoice </a></li>
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
		Copyright &copy; 2006- 2012
	</div>
	</body>
</html>
