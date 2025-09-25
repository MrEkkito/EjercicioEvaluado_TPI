<?php


use app\controllers\HomeController;
use lib\Route;


Route::get("/", function(){
    echo "RUTA RAIZ";
});


Route::get("/inicio/:flag", function($flag){
    return  array('title'=>"ejemplo");
});
    
Route::dispatch();
?>
