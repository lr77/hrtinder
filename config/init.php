<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/hrtinder/core');
define("LIBS", ROOT . '/vendor/hrtinder/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');


// http://hrtinder/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://hrtinder/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://hrtinder
$app_path = str_replace('/public/', '', $app_path);


// $app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// https://hrtinder/public/index.php

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';