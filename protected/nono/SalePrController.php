<?php

class SalePrController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','getTotalSale','InvoicePR','MostProfitableProduct'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SalePr;
		
		//$p = Product::model()->findByPk($_POST['SalePr']['p_id']);
		//var_dump($model);
	/*if(isset($_POST['SalePr'])){
	echo "<pre>";
	print_r($_POST['SalePr']);
	echo "</pre>";
	exit();
	}*/
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
//var_dump ($model->st['1']);
		if(isset($_POST['SalePr']))
		{
			$p = Product::model()->findByPk($_POST['SalePr']['p_id']);
			$model->attributes=$_POST['SalePr'];
			
			//var_dump ($model->st);
			
			
			if((($_POST['SalePr']['st_id'])=='1') && (($_POST['SalePr']['sp_unit']==0)))
			{
				throw new CHttpException(405,'Sale unit price cannot be 0');
			}
			
			
			elseif(($_POST['SalePr']['sp_quantity']) <= ($p->p_quantity))
				{
				
					$p->p_quantity = $p->p_quantity - ($_POST['SalePr']['sp_quantity']);
					//var_dump($p);
					$p->save();
					$model->save();
					//var_dump($product);
					//$this->redirect(array('view','id'=>$model->sp_id));
				Yii::app()->user->setFlash('salesuccess','Product Record Added Successfully');
							$this->refresh();
				
				}
				elseif(($_POST['SalePr']['sp_quantity']) <= ($p->p_quantity))
				{
					Yii::app()->user->setFlash('infq','Insuffient Quantity of product in Stock');
					$this->refresh();
				}		
			else
			{
				$model->sp_unit=0;
				$model->sp_discount=0;
				$model->save();
				//var_dump ($model->st->st_id);
			}
	}		
		/*	if($model->save()){
			
					
					
				
					
			
		}
	*/
		$this->render('create',array(
			'model'=>$model,
		));
	
	
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

		if(isset($_POST['SalePr']))
		{
			$model->attributes=$_POST['SalePr'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->sp_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SalePr', array(
                    'pagination' => array(
                        'pageSize' => 20
                    ),
                    'criteria'=>array
					(
                        'order'=>'sp_id DESC'
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
		$model=new SalePr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SalePr']))
			$model->attributes=$_GET['SalePr'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionMostProfitableProduct()
	{
		$model=new SalePr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SalePr']))
			$model->attributes=$_GET['SalePr'];

		$this->render('mostProfitableProduct',array(
			'model'=>$model,
		));
	}
	public function actionInvoicePR()
	{
		$model=new SalePr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SalePr']))
			$model->attributes=$_GET['SalePr'];

		$this->render('invoiceproduct',array(
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
		$model=SalePr::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function getTotalSale($p_id){
		$models = $this->model()->findByPk($p_id);
		$cost = 0;
		foreach($models as $m){
			$cost = $cost + ($m->sp_unit * $m->sp_quantity);
		}
		
		return $cost;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sale-pr-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	
	}
