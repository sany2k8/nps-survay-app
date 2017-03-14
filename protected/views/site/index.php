<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="grid_10">

<!-- Demo Scripts (remove if not needed) -->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/demo/demo.dashboard.js',CClientScript::POS_HEAD); ?>
</div>
<style>
    div#mws-navigation {
        height: 750px;
    }
</style>
