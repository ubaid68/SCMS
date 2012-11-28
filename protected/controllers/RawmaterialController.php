<?php

class RawmaterialController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		*/	
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','Delete','admin','StockReportRM'),
				'roles'=>array('materialManager'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('StockReportRM'),
				'roles'=>array('manager'),
			),
			array('deny',  // deny all users
				'roles'=>array('salesMan','productManager'),
			)
		/*	
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','StockReportRM'),
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
		$model=new Rawmaterial;
		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model))){
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
		$model=new Rawmaterial;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Rawmaterial']))
		{
			$model->attributes=$_POST['Rawmaterial'];
			/*
			if($model->save())
				$this->redirect(array('view','id'=>$model->rm_id));
			else
			{
				Yii::app()->user->setFlash('error','Sorry!!');
				$this->refresh();
			}
			*/
			//duplication try catch
			try{
					if($model->save())
					{
					//$this->redirect(array('view','id'=>$model->rm_id));
					Yii::app()->user->setFlash('successmsg','Rawmaterial Added Successfully ');
					$this->refresh();
					}
			}catch(Exception $ex){
				Yii::app()->user->setFlash('Duplicate','Rawmaterial Duplicate Entry..');
				$this->refresh();
			}
			
		}

		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
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

		if(isset($_POST['Rawmaterial']))
		{
			$model->attributes=$_POST['Rawmaterial'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->rm_id));
		}

		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
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
		try
		{
		$this->loadModel($id)->delete();
		}
		catch(Exception $e)
		{
		throw new CHttpException(400,'You cannot Delete Raw-Material (bussiness rule voliation)');
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
		$model=new Rawmaterial;
		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
		{
		$dataProvider=new CActiveDataProvider('Rawmaterial',array(
                    'pagination' => array(
                        'pageSize' => 20
                    )));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		}
		else
		{
		throw new CHttpException(401,'You are not authorised to do this');
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Rawmaterial('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rawmaterial']))
			$model->attributes=$_GET['Rawmaterial'];
		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
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
	public function actionStockReportRM()
	{
		$model=new Rawmaterial('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rawmaterial']))
			$model->attributes=$_GET['Rawmaterial'];
		
		$this->render('stockReportRawmaterial',array(
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
		$model=Rawmaterial::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='rawmaterial-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
}
