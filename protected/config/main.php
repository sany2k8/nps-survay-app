<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

#namespace Custom;
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/DbConfig.php';
require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'../config/UrlManager.php';

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'NPS - The Survay Platform',

    'defaultController' => 'survay',
    #timezone
    #'timeZone'=>"Asia/Dhaka",
    'timeZone'=>"America/Vancouver",

    // preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		//'application.extensions.ekeepselection.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'g',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('172.17.0.1','::1'),
			 'ipFilters'=>array('127.0.0.1','::1', '172.17.0.1','172.17.0.2'),
			//'ipFilters'=>array('172.17.0.1','172.17.0.2','::1'),
		),

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
        'session' => array(
            //      'class'=>'CDbHttpSession',
            //     'connectionID' => 'db',
		'autoStart'=>true,
            'timeout' => 86400,
        ),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>UrlManager::getUrls(),

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database

		'db'=>dbConfig::config(),
//		'db_running'=>dbConfig::configRunningDatabase(),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
		//enabling yii caching, using file cache
		'cache' => array(
			'class' => 'system.caching.CFileCache'
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
