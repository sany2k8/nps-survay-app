<?php

class GenericProperties
{
    /**
     * Set Trace
     * @param $data
     * @param bool $die
     */

    public static function _setTrace($data=null,$die=true){
        if(is_array($data) or is_object($data)){
            print "<pre>";
            print_r($data);
            print "</pre>";
        }else{
            print $data;
        }
        print "<hr />";
        if($die){
            exit();
        }
    }

    /**
     * Check for affiliate Id is valid or not when any record updating
     * @param $record
     * @param $site_id
     * @throws CHttpException
     */
    public static function updateRecordPermissionCheck($record,$site_id)
    {
        if(!$record and $site_id!=GenericProperties::getAffiliateId())
        {
            throw new CHttpException("403", "Affiliate ID not matched with your update");
        }
    }

    /**
     * @param $image
     * @param $uid
     * @param bool $force
     */
    public static function setUserImage($image,$uid, $force=false)
    {
        if(Yii::app()->user->getId()==$uid or $force===true)
        {
            Yii::app()->session['user_image'] = $image;
        }

    }

    /**
     * @return string
     */
    public static function getUserImage()
    {
        if(!empty(Yii::app()->session['user_image'])):
            return Yii::app()->request->baseUrl."/images/profile-images/".Yii::app()->session['user_image'];
        else:
            return Yii::app()->request->baseUrl."/example/profile.jpg";
        endif;
    }

    /**
     * return a nice title for string
     * @param $string
     * @return string
     */
    public static function niceTitle($string){
        if(!is_array($string))
            return ucwords(str_replace("_"," ",$string));
    }
    /**
     * @param string $create_date
     */
    public static function reinstallDatePiker($create_date=''){

        Yii::app()->clientScript->registerScript('re-install-date-picker', "
            function reinstallDatePicker(id, data) {
                $('#datepicker_for_create_date').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['ja'],{'dateFormat':'yy-mm-dd'}));
                $('#datepicker_for_update_date').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['ja'],{'dateFormat':'yy-mm-dd'}));
                $('#datepicker_for_date').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['ja'],{'dateFormat':'yy-mm-dd'}));
            }
         ");
    }
}