<?php

include "bootstrap/init.php";

use App\Core\request;
use App\Core\Routing\Route;
use App\utilities\Asset;
use App\utilities\lang;
use App\utilities\url;
$router  = new \App\Core\Routing\Router();
  $router->run();
// $pattern = "/product/{slug}";
// $ready_pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$pattern)."$/";
//  $route_pattern = '/^\/product\/(?<slug>[-%\w]+)$/';
//  $uri1 = '/product/u-must-buy';
//  $uri2 = '/product/on-sales';
//  $match = preg_match($ready_pattern,$uri1,$mattches);
//  var_dump($mattches);


 

 