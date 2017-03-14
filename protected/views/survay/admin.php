<?php
/* @var $this SurvayController */
/* @var $model Survay */

$this->breadcrumbs=array(
	'Survays'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Survay', 'url'=>array('index')),
	array('label'=>'Create Survay', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#survay-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Survays</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="grid-loading">
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif" alt="Loading...">
</div>
<?php $this->widget('MGridView', array(
	'id'=>'feed-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'afterAjaxUpdate' => 'reinstallDatePicker',
	'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/MGridpager.css'),
	'summaryText' => 'Viewing <i>{start} to {end} of {count}</i> records',
	'itemsCssClass' => 'table-class',
	'htmlOptions' => array('class' => 'mgridview'),
	'columns'=>array(
		//'id',
		//'date',
		GenericProperties::getDatePickerForGrid($model,'date'),
		'time',
		'msisdn',
		'user_id',
		'product',
		'assigned_to',
		//'call_date',
		GenericProperties::getDatePickerForGrid($model,'call_date'),
		'call_status',
		'purpose_served',
		'heard_abt_tonic',
		'knowledge',
		'score',
		/*
		'behavior',
		'waiting_time',
		'ad_others_comment',
		'easy_to_avail',
		'hos_par_auth_behav',
		'com_from_tonic_auth',
		'dc_others_comment',
		'refer_to_ff',
		'score',
		'category',
		'reason_be_score',
		'detail_reason',
		'improvement_area',
		'improvement_area_detail',
		'create_date',
		'update_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
));
GenericProperties::reinstallDatePiker(); #reinstall date picker after filtering
?>

<script>

	$(document).ready(
		function()
		{

			$(".grid-loading img").bind("ajaxStart.dataGrid", function() {

				$(this).show();
			});

			$(".grid-loading img").bind("ajaxStop.dataGrid", function() {

				$(this).hide();
			});
		}
	);

</script>
