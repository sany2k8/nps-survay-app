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

<div class="mws-panel grid_12">
	<div class="mws-panel-header"><span>View Survay</span></div>
	<div class="mws-panel-body" style="height: auto">
		<div class="left" style="width:100%;float:left;padding:0;margin:0">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'date',
					'time',
					'msisdn',
					'user_id',
					//'product',
					 array('value'=>isset($model->product) ?Enum::getProductType($model->product):"", 'label'=>'Product'),
					'assigned_to',
					'call_date',
					//'call_status',
					array('value'=>isset($model->call_status) ?Enum::getCallStatus($model->call_status):"", 'label'=>'Call Status'),
					//'purpose_served',
					array('value'=>isset($model->purpose_served) ?Enum::yesNoNotSure($model->purpose_served):"", 'label'=>'Purpose Served'),
					//'heard_abt_tonic',
					array('value'=>isset($model->heard_abt_tonic) ?Enum::getHeardType($model->heard_abt_tonic):"", 'label'=>'Heard About Tonic'),
					//'knowledge',
					array('value'=>isset($model->knowledge) ?Enum::getEnumeration($model->knowledge):"", 'label'=>'Knowledge'),
					//'behavior',
					array('value'=>isset($model->behavior) ? Enum::getEnumeration($model->behavior):"", 'label'=>'Behavior'),
					//'waiting_time',
					array('value'=>isset($model->waiting_time) ?Enum::getEnumeration($model->waiting_time):"", 'label'=>'Waiting Time'),
					'ad_others_comment',
					//'easy_to_avail',
					array('value'=>isset($model->easy_to_avail) ?Enum::getEnumeration($model->easy_to_avail):"", 'label'=>'Easy to avail'),
					//'hos_par_auth_behav',
					array('value'=>isset($model->hos_par_auth_behav) ?Enum::getEnumeration($model->hos_par_auth_behav):"", 'label'=>'Hospitality/Behavior'),
					//'com_from_tonic_auth',
					array('value'=>isset($model->com_from_tonic_auth) ?Enum::getEnumeration($model->com_from_tonic_auth):"", 'label'=>'Comment from authority'),
					'dc_others_comment',
					'refer_to_ff',
					'score',
					//'category',
					array('value'=>Enum::getCategory($model->category), 'label'=>'Category'),
					'reason_be_score',
					'detail_reason',
					'improvement_area',
					'improvement_area_detail',
					//'create_date',
					//'update_date',
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