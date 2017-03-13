<?php
/* @var $this SurvayController */
/* @var $model Survay */

$this->breadcrumbs=array(
	'Survays'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Survay', 'url'=>array('index')),
	array('label'=>'Create Survay', 'url'=>array('create')),
	array('label'=>'View Survay', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Survay', 'url'=>array('admin')),
);
?>

<h1>Update Survay <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>