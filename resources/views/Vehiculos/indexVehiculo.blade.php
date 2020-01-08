@extends('layouts.app')

@section('title', 'Vehículo')

@section('content')

      <div class="panel panel-default">
        <div class="panel-body">
          <legend><h3>Catálogo de vehículos</h3></legend>
          <div class="pull-right">
            <div class="btn-group">
            <a href="{{ action('VehiculoController@createVehicle') }}" class="btn btn-info" >Añadir vehículo</a>
            </div>
          </div>

          <div class="table-container">
          @if(count($vehiculos) > 0 )
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Placa</th>
               <th>Rfid</th>
               <th>Color</th>
               <th>Modelo</th>
               <th>Marca</th>
               <th>Estado</th>
               <th>Cliente</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>

              @foreach($vehiculos as $cliente)
              <tr>
              <td>{{$cliente->placa}}</td>
              <td>{{$cliente->rfid}}</td>
              <td>{{$cliente->color}}</td>
              <td>{{$cliente->modelo}}</td>
              <td>{{$cliente->marca}}</td>
              <td>{{$cliente->id_estado_vehiculo}}</td>
              <td></td>
              <td><a  class="btn btn-primary" href="{{action('VehiculoController@editVehicle', $cliente->id)}}" >Editar</a>
              </td>
                <td>
                  <form action="{{ route('vehiculo.destroyVehicle', $cliente->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
             @endforeach
	    	@else
        <br>
			    <h2 style="color:blue">Todavía no hay vehículos registrados</h2>
			@endif

            </tbody>

          </table>
        </div>
      </div>
@endsection
