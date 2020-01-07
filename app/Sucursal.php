<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    protected $table = 'sucursales';
    protected $fillable = array('nombre','propietario','direccion','provincia','ciudad','telefono');

}
