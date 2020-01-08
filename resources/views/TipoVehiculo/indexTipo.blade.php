@extends('layouts.app')

@section('title', 'Tipo Vehículo')

@section('content')
  <section class="content">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <legend><h3>Catálogo de tipos de vehículos</h3></legend>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ action('VehiculoController@createType') }}" class="btn btn-info" >Añadir tipo</a>
            </div>
          </div>
          <div class="table-container">
          @if(count($estados) > 0 )
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripción</th>               
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @foreach($estados as $estado)
              <tr> 
              <td>{{$estado->titulo}}</td>
              <td>{{$estado->descripcion}}</td>
              <td><a  class="btn btn-primary" href="{{action('VehiculoController@editType', $estado->id)}}" >Editar</a></td>
                <td>
                  <form action="{{ route('tipoVehiculo.destroyType', $estado->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                 </td>
              </tr>
            @endforeach
				@else
        <br>
			    <h2 style="color:blue">Todavía no hay tipos de vehículos registrados</h2>
				@endif
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>
</section>
   
@endsection