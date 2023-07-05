@extends('layouts.master')
@section('title', 'Agregar Stock')
@section('header')
    <hr>
    <h2>Agregar Stock</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/stock/grabar')}}" method="post">
        @csrf

        <div class="mb-4">
            <label for="libro">Libro: </label>
            <select class="form-select" id="libro" name="libro">
                <option selected value="">Seleccione un libro</option>
                @foreach($libros as $libro)
                <option value={{ $libro->id }}>{{ $libro->nombre }} - {{ $libro->autor }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="ubicacion">Seleccionar ubicacion: </label>
            <select class="form-select" id="ubicacion" name="ubicacion">
                <option selected value="">Seleccione Ubicacion</option>
                @foreach($ubicaciones as $ubicacion)
                <option value={{ $ubicacion->id }}>{{ $ubicacion->nombre }}</option>
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