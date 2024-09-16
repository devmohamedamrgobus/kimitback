<?php
namespace Kimit\Mvc\core;

use Exception;
use Kimit\Mvc\core\Route;

class app {
    private $controller;

    private $method;

    public function __construct()
    {
        $this->run();  
    }

    private function run(){

        // echo '<pre >';
        // print_r($_SERVER);die;
        if(array_key_exists($_SERVER['QUERY_STRING'],Route::$routes)){
            $this->controller = Route::$routes[$_SERVER['QUERY_STRING']][0];
            $this->method = Route::$routes[$_SERVER['QUERY_STRING']][1];
            $controller = "Kimit\\Mvc\\controllers\\".$this->controller;
            call_user_func_array([new $controller,$this->method],[]);
        }else {
            throw new Exception('url not found');
        }
    }
}

