@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<a href="{{ url('/lista/create') }}" class="btn btn-success">Registrar nuevo alumno</a>
<br>
<br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Numero de Boleta</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Calficación 1</th>
            <th>Calficación 2</th>
            <th>Calficación 3</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($listas as $lista)
        <tr>
            <td>{{$lista -> id}}</td>
            <td>{{$lista -> numeroboleta}}</td>
            <td>{{$lista -> nombre}}</td>
            <td>{{$lista -> apellidos}}</td>
            <td>{{$lista -> calificacion1}}</td>
            <td>{{$lista -> calificacion2}}</td>
            <td>{{$lista -> calificacion3}}</td>
            <td>{{$lista -> total}}</td>
            <td>
            <a href="{{ url('/lista/'.$lista->id.'/edit') }}" class="btn btn-warning">
            Editar</a>
            | 
            <form action="{{ url('/lista/'.$lista->id) }}" class="d-inline" method="POST">
            @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" class=" btn btn-danger" value="Borrar">
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection