<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $table = 'vehiculos';
    protected $fillable = array('placa','rfid','color','modelo','marca','id_estado_vehiculo','id_cliente');

}
