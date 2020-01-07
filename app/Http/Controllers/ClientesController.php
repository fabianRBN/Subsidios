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

}
