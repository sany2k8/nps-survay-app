<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
/*$this->breadcrumbs=array(
	'Error',
);
*/?>
<!--<div style="text-align: center">

    <h2>Error <?php /*echo $code; */?></h2>

    <div class="error">
        <?php /*echo CHtml::encode($message); */?>
    </div>
</div>-->

<div class="container">
    <div id="mws-error-page">
        <h1>Error <span><?php echo $code; ?></span></h1>
        <h5><?php echo CHtml::encode($message); ?></h5>

    </div>
</div>