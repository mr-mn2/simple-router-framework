/* echo site_url();
$request = new App\Core\request();
echo random_element([1,2,2,66,66,4,5,77,7,7]);
echo Asset::js("jquery.js");
echo url::current();
echo lang::persian_number("slam man addad 44653554545 hastam"); */
//echo url::current_route();

//  $router  = new \App\Core\Routing\Router();
//  $router->run();
 $route_pattern = '/^\/product\/(?<slug>[-%\w]+)$/';
 $uri1 = '/product/u-must-buy';
 $uri2 = '/product/on-sales';
 $match = preg_match($route_pattern,$uri1,$mattches);
 var_dump($mattches);


 

 