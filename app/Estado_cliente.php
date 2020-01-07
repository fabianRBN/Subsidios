<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_cliente extends Model
{
    protected $table = 'estado_clientes';
    protected $fillable = array('titulo','descripcion');
}
