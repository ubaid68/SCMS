<?php

class ProductCategoryController extends Controller
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
		/*	array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','GetCategory'),
				'users'=>array('*'),
			),
		*/	
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','GetCategory','admin','Delete'),
				'roles'=>array('productManager'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'roles'=>array('manager'),
			),
			array('deny',  // deny all users
				'roles'=>array('salesMan','materialManager'),
			)
		/*	array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model=new ProductCategory;
		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model)))
		{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
		}
		else 
		{
		throw new CHttpException(401,'You are not authorised to do this');
		}
	
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ProductCategory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductCategory']))
		{
			$model->attributes=$_POST['ProductCategory'];
			try
			{
				if($model->save())
				{
				//$this->redirect(array('view','id'=>$model->pc_id));
				Yii::app()->user->setFlash('ps','Product Category Added Successfull');
				$this->refresh();
				}
				
			
			}
			
			catch(Exception $ex)
			{
				Yii::app()->user->setFlash('pd','Product Category Duplicate Entry..');
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductCategory']))
		{
			$model->attributes=$_POST['ProductCategory'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pc_id));
		}

		if(Yii::app()->user->checkAccess("productManager",array('user'=>$model)))
		{
			//print_r("the rule works only for product manager");
		
		$this->render('update',array(
			'model'=>$model,
		));
		}else
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
		try{
			$this->loadModel($id)->delete();
		}catch(Exception $e){
			throw new CHttpException(400,'You cannot Delete Product Category (bussiness rule voliation)');
		}
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new ProductCategory;
		
		$dataProvider=new CActiveDataProvider('ProductCategory',array(
                    'pagination' => array(
                        'pageSize' => 20
                    )));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProductCategory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductCategory']))
			$model->attributes=$_GET['ProductCategory'];

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

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ProductCategory::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	
	public function actionGetCategory()
   {      
		//var_dump($_POST);
		
		if($_POST['Product']['pc_id'] == '')
		{
			echo "Select Category";
		}
		else
		{
			echo ProductCategory::model()->findByPk((int)$_POST['Product']['pc_id'])->pc_qmeasures ; 
			//echo $_POST['Rawmaterial']['rmc_id'];
		}
	}
	
}
