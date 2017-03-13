<?php
/* @var $this UserController */
/* @var $model User */


$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<div class="mws-panel grid_7">
<h2>View <?php echo 'User' ?> #<?php echo $model->id; ?></h2>
    <div class="mws-panel-header"></div>
    <div class="mws-panel-body" style="height: auto">
        <?php
        $avatar = ($model->avatar!="")?CHtml::image(Yii::app()->baseUrl."/images/profile-images/".$model->avatar):null;
        ?>
        <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                'id',
                'username',
                array('name'=>$model->getAttributeLabel('avatar'),'value'=>$avatar,'type'=>'raw'),
                'full_name',
                'email',
                'create_date',
                'update_date',
                array('name'=>'action', 'value'=>$model->getActiveText($model)),
            ),
        )); ?>
        <div class="clear"></div>
    </div>
    <div style="background-color: #606060; text-align: center;">
        <?php echo CHtml::link('<button class="btn btn-primary">Edit</button>',array('user/update/'.$model->id)); ?>
    </div>
</div>