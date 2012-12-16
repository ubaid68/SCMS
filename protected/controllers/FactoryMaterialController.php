<?php

class FactoryMaterialController extends Controller
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
				'actions'=>array('create','update','index','view'),
				'users'=>array('materialManager'),
			)
		/*	
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
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
		$model=new FactoryMaterial;
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
		$model=new FactoryMaterial;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FactoryMaterial']))
		{
			$rm = Rawmaterial::model()->findByPk($_POST['FactoryMaterial']['rm_id']);
			if($_POST['FactoryMaterial']['rm_id']==null)
			{
				if($model->save())
				{
				
				}
			}	
			elseif($_POST['FactoryMaterial']['sf_quantity'] <= $rm->rm_quantity)
			{	
					$rm->rm_quantity = $rm->rm_quantity - $_POST['FactoryMaterial']['sf_quantity'];
					$rm->save();
					$model->attributes=$_POST['FactoryMaterial'];
				
					$mod=new TransactionPr;
					$mod->type='Send to factory (RM)';
					$pmodel=Rawmaterial::model()->findByPk($_POST['FactoryMaterial']['rm_id']);
					$mod->name=$pmodel->rm_name;		
					$mod->quantity=$_POST['FactoryMaterial']['sf_quantity'];
					$mod->save();
					
				if($model->save())
				{
					
					Yii::app()->user->setFlash('sended','Rawmaterial Sended Successfully');
					$this->refresh();
				}
			}
				
				else
				{
					Yii::app()->user->setFlash('insuf','Insuffient Quantity of Rawmaterial in Stock');
						$this->refresh();
				}
					//$this->redirect(array('view','id'=>$model->sf_id));
			
			
		}

		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
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

		if(isset($_POST['FactoryMaterial']))
		{
			$rm = Rawmaterial::model()->findByPk($_POST['FactoryMaterial']['rm_id']);
			
			//if updated quantity is equal to exixting quantity 
			if($_POST['FactoryMaterial']['sf_quantity'] == $model->sf_quantity) 
			{
				$model->attributes=$_POST['FactoryMaterial'];
			
				
				if($model->save())
				{
				$this->redirect(array('view','id'=>$model->sf_id));
				}
			}
			//if updated quantity is greater then exixting quantity  
			if($_POST['FactoryMaterial']['sf_quantity'] <= $rm->rm_quantity && $_POST['FactoryMaterial']['sf_quantity'] > $model->sf_quantity) 
			{
			         
				$temp=$_POST['FactoryMaterial']['sf_quantity'] - $model->sf_quantity;
			    $rm->rm_quantity =$rm->rm_quantity - $temp;
				$rm->save();
	            $model->attributes=$_POST['FactoryMaterial'];
					
				$mod=new TransactionPr;
				$mod->type='Send to factory (RM)(U)';
				$pmodel=Rawmaterial::model()->findByPk($_POST['FactoryMaterial']['rm_id']);
				$mod->name=$pmodel->rm_name;		
				$mod->quantity=$_POST['FactoryMaterial']['sf_quantity'];
				
				$mod->save();
				
					if($model->save())
					{
				    $this->redirect(array('view','id'=>$model->sf_id));
			 
					}
						
			}
			
			//if updated quantity is less then exixting quantity	
				if($_POST['FactoryMaterial']['sf_quantity'] <= $rm->rm_quantity && $_POST['FactoryMaterial']['sf_quantity'] < $model->sf_quantity) 
				{
			       $temp=$model->sf_quantity-$_POST['FactoryMaterial']['sf_quantity'];
					$rm->rm_quantity=$rm->rm_quantity + $temp;
					$rm->save();
					$model->attributes=$_POST['FactoryMaterial'];
		
					$mod=new TransactionPr;
					$mod->type='Send to factory (RM)(U)';
					$pmodel=Rawmaterial::model()->findByPk($_POST['FactoryMaterial']['rm_id']);
					$mod->name=$pmodel->rm_name;		
					$mod->quantity=$_POST['FactoryMaterial']['sf_quantity'];
					$mod->save();
					

				   if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sf_id));
						} 
				 
			 
			    
				}
			
		}
		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model)))
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new FactoryMaterial;
		if(Yii::app()->user->checkAccess("materialManager",array('user'=>$model))){
		$dataProvider=new CActiveDataProvider('FactoryMaterial', array(
                    'pagination' => array(
                        'pageSize' => 20
                    ),
                    'criteria'=>array
					(
                        'order'=>'sf_id DESC'
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
		$model=new FactoryMaterial('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FactoryMaterial']))
			$model->attributes=$_GET['FactoryMaterial'];
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

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FactoryMaterial::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='factory-material-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
