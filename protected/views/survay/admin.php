<?php
/* @var $this SurvayController */
/* @var $model Survay */
?>

<h1>Manage Survays</h1>

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
		//'product',
		array('name'=>'product','filter'=>Enum::getProductType(),'value'=>array($model,'getProduct')),
		'assigned_to',
		//'call_date',
		GenericProperties::getDatePickerForGrid($model,'call_date'),
		//'call_status',
		array('name'=>'call_status','filter'=>Enum::getCallStatus(),'value'=>array($model,'getCallStatus')),
		//'purpose_served',
		array('name'=>'purpose_served','filter'=>Enum::yesNoNotSure(),'value'=>array($model,'yesNoNotSure')),
		//'knowledge',
		array('name'=>'knowledge','filter'=>Enum::getEnumeration(),'value'=>array($model,'getEnumeration')),
		//'heard_abt_tonic',
		array('name'=>'heard_abt_tonic','filter'=>Enum::getHeardType(),'value'=>array($model,'getHeardType')),
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
