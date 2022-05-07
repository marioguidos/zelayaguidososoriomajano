@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
    <a class="btn btn-primary mr-2"
        href="{{ route('executives.create') }}">Crear Cliente</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Administración de Ejecutivos</h2>
    <div class="col-md-12 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-danger text-light">
                <tr>
                    <th scole="col">Codigo</th>
                    <th scole="col">Nombre</th>
                    <th scole="col">Edad</th>
                    <th scole="col">Monto</th>
                    <th scole="col">Telefono</th>
                    <th scole="col">Direccion</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clients as $cl)
                    <tr>
                        <td class="td">{{ $cl->id }}</td>
                        <td class="td">{{ $cl->name }}</td>
                        <td class="td">{{ $cl->age }} años</td>
                        <td class="td">{{ $cl->phoneNumber }}</td>
                        <td class="td">${{ $cl->amount }}</td>
                        <td class="td">{{ $cl->direction }}</td>
                        <td>
                            <a href="{{route('executives.destroy',$cl)}}"
                                class="btn btn-danger">Eliminar</a>
                            <a href="#"
                                class="btn btn-warning">Editar</a>
                            <a href="{{ url('/cl/' . $cl->id) }}"
                                class="btn btn-success">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
@endsection
