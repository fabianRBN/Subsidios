<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaccion;

class TransaccionController extends Controller
{
    // Get All
    public function getAll(){
        $transaccion = Transaccion::all();
        return $transaccion;
    }
    // Get find ID
    public function get($id){
        $transaccion = Transaccion::find($id);
        return $transaccion;
    }
    // Create
    public function add(Request $request){
        $transaccion = Transaccion::Create($request->all());
        return $transaccion;
    }
    // Edit
    public function edit($id, Request $request){
        $transaccion = $this->get($id);
        $transaccion->fill($request->all())->save();
        return $transaccion;
    }
    // Delete
    public function delete($id){
        $transaccion = $this->get($id);
        $transaccion.delete();
        return $transaccion;
    }




}
