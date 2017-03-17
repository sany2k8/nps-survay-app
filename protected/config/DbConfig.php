<?php
$DB_HOST = getenv('DB_HOST');
$DB_PORT = getenv('DB_PORT');
$DB_USER = getenv('DB_USER');
$DB_NAME = getenv('DB_NAME');
$DB_PASSWORD = getenv('DB_PASSWORD');


if(isset($DB_HOST)){

    define("DB_HOST", $DB_HOST);
}else{
    define("DB_HOST", '54.255.176.74');
}

if(isset($DB_USER)){
    define("DB_USER", $DB_USER);
}else{
    define("DB_USER", 'nps_survay_app');
}


if(isset($DB_PASSWORD)){
    define("DB_PASSWORD", $DB_PASSWORD);
}else{
    define("DB_PASSWORD", 'nps_survay_app');
}

if(isset($DB_PORT)){
    define("DB_PORT", $DB_PORT);
}else{
    define("DB_PORT", 5432);
}


if(isset($DB_NAME)){
    define("DB_NAME", $DB_NAME);
}else{
    define("DB_NAME", 'survay');
}

//var_dump($DB_HOST);die;

class dbConfig
{
    public static $db_host= DB_HOST;
    public static $db_port = DB_PORT;
    public static $db_user = DB_USER;
    public static $db_name = DB_NAME;
    public static $db_password = DB_PASSWORD;

    public static function config()
    {


        return array(
            'connectionString' => "pgsql:host=54.255.176.74;port=5432;dbname=survay",
            'emulatePrepare' => true,
            'username' => 'nps_survay_app',
            'password' => 'nps_survay_app',
            'charset' => 'utf8',
            'enableProfiling'=>true,
            'enableParamLogging' => true
        );

        /*return array(
            'connectionString' => 'pgsql:host='.self::$db_host.';port='.self::$db_port.';dbname='.self::$db_name,
            'emulatePrepare' => true,
            'username' => self::$db_user,
            'password' => self::$db_password,
            'charset' => 'utf8',
            'enableProfiling'=>true,
            'enableParamLogging' => true
        );*/

    }
}




