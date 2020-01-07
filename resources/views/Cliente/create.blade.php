@extends('layouts.app')

@section('title', 'Nuevo Cliente')

@section('content')
<legend>Crear nuevo  cliente</legend>
        
<form class="form-horizontal" method="POST" action="{{ route('cliente.store') }}">
{{ csrf_field() }}
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombreEstado">Nombre:</label>  
  <div class="col-md-5">
  <input id="nombre" name="nombre" type="text" placeholder="Ingrese el nombre del cliente" class="form-control input-md"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Apellido:</label>  
  <div class="col-md-5">
  <input id="apellido" name="apellido" type="text" placeholder="Ingrese el apellido del cliente" class="form-control input-md">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-info">Guardar</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>

@endsection