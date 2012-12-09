<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="heading">
	<h2>Login</h2>

	<p>Please fill out the following form with your login credentials:</p>
</div>

<div>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
<div class="box login">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="boxBody">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>

			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
			<div class="row buttons">
				<?php echo CHtml::submitButton('Login', array("class"=>"btnLogin")); ?>
			</div>
	</div>
</div>
	

	

<?php $this->endWidget(); ?>
</div><!-- form -->
