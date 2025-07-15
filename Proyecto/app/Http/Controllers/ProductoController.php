<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }


public function RegProduct()
{
    return view('productos.RegProductos');
}

public function Guardar(Request $request)
{
    $nombre = $request->input('nombre');
    $precio = $request->input('precio');    
    $descripcion = $request->input('descripcion');
    $producto = Producto::create([
        'nombre' => $nombre,
        'precio' => $precio,
        'descripcion' => $descripcion
    ]);
    $producto->save();
    return redirect()->route('list');
}

    /*public function PruebaRegSintaxis(Request $request){
        $registro = Producto::create([
        $nombre =$request->input('nombre'),
        $precio = $request->input('precio'),
        $descripcion = $request->input('descripcion'),
        ]);
        return redirect()->route('list');
    }*/

}

