<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'precio', 'descripcion'];
}
