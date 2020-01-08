@extends('layouts.app')

@section('title', 'Nuevo Tipo Vehículo')

@section('content')
<legend>Crear nuevo tipo de vehículo</legend>
        
<form class="form-horizontal" method="POST" action="{{ route('tipoVehiculo.storeType') }}">
{{ csrf_field() }}
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombreEstado">Nombre:</label>  
  <div class="col-md-5">
  <input id="nombreEstado" name="titulo" type="text" placeholder="Ingrese el nombre del estado" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Descripción:</label>  
  <div class="col-md-5">
  <input id="descripcionEstado" name="descripcion" type="text" placeholder="Ingrese la descripción del estado" class="form-control input-md">
    
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