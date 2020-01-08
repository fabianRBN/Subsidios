@extends('layouts.app')

@section('title', 'Nuevo Cliente')

@section('content')
<legend>Crear nuevo vehículo</legend>
        
<form class="form-horizontal" method="POST" action="{{ route('vehiculo.storeVehicle') }}">
{{ csrf_field() }}  
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombreEstado">Placa:</label>  
  <div class="col-md-5">
  <input id="placa" name="placa" type="text" placeholder="Ingrese la placa del vehículo" class="form-control input-md"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Rfid:</label>  
  <div class="col-md-5">
  <input id="rfid" name="rfid" type="text" value="00aa" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Color:</label>  
  <div class="col-md-5">
  <input id="color" name="color" type="text" placeholder="Ingrese el color del vehículo" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Modelo:</label>  
  <div class="col-md-5">
  <input id="modelo" name="modelo" type="text" placeholder="Ingrese el modelo del vehículo" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Marca:</label>  
  <div class="col-md-5">
  <input id="marca" name="marca" type="text" placeholder="Ingrese la marca del vehículo" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="descripcionEstado">Estado:</label>
    <div class="col-md-5">
            <select name="id_estado_vehiculo" id="id_estado_vehiculo" class="form-control input-md">
            @if(count($clientes) > 0 )
                <option value="">--Seleccione--</option>
                @foreach($clientes as $estado)
                <option value="{{$estado->id}}">{{$estado->titulo}}</option>
                @endforeach
             @else
             <option value="">No existe estados</option>
             @endif   
            </select>
    </div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="descripcionEstado">Cliente:</label>
    <div class="col-md-5">
            <select name="id_cliente" id="id_cliente" class="form-control input-md">
            @if(count($clientes1) > 0 )
                <option value="">--Seleccione--</option>
                @foreach($clientes1 as $estado)
                <option value="{{$estado->id}}">{{$estado->nombre}} {{$estado->apellido}}</option>
                @endforeach
             @else
             <option value="">No existe clientes</option>
             @endif   
            </select>
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