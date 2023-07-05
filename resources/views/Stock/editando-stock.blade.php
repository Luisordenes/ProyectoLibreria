@extends('layouts.master')
@section('title', 'Editando Stock')
@section('header')
    <hr>
    <h2>Editando Stock</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/stock/regrabar/'.$stock[0]->id)}}" method="post">
        @csrf

        <div class="mb-4">
            <label for="libro">Libro: </label>
                @foreach($libros as $libro)
                    @if($stock[0]->libro_id == $libro->id)
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro->nombre }}" disabled>
                    @endif    
                @endforeach
        </div>

        <div class="mb-4">
            @foreach($libros as $libro)
                @if($stock[0]->libro_id == $libro->id)
                        <label for="autor" class="form-label">Autor: </label>
                        <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" disabled> 
                @endif    
            @endforeach
        </div>

        <div class="mb-4">
            <label for="ubicacion">Seleccione Ubicacion: </label>
                @foreach($ubicaciones as $ubicacion)
                    @if($stock[0]->ubicacion_id == $ubicacion->id)
                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $ubicacion->nombre }}" disabled>
                    @endif
                @endforeach
        </div>

        <div class="mb-4">
            <label for="cantidad" class="form-label">Cantidad: </label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $stock[0]->cantidad }}">
        </div>


        <div class="btn-group btn-group-xs" role="group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/stock/mensaje/{{ $stock[0]->id }}" type="button" class="btn btn-danger">Eliminar</a>
        </div>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop