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
		 if($_POST['SalePr']['st_id']=='2' )
		     {
			  $model->attributes=$_POST['SalePr'];
			  $model->sp_unit=0;
			  $model->sp_discount=0;
			    if($model->save())
				   {
				    Yii::app()->user->setFlash('salesuccess','Product Record Added Successfully');
							$this->refresh();
			 
                    }
   		      }
		 elseif($_POST['SalePr']['st_id']=='1' )  
		     {
			  $p = Product::model()->findByPk($_POST['SalePr']['p_id']); 
			   if($_POST['SalePr']['sp_quantity'] <= $p->p_quantity) 
			      {
			       $p->quantity=$p->quantity-$_POST['SalePr']['sp_quantity'];
				   
			       $p->save();
	               $model->attributes=$_POST['SalePr'];
			        if($model->save())
					   {
					     
						} 
			 
			       }
				else 
				{
				 Yii::app()->user->setFlash('infq','Insuffient Quantity of product in Stock');
					$this->refresh();
				}
			 }
	    }		
		
	
		$this->render('create',array(
			'model'=>$model,
		));
	
	
	}