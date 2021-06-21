<h1>{{ $modo }}  datos</h1>


@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
<form action="{{ url('/lista')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="numeroboleta">Numero de Boleta</label>
<input type="number" class="form-control" name="numeroboleta" value="{{isset($lista) ? $lista->numeroboleta : old('numeroboleta') }}" id="numeroboleta">
</div>

<div class="form-group">
<form action="{{ url('/lista')}}" method="post" enctype="multipart/form-data">
<label for="nombre">Nombre</label>
<input type="text" class="form-control" name="nombre" value="{{isset($lista) ? $lista->nombre : old('nombre') }}" id="nombre">
</div>

<div class="form-group">
<form action="{{ url('/lista')}}" method="post" enctype="multipart/form-data">
<label for="apellidos">Apellidos</label>
<input type="text" class="form-control" name="apellidos" value="{{isset($lista) ? $lista->apellidos : old('apellidos') }}" id="apellidos">
</div>

<div class="form-group">
<label for="calificacion1">Calificación 1</label>
<input type="number" class="form-control" name="calificacion1" value="{{isset($lista) ? $lista->calificacion1 : old('calificacion1') }}"  id="calificacion1"> 
</div>

<div class="form-group">
<label for="calificacion2">Calificación 2</label>
<input type="number" class="form-control" name="calificacion2" value="{{isset($lista) ? $lista->calificacion2 : old('calificacion2') }}"  id="calificacion2"> 
</div>

<div class="form-group">
<label for="calificacion3">Calificación 3</label>
<input type="number" class="form-control" name="calificacion3" value="{{isset($lista) ? $lista->calificacion3 : old('calificacion3') }}"   id="calificacion13> 
</div>

<br>

<div class="form-group">
<label for="total">Total</label>
<input type="number" class="form-control" name="total"  value="{{isset($lista) ? $lista->total : old('total') }}" id="total"> 
</div>

<input type="submit" class="btn btn-success" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{url('lista/')}}">Regresar</a>
<br>

</form>