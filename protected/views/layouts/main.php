<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Employee', 'url'=>array('/employee'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Employee Type', 'url'=>array('/employeetype'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Supplier', 'url'=>array('/supplier'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Rawmaterial', 'url'=>array('/Rawmaterial'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Raw-material category', 'url'=>array('/RawmaterialCategory'), 'visible'=>!Yii::app()->user->isGuest),	
				array('label'=>'product category', 'url'=>array('/ProductCategory'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'product', 'url'=>array('/Product'), 'visible'=>!Yii::app()->user->isGuest),
				
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				
				array('label'=>'Buy rawmaterial', 'url'=>array('/Supplies'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'SaleType', 'url'=>array('/SaleType'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'customer', 'url'=>array('/Customer'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'purchaser type', 'url'=>array('/PurchaserType'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'sale product', 'url'=>array('/SalePr'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'sale rawmaterial', 'url'=>array('/SaleRm'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'mostProfitableProduct', 'url'=>array('/SalePr/mostProfitableProduct'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'top seller', 'url'=>array('/SaleRm/topseller'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Recieve Product', 'url'=>array('/finishedProduct'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Send Rawmaterial to factory', 'url'=>array('/factoryMaterial'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Defective Rawmaterial from factory', 'url'=>array('/DefectiveMaterial'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Stock Report(Product)', 'url'=>array('/Product/StockReportPR'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Stock Report(Rawmaterial)', 'url'=>array('/Rawmaterial/StockReportRM'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Invoice(product)', 'url'=>array('/SalePr/InvoicePR'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Invoice(Rawmaterial)', 'url'=>array('/SaleRm/InvoiceRM'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Transaction pr', 'url'=>array('/TransactionPr/Admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
