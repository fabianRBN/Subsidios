<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\Estado_Vehiculo;
use App\Tipo_Vehiculo;
use App\Clientes;
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
    //estados vehiculos
    //index estado estadoVehiculo
    public function index()
    {
        $estadoVehiculo = Estado_Vehiculo::all();
        return view('estadoVehiculo.index',["estados"=>$estadoVehiculo]);
    }
    //CREAR VISTA para crear estado vehiculo
    public function createStatus()
    {
        return view('EstadoVehiculo.create');
    }
    //guardar stado vehiculo
    public function storeStatus(Request $request){
        $estadoVehiculo = Estado_Vehiculo::Create($request->all());
        $estadoVehiculo = Estado_Vehiculo::all();
        return redirect()->route('estadoVehiculo.index',["estados"=>$estadoVehiculo]);
    }
    //editar stado vehiculo
    public function editStatus($id)
    {
        $estados=Estado_Vehiculo::find($id);
        return view('estadoVehiculo.edit',["estados"=>$estados]);
    }
    //update stado vehiculo
    public function updateStatus($id, Request $request){
        $this->validate($request,[ 'titulo'=>'required', 'descripcion'=>'required']);
        Estado_Vehiculo::find($id)->update($request->all());
        $estados = Estado_Vehiculo::all();
        return redirect()->route('estadoVehiculo.index',["estados"=>$estados]);
    }
    //eliminar estado vehiculo
    public function destroyStatus($id)
    {
        Estado_Vehiculo::find($id)->delete();
        return redirect()->route('estadoVehiculo.index');
    }

    ///TIPOS VEHICULOS
    //index tipo Vehiculo
    public function indexTipo()
    {
        $tipoVehiculo = Tipo_Vehiculo::all();
        return view('tipoVehiculo.indexTipo',["estados"=>$tipoVehiculo]);
    }
     //CREAR VISTA para crear tipo vehiculo
     public function createType()
     {
         return view('tipoVehiculo.create');
     }
     //guardar tipo vehiculo
    public function storeType(Request $request){
        $tipoVehiculo = Tipo_Vehiculo::Create($request->all());
        $tipoVehiculo = Tipo_Vehiculo::all();
        return redirect()->route('tipoVehiculo.indexTipo',["estados"=>$tipoVehiculo]);
    }
    //editar tipo vehiculo
    public function editType($id)
    {
        $estados=Tipo_Vehiculo::find($id);
        return view('tipoVehiculo.edit',["estados"=>$estados]);
    }
    //update tipo vehiculo
    public function updateType($id, Request $request){
        $this->validate($request,[ 'titulo'=>'required', 'descripcion'=>'required']);
        Tipo_Vehiculo::find($id)->update($request->all());
        $estados = Tipo_Vehiculo::all();
        return redirect()->route('tipoVehiculo.indexTipo',["estados"=>$estados]);
    }
    //eliminar estado vehiculo
    public function destroyType($id)
    {
        Tipo_Vehiculo::find($id)->delete();
        return redirect()->route('tipoVehiculo.indexTipo');
    }

    ///VEHÍCULOS
    //index tipo Vehiculo
    public function indexVehiculo()
    {
        $vehiculo = Vehiculo::all();
        foreach ($vehiculo as $vehi){
            $estado = Estado_Vehiculo::find($vehi->id_estado_vehiculo);
            $vehi->id_estado_vehiculo = $estado->titulo;
        }
        return view('vehiculos.indexVehiculo',["vehiculos"=>$vehiculo]);
    }
    //CREAR VISTA para crear tipo vehiculo
    public function createVehicle()
    {
        $estado=Estado_Vehiculo::all();
        $cliente=Clientes::all();
        return view('vehiculos.create',['clientes'=>$estado,'clientes1'=>$cliente]);
    }
    //guardar vehiculo
    public function storeVehicle(Request $request){
        $tipoVehiculo = Vehiculo::Create($request->all());
        $tipoVehiculo = Vehiculo::all();
        return redirect()->route('vehiculo.indexVehiculo',["vehiculos"=>$tipoVehiculo]);
    }
}
