@extends('layouts.master')
@section('title', 'Listado libros')
@section('header')
    <hr>
    <h2>Listado Libros</h2>
    <br><a href="/libro/agregar" type="button" class="btn btn-primary">Agregar Libro</a><br>
    <hr>
@stop

@section('content')
    <div class="row">
        @foreach($libros as $libro)
            <div class="col-3 mb-2">
                <div class="card" style="height:800px;"> 
                    @if(Storage::disk('imagenes')->has($libro->image))
                        <img src="{{ url('/miniatura/'.$libro->image) }}"  alt="{{$libro->nombre}}">
                    @else
                        <img src="{{$libro->image}}" alt="{{$libro->nombre}}">
                    @endif
                    
                    <div class="card-body">
                        <h4 class="card-title">{{$libro->nombre}}</h4>
                        <h6 class="card-title">{{$libro->codigo}}</h6>
                        <p class="card-text">{{$libro->autor}}</p>
                        <p class="card-text">$ {{$libro->precio}}</p>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilterCreated($libro->created_at) }}</p>
                        <p class="card-text text-muted">{{ \FormatTime::LongTimeFilter($libro->updated_at) }}</p>
                        
                    </div>
                    <div class="card-footer">
                        <div class="btn-group btn-group-xs" role="group">
                            <a href="/libro/editar/{{ $libro->id }}" type="button" class="btn btn-success">Modificar</a>
                            <a href="/libro/stock/{{ $libro->id }}" type="button" class="btn btn-warning">Stock</a>
                            <a href="/libro/mensaje/{{ $libro->id }}" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('footer')

@stop