<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;


class ClientesController extends Controller
{
    //
    public function getAll(){
        $clientes = Clientes::all();
        return $clientes;
    }

    public function add(Request $request){
        $clientes = Clientes::Create($request->all());
        return $clientes;
    }

    public function get($id){
        $cliente = Clientes::find($id);
        return $cliente;
    }

    public function edit($id, Request $request){
        $cliente = $this->get($id);
        $cliente->fill($request->all())->save();
        return $cliente;
    }

    public function delete($id){
        $cliente = $this->get($id);
        $cliente.delete();
        return $cliente;
    }
}
