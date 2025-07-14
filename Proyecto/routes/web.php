<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para la vista
Route::get('/inicio', function () {
    //asociar la vista
    return view('inicio');
});

/*Route::get('/suma', function () {
    return view('suma');
});*/

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', function ( Request $request ) {

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado= $num1 + $num2;

 
    return view('suma', ['res'=>$resultado]);
});

