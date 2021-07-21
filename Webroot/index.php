<?php

namespace MVC\Webroot;
use MVC\Router;
use MVC\Request;
use MVC\Dispatcher;

require __DIR__ . '/../vendor/autoload.php';

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));


$dispatch = new Dispatcher();
$dispatch->dispatch();

?>