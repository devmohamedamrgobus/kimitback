<?php
namespace Kimit\Mvc\controllers;

use Kimit\Mvc\core\db;

class home extends controller{

    public function index(){
        
        $db = new db;
        $data = $db->table('instructors')->select()->get();
        dd($data);
    }

    public function category(){
        echo 'hi category';
    }
}