<?php

// This file contains variables with the locations of the data dirs
// and basic functions that every page can use

// Database connection information
$DB_HOST = 'hostname';
$DB_USER = 'username';
$DB_PASSWORD = 'password';
$DB_DATABASE = 'databasename';
$DB_PREFIX   = '';

global $DB_DRIVER_NAME, $DB_PHP_MODULE_NAME;
// Database driver settings
// default is  $DB_DRIVER_NAME = 'mysql'; $DB_PHP_MODULE_NAME = 'mysql';
//$DB_DRIVER_NAME = 'mysql';  $DB_PHP_MODULE_NAME = 'mysql';
//$DB_DRIVER_NAME = 'mysql';  $DB_PHP_MODULE_NAME = 'pdo';
//$DB_DRIVER_NAME = 'sqlite'; $DB_PHP_MODULE_NAME = 'pdo';
$DB_DRIVER_NAME = 'mysql'; $DB_PHP_MODULE_NAME = 'mysql';

if ($DB_DRIVER_NAME=='sqlite')
{
   $DB_DATABASE = dirname(__FILE__) . str_replace('/', DIRECTORY_SEPARATOR, '/settings/db_nucleus.sqlite');
// $DB_DATABASE = 'pathto/' . 'db_nucleus.sqlite';
}

// main nucleus directory
$DIR_BASE = dirname(__FILE__) . '/';

//$DIR_NUCLEUS = $DIR_BASE . 'nucleus/';
//$DIR_NUCLEUS = '/your/path/to/nucleus/';

// media dir
$DIR_MEDIA = $DIR_BASE . 'media/';
//$DIR_MEDIA = '/your/path/to/media/';

// extra skin files for imported skins
$DIR_SKINS = $DIR_BASE . 'skins/';
//$DIR_SKINS = '/your/path/to/skins/';

// these dirs are normally subdirs of the nucleus dir, but
// you can redefine them if you wish
$DIR_PLUGINS = $DIR_NUCLEUS . 'plugins/';
$DIR_LANG = $DIR_NUCLEUS . 'language/';
$DIR_LIBS = $DIR_NUCLEUS . 'libs/';

if (!isset($DIR_NUCLEUS) || !@is_file($DIR_LIBS . 'globalfunctions.php')) {
    foreach(array($DIR_LIBS , dirname(__FILE__).'/nucleus/libs/') as $path)
        if (@is_file($path.'config-error.php')) @include($path.'config-error.php');
    header('Content-type: text/html; charset=utf-8');
    echo '<h1>Configuration error</h1>';
    echo '<p>please run the <a href="./install/index.php">install script</a> or modify config.php</p>';
    exit;
}

// include libs
include($DIR_LIBS.'globalfunctions.php');

