<?php
/* @var $this SurvayController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Survays',
);

$this->menu=array(
	array('label'=>'Create Survay', 'url'=>array('create')),
	array('label'=>'Manage Survay', 'url'=>array('admin')),
);
?>

<h1>Survays</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
