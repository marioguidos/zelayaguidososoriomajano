@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
    <a class="btn btn-primary mr-2"
        href="{{ route('executives.index') }}">Regresar</a>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mb-5">Crear Cliente</h2>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{ url('/executives') }}"
                        method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <label for="name">Nuevo Cliente</label>
                        <input type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            placeholder="Nombre del cliente">
                        @error('name')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="amount">Monto</label>
                        <input type="number"
                            class="form-control @error('amount') is-invalid @enderror"
                            name="amount"
                            id="amount"
                            value="{{ old('amount') }}"
                            placeholder="Monto">
                        @error('amount')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="age">Edad</label>
                        <input type="number"
                            class="form-control @error('age') is-invalid @enderror"
                            name="age"
                            id="age"
                            value="{{ old('age') }}"
                            placeholder="Edad">
                        @error('age')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="phone">Telefono</label>
                        <input type="text"
                            class="form-control @error('phone') is-invalid @enderror"
                            name="phone"
                            id="phone"
                            value="{{ old('phone') }}"
                            placeholder="Telefono">
                        @error('phone')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <label class="mt-3"
                            for="address">Telefono</label>
                        <textarea class="form-control @error('phone') is-invalid @enderror"
                            name="address"
                            id="address"
                            cols="8"
                            rows="5">{{ old('address') }}</textarea>

                        @error('address')
                            <span class="invalid-feedback d-block"
                                role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        <input type="submit"
                            value="Guardar"
                            class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
