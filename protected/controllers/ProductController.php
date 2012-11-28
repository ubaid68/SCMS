<?php

class ProductController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
				
			),*/
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','Delete','admin','index','view','StockReportPR'),
				'roles'=>array('productManager'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('StockReportPR'),
				'roles'=>array('manager'),
			),
			array('deny',  // deny all users
				'roles'=>array('salesMan','materialManager'),
			)
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','MostProfitableProducts','Topseller','StockReportPR'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			*/
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=new Product;
	if(Yii::app()->user->checkAccess("productManager",array('user'=>$model))){
			//print_r("the rule works only for product manager");
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
		}else{
			//print_r("this user is not product manager");
		throw new CHttpException(401,'You are not authorised to do this');
		}
		
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			try{
					if($model->save())
					{
					//$this->redirect(array('view','id'=>$model->p_id));
					Yii::app()->user->setFlash('pps','Product added Successfully');
				$this->refresh();
					}
			
			}
			catch(Exception $ex)
			{
				Yii::app()->user->setFlash('ppd','Product Name or code Duplicate Entry..');
				$this->refresh();
			}
			
		}
		
		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model)))
		{
		
		$this->render('create',array(
			'model'=>$model,
		));
		}
		else{
		throw new CHttpException(401,'You are not authorised to do this');
		}
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		try
		{
		$model=$this->loadModel($id);
		}
		catch(Exception $e)
		{
		throw new CHttpException(400,'You cannot update Product (bussiness rule voliation)');
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
				
		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->p_id));
		}
		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model)))
		{
			//print_r("the rule works only for product manager");
		
		$this->render('update',array(
			'model'=>$model,
		));
		}
		else
		{
		throw new CHttpException(401,'You are not authorised to do this');
		}
	
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
			
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('productManager'));
	
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Product;
		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model))){
			//print_r("the rule works only for product manager");
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		}else{
			//print_r("this user is not product manager");
		throw new CHttpException(401,'You are not authorised to do this');
		}
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];
		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model)))
		{
		$this->render('admin',array(
			'model'=>$model,
		));
		}
		else
		{
		throw new CHttpException(401,'You are not authorised to do this');
		
		}
	
	}
	
	public function actionStockReportPR()
	{
		
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];
		
		$this->render('stockReportProduct',array(
			'model'=>$model,
		));
		
	}
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	}
