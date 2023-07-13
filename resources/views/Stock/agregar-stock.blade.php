@extends('layouts.master')
@section('title', 'Agregar Stock')
@section('header')
    <hr>
    <h2>Agregar Stock de: "{{ $libro[0]->nombre }}"</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/stock/grabar/'.$libro[0]->id)}}" method="post">
        @csrf

        <div class="mb-4">
            <label for="libro">Libro: </label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro[0]->nombre }} - {{ $libro[0]->autor }}" disabled>     
        </div>
        <div class="mb-4">
            <label for="ubicacion">Seleccionar ubicacion: </label>
            <select class="form-select" id="ubicacion" name="ubicacion">
                <option selected value="">Seleccione Ubicacion</option>
                @foreach($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id }}">{{ $ubicacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="cantidad" class="form-label">Cantidad: </label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
     
        <button type="submit" class="btn btn-primary">Agregar</button>

        </form>
    </div>
    <hr>>
@stop

@section('footer')

@stop

