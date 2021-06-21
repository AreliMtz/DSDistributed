@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/lista/'.$lista->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('lista.form',['modo'=>'Editar'])

</form>

</div>
@endsection