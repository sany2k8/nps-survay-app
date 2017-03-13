<?php
/* @var $this SurvayController */
/* @var $data Survay */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('msisdn')); ?>:</b>
	<?php echo CHtml::encode($data->msisdn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product')); ?>:</b>
	<?php echo CHtml::encode($data->product); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigned_to')); ?>:</b>
	<?php echo CHtml::encode($data->assigned_to); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('call_date')); ?>:</b>
	<?php echo CHtml::encode($data->call_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('call_status')); ?>:</b>
	<?php echo CHtml::encode($data->call_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose_served')); ?>:</b>
	<?php echo CHtml::encode($data->purpose_served); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heard_abt_tonic')); ?>:</b>
	<?php echo CHtml::encode($data->heard_abt_tonic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('knowledge')); ?>:</b>
	<?php echo CHtml::encode($data->knowledge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('behavior')); ?>:</b>
	<?php echo CHtml::encode($data->behavior); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waiting_time')); ?>:</b>
	<?php echo CHtml::encode($data->waiting_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ad_others_comment')); ?>:</b>
	<?php echo CHtml::encode($data->ad_others_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('easy_to_avail')); ?>:</b>
	<?php echo CHtml::encode($data->easy_to_avail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hos_par_auth_behav')); ?>:</b>
	<?php echo CHtml::encode($data->hos_par_auth_behav); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_from_tonic_auth')); ?>:</b>
	<?php echo CHtml::encode($data->com_from_tonic_auth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dc_others_comment')); ?>:</b>
	<?php echo CHtml::encode($data->dc_others_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refer_to_ff')); ?>:</b>
	<?php echo CHtml::encode($data->refer_to_ff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason_be_score')); ?>:</b>
	<?php echo CHtml::encode($data->reason_be_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_reason')); ?>:</b>
	<?php echo CHtml::encode($data->detail_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('improvement_area')); ?>:</b>
	<?php echo CHtml::encode($data->improvement_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('improvement_area_detail')); ?>:</b>
	<?php echo CHtml::encode($data->improvement_area_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	*/ ?>

</div>