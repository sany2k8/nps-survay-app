<?php
/* @var $this UserController */
/* @var $model User */
?>

<h1>Manage <?php echo 'User' ?></h1>

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