@extends('layouts.app')

@section('title', 'Cliente')

@section('content')
       
       
  
      <div class="panel panel-default">
        <div class="panel-body">
          <legend><h3>Catálogo de clientes</h3></legend>
          <div class="pull-right">
            <div class="btn-group">
            <a href="{{ action('ClientesController@createClientView') }}" class="btn btn-info" >Añadir cliente</a>
            </div>
          </div>
          
          <div class="table-container">
          @if(count($clientes) > 0 )
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Cédula</th>
               <th>Estado</th>                
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
 
              @foreach($clientes as $cliente)
              <tr> 
              <td>{{$cliente->nombre}}</td>
              <td>{{$cliente->apellido}}</td>
              <td>{{$cliente->cedula}}</td>
              <td>{{$cliente}}</td>
              </tr>
             @endforeach
	    	@else
        <br>
			    <h2 style="color:blue">Todavía no hay clientes registrados</h2>
			@endif
 
            </tbody>
 
          </table>
        </div>
      </div>
@endsection