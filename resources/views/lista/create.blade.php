@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/lista')}}" method="post" enctype="multipart/form-data">
@csrf
@include('lista.form', ['modo'=>'Crear'])

</form>

</div>

@endsection