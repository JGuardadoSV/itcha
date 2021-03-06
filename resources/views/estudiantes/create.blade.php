@extends('estudiantes.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Registrar nuevo estudiante</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong> Ocurrio un error.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <div id="aplicacion">
<form @submit.prevent="submitForm"  method="POST" >
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                <input type="text" name="codigo" required v-model="codigo" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                <input type="text" name="nombres" required v-model="nombres" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                <input type="text" name="apellidos" required v-model="apellidos" class="form-control" >
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexo:</strong>
                <input list="sexos" v-model="sexo" required type="text" name="sexo" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carrera:</strong>
                <input list="carreras" v-model="carrera" required type="text" name="carrera" class="form-control" >
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

    <datalist id="sexos">
  <option value="Masculino">
  <option value="Femenino">
  
</datalist>

<datalist id="carreras">
  <option value="Tecnico en mantenimiento">
  <option value="Tecnico en programador">
</datalist>
   
</form>
</div>



<form action="{{ route('estudiantes.store') }}" method="POST" >
    @csrf
  <h4>Submit normal</h4>
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Codigo:</strong>
                <input type="text" name="codigo" required  class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                <input type="text" name="nombres"  required class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                <input type="text" name="apellidos" required  class="form-control" >
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sexo:</strong>
                <input list="sexos"  type="text" required name="sexo" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Carrera:</strong>
                <input list="carreras"  type="text" required name="carrera" class="form-control" >
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </div>

    <datalist id="sexos">
  <option value="Masculino">
  <option value="Femenino">
  
</datalist>

<datalist id="carreras">
  <option value="Tecnico en mantenimiento">
  <option value="Tecnico en programador">
</datalist>
   
</form>
@endsection