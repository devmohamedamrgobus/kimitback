<?php


function dd($data,$type = 1){
    echo '<pre>';
    if($type == 1){
        print_r($data);
    }else{
        var_dump($data);
    }
    echo '</pre>';
    die;
}