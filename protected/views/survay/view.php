<?php
/* @var $this SurvayController */
/* @var $model Survay */

$this->breadcrumbs=array(
	'Survays'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Survay', 'url'=>array('index')),
	array('label'=>'Create Survay', 'url'=>array('create')),
	array('label'=>'Update Survay', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Survay', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Survay', 'url'=>array('admin')),
);
?>

<h1>View Survay #<?php echo $model->id; ?></h1>

<div class="mws-panel grid_7">
	<div class="mws-panel-header"><span>View Survay</span></div>
	<div class="mws-panel-body" style="height: auto">
		<div class="left" style="width:50%;float:left;padding:0;margin:0">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'date',
					'time',
					'msisdn',
					'user_id',
					'product',
					'assigned_to',
					'call_date',
					'call_status',
					'purpose_served',
					'heard_abt_tonic',
					'knowledge',
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
				),
			)); ?>
		</div>
		<div class="right" style="width:50%;float:right;padding:0;margin:0">

		</div>
		<div class="clear"></div>
	</div>

	<div style="background-color: #606060; text-align: center;">
		<?php echo CHtml::link('<button class="btn btn-primary">Edit</button>',array('survay/update/'.$model->id)); ?>
	</div>
</div>