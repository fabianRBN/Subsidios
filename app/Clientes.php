<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estado_cliente;
class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = array('nombre','token','apellido','cedula','estado','telefono','genero','id_estado_cliente','edad','credito_actual','credito_total');

}
