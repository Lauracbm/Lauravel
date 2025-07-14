<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para la vista
Route::get('/inicio', function () {
    //asociar la vista
    return view('inicio');
});

Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function ( Request $request ) {

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado= $num1 + $num2;
    //echo "El resultado de la suma de $num1 y $num2 es: $resultado"; 
    //return view('suma', ['res'=>$resultado]);
    
    return view('inicio', ['res'=>$resultado]);
});

