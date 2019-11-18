<?php
/***************************************************************************
 *
 * Copyright (c) 2019 liumingzhi, Inc. All Rights Reserved
 *
 **************************************************************************
 *
 * @file start.php
 * @author liumingzhi(liumingzhij26@gmail.com)
 * @date 2019-11-14 18:39:00
 *
 **/


use TfRpc\Config\ProviderConfig;

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

!defined('APP_PATH') && define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/vendor/autoload.php';

$configs = [

    'default' => [
        'driver' => 'mysql',
        'database' => 'thefair_activity',
        'prefix' => 'thefair_',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
        'read' => [
            [
                'host' => '192.168.0.251',
                'port' => 3306,
                'username' => 'user_dev',
                'password' => 'thefair@2019',
            ],
            [
                'host' => '192.168.0.252',
                'port' => 3306,
                'username' => 'user_dev',
                'password' => 'thefair@2019',
            ],
        ],
        'write' => [
            'host' => '192.168.0.252',
            'port' => 3306,
            'username' => 'user_dev',
            'password' => 'thefair@2019',
        ],

    ],
];

//$config = new \TfRpc\Config\Config($configs);
//$config->set('test', $configs);
//$data = $config->getConfigs();
//print_r($data);
//$default = $config->get('default.read');
//print_r($default);
//
//print_r([$config->has('default')]);


$config = (new \TfRpc\Config\ConfigFactory());

print_r($config());
print_r($config()->get('api.baidu'));
