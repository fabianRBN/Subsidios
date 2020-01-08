<?php

namespace App;
use App\Estado_Vehiculo;
use Illuminate\Database\Eloquent\Model;

class Estado_Vehiculo extends Model
{

        protected $table = 'estado__vehiculos';
        protected $fillable = array('titulo','descripcion');
   
}
