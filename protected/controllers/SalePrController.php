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
		/*	array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		*/	
			
				
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete','getTotalSale','MostSaleableProduct','InvoicePR'),
				'roles'=>array('salesMan'),
			),
			
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('MostSaleableProduct','Index'),
				'roles'=>array('productManager'),
				),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('InvoicePR','MostSaleableProduct','Index'),
				'roles'=>array('manager'),
			),
			
			
			array('deny',  // deny all users
				'roles'=>array('materialManager','productManager'),
			),
		/*	,
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','getTotalSale','InvoicePR','MostProfitableProduct'),
				'users'=>array('admin'),
			)
			,
			
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
	 public function msproduct($prid)
	 {
	 $all=SalePr::model()->findAll('p_id=:p_id AND st_id=:st_id',array(':p_id'=>$prid,'st_id'=>1));
	 $totalq=0;
		 $totalc=0;
	  for($i=0;$i<count($all);$i++)
	     {
		     
		      $totalq=$totalq+$all[$i]->sp_quantity;
		 
		       $totalc=$totalc+$all[$i]->sp_totalsale;
		 
	      }
		 $check=Msproduct::model()->find('product_id=:product_id',array(':product_id'=>$prid));
                 $myid='';
                 for($p=0;$p<count($check);$p++)
                 {
		 $myid=$check[$p]->id;
                 }
		if(count($check)>0)
		 {
		 //
		 //$msproduct=new Msproduct;
		 //$msproduct=$msproduct->loadModel($myid);
		 $check->product_id=$prid;
		 $pr=Product::model()->find('p_id=:p_id',array(':p_id'=>$all[0]->p_id));
		 $check->product_name=$pr->p_name;
		 $check->total_quantity=$totalq;
		 $check->total_cost=$totalc;
		 //$msproduct->ms_id=$check->ms_id;
		 if($check->save())
		    {
			 echo "row updated";
			 }
		 else {
		     print_r($check->getErrors());
		     }
		 }
		 else
		 {
		 $msproduct=new Msproduct;
		 $msproduct->product_id=$prid;
		 $pr=Product::model()->find('p_id=:p_id',array(':p_id'=>$all[0]->p_id));
		 $msproduct->product_name=$pr->p_name;
		 $msproduct->total_quantity=$totalq;
		 $msproduct->total_cost=$totalc;
		 //$msproduct->ms_id=$check->ms_id;
		 if($msproduct->save())
		    {
			 echo "new row Added";
			 }
		 else {
		     print_r($msproduct->getErrors());
		     }
		 }
	 }
	public function actionView($id)
	{
		$model=new SalePr;
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
		$model=new SalePr;
		
		
	/*if(isset($_POST['SalePr'])){
	echo "<pre>";
	print_r($_POST['SalePr']);
	echo "</pre>";
	exit();
	}*/
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SalePr']))
		{
		if($_POST['SalePr']['st_id']==null)
			{
			if($model->save())
				{
				
				}
		}		
		 if($_POST['SalePr']['st_id']=='2' )
		     {
			  $p = Product::model()->findByPk($_POST['SalePr']['p_id']);
			  $model->sp_unit=0;
			  $model->sp_discount=0;
			  $model->sp_totalsale=0;
			  
			  if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity) 
			    {
			       $p->p_quantity=$p->p_quantity - $_POST['SalePr']['sp_quantity'];
			       $p->save();
	               $model->attributes=$_POST['SalePr'];
			
				$mod=new TransactionPr;
				$mod->type='Send Sample(P)';
				$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
				$mod->name=$pmodel->p_name;		
				$mod->quantity=$_POST['SalePr']['sp_quantity'];
				
				$mod->save();	
			   
					if($model->save())
				   {
				   
				    Yii::app()->user->setFlash('samplesuccess','Product updated as sample');
							$this->refresh();
			 
					}	
				}
   		    }
		 elseif($_POST['SalePr']['st_id']=='1' )  
		     {
			  $p = Product::model()->findByPk($_POST['SalePr']['p_id']); 
			   if(($_POST['SalePr']['sp_unit']==0))
			   {
				throw new CHttpException(405,'unit price cannot be zero at the time of sale');
			   }
			   
			   if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity) 
			      {
			       $p->p_quantity=$p->p_quantity - $_POST['SalePr']['sp_quantity'];
				   $model->sp_totalsale=$_POST['SalePr']['sp_unit']*$_POST['SalePr']['sp_quantity'];
			       $p->save();
	               $model->attributes=$_POST['SalePr'];
			       
					$mod=new TransactionPr;
					$mod->type='Sale (P)';
					$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
					$mod->name=$pmodel->p_name;		
					$mod->quantity=$_POST['SalePr']['sp_quantity'];
				
					$mod->save();					   
					
					if($model->save())
					   {
					    $this->msproduct($model->p_id);
					
					    Yii::app()->user->setFlash('salesuccess','Product Record Added Successfully');
							$this->refresh(); 
						} 
			 
			       }
				else 
				{
				 Yii::app()->user->setFlash('infq','Insuffient Quantity of product in Stock');
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
		if($_POST['SalePr']['st_id']==null)
			{
			if($model->save())
				{
				
				}
		}		
		 if($_POST['SalePr']['st_id']=='2' )
		     {
			 $p = Product::model()->findByPk($_POST['SalePr']['p_id']);
			
			  $model->sp_unit=0;
			  $model->sp_discount=0;
			  $model->sp_totalsale=0;
			//if updated quantity is equal to exixting quantity   
				if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] == $model->sp_quantity) 
			    {
					
					$model->attributes=$_POST['SalePr'];
				  
				  if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sp_id));
						} 
			 
			    }
			
			//if updated quantity is greater then exixting quantity  
			if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] > $model->sp_quantity) 
			{
			         
				$temp=$_POST['SalePr']['sp_quantity'] - $model->sp_quantity;
			    $p->p_quantity =$p->p_quantity - $temp;
				$p->save();
	            $model->attributes=$_POST['SalePr'];
					
				$mod=new TransactionPr;
				$mod->type='Send Sample (P)(U)';
				$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
				$mod->name=$pmodel->p_name;		
				$mod->quantity=$_POST['SalePr']['sp_quantity'];
				
				$mod->save();
				
					if($model->save())
					{
				    $this->redirect(array('view','id'=>$model->sp_id));
			 
					}
						
			}
			//if updated quantity is less then exixting quantity	
				if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] < $model->sp_quantity) 
			    {
			       $temp=$model->sp_quantity - $_POST['SalePr']['sp_quantity'];
					$p->p_quantity=$p->p_quantity + $temp;
					$p->save();
					$model->attributes=$_POST['SalePr'];
		
					$mod=new TransactionPr;
					$mod->type='Sale (P)(U)';
					$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
					$mod->name=$pmodel->p_name;		
					$mod->quantity=$_POST['SalePr']['sp_quantity'];
					$mod->save();
					

				   if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sp_id));
						} 
			 
			    }
   		    }
		 elseif($_POST['SalePr']['st_id']=='1' )  
		     {
			  $p = Product::model()->findByPk($_POST['SalePr']['p_id']); 
			   if(($_POST['SalePr']['sp_unit']==0))
			   {
				throw new CHttpException(405,'unit price cannot be zero at the time of sale');
			   }
			   //if updated quantity is greater then exixting quantity
			   if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] > $model->sp_quantity) 
			      {
			       $temp=$_POST['SalePr']['sp_quantity']-$model->sp_quantity;
					$p->p_quantity=$p->p_quantity - $temp;
					$p->save();
					$model->attributes=$_POST['SalePr'];
		
					$mod=new TransactionPr;
					$mod->type='Sale (P)(U)';
					$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
					$mod->name=$pmodel->p_name;		
					$mod->quantity=$_POST['SalePr']['sp_quantity'];
					$mod->save();
					

				   if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sp_id));
						} 
			 
			       }
				 //if updated quantity is less then exixting quantity
				if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] < $model->sp_quantity) 
			      {
			       $temp=$model->sp_quantity - $_POST['SalePr']['sp_quantity'];
					$p->p_quantity=$p->p_quantity + $temp;
					$p->save();
					$model->attributes=$_POST['SalePr'];
		
					$mod=new TransactionPr;
					$mod->type='Sale (P)(U)';
					$pmodel=Product::model()->findByPk($_POST['SalePr']['p_id']);
					$mod->name=$pmodel->p_name;		
					$mod->quantity=$_POST['SalePr']['sp_quantity'];
					$mod->save();
					

				   if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sp_id));
						} 
			 
			    }	
				//if updated quantity is equal to exixting quantity   
				if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity && $_POST['SalePr']['sp_quantity'] == $model->sp_quantity) 
			      {
			       				
					$model->attributes=$_POST['SalePr'];
				   if($model->save())
					   {
					    $this->redirect(array('view','id'=>$model->sp_id));
						} 
			 
			    }	   
				   
				   
				else 
				{
				 Yii::app()->user->setFlash('infq','Insuffient Quantity of product in Stock');
					$this->refresh();
				}
			 }
	    }
		if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model)))
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
		if(!isset($_GET['ajax'])){
		var_dump($id);
		}
		//	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new SalePr;
		
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

		//if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model)))
		//{
		$this->render('admin',array(
			'model'=>$model,
		));
		//}
		//else
		//{
		//throw new CHttpException(401,'You are not authorised to do this');
		
		//}
	}
	
	public function actionInvoicePR()
	{
		$model=new SalePr('invoiceprsearch');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SalePr']))
			$model->attributes=$_GET['SalePr'];
		//if(Yii::app()->user->checkAccess("salesMan",array('user'=>$model))){
		$this->render('invoiceproduct',array(
			'model'=>$model,
		));
		/*}
		else
		{
		throw new CHttpException(401,'You are not authorised to do this');
		
		}
		*/
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
	
	public function getTotalSale($p_id)
	{
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
