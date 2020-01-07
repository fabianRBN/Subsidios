<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalController extends Controller
{
    //

        //
        public function getAll(){
            $sucursal = Sucursal::all();
            return $sucursal;
        }
    
        public function add(Request $request){
            $sucursal = Sucursal::Create($request->all());
            return $sucursal;
        }
    
        public function get($id){
            $sucursal = Sucursal::find($id);
            return $sucursal;
        }
    
        public function edit($id, Request $request){
            $sucursal = $this->get($id);
            $sucursal->fill($request->all())->save();
            return $sucursal;
        }
    
        public function delete($id){
            $sucursal = $this->get($id);
            $sucursal.delete();
            return $sucursal;
        }
}
