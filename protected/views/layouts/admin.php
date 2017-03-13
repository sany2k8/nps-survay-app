<?php /* @var $this Controller */ ?>
<?php
	$baseUrl = Yii::app()->baseUrl;
	$cs = Yii::app()->getClientScript();
	
	//Core Script 
	$cs->registerScriptFile($baseUrl.'/bootstrap/js/bootstrap.min.js',CClientScript::POS_HEAD);
	$cs->registerScriptFile($baseUrl.'/js/core/mws.js',CClientScript::POS_HEAD);
    //$cs->registerScriptFile($baseUrl.'/js/themer.js',CClientScript::POS_HEAD);

    // Plugin Scripts
    $cs->registerScriptFile($baseUrl.'/custom-plugins/fileinput.js',CClientScript::POS_HEAD);
    //$cs->registerScriptFile($baseUrl.'/plugins/datatables/jquery.dataTables.min.js',CClientScript::POS_HEAD);

//	$cs->registerCssFile($baseUrl.'/css/themer.css');
	$cs->registerCssFile($baseUrl.'/css/Mgrid.css');
?>
<?php
#Set Labels#Previosly sets from Base Controller Class with overwrite method is now removed

?>
<?php $this->beginContent('//layouts/default'); ?>
<!-- Start Main Wrapper -->
<div id="mws-wrapper">
    <div id="mws-sidebar-stitch"></div>
    <div id="mws-sidebar-bg"></div>
    <!-- Sidebar Wrapper -->
    <div id="mws-sidebar">

        <!-- Hidden Nav Collapse Button -->
        <div id="mws-nav-collapse">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="mws-inset11">
            &nbsp;
        </div>

        <!-- Searchbox -->
       <!-- <div id="mws-searchbox" class="mws-inset">
            <form action="typography.html">
                <input type="text" class="mws-search-input" placeholder="Search...">
                <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
            </form>
        </div>-->

        <!-- Main Navigation -->
        <div id="mws-navigation">
            <ul>



                <li class="active">
                    <a href="javascript: void(0)" class="cursorPointer">
                        <table>
                            <tr>
                                <td><i class="icol32-qip-at-home-2"></i></td><td title="For permission just follow those links step by step">Admin Panel</td>
                            </tr>
                        </table>
                    </a>
                    <ul <?=$this->getTab(array("usergroup","user","access","grouppermission","affiliates"))?> >
                        <li><?php echo CHtml::link('View All Users ',$this->createUrl('/user/admin'), array('title'=>'View all user and manage them, either you can change user details or delete user too')); ?></li>
                        <li><?php echo CHtml::link('New User',$this->createUrl('/user/create'),array('title'=>'Create a new user.')); ?></li>
                    </ul>
                </li>
            

            </ul>
        </div>
    </div>

    <div id="mws-container" class="clearfix">
        <div class="container">
            <span id="ajxLoader" class="ajaxLoading ajaxLoadtSyle">
            	<img src="<?=Yii::app()->request->baseUrl?>/images/oz-loader.gif" alt="Loading ...."/>
	        </span>
            <?php echo $content; ?>
        </div>
    </div>
</div>

    <script type="text/javascript">
       //global ajax handler
        $( document ).ajaxStart(function() {
            $("#ajxLoader").fadeIn();
        });

        $( document ).ajaxComplete(function() {
            $("#ajxLoader").fadeOut();
        });

       //LoginForm[username]
       //Check For Session Expired or not when ajax error occurred
       $(document).ajaxError(
           function(data, x)
           {

               if(x.responseText && x.responseText.indexOf("id=\"mws-login-wrapper\"")>0)
               {
                   alert("Oops! Your session expired!\nYou'll be redirected to login page shortly.");
                   window.location.reload();
               }
           }
       );


        $(document).ready(function(){
            //menu fixed by Sabbir
            $("#mws-navigation ul li a").click(function(){
                var this_one_parent = $(this).parent();if(this_one_parent.find("ul li a").html()==null){return true;}
                $.each($("#mws-navigation ul li"),function(){if($(this).attr("class")=="active" && this_one_parent.index()!=$(this).index()){$(this).find("ul").slideUp();}});
                if(this_one_parent.find("ul").css("display")=="block"){this_one_parent.find("ul").slideUp();}else{this_one_parent.find("ul").slideDown();}
            });
            //menu

           //hide site dropdown div
            if (window.location.href.indexOf("staysIOChartData") > -1){
                $("#global_site_id").hide();
            }

        });
    </script>
<?php $this->endContent(); ?>

