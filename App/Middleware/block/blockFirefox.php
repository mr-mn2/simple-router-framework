<?php
namespace App\Middleware\block;
use App\Middleware\middlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class blockFirefox implements middlewareInterface {
    public function handle()
    {
        if (Browser::isFirefox()) {
            die("blocked");
        }
       
    }
}