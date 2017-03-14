<?php

class UrlManager
{
    public static function  getUrls()
    {
        return array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                'service/geoip'=>array('site/GeoIP'),
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        );
    }
}


