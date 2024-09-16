<?php

use Kimit\Mvc\core\Route;

Route::get('',['home','index']);

Route::get('test',['home','index']);

Route::get('category',['home','categorys']);

Route::get('mohamed',['product','index']);