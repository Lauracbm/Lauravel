<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    //
    public function index(){
        return view('suma', ['res' => null]);
    }

    
    public function suma( Request $request ) {

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $resultado= $num1 + $num2;

 
    return view('suma', ['res'=>$resultado]);
}


}