<?php  
	$baseUrl = Yii::app()->baseUrl; 
	$cs = Yii::app()->getClientScript();
	$cs->registerCssFile($baseUrl.'/css/login.css');
?>

<?php $this->beginContent('//layouts/default'); ?>
    <div id="mws-login-wrapper">
        <div id="mws-login">
            <?php echo $content; ?>
        </div>
    </div>
<?php $this->endContent(); ?>