<?php
/**
 * Created by Sabbir.
 * Email: sabbir1cse@gmail.com
 * Date: 3/30/13
 * Time: 10:04 PM
 * To change this template use File | Settings | File Templates.
 */

class Enum
{
    public static function make_data_list($data)
    {
        return CHtml::listData($data,'key', 'value',false);
    }

    public static function getControllers()
    {

        /*$appControllerPath = Yii::getPathOfAlias('application.controllers');
        //checking existence of controllers directory
        if(is_dir($appControllerPath))
            $fileLists = CFileHelper::findFiles($appControllerPath);


        $data = array();
        foreach($fileLists as $controllerPath)
        {
            //getting controller name like e.g. 'siteController.php'
            $controllerName = substr($controllerPath,  strrpos($controllerPath, DIRECTORY_SEPARATOR)+1,-4);
            if(!strstr($controllerName,".svn"))
                $data[] = array('key'=>strtolower(str_replace("Controller","",$controllerName)),'value'=>$controllerName);
        }*/

        $data = array(

            //a
            array('key'=>'access',"value"=>"Access"),
            array('key'=>'ads',"value"=>"Ad Spend"),
            array('key'=>'analyticsvisitors',"value"=>"Analytics Visitors"),

            //b
            array('key'=>'bookingComStats',"value"=>"Booking Com Stats"),

            //c
            array('key'=>'campaigns',"value"=>"Campaign"),
            array('key'=>'affiliates',"value"=>"Channels"),
            array('key'=>'clients',"value"=>"Customers"),
            array('key'=>'cron',"value"=>"Cron"),
            array('key'=>'corePropertyPublishedHistory',"value"=>"Published Property"),

            //d
            array('key'=>'dashboard',"value"=>"Dashboard"),


            //f
            array('key'=>'feeds',"value"=>"Feed"),
            array('key'=>'feedIntegration',"value"=>"Feed Integration"),

            //g
            array('key'=>'grouppermission',"value"=>"Group Permission"),
            array('key'=>'geoipinfo',"value"=>"Geo Ip Info"),

            //i
            array('key'=>'import',"value"=>"Import"),

            //k
            array('key'=>'keywords',"value"=>"Keywords"),
            //l
            array('key'=>'leadsConfig',"value"=>"Lead Config"),
            array('key'=>'locations',"value"=>"Locations"),
            //m
            array('key'=>'reports',"value"=>"Measure"),
            array('key'=>'opportunity',"value"=>"Opportunity"),

            //r
            array('key'=>'revenue',"value"=>"Revenue"),
            array('key'=>'revenueSource',"value"=>"Revenue Source"),
            //s
            array('key'=>'segments',"value"=>"Segment"),
            array('key'=>'site',"value"=>"Site"),
            array('key'=>'consolidatedDashboard',"value"=>"Stays.IO"),

            //t
            array('key'=>'transactions',"value"=>"Transaction"),
            array('key'=>'trafficsources',"value"=>"Traffic Source"),

            //u
            array('key'=>'user',"value"=>"User"),
            array('key'=>'usergroup',"value"=>"User Group"),
            array('key'=>'utmTrackingInfo',"value"=>"Utm Tracking Info"),

            //v
            array('key'=>'verifier',"value"=>"Verify"),
            array('key'=>'ViatorDataImport',"value"=>"Viator"),
        );
        return self::make_data_list($data);
    }

    public static function getActions($controller)
    {
        $ignored = array('actions','actionError');
        $data = array();

        foreach (get_class_methods($controller) as $method_name) {
            if (preg_match("/^action\w+$/", $method_name))
            {
                if(!in_array($method_name,$ignored))
                    $data[]=array('key'=>$method_name,'value'=>$method_name);
                // print "<h5>$method_name</h5>";
            }
        }
//        if($controller=="*")
//        {
//            $appControllerPath = Yii::getPathOfAlias('application.controllers');
//            //checking existence of controllers directory
//            if(is_dir($appControllerPath))
//            {
//                $fileLists = CFileHelper::findFiles($appControllerPath);
//
//                foreach($fileLists as $controllerPath)
//                {
//                    //getting controller name like e.g. 'siteController.php'
//                    $controllerName = substr($controllerPath,  strrpos($controllerPath, DIRECTORY_SEPARATOR)+1,-4);
//                    (print_r(get_class_methods($controllerName)));
//
//                    /*foreach (get_class_methods($controllerName) as $method_name) {
//                        if (preg_match("/^action\w+$/", $method_name))
//                        {
//                            if(!in_array($method_name,$ignored))
//                                $data[]=array('key'=>$method_name,'value'=>$method_name);
//                        }
//                    }*/
//
//                }
//                exit;
//            }
//
//        }
//        else
//        {
//           foreach (get_class_methods($controller) as $method_name) {
//                if (preg_match("/^action\w+$/", $method_name))
//                {
//                    if(!in_array($method_name,$ignored))
//                        $data[]=array('key'=>$method_name,'value'=>$method_name);
//                    // print "<h5>$method_name</h5>";
//                }
//            }
//        }



        return self::make_data_list($data);
    }

    public static function yesNo()
    {
        $data = array(array('key'=>'1','value'=>'Yes'),array('key'=>'0','value'=>'No'));
        return self::make_data_list($data);
    }

    public static function getStatus()
    {
        $data = array();

        $data[] = array('key'=>'3','value'=>'Active');
        $data[] = array('key'=>'1','value'=>'Pending');
        $data[] = array('key'=>'2','value'=>'Pause');
        $data[] = array('key'=>'0','value'=>'Deleted');
        $data[] = array('key'=>'4','value'=>'Unmatched');
        $data[] = array('key'=>'5','value'=>'Duplicate');
        $data[] = array('key'=>'8','value'=>'IntegrationError');
        $data[] = array('key'=>'6','value'=>'Invalid');
        $data[] = array('key'=>'7','value'=>'Host&Post');
        $data[] = array('key'=>'9','value'=>'Cancelled');

        return self::make_data_list($data);
    }

    public static function getMonetization()
    {
        $data = array();

        $data[] = array('key'=>'4','value'=>'Pay per Click');
        $data[] = array('key'=>'1','value'=>'Pay Per Lead');
        $data[] = array('key'=>'2','value'=>'Pay Per Call');
        $data[] = array('key'=>'3','value'=>'E-commerce');

        return self::make_data_list($data);
    }

    public static function getReportDate()
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'Today');
        $data[] = array('key'=>'1','value'=>'Yesterday');
        $data[] = array('key'=>'2','value'=>'Last 7 Days');
        $data[] = array('key'=>'4','value'=>'This Month');
        $data[] = array('key'=>'5','value'=>'Last Month');
        $data[] = array('key'=>'6','value'=>'Year To Date');

        return self::make_data_list($data);
    }


    public static function periodOptions($lastMonth=false,$customRange=false,$default=null)
    {
        $data = array();

        $data[] = array('key'=>'1','value'=>'Last 7 Days');
        $data[] = array('key'=>'2','value'=>'Last 15 Days');
        $data[] = array('key'=>'3','value'=>'Last 30 Days');
        $data[] = array('key'=>'4','value'=>'Last 90 Days');
        $data[] = array('key'=>'11','value'=>'This Month');
        if($lastMonth){
            $data[] = array('key'=>'9','value'=>'Last Month');
        }
        $data[] = array('key'=>'5','value'=>'Yesterday');
        $data[] = array('key'=>'8','value'=>'Today');
        $data[] = array('key'=>'7','value'=>'This Year');
        if($customRange){
            $data[] = array('key'=>'10','value'=>'Custom Range');
        }

        #array filter for default value
        if(isset($default) and $default!==null)
        {
            foreach($data as $newData)
            {
                if($newData['key']===$default)
                {
                    unset($data);
                    $data[] = array('key'=>$default,'value'=>$newData['value']);
                }
            }
        }
        #array filter for default value

        return self::make_data_list($data);
    }

    /**
     *
     * @return array
     */
    public static function gridDateRanges($eliminates=null,$default=null)
    {
        $data = array();

        $data[] = array('key'=>'1','value'=>'Last 7 Days');
        $data[] = array('key'=>'2','value'=>'Last 15 Days');
        $data[] = array('key'=>'3','value'=>'Last 30 Days');
        $data[] = array('key'=>'4','value'=>'Last 90 Days');
        $data[] = array('key'=>'5','value'=>'Yesterday');
        $data[] = array('key'=>'9','value'=>'Today');
        $data[] = array('key'=>'6','value'=>'This Month');
        $data[] = array('key'=>'7','value'=>'This Year');
        $data[] = array('key'=>'8','value'=>'Custom Range');

        if($eliminates!=null and is_array($eliminates)){
//            $refineData = array();
            foreach($eliminates as $k){
                unset($data[$k]);
            }
        }
        if(isset($default) and $default)
        {
            foreach($data as $newData)
            {
                if($newData['key']===$default)
                {
                    unset($data);
                    $data[] = array('key'=>$default,'value'=>$newData['value']);
                }
            }
        }

        return self::make_data_list($data);
    }

    public static function periodOptionsChart()
    {
        $data = array();

        $data[] = array('key'=>'1','value'=>'Last 7 Days');
        $data[] = array('key'=>'2','value'=>'Last 15 Days');
        $data[] = array('key'=>'3','value'=>'Last 30 Days');
        $data[] = array('key'=>'4','value'=>'Last 90 Days');
        $data[] = array('key'=>'6','value'=>'This Month');
        $data[] = array('key'=>'7','value'=>'This Year');

        return self::make_data_list($data);
    }


    /**
     * @function getLocalDateTime don't set parameter to get current date time in vancouver time.
     */

    public static function getLocalDateTime(){

        #$date = new DateTime();
        #    $date->setTimezone(new DateTimeZone('America/Vancouver'));
        return date('Y-m-d H:i:s');#$date->format('Y-m-d H:i:s');
    }

    public static function  genericComboService($model, $deleted=0, $field=array('id','name'))
    {
        return CHtml::listData($model->findAll("deleted=:deleted",array(':deleted'=>$deleted)),$field[0],$field[1]);

    }

    public static function is_date( $str )
    {
        $stamp = strtotime( $str );

        if (!is_numeric($stamp)){
            return false;
        }

        $month = date( 'm', $stamp );
        $day   = date( 'd', $stamp );
        $year  = date( 'Y', $stamp );

        if (checkdate($month, $day, $year)){
            return true;
        }

        return false;
    }

    public static function fieldType()
    {
        $data[] = array('key'=>'date','value'=>'Date');
        $data[] = array('key'=>'number','value'=>'Number');
        $data[] = array('key'=>'text','value'=>'Text');
        $data[] = array('key'=>'url','value'=>'URL');
        #$data[] = array('key'=>'textNumber','value'=>'Currency');
        $data[] = array('key'=>'radio','value'=>'Radio Button');
        return self::make_data_list($data);
    }

    public static function hourRange(){

        $hours=array();
        $hours = array
        (
            '0'=>array("Start"=>"00:00",
                "End"=>"01:00"),
            '1'=>array("Start"=>"01:01",
                "End"=>"02:00"),
            '2'=>array("Start"=>"02:01",
                "End"=>"03:00"),
            '3'=>array("Start"=>"03:01",
                "End"=>"04:00"),
            '4'=>array("Start"=>"04:01",
                "End"=>"05:00"),
            '5'=>array("Start"=>"05:01",
                "End"=>"06:00"),
            '6'=>array("Start"=>"06:01",
                "End"=>"07:00"),
            '7'=>array("Start"=>"07:01",
                "End"=>"08:00"),
            '8'=>array("Start"=>"08:01",
                "End"=>"09:00"),
            '9'=>array("Start"=>"09:01",
                "End"=>"10:00"),
            '10'=>array("Start"=>"10:01",
                "End"=>"11:00"),
            '11'=>array("Start"=>"11:01",
                "End"=>"12:00"),
            '12'=>array("Start"=>"12:01",
                "End"=>"13:00"),
            '13'=>array("Start"=>"13:01",
                "End"=>"14:00"),
            '14'=>array("Start"=>"14:01",
                "End"=>"15:00"),
            '15'=>array("Start"=>"15:01",
                "End"=>"16:00"),
            '16'=>array("Start"=>"16:01",
                "End"=>"17:00"),
            '17'=>array("Start"=>"17:01",
                "End"=>"18:00"),
            '18'=>array("Start"=>"18:01",
                "End"=>"19:00"),
            '19'=>array("Start"=>"19:01",
                "End"=>"20:00"),
            '20'=>array("Start"=>"20:01",
                "End"=>"21:00"),
            '21'=>array("Start"=>"21:01",
                "End"=>"22:00"),
            '22'=>array("Start"=>"22:01",
                "End"=>"23:00"),
            '23'=>array("Start"=>"23:01",
                "End"=>"23:59")
        );
        return $hours;

    }

    public static function pointOfSales(){

        $sites=array();
        $sites=array('homeowners.com'=>1,'rentalhomes.com'=>3,'renters.com'=>2);
        return $sites;
    }

    public static function revenue(){

        $revenue=array();
        $revenue=array('flipkey'=>3.25);
        return $revenue;
    }

    //drop down menu for flipkey data list grid only
    public static function gridDateRangesForFlipKeyGrid()
    {
        $data = array();
        $data[] = array('key'=>'8','value'=>'Custom Range');
        return self::make_data_list($data);
    }

    /**
     * Feed Keys
     */
    public static function feed_keys(){
        /*$feed_keys = array(
            '1'=>'IH',
            '2'=>'FK',
            '3'=>'LG',
            '4'=>'TP',
            '5'=>'BP'
        );*/


        $feed_result = Yii::app()->db->createCommand("SELECT id,code FROM feed_integration ORDER BY id ASC")->queryAll();
        if(is_array($feed_result) && count($feed_result)>0){
            foreach($feed_result as $value){
                $feed_keys[$value['id']]=$value['code'];
            }
        }

        return $feed_keys;
    }

    public static function gridSiteNamesForFlipKeyGrid()
    {
        $data = array();
        $data[] = array('key'=>'homeowners.com','value'=>'HomeOwners.com');
        $data[] = array('key'=>'renters.com','value'=>'Renters.com');
        $data[] = array('key'=>'rentalhomes.com','value'=>'Rentalhomes.com');
        return self::make_data_list($data);
    }

    public static function opaStoreType(){
        $data = array('RentByOwner.com'=>'RBO - ','Renters.com'=>'R - ','RentalHomes.com'=>'RH - ', 'BedroomVillas.com'=>'BV - ');
        return $data;
    }

    public static function allAffiliates($flip=false)
    {
        $sites=array(//'1'=>'Homeowners.com',
                    '2'=>'Renters.com',
                    '3'=>'Rentalhomes.com',
                    //'4'=>'Test.com',
                    //'5'=>'Oahu.com',
                    //'6'=>'TrailRaid.com',
                    //'7'=>'Twst.com',
                    //'8'=>'California.com',
                    '9'=>'RentByOwner.com',
                    '11'=>'BedroomVillas.com',
                    //'10'=>'YO!'
                   );
        if($flip==true){
            $sites=array_flip($sites);
        }
        return $sites;
    }

    public static function dataMigrationTables(){
        $tables=array(
            '1'=>'ads_spent',
            '2'=>'assumption_task',
            '3'=>'campaign',
            '4'=>'client',
            '5'=>'core_property_published_history',
            '6'=>'custom_fields',
            '7'=>'custom_fields_value',
            '8'=>'field_labels',
           // '9'=>'fk_requests',
           // '10'=>'flipkey_data',
           // '11'=>'flipkey_data_import',
           // '12'=>'google_adwords_temp',
            '13'=>'lean_canvas',
            '14'=>'revenue',
            '15'=>'revenue_source',
            '16'=>'segment',
            '17'=>'transaction',
            '18'=>'url_statistics',
            //'19'=>'analytics_visitors',
        );
        return $tables;
    }

    public static function analyticsMigrationTables(){
        $affiliates=Yii::app()->db->createCommand("SELECT id FROM ".Affiliate::model()->tableName()." ORDER BY id ASC")->queryColumn();
        foreach($affiliates as $key=>$value){
            $analyticsTable[$value]="analytics_visitors_".$value;
        }
        return $analyticsTable;
    }

    // get all site names for active listing
    public static function getListingSiteName(){
        $tableNames=array(
                   // '1'=>'HOMEOWNERS',
                    '2'=>'RENTERS',
                    '3'=>'RENTALHOMES',
                   // '5'=>'OAHU',
                    '9'=>'RENTBYOWNER',
                    '11'=>'BEDROOMVILLA',
                   );
        return $tableNames;
    }

    public static function getTableByAffiliate($table){
        $affiliates=Yii::app()->db->createCommand("SELECT id FROM ".Affiliate::model()->tableName()." ORDER BY id ASC")->queryColumn();
        foreach($affiliates as $key=>$value){
            $tableName[$value]=$table.'_'.$value;
        }
        return $tableName;
    }

	public static function getSiteNameBySiteId($site_id = '', $isProduction = false){
		$sites = self::getInsuranceSites($isProduction);
		$site_name = array_key_exists($site_id, $sites) ? $sites[$site_id] : "";
        if($site_name){
            return $site_name;
        }
        //For corrupted data (ie,. policycom)
        $sites = self::getInsuranceSitesForProtectBug($isProduction);
        $site_name = array_key_exists($site_id, $sites) ? $sites[$site_id] : "";
        return $site_name;
	}

    public static function getInsuranceSiteIDBySiteName($site_name = '', $isProduction = false){
        $sites = self::getInsuranceSites($isProduction);
        $site_id = array_search($site_name, $sites);
        if($site_id){
            return $site_id;
        }

        //For corrupted data (ie,. policycom)
        $sites = self::getInsuranceSitesForProtectBug($isProduction);
        $site_id = array_search($site_name, $sites);
        return $site_id;
    }

    public static function getInsuranceToken($site_name){
        return "insuranceToken-" . $site_name;
    }

    public static function rentalSites($site_name = '', $isProduction = false){
        $rental_sites = array(
            'renters' => array(
                'site_id_production' =>2 ,
                'site_id_staging' => 2,
                'segment_id_production' => 33,
                'segment_id_staging' => 33,
            ),
            'rentalhomes' => array(
                'site_id_production' => 3,
                'site_id_staging' => 3,
                'segment_id_production' => 20,
                'segment_id_staging' => 20,
            ),
            'rentbyowner' => array(
                'site_id_production' => 9,
                'site_id_staging' => 9,
                'segment_id_production' => 95,
                'segment_id_staging' => 95,
            ),
            'bedroomvillas' => array(
                'site_id_production' => 11,
                'site_id_staging' => 10,
                'segment_id_production' => 110,
                'segment_id_staging' => 110,
            )
        );

        if($site_name && array_key_exists($site_name, $rental_sites)){
            $site_segment_ids = $rental_sites[$site_name];
            if($isProduction){
                return array(
                    'site_id' => $site_segment_ids['site_id_production'],
                    'segment_id' => $site_segment_ids['segment_id_production'],
                );
            }else{
                return array(
                    'site_id' => $site_segment_ids['site_id_staging'],
                    'segment_id' => $site_segment_ids['segment_id_staging'],
                );
            }
        }else{
            return array_keys($rental_sites);
        }
    }

    /////////////////////////////////////
    ////     Insurance Sites List    ////
    /////////////////////////////////////

    public static function getInsuranceSites($isProduction = false){
        if($isProduction){
            $sites = array(
                27 => 'mutual.com',
                26 => 'americaninsurance.com',
                25 => 'masshealth.com',
                24 => 'tenncare.com',
                23 => 'medicarerx.com',
                17 => 'cheapautoinsurance.com',
                15 => 'generalinsurance.com',
                18 => 'cheapmedicalinsurance.com',
                16 => 'policy.com',
                21 => 'general.com',
                 1 => 'homeowners.com',
            );
        }else{
            $sites = array(
                24 => 'mutual.com',
                23 => 'americaninsurance.com',
                22 => 'masshealth.com',
                21 => 'tenncare.com',
                20 => 'medicarerx.com',
                15 => 'cheapautoinsurance.com',
                13 => 'generalinsurance.com',
                14 => 'cheapmedicalinsurance.com',
                12 => 'policy.com',
                18 => 'general.com',
                 1 => 'homeowners.com',
            );
        }
        return $sites;
    }

    public static function getInsuranceSitesForProtectBug($isProduction = false){
        if($isProduction){
            $sites = array(
                27 => 'mutualcom',
                26 => 'americaninsurancecom',
                25 => 'masshealthcom',
                24 => 'tenncarecom',
                23 => 'medicarerxcom',
                17 => 'cheapautoinsurancecom',
                15 => 'generalinsurancecom',
                18 => 'cheapmedicalinsurancecom',
                16 => 'policycom',
                21 => 'generalcom',
                 1 => 'homeownerscom',
            );
        }else{
            $sites = array(
                24 => 'mutualcom',
                23 => 'americaninsurancecom',
                22 => 'masshealthcom',
                21 => 'tenncarecom',
                20 => 'medicarerxcom',
                15 => 'cheapautoinsurancecom',
                13 => 'generalinsurancecom',
                14 => 'cheapmedicalinsurancecom',
                12 => 'policycom',
                18 => 'generalcom',
                 1 => 'homeownerscom',
            );
        }
        return $sites;
    }

    public static function insuranceSites($site_name = '', $isProduction = false){
        $insurance_sites = array(
            'mutual.com' => array(
                'site_id_production' => 27,
                'site_id_staging' => 24,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'americaninsurance.com' => array(
                'site_id_production' => 26,
                'site_id_staging' => 23,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'masshealth.com' => array(
                'site_id_production' => 25,
                'site_id_staging' => 22,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'tenncare.com' => array(
                'site_id_production' => 24,
                'site_id_staging' => 21,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'medicarerx.com' => array(
                'site_id_production' => 23,
                'site_id_staging' => 20,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'cheapautoinsurance.com' => array(
                'site_id_production' => 17,
                'site_id_staging' => 15,
                'segment_id_production' => 3436,
                'segment_id_staging' => 3336,
            ),
            'generalinsurance.com' => array(
                'site_id_production' => 15,
                'site_id_staging' => 13,
                'segment_id_production' => 3433,
                'segment_id_staging' => 3331,
            ),
            'cheapmedicalinsurance.com' => array(
                'site_id_production' => 18,
                'site_id_staging' => 14,
                'segment_id_production' => 3434,
                'segment_id_staging' => 3332,
            ),
            'policy.com' => array(
                'site_id_production' => 16,
                'site_id_staging' => 12,
                'segment_id_production' => 3435,
                'segment_id_staging' => 3330,
            ),
            'general.com' => array(
                'site_id_production' => 21,
                'site_id_staging' => 18,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'homeowners.com' => array(
                'site_id_production' => 1,
                'site_id_staging' => 1,
                'segment_id_production' => 30,
                'segment_id_staging' => 30,
            ),

            //Protect me for temporary
            'mutualcom' => array(
                'site_id_production' => 27,
                'site_id_staging' => 24,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'americaninsurancecom' => array(
                'site_id_production' => 26,
                'site_id_staging' => 23,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'masshealthcom' => array(
                'site_id_production' => 25,
                'site_id_staging' => 22,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'tenncarecom' => array(
                'site_id_production' => 24,
                'site_id_staging' => 21,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'medicarerxcom' => array(
                'site_id_production' => 23,
                'site_id_staging' => 20,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'cheapautoinsurancecom' => array(
                'site_id_production' => 17,
                'site_id_staging' => 15,
                'segment_id_production' => 3436,
                'segment_id_staging' => 3336,
            ),
            'generalinsurancecom' => array(
                'site_id_production' => 15,
                'site_id_staging' => 13,
                'segment_id_production' => 3433,
                'segment_id_staging' => 3331,
            ),
            'cheapmedicalinsurancecom' => array(
                'site_id_production' => 18,
                'site_id_staging' => 14,
                'segment_id_production' => 3434,
                'segment_id_staging' => 3332,
            ),
            'policycom' => array(
                'site_id_production' => 16,
                'site_id_staging' => 12,
                'segment_id_production' => 3435,
                'segment_id_staging' => 3330,
            ),
            'generalcom' => array(
                'site_id_production' => 21,
                'site_id_staging' => 18,
                'segment_id_production' => 1,
                'segment_id_staging' => 1,
            ),
            'homeownerscom' => array(
                'site_id_production' => 1,
                'site_id_staging' => 1,
                'segment_id_production' => 30,
                'segment_id_staging' => 30,
            ),
        );

        $site_name = trim($site_name);
        if($site_name && array_key_exists($site_name, $insurance_sites)){
            $site_segment_ids = $insurance_sites[$site_name];
            if($isProduction){
                return array(
                    'site_id' => $site_segment_ids['site_id_production'],
                    'segment_id' => $site_segment_ids['segment_id_production'],
                );
            }else{
                return array(
                    'site_id' => $site_segment_ids['site_id_staging'],
                    'segment_id' => $site_segment_ids['segment_id_staging'],
                );
            }
        }else{
            return array_keys($insurance_sites);
        }

    }

    /////////////////////////////////////
    ////        VRS Sites List      /////
    /////////////////////////////////////

    public static function getRentalSiteNameBySiteId($site_id = '', $isProduction = false){
        if($isProduction){
            $sites = array(
                2 => 'renters.com',
                3 => 'rentalhomes.com',
                9 => 'rentbyowner.com',
                11=> 'bedroomvillas.com',
                29=> 'selloffrentals.com',
            );
        }else{
            $sites = array(
                2 => 'renters.com',
                3 => 'rentalhomes.com',
                9 => 'rentbyowner.com',
                10=> 'bedroomvillas.com',
                26=> 'selloffrentals.com',
            );
        }
        return array_key_exists($site_id, $sites) ? $sites[$site_id] : "";
    }

    public static function getDefaultSegmentBySiteId($site_id = '', $isProduction = false){
        if($isProduction){
            $sites = array(
                2 => 33,
                3 => 20,
                9 => 95,
                11=> 110
            );
        }else{
            $sites = array(
                2 => 33,
                3 => 20,
                9 => 95,
                10=> 110
            );
        }
        return array_key_exists($site_id, $sites) ? $sites[$site_id] : "";
    }

    public static function getRentalToken($site_name){
        return "rentalToken-" . $site_name;
    }

    public static function getSiteDomain($isProduction = false){
        if($isProduction){
            $sites = array(
                2 => '',
                3 => '',
                5 => '',
                9 => '',
                11 => '',
                29 => '',
                30 => '',
                31 => '',
                32 => '',
            );
        }else{
            $sites = array(
                2 => 'center.',
                3 => 'center.',
                9 => 'center.',
                5=> '',
                11 => 'center.',
                26 => 'center.',
                27 => 'center.',
                28 => 'center.',
                29 => 'center.',

            );
        }
        return $sites;
    }

    /**
     *
     * @return number with ordinal suffix
     *
     * @param int $number
     *
     * @param int $ss Turn super script on/off
     *
     * @return string
     *
     */
    static function   ordinalSuffix($number, $ss=0)
    {

        /*** check for 11, 12, 13 ***/
        if ($number % 100 > 10 && $number %100 < 14)
        {
            $os = 'th';
        }
        /*** check if number is zero ***/
        elseif($number == 0)
        {
            $os = '';
        }
        else
        {
            /*** get the last digit ***/
            $last = substr($number, -1, 1);

            switch($last)
            {
                case "1":
                    $os = 'st';
                    break;

                case "2":
                    $os = 'nd';
                    break;

                case "3":
                    $os = 'rd';
                    break;

                default:
                    $os = 'th';
            }
        }
        return $number.$os;
    }

    /**
     * @param bool|false $isProduction
     * @return array
     */
    public static function siteIdWithName($isProduction=false){
        $data = array();

        if($isProduction){
            $data[] = array('key'=>'2','value'=>'renters.com');
            $data[] = array('key'=>'3','value'=>'rentalhomes.com');
            $data[] = array('key'=>'9','value'=>'rentbyowner.com');
            $data[] = array('key'=>'11','value'=>'bedroomvillas.com');
            $data[] = array('key'=>'29','value'=>'selloffrentals.com');
        }else{
            $data[] = array('key'=>'2','value'=>'renters.com');
            $data[] = array('key'=>'3','value'=>'rentalhomes.com');
            $data[] = array('key'=>'9','value'=>'rentbyowner.com');
            $data[] = array('key'=>'10','value'=>'bedroomvillas.com');
            $data[] = array('key'=>'26','value'=>'selloffrentals.com');
        }
        return self::make_data_list($data);
    }


    public static function cronProcess($isProduction=false){
        $data = array();

        $data[] = array('key'=>'1','value'=>'cron started');
        $data[] = array('key'=>'2','value'=>'download xml');
        $data[] = array('key'=>'3','value'=>'cron completed');

        return self::make_data_list($data);
    }


    public static function getProcessId($id, $process_name=false){

            $process = array(
                1 => 'CRON for XML download',
                2 => 'download xml',
                3 => 'cron completed',
            );
             if(isset($process_name ) && $process_name !=''){
                 $flipped=array_flip($process);
                 return $flipped[$process_name];
             }
           return $process[$id];
    }

    public static function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        return array_reverse($arr, true);
    }

    /**
     * @param $site_id
     * @return array
     * Function for providing the default campaign and segment id of specific sites
     * takes site id as parameter and returns campaign and segment id of that site
     */
    public static function provide_default_campaign_and_segment($site_id){
        $return_data = '';
        if(GenericProperties::$isProduction){
            $campaign_segment_array = array(
                '3' => array('campaign_id' => 8, 'segment_id' => 20),           /////////rentalhomes
                '9' => array('campaign_id' => 20, 'segment_id' => 95),          /////////rentbyowner
                '29' => array('campaign_id' => 1, 'segment_id' => 1),           /////////selloffrentals
                '11' => array('campaign_id' => 25, 'segment_id' => 110),        /////////Bedroomvilla
                '5' => array('campaign_id' => 898, 'segment_id' => 3439),       /////////Oahu
                '2' => array('campaign_id' => 10, 'segment_id' => 33),          /////////renters
                '30' => array('campaign_id' => 1, 'segment_id' => 1),         /////////petfriendly
                '31' => array('campaign_id' => 1, 'segment_id' => 1),         /////////stays
                '32' => array('campaign_id' => 1, 'segment_id' => 1),         /////////execstays
            );
        }else{
            $campaign_segment_array = array(
                '3' => array('campaign_id' => 1, 'segment_id' => 1),            /////////rentalhomes
                '9' => array('campaign_id' => 21, 'segment_id' => 95),          /////////rentbyowner
                '26' => array('campaign_id' => 1, 'segment_id' => 1),           /////////selloffrentals
                '10' => array('campaign_id' => 24, 'segment_id' => 99),         /////////Bedroomvilla
                '5' => array('campaign_id' => 1, 'segment_id' => 1),            /////////Oahu
                '2' => array('campaign_id' => 18, 'segment_id' => 33),          /////////renters
                '28' => array('campaign_id' => 1, 'segment_id' => 2),         /////////petfriendly
                '27' => array('campaign_id' => 1, 'segment_id' => 1),         /////////stays
                '29' => array('campaign_id' => 1, 'segment_id' => 1),         /////////execstays
            );
        }

        if(array_key_exists($site_id, $campaign_segment_array)){
            $return_data = $campaign_segment_array[$site_id];
        }

        return $return_data;
    }

    /**
     * @return array
     */
    public static function getFeedForTransaction()
    {
        $data = array();

        //$data[] = array('key'=>null,'value'=>'All');
        $data[] = array('key'=>11,'value'=>'Booking');
        $data[] = array('key'=>12,'value'=>'Homeaway');

        return self::make_data_list($data);
    }

    public static function siteIdForCronStatus($isProduction=false){
        $data = array();

        if($isProduction){
            $data[] = array('key'=>'3','value'=>'rentalhomes.com');
            $data[] = array('key'=>'9','value'=>'rentbyowner.com');
            $data[] = array('key'=>'11','value'=>'bedroomvillas.com');
            $data[] = array('key'=>'29','value'=>'selloffrentals.com');
            $data[] = array('key'=>'30','value'=>'petfriendly.io');
            $data[] = array('key'=>'31','value'=>'stays.io');
            $data[] = array('key'=>'32','value'=>'execstays.com');
        }else{
            $data[] = array('key'=>'3','value'=>'rentalhomes.com');
            $data[] = array('key'=>'9','value'=>'rentbyowner.com');
            $data[] = array('key'=>'10','value'=>'bedroomvillas.com');
            $data[] = array('key'=>'26','value'=>'selloffrentals.com');
            $data[] = array('key'=>'28','value'=>'petfriendly.io');
            $data[] = array('key'=>'27','value'=>'stays.io');
            $data[] = array('key'=>'29','value'=>'execstays.com');
        }
        return self::make_data_list($data);
    }


    public static function getCronStatus()
    {
        $data = array();

        //$data[] = array('key'=>'','value'=>'All');
        $data[] = array('key'=>'Success','value'=>'Success');
        $data[] = array('key'=>'Fail','value'=>'Fail');

        return self::make_data_list($data);
    }

    public static function getCronType()
    {
        //$data[] = array('key'=>'oap-store','value'=>'OapStore');
        //$data[] = array('key'=>'csv-from-email','value'=>'CsvFromEmail');
        $data[] = array('key'=>'get-ad-spend','value'=>'AdSpendsPerDay');
        $data[] = array('key'=>'bing-ad-spend','value'=>'BingAdsSpendPerDay');
        $data[] = array('key'=>'get-adsense-revenue','value'=>'AdsenseRevenue');
        $data[] = array('key'=>'im-revenue','value'=>'IntentMediaRevenue');
        $data[] = array('key'=>'json-oe','value'=>'ExportedJsonFromOE');
        $data[] = array('key'=>'viator-data','value'=>'ImportViatorData');
        $data[] = array('key'=>'cj-transaction','value'=>'CJTransaction');
        $data[] = array('key'=>'booking-details','value'=>'BookingDetails');
        $data[] = array('key'=>'get-campaign-id','value'=>'CampaignNameById');
        $data[] = array('key'=>'adgroup-id','value'=>'AdgroupNameById');
        $data[] = array('key'=>'sell-opportunity','value'=>'SellOpportunity');
        $data[] = array('key'=>'property-history','value'=>'PropertyHistory');
        $data[] = array('key'=>'criteo','value'=>'ImportCriteoData');
        $data[] = array('key'=>'ga-pending','value'=>'GADataMigrate');
        $data[] = array('key'=>'time-series-date','value'=>'DailyOperationalData');
        $data[] = array('key'=>'time-series-hour','value'=>'HourlyOperationalData');


        return self::make_data_list($data);
    }
}
