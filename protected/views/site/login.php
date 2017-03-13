
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>
<div class="mws-login-lock"><i class="icon-lock"></i></div>
<div id="mws-login-form">

     <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions'=>array(
            'class'=>'mws-form',
        ),
    )); ?>

        <div class="mws-form-row">
            <div class="mws-form-item">
                <?php echo $form->textField($model,'username',array('class'=>'mws-login-username required','placeholder'=>'username')); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>
        </div>
        <div class="mws-form-row">
            <div class="mws-form-item">
                <?php echo $form->passwordField($model,'password',array('class'=>'mws-login-password required','placeholder'=>'password')); ?>
                <?php echo $form->error($model,'password'); ?>
            </div>
        </div>

        <div class="mws-form-row">
            <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-success mws-login-button')); ?>
        </div>

    <?php $this->endWidget(); ?>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" media="screen">
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/custom-plugins/fileinput.js',CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/jui/js/jquery-ui-effects.min.js',CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/core/login.js',CClientScript::POS_HEAD); ?>

