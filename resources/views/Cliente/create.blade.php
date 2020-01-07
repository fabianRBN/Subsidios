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
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Cédula:</label>  
  <div class="col-md-5">
  <input id="cedula" name="cedula" type="text" placeholder="Ingrese la cédula del cliente" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="descripcionEstado">Teléfono:</label>  
  <div class="col-md-5">
  <input id="cedula" name="cedula" type="number" placeholder="Ingrese el télefono del cliente" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="descripcionEstado">Estado:</label>
            <select name="genero" id="genero" class="form-control input-md">
            @if(count($clientes) > 0 )
                <option value="">--Seleccione--</option>
                @foreach($clientes as $estado)
                <option value="">{{$estado->titulo}}</option>
                @endforeach
             @else
             No existe estados
             @endif   
            </select>
</div>
<!-- Text input-->
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
        <label class="col-md-2 control-label" for="descripcionEstado">Género:</label>
            <select name="genero" id="genero">
                <option value="">--Seleccione--</option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
            </select>
        
        <label class="col-md-2 control-label" for="descripcionEstado">Edad:</label>
        <input id="edad" name="edad" type="number" placeholder="Ingrese edad" style="width:130px" >
        </div>
    </div>
</div>
<!-- Text input-->
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
        <label class="col-md-2 control-label" for="descripcionEstado">Crédito actual:</label>
        <input id="edad" name="edad" type="number" value="30" placeholder="30" style="width:130px" >
        
        <label class="col-md-2 control-label" for="descripcionEstado">Crédito total:</label>
        <input id="edad" name="edad" type="number" placeholder="Crédito total" style="width:130px" >
        </div>
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