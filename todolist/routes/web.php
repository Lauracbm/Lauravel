<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('task.index');
});

//cunado exista un get en la url '/' se accede a la clase  en el metodo index
//index muestra el formulario
Route::get('/', [TaskController::class, 'index']);

// Llamar el metodo que procesa y registra datos
Route::post('/', [TaskController::class, 'store']);