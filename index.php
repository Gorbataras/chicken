<?php
/* Taras Gorbachevskiy
 * 01-15-20
 * /IT328/chicken/index.php
 */

//CONTROLLER
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


//require autoload file
require_once("vendor/autoload.php");

//Instantiate f3
$f3 = Base::instance();

//Default route
$f3->route('GET /', function () {
    echo 'hello';
});

$f3->run();
