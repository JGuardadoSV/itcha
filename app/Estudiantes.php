<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
   // use HasFactory;

    protected $fillable = [
        'codigo','nombres', 'apellidos','sexo', 'carrera'
    ];


}
