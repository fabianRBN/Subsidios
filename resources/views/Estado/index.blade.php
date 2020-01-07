@extends('layouts.app')

@section('title', 'Estado Cliente')

@section('content')
  <section class="content">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <legend><h3>Catálogo de estados de clientes</h3></legend>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ action('EstadoClienteController@create') }}" class="btn btn-info" >Añadir estado</a>
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
              <td><a  class="btn btn-primary" href="{{action('EstadoClienteController@edit', $estado->id)}}" >Editar</a></td>
                <td>
                <form action="{{ route('estado.destroy', $estado->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                 </td>
              </tr>
            @endforeach
				@else
        <br>
			    <h2 style="color:blue">Todavía no hay estados de clientes registrados</h2>
				@endif

            
              
            </tbody>
 
          </table>
        </div>
      </div>
      
    </div>
  </div>
</section>
   
@endsection