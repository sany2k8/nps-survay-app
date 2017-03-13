<?php
/* @var $this UserController */
/* @var $model User */


$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage <?php echo 'User' ?></h1>

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
<div class="clear"></div>
<div class="grid-loading">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loading.gif" alt="Loading...">
</div>
<?php $this->widget('MGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->baseUrl . '/css/MGridpager.css'),
    'summaryText' => 'Viewing <i>{start} to {end} of {count}</i> records',
    'itemsCssClass' => 'table-class',
    'htmlOptions' => array('class' => 'mgridview'),
	'columns'=>array(
		'id',
		'username',
		/*'password',*/
		'full_name',
		'email',
		'create_date',
		'update_date',
		array('name'=>'active','filter'=>Enum::yesNo(),'value'=>array($model,'getActiveText')),

		array(
			'class'=>'CButtonColumn',
		),
	),
));


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