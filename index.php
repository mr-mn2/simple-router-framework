<?php

include "bootstrap/init.php";
use App\utilities\Asset;
use App\utilities\lang;
use App\utilities\url;

/* echo site_url();
$request = new App\Core\request();
echo random_element([1,2,2,66,66,4,5,77,7,7]);
echo Asset::js("jquery.js");
echo url::current();
echo lang::persian_number("slam man addad 44653554545 hastam"); */
echo url::current_route();