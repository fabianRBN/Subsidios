<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculoController extends Controller
{

      //
    public function getAll(){
        $vehiculo = Vehiculo::all();
        return $vehiculo;
    }

    public function add(Request $request){
        $vehiculo = Vehiculo::Create($request->all());
        return $vehiculo;
    }

    public function get($id){
        $vehiculo = Vehiculo::find($id);
        return $vehiculo;
    }

    public function edit($id, Request $request){
        $vehiculo = $this->get($id);
        $vehiculo->fill($request->all())->save();
        return $vehiculo;
    }

    public function delete($id){
        $vehiculo = $this->get($id);
        $vehiculo.delete();
        return $vehiculo;
    }
}
