<?php
namespace App\Core\Routing;
use App\Core\request;
use App\Core\Routing\Route;
use Exception;

class Router {
    private $request;
    private $routes;
    private $current_routes;
    const BASE_CONTROLER = "App\controller\\";
    public function __construct()
    {
        $this ->request = new request();
        $this ->routes = Route::routes();
        $this ->current_routes = $this ->findRoute($this->request) ?? null;
    }

    public function findRoute(request $request)
    {
        foreach ($this->routes as $route){
            if(in_array($request->Method(),$route['methods']) && $request->uri() == $route['uri']){
                return $route;
            }
        }
        return null;
      

    }
    public function invalid_request(request $request)
    {
        foreach ($this->routes as $route){
            if(in_array($request->Method(),$route['methods'])){
                return true;
            }
        }
        return false;
    }
    public function dispatch405()
    {
        header("HTTP/1.0 405 Method Not Allowed");
        view('errors.405');
        die();
    }
    public function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        view('errors.404');
        die();
    }

    /**
     * @throws Exception
     */
    public function run()
    {
        #error 405 method not found
        if (!$this ->invalid_request($this->request)) {
            $this->dispatch405();
        }
        #error 404 method not found
        if (is_null($this->current_routes)) {
            $this->dispatch404();
        }
        $this->dispatch($this->current_routes);
    }

    private static function dispatch($route): void
    {
        $action = $route['action'];
        if (is_null($action) or empty($action)) {
            return;
        }
        if (is_callable($action)) 
            $action();
        if (is_string($action)) 
            $action = explode("@",$action);
        if (is_array($action)) {

            $class_name = self::BASE_CONTROLER.$action[0];
            $methodName = $action[1];
            
            if (!class_exists($class_name)) 
                throw new Exception("class $class_name not Exists");

            $controller = new $class_name();

            if (!method_exists($controller, $methodName)) 
                throw new Exception("method $methodName not Exists");
            
            $controller->{$methodName}();
        }

        
        
    }
}
