<?php

namespace Kimit\Mvc\controllers;
use Exception;

class controller{
    public function __call($name,$params){
        throw new Exception('method not found');
    }
}