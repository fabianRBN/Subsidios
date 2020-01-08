<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    //
    protected $table = 'transacciones';
    protected $fillable = array('id_cliente','id_empleado','debito_dinero','debito_galones','credito_actual','credito_final','descripcion','token','id_sucursal','subsidio');

}
