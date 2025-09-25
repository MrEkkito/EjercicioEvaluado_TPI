<?php


use app\controllers\HomeController;
use app\controllers\LenguajeController;
use app\controllers\InicioController;
use app\controllers\ContactarController;
use lib\Route;


Route::get("/", [HomeController::class,"index"]);

Route::get("/Home", [HomeController::class,"index"]);
Route::get("/Inicio", [InicioController::class,"index"]);
Route::get("/Lenguaje", [LenguajeController::class,"index"]);
Route::get("/Contactar", [ContactarController::class,"index"]);
Route::post("/Contactar", [ContactarController::class,"index"]);

Route::dispatch();
?>
