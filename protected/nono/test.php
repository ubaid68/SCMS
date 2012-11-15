<?php
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
		//	$p = Product::model()->findByPk($_POST['SalePr']['p_id']);
			$model->attributes=$_POST['SalePr'];
			
			//var_dump ($model->st);
			
			
			if((($_POST['SalePr']['st_id'])=='1')  
			{
			$p = Product::model()->findByPk($_POST['SalePr']['p_id']);
			if($_POST['SalePr']['sp_unit']==0){
				throw new CHttpException(405,'Sale unit price cannot be 0');
			}
			if(($_POST['SalePr']['sp_quantity']) <= ($p->p_quantity))
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
				elseif(($_POST['SalePr']['sp_quantity']) >= ($p->p_quantity))
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
			
			
					
			
	}		
		/*	if($model->save()){
			
					
					
				
					
			
		}
	*/
		$this->render('create',array(
			'model'=>$model,
		));
	
	
	}
?>