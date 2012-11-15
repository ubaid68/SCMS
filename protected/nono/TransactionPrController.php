<?php

class TransactionPrController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	/*public function actionView()
	{
		$this->render('_transactionpr',array(
			'model'=>$this->loadModel(),
		));
	}*/
	public function actionAdmin()
	{
		$model=new TransactionPr('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TransactionPr']))
			$model->attributes=$_GET['TransactionPr'];

		$this->render('_transactionpr',array(
			'model'=>$model,
		));
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	public function loadModel()
	{
		$model=Product::model()->findAll();
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}