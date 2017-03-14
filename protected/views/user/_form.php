<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

?>
<div class="mws-panel grid_12">
    <?php if(isset($model->id)){?>
        <h1>Update <?php echo 'User' ?> <?php echo $model->id; ?></h1>
    <?php }else{?>
        <h1>Create <?php echo 'User' ?></h1>
    <?php } ?>
    <div class="mws-panel-header">
        <span>Create <?php echo 'User' ?></span>
    </div>
    <div class="mws-panel-body" style="height: auto">
            <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'user-form',
                'enableAjaxValidation'=>false,
                'htmlOptions'=>array(
                    'enctype' => 'multipart/form-data',
                    'class'=>'mws-form'
                ),
            )); ?>

                <p class="note">Fields with <span class="required">*</span> are required.</p>

                <?php echo $form->errorSummary($model); ?>

                <div class="mws-form-row">
                    <?php echo $form->labelEx($model,'username',array("class"=>'mws-form-label')); ?>
                    <div class="mws-form-item">
                        <?php echo $form->textField($model,'username',array("class"=>"medium")); ?>
                    </div>
                    <?php echo $form->error($model,'username'); ?>
                </div>

                <div class="mws-form-row">
                    <?php echo $form->labelEx($model,'password',array("class"=>'mws-form-label')); ?>
                    <div class="mws-form-item">
                        <?php echo $form->passwordField($model,'password',array("class"=>"medium",'placeholder'=>($model->isNewRecord)?'':'Leave blank if don\'t want to change')); ?>
                    </div>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                <div class="mws-form-row">
                    <?php echo $form->labelEx($model,'full_name',array("class"=>'mws-form-label')); ?>
                    <div class="mws-form-item">
                        <?php echo $form->textField($model,'full_name',array("class"=>"medium")); ?>
                    </div>
                    <?php echo $form->error($model,'full_name'); ?>
                </div>

                <div class="mws-form-row">
                    <?php echo $form->labelEx($model,'email',array("class"=>'mws-form-label')); ?>
                    <div class="mws-form-item">
                        <?php echo $form->textField($model,'email',array("class"=>"medium")); ?>
                    </div>
                    <?php echo $form->error($model,'email'); ?>
                </div>


                <div class="mws-form-row">
                    <?php
                    echo $form->labelEx($model, 'avatar',array("class"=>'mws-form-label'));
                    echo '<div class="mws-form-item">';
                    echo $form->fileField($model, 'avatar',array('class'=>'fileField_avatar'));
                    echo '</div>';
                    echo $form->error($model, 'avatar');
                    ?>
                </div>

                <div class="mws-form-row">
                    <?php echo $form->labelEx($model,'active',array("class"=>'mws-form-label')); ?>
                    <div class="mws-form-item">
                        <?php echo $form->dropDownList($model,'active',Enum::yesNo(),array("class"=>"medium")); ?>
                    </div>
                    <?php echo $form->error($model,'active'); ?>
                </div>

                <div class="mws-button-row" style="margin-top: 40px;">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("name"=>'save',"class"=>"btn btn-primary")); ?>
                </div>

            <?php $this->endWidget(); ?>

            </div><!-- form -->
        </div>
    </div>

<script type="text/javascript">
	$(document).ready(function(){
		//$(".fileinput-holder").css('width','268px');
		$(".fileinput-preview").css("width",'236px');
		$(".fileinput-btn.btn").css('right','235px');
	});
</script>

<style>
    select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"] {
        width: 67% !important;
    }
</style>
