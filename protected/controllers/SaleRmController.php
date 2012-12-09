<?php

class SaleRmController extends Controller
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
				'actions'=>array('create','update','index','view','Delete','admin','InvoiceRM'),
				'roles'=>array('salesMan'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('InvoiceRM','index'),
				'roles'=>array('manager'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'roles'=>array('materialManager'),
			),
			array('deny',  // deny all users
				'roles'=>array('productManager','materialManager'),
			)
			
		/*	array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete',,'InvoiceRM'),
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
		$model=new SaleRm;
		if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model))){
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
		$model=new SaleRm;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	/*if(isset($_POST['SaleRm'])){
	echo "<pre>";
	print_r($_POST['SaleRm']);
	echo "</pre>";
	exit();
	}*/
		if(isset($_POST['SaleRm']))
		{
		if($_POST['SaleRm']['st_id']==null)
			{
			if($model->save())
				{
				
				}
		}		
		 if($_POST['SaleRm']['st_id']=='2' )
		     {
			  $model->attributes=$_POST['SaleRm'];
			  $model->srmp_unit=0;
			  $model->srm_discount=0;
			  $model->srm_totalsale=0;
			    if($model->save())
				   {
				    Yii::app()->user->setFlash('samplermsuccess','Rawmaterial updated as sample');
							$this->refresh();
			 
                    }
   		      }
		 elseif($_POST['SaleRm']['st_id']=='1' )  
		     {
			  $r = Rawmaterial::model()->findByPk($_POST['SaleRm']['rm_id']); 
			   if(($_POST['SaleRm']['srmp_unit']==0))
			   {
				throw new CHttpException(405,'unit price cannot be zero at the time of sale');
			   }
			   
			   if($_POST['SaleRm']['srm_quantity'] <= $r->rm_quantity) 
			      {
			       $r->rm_quantity=$r->rm_quantity - $_POST['SaleRm']['srm_quantity'];
				   $model->srm_totalsale=$_POST['SaleRm']['srmp_unit']*$_POST['SaleRm']['srm_quantity'];
			       $r->save();
	               $model->attributes=$_POST['SaleRm'];
			        if($model->save())
					   {
					    Yii::app()->user->setFlash('salermsuccess','Rawmaterial Record Added Successfully');
							$this->refresh(); 
						} 
			 
			       }
				else 
				{
				 Yii::app()->user->setFlash('infqrm','Insuffient Quantity of product in Stock');
					$this->refresh();
				}
			 }
	    }	
			/*if(($model->st->st_id==='1') && ($model->srmp_unit==0))
			{
				throw new CHttpException(405,'Sale unit price cannot be 0');
			}
			if($model->st->st_id==='2')
			{
				$model->srmp_unit=0;
				$model->srm_discount=0;
				//var_dump ($model->st->st_id);
			}
			$r = Rawmaterial::model()->findByPk($model->rm_id);
				if($model->srm_quantity <= $r->rm_quantity)
				{	
					$r->rm_quantity = $r->rm_quantity - $model->srm_quantity;
					//var_dump($p);
					$r->save();
					//var_dump($product);
					//$this->redirect(array('view','id'=>$model->sp_id));
				Yii::app()->user->setFlash('salermsuccess','Rawmaterial Record Added Successfully');
							$this->refresh();
				}
				else
				{
					Yii::app()->user->setFlash('infqrm','Insuffient Quantity of Rawmaterial in Stock');
					$this->refresh();
				}
				//$this->redirect(array('view','id'=>$model->srm_id));
				*/
	if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model)))
		{
		$this->render('create',array(
			'model'=>$model,
		));
		}
		else
		{
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

		if(isset($_POST['SaleRm']))
		{
		if($_POST['SaleRm']['st_id']==null)
			{
			if($model->save())
				{
				
				}
		}		
		 if($_POST['SaleRm']['st_id']=='2' )
		     {
			  $model->attributes=$_POST['SaleRm'];
			  $model->srmp_unit=0;
			  $model->srm_discount=0;
			  $model->srm_totalsale=0;
			    if($model->save())
				   {
				    $this->redirect(array('view','id'=>$model->srm_id));
			 
                    }
   		      }
		 elseif($_POST['SaleRm']['st_id']=='1' )  
		     {
			  $r = Rawmaterial::model()->findByPk($_POST['SaleRm']['rm_id']); 
			   if(($_POST['SaleRm']['srmp_unit']==0))
			   {
				throw new CHttpException(405,'unit price cannot be zero at the time of sale');
			   }
			   
			   if($_POST['SaleRm']['srm_quantity'] <= $r->rm_quantity) 
			      {
			       $r->rm_quantity=$r->rm_quantity - $_POST['SaleRm']['srm_quantity'];
				   $model->srm_totalsale=$_POST['SaleRm']['srmp_unit']*$_POST['SaleRm']['srm_quantity'];
			       $r->save();
	               $model->attributes=$_POST['SaleRm'];
			        if($model->save())
					   {
					   $this->redirect(array('view','id'=>$model->srm_id));
						} 
			 
			       }
				else 
				{
				 Yii::app()->user->setFlash('infqrm','Insuffient Quantity of product in Stock');
					$this->refresh();
				}
			 }
	    }
	if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model)))
		{
		$this->render('create',array(
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new SaleRm;
		//if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model))){
		$dataProvider=new CActiveDataProvider('SaleRm', array(
                    'pagination' => array(
                        'pageSize' => 20
                    ),
                    'criteria'=>array
					(
                        'order'=>'srm_id DESC'
					)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		//}
		//else 
		//{
		//throw new CHttpException(401,'You are not authorised to do this');
		//}
	
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SaleRm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SaleRm']))
			$model->attributes=$_GET['SaleRm'];
		if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model)))
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
	public function actionInvoiceRM()
	{
		$model=new SaleRm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SaleRm']))
			$model->attributes=$_GET['SaleRm'];
		
		$this->render('invoicematerial',array(
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
		$model=SaleRm::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='sale-rm-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
