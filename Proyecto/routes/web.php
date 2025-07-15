<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para la vista
Route::get('/inicio', function () {
    //asociar la vista
    return view('inicio');
});

//get vistas 
//post crud

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/productos', [ProductoController::class, 'index'])->name('list');

Route::get('/RegProductos', [ProductoController::class, 'RegProduct']);

Route::post('/Guardar', [ProductoController::class, 'Guardar'])->name('GuardarRoute');







