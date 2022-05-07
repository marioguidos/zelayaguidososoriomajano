@extends('layouts.app')

@section('css')

@endsection

@section('buttons')
    <a class="btn btn-primary mr-2" href="{{route('executives.create')}}">Crear ejecutivo</a>
@endsection

@section('content')

<h2 class="text-center mb-5">Administración de Ejecutivos</h2>
<div class="col-md-10 mx-auto bg-white p-3">
<table class="table">
    <thead class="bg-danger text-light">
        <tr>
            <th scole="col">Codigo</th>
            <th scole="col">DUI</th>
            <th scole="col">Direccion</th>
            <th scole="col">Categoria</th>
            <th scole="col">Id usuario</th>
            <th scole="col">Acciones</th>
        </tr>

    </thead>
    <tbody>
     
    </tbody>
</table>
</div>



@endsection

@section('js')

@endsection
