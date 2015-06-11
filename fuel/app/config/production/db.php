<?php

/**
 * The production database settings. These get merged with the global settings.
 */
return array(
    'default' => array(
        'connection' => array(
            'dsn' => 'mysql:host=mysql025.phy.lolipop.lan;dbname=LAA0501775-grasp',
            'username' => 'LAA0501775',
            'password' => $_SERVER['MYSQL_PASSWORD'],
        ),
    ),
);
