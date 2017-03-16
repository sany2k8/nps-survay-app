<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <!-- Viewport Metatag -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>

    <!-- Plugin Stylesheets first to ease overrides -->
    <?php
    Yii::app()->clientScript->registerCssFile(
        Yii::app()->request->baseUrl.'/jui/css/jquery.ui.all.css'
    );
    Yii::app()->clientScript->registerCssFile(
        Yii::app()->request->baseUrl.'/jui/jquery-ui.custom.css'
    );
    Yii::app()->clientScript->registerCssFile(
        Yii::app()->request->baseUrl.'/bootstrap/css/bootstrap.min.css'
    );
    ?>


    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/fonts/icomoon/style.css"); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/fonts/ptsans/stylesheet.css"); ?>

    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/mws-style.css", 'screen, print'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/icons/icol16.css", 'screen'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/icons/icol32.css", 'screen'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/"."css/mws-theme.css", 'screen, print'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page">
    <div id="mws-header" class="clearfix">

        <!-- Logo Container -->
        <div id="mws-logo-container">

            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <!--<a href="<?php /*echo Yii::app()->getBaseUrl(true); */?>" id="mws-logo-wrap">
                <?/*=CHtml::image(Yii::app()->request->baseUrl."/images/oz-logo.png", "OZ")*/?>
            </a>-->
        </div>

        <?php if(!Yii::app()->user->isGuest): ?>
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">

            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">

                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="<?=GenericProperties::getUserImage()?>" alt="User Photo">
                </div>

                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, <?php echo $this->getUserFullName(); ?>
                    </div>

                    <ul>
                        <li><?php echo CHtml::link('Profile',$this->createUrl('/user/'.Yii::app()->user->getId())); ?></li>
                        <li><?php echo CHtml::link('Change Preference',$this->createUrl('/user/update/'.Yii::app()->user->getId()));?></li>
                        <li><?=CHtml::link('Logout',$this->createUrl("/site/logout/"))?></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <?php echo $content; ?>
</div><!-- page -->

<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/libs/jquery.placeholder.min.js',CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/plugins/validate/jquery.validate-min.js',CClientScript::POS_HEAD); ?>

<!--Change Affiliates ID-->
<script type="text/javascript">
    $(document).ready(
        function()
        {
            $("#global_site_id").change(
                function()
                {
                   // lastRequest.abort();// abort ajax calls on global site id change
                    $.ajax({
                        url:'<?=Yii::app()->createUrl("dashboard/SetAffiliateId/")?>'
                        ,data:{id:$(this).val()}
                        ,success:
                            function(data)
                            {
                                if(data*1>0)
                                {
                                    var url=window.location.href.replace(/\?.+/,'');
                                    window.location.href=url;
                                    //window.location.reload();
                                }
                                else
                                {
                                    alert('Failed!');
                                }
                            }
                        ,error:
                            function()
                            {
                                alert('Server Timed Out, You are redirecting to login page');
                                window.location.reload();
                            }
                    });
                }
            );
        }
    );
</script>

</body>
</html>
