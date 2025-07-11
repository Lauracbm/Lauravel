<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vendedor.productos');
});

Route::get('/', [ProductoController::class, 'index']);

Route::post('/', [ProductoController::class, 'newProduct']);