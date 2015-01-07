<?php

use \Dotenv;

// Make app config available as PHP constants
$root = __DIR__.'/..'.'/..'.'/..';
require("$root/vendor/neam/php-app-config/include.php");

Dotenv::load(__DIR__.'/..');

Dotenv::required('YII_DEBUG',["","0","1","true",true]);
Dotenv::required('YII_ENV',['dev','prod','test']);
#Dotenv::required(['YII_TRACE_LEVEL']);
Dotenv::required(['APP_NAME','APP_SUPPORT_EMAIL','APP_ADMIN_EMAIL']);
Dotenv::required(['DATABASE_DSN','DATABASE_USER','DATABASE_PASSWORD']);
