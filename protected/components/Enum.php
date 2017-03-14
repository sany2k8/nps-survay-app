<?php

class Enum
{
    /**
     * @param $data
     * @return array
     */
    public static function make_data_list($data)
    {
        return CHtml::listData($data,'key', 'value',false);
    }

    /**
     * @param $controller
     * @return array
     */
    public static function getActions($controller)
    {
        $ignored = array('actions','actionError');
        $data = array();

        foreach (get_class_methods($controller) as $method_name) {
            if (preg_match("/^action\w+$/", $method_name))
            {
                if(!in_array($method_name,$ignored))
                    $data[]=array('key'=>$method_name,'value'=>$method_name);
            }
        }
        return self::make_data_list($data);
    }

    /**
     * @return array
     */
    public static function yesNo($key='')
    {
        $data = array(array('key'=>'1','value'=>'Yes'),array('key'=>'0','value'=>'No'));
        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function yesNoNotSure($key='')
    {
        $data = array(
            array('key'=>'0','value'=>'No'),
            array('key'=>'1','value'=>'Yes'),
            array('key'=>'2','value'=>'Not Sure'),
           );

        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getCategory($key='')
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Passive');
        $data[] = array('key'=>'1','value'=>'Promoter');
        $data[] = array('key'=>'2','value'=>'Detractor');

        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }


        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getHeardType($key='')
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'SMS');
        $data[] = array('key'=>'1','value'=>'Partner');
        $data[] = array('key'=>'2','value'=>'Others');

        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getProductType($key='')
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'Tonic Agent');
        $data[] = array('key'=>'1','value'=>'Discount');
        $data[] = array('key'=>'2','value'=>'Tonic Doctor');
        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }

        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getEnumeration($key='')
    {
        $data = array();

        $data[] = array('key'=>'0','value'=>'Good');
        $data[] = array('key'=>'1','value'=>'Bad');
        $data[] = array('key'=>'2','value'=>'Average');

        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getReasonForScore($key='')
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Agent');
        $data[] = array('key'=>'1','value'=>'Discount');
        $data[] = array('key'=>'2','value'=>'Doctor');
        $data[] = array('key'=>'3','value'=>'Overall');

        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @return array
     */
    public static function getScore()
    {
        $data = range(0,10);
        return $data;
        //return self::make_data_list($data);
    }

    /**
     * @param string $key
     * @return array|mixed
     */
    public static function getCallStatus($key='')
    {
        $data = array();
        $data[] = array('key'=>'0','value'=>'Successfull');
        $data[] = array('key'=>'1','value'=>'UnSuccessfull');
        if($key!=''){
            $value = self::getDataByKey($key,$data);
            return $value;
        }
        return self::make_data_list($data);
    }

    /**
     * @param $key
     * @param $data
     * @return mixed
     */
    public static function getDataByKey($key,$data){
        $key = trim($key);
        $value = array_column($data,'value','key');
        return $value[$key];
    }

}
