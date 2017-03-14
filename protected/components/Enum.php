<?php

class Enum
{
    public static function make_data_list($data)
    {
        return CHtml::listData($data,'key', 'value',false);
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
        return self::make_data_list($data);
    }

    public static function yesNo()
    {
        $data = array(array('key'=>'1','value'=>'Yes'),array('key'=>'0','value'=>'No'));
        return self::make_data_list($data);
    }

    public static function yesNoNotSure()
    {
        $data = array(
            array('key'=>'0','value'=>'No'),
            array('key'=>'1','value'=>'Yes'),
            array('key'=>'2','value'=>'Not Sure'),
           );
        return self::make_data_list($data);
    }

    public static function getCategory()
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Passive');
        $data[] = array('key'=>'1','value'=>'Promoter');
        $data[] = array('key'=>'2','value'=>'Detractor');
        return self::make_data_list($data);
    }

    public static function getHeardType()
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'SMS');
        $data[] = array('key'=>'2','value'=>'Partner');
        $data[] = array('key'=>'3','value'=>'Others');

        return self::make_data_list($data);
    }

    public static function getProductType()
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'Tonic Agent');
        $data[] = array('key'=>'1','value'=>'Discount');
        $data[] = array('key'=>'2','value'=>'Tonic Doctor');

        return self::make_data_list($data);
    }

    public static function getEnumeration()
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'Good');
        $data[] = array('key'=>'1','value'=>'Bad');
        $data[] = array('key'=>'2','value'=>'Average');

        return self::make_data_list($data);
    }


    public static function getReasonForScore()
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Agent');
        $data[] = array('key'=>'1','value'=>'Discount');
        $data[] = array('key'=>'2','value'=>'Doctor');
        $data[] = array('key'=>'3','value'=>'Overall');


        return self::make_data_list($data);
    }

    public static function getScore()
    {
        $data = range(0,10);
        return $data;
        //return self::make_data_list($data);
    }

    public static function getCallStatus()
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Successfull');
        $data[] = array('key'=>'1','value'=>'UnSuccessfull');

        return self::make_data_list($data);
    }

}
