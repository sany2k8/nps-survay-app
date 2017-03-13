<?php
/* @var $this SurvayController */
/* @var $model Survay */

$this->breadcrumbs=array(
	'Survays'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Survay', 'url'=>array('index')),
	array('label'=>'Manage Survay', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>