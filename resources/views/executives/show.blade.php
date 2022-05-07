@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
    <a class="btn btn-primary mr-2"
        href="{{ route('executives.index') }}">Regresar</a>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mb-5">Mostrar Cliente</h2>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form  action="{{ url('/executives/' . $client->id) }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input  disabled type="text"
                            hidden
                            name="id"
                            id="id"
                            value="{{ $client->id }}">
                        <label for="name">Mostrar Cliente</label>
                        <input  disabled type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="name"
                            value="{{ $client->name }}"
                            placeholder="Nombre del cliente">
                        @error('name')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="amount">Monto</label>
                        <input  disabled type="number"
                            class="form-control @error('amount') is-invalid @enderror"
                            name="amount"
                            id="amount"
                            value="{{ $client->amount }}"
                            placeholder="Monto">
                        @error('amount')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="age">Edad</label>
                        <input  disabled type="number"
                            class="form-control @error('age') is-invalid @enderror"
                            name="age"
                            id="age"
                            value="{{ $client->age }}"
                            placeholder="Edad">
                        @error('age')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="phone">Telefono</label>
                        <input  disabled type="text"
                            class="form-control @error('phone') is-invalid @enderror"
                            name="phone"
                            id="phone"
                            value="{{ $client->phoneNumber }}"
                            placeholder="Telefono">
                        @error('phone')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="address">Telefono</label>
                        <textarea disabled  class="form-control @error('phone') is-invalid @enderror"
                            name="address"
                            id="address"
                            cols="8"
                            rows="5">{{ $client->direction }}</textarea>

                        @error('address')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
