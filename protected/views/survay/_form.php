<?php
/* @var $this SurvayController */
/* @var $model Survay */
/* @var $form CActiveForm */
?>

<div class="form">
	<div class="mws-panel grid_7">
		<h1><?php echo (($model->isNewRecord)?'Create Survay':'Update Survay' . $model->id); ?></h1>
		<div class="mws-panel-header">
			<span></span>
		</div>
		<div class="mws-panel-body" style="height: auto">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'feed-form',
				'htmlOptions'=>array(
					'class'=>'mws-form'),
				'enableAjaxValidation'=>false,
			)); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $form->errorSummary($model); ?>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'msisdn',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'msisdn',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'msisdn'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'user_id',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'user_id',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'user_id'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'product',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php /*echo $form->textField($model,'product',array("class"=>"medium-large required")); */?>
					<?php echo $form->dropDownList($model,'product',Enum::yesNo(),array("class"=>"small")) ?>
				</div>
				<?php echo $form->error($model,'product'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'assigned_to',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'assigned_to',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'assigned_to'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'call_date',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'call_date',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'call_date'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'call_status',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'call_status',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'call_status'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'purpose_served',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'purpose_served',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'purpose_served'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'heard_abt_tonic',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'heard_abt_tonic',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'heard_abt_tonic'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'knowledge',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'knowledge',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'knowledge'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'behavior',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'behavior',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'behavior'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'waiting_time',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'waiting_time',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'waiting_time'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'ad_others_comment',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'ad_others_comment',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'ad_others_comment'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'easy_to_avail',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'easy_to_avail',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'easy_to_avail'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'hos_par_auth_behav',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'hos_par_auth_behav',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'hos_par_auth_behav'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'com_from_tonic_auth',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'com_from_tonic_auth',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'com_from_tonic_auth'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'dc_others_comment',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'dc_others_comment',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'dc_others_comment'); ?>
			</div>


			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'refer_to_ff',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'refer_to_ff',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'refer_to_ff'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'score',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'score',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'score'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'category',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'category',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'category'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'reason_be_score',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'reason_be_score',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'reason_be_score'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'detail_reason',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'detail_reason',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'detail_reason'); ?>
			</div>


			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'improvement_area',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'improvement_area',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'improvement_area'); ?>
			</div>

			<div class="mws-form-row">
				<?php echo $form->labelEx($model,'improvement_area_detail',array("class"=>"mws-form-label")); ?>
				<div class="mws-form-item">
					<?php echo $form->textField($model,'improvement_area_detail',array("class"=>"medium-large required")); ?>
				</div>
				<?php echo $form->error($model,'improvement_area_detail'); ?>
			</div>
			<div class="mws-button-row">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-primary")); ?>
			</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->