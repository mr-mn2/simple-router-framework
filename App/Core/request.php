<?php
namespace App\Core;

use App\utilities\url;

class request{
    private $agent;
    private $ip;
    private $uri;
    private $Method;

    public function __construct()
    {
        $this -> agent = $_SERVER['HTTP_USER_AGENT'];
        $this -> ip = $_SERVER['SERVER_ADDR'];
        $this -> Method = strtolower( $_SERVER['REQUEST_METHOD']);
        $this -> uri = $_REQUEST['url'];
    }
    public function getAgent()
    {
        return $this->agent;
    }

    public function Method()
    {
        return $this->Method;
    }

    public function uri()
    {
        return $this->uri;
    }

    public function ip()
    {
        return $this->ip;
    }
    
    public function redirect($route)
    {
        header("Location : " . site_url($route));
        die();
    }
    public function input($key)
    {
        return $this->uri[$key];
    }
    public function isset($key)
    {
        return isset($this->uri[$key]);
    }
}