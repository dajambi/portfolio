<?php

//ukaž všechny errory
//ini_set('display_startup_errors','On');
//ini_set('display_errors','On');
//error_reporting(-1);


//pozadovane komponenty
require_once 'vendor/autoload.php';

//zobrazovaní chyb
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




//global variables
$base_url = '/todo';

// připojení k databázi
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'todo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8'
]);


//zkouška připojení na db
//echo '<pre>';
//print_r( $database->info() );
//echo '<pre>';
//
