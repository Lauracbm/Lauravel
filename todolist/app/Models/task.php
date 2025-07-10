<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //especifica la tabla en la db a llenar
    protected $table = "tasks";
    protected $fillable = ["task"];
}
