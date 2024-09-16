<?php
namespace Kimit\Mvc\core;

class Route{
    static public $routes = [];

    static public function get($url,$action){
        self::$routes[$url] = $action;
    }
}