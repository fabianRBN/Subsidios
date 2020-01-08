<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Vehiculo extends Model
{
    protected $table = 'tipo__vehiculos';
    protected $fillable = array('titulo','descripcion');
}
