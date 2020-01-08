<?php

namespace App\Http\Controllers;

use App\Vehiculo;
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
        foreach ($clientes as $cliente){
            $estado = Estado_cliente::find($cliente->id_estado_cliente);
            $estado1 = Clientes::find($cliente->id_estado_cliente);
            $cliente->id_estado_cliente = $estado->titulo;
        }
        return view('Cliente.index',["clientes"=>$clientes]);
    }
    //vista crear Cliente
    public function createClientView()
    {
        $estadoclientes = Estado_cliente::all();
        return view('Cliente.create',["clientes"=>$estadoclientes]);
    }
    //guardar cliente
    public function storeClient(Request $request){
        $clientes = Clientes::Create($request->all());
        $clientes = Clientes::all();
        return redirect()->route('cliente.index',["clientes"=>$clientes]);
    }

    public function get($id){
        $cliente = Clientes::find($id);

        return $cliente;
    }
    //editar cliente
    public function editClient($id)
    {
        $clientes=Clientes::find($id);
        $clientes1=$clientes->id_estado_cliente;
        $estadoclientes = Estado_cliente::all();
        $estado=Estado_cliente::find($clientes->id_estado_cliente);
        $clientes->id_estado_cliente=$estado->titulo;
        return view('Cliente.edit',["clientes"=>$clientes,"estados"=>$estadoclientes,"clientes1"=>$clientes1]);
    }
    //actualizar
    public function updateClient($id, Request $request){
        $cliente = $this->get($id);
        $cliente->fill($request->all())->save();
        $clientes = Estado_cliente::all();
        return redirect()->route('cliente.index',["clientes"=>$clientes]);
    }

    public function destroyClient($id){
        Clientes::find($id)->delete();
        return redirect()->route('cliente.index');
    }

    public function findByElement($key){
        $cliente = Clientes::whereRaw('cedula = ?',[$key])->get();
        if(sizeof($cliente)>0){
            return $cliente;
        }else{
            $vehiculo = Vehiculo::whereRaw('placa = ? or rfid = ? or id_estado_vehiculo = ?',[$key,$key,$key])->get();

            if(sizeof($vehiculo)>0){

                $cliente = $this->get($vehiculo[0]->id_cliente);

                return $cliente;
            }else{
                return ['Mensaje'=>'Cliente no encontrado'];
            }

        }

    }
}
