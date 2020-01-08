<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Estado_cliente;
class EstadoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //index estado cliente
    public function index()
    {
        $estados = Estado_cliente::all();
        return view('Estado.index',["estados"=>$estados]);
    }
    //CREAR VISTA ESTADOCLIENTE
    public function create()
    {
        return view('Estado.create');
    }

    public function store(Request $request){
        $clientes = Estado_cliente::Create($request->all());
        $estados = Estado_cliente::all();
        return redirect()->route('estado.index',["estados"=>$estados]);
    }
    
    public function show($id)
    {
        $estados=Estado_cliente::find($id);
        return view('Estado.edit',["estados"=>$estados]);
    }

   //
    public function edit($id)
    {
        $estados=Estado_cliente::find($id);
        return view('Estado.edit',["estados"=>$estados]);
    }

    public function updateEstadoCliente(Request $request, $id)
    {
    $this->validate($request,[ 'titulo'=>'required', 'descripcion'=>'required']);
        Estado_cliente::find($id)->update($request->all());
        $estados = Estado_cliente::all();
        return redirect()->route('estado.index',["estados"=>$estados]);
    
    }

    public function destroy($id)
    {
        Estado_cliente::find($id)->delete();
        return redirect()->route('estado.index');
    }
}
