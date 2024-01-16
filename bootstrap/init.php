<?php

define("BASE_PATH",__DIR__."/../"); 
include realpath(BASE_PATH."vendor/autoload.php");
include realpath(__DIR__."/config.php");
$request =new App\Core\request();
include realpath(BASE_PATH."helpers/helpers.php"); 
include realpath(BASE_PATH."routes/web.php");
