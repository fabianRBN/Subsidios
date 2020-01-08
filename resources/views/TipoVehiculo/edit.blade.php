@extends('layouts.app')

@section('title', 'Editar Tipo Vehículo')

@section('content')
        <legend>Editar tipo de vehículo</legend>
        
<form class="form-horizontal" method="post" action="{{ route('tipoVehiculo.updateType',$estados->id) }}">
{{ csrf_field() }}
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombreEstado">Nombre:</label>  
  <div class="col-md-5">
  <input id="nombreEstado" name="titulo" type="text" value="{{$estados->titulo}}" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Descripción:</label>  
  <div class="col-md-5">
  <input id="descripcionEstado" name="descripcion" type="text" value="{{$estados->descripcion}}" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-info">Actualizar</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
@endsection