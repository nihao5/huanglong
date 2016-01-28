<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
	    'urlManager' => [
	        'enablePrettyUrl' => true,
	        'enableStrictParsing' => true,
	        'showScriptName' => false,
	        'rules' => [
                '<controller:\w+\-\w+|\w+>/<action:\w+\-\w+|\w+>'=>'<controller>/<action>',
                '<module:\w+\-\w+|\w+>/<controller:\w+\-\w+|\w+>/<action:\w+\-\w+|\w+>'=>'<module>/<controller>/<action>',
                '/' => 'index/index'
            ]
	    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
