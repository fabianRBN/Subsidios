<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Estado_cliente;

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
    //index  cliente
    public function index()
    {
        $clientes = Clientes::all();
        return view('Cliente.index',["clientes"=>$clientes]);
    }
    //vista crear Cliente
    public function createClientView()
    {
        $estadoclientes = Estado_cliente::all();
        return view('Cliente.create',["clientes"=>$estadoclientes]);
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
