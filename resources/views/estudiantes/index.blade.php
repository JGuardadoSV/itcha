@extends('estudiantes.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro de estudiantes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('estudiantes.create') }}"> Registrar nuevo estudiante</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>CODIGO</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>SEXO</th>
            <th>CARRERA</th>
            
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->codigo }}</td>
            <td>{{ $value->nombres }}</td>
            <td>{{ $value->apellidos }}</td>
            <td>{{ $value->sexo }}</td>
            <td>{{ $value->carrera }}</td>
            
            <td>
                <form action="{{ route('estudiantes.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('estudiantes.show',$value->id) }}">Ver datos completos</a>    
                    <a class="btn btn-primary" href="{{ route('estudiantes.edit',$value->id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection