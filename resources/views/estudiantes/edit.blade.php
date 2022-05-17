@extends('estudiantes.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edición de estudiante</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> Hay errores en los datos ingresados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('estudiantes.update',$estudiantes->id) }}" method="POST">
        @csrf
        @method('PUT')
            <input type="hidden" name="id" value="{{$estudiantes->id}}"/>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Codigo:</strong>
                    <input type="text" name="codigo" value="{{ $estudiantes->codigo }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" value="{{ $estudiantes->nombres }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="apellidos" value="{{ $estudiantes->apellidos }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sexo:</strong>
                    <input list="sexos" type="text" name="sexo" value="{{ $estudiantes->sexo }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carrera:</strong>
                    <input list="carreras" type="text" name="carrera" value="{{ $estudiantes->carrera }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Actualizar</button>
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