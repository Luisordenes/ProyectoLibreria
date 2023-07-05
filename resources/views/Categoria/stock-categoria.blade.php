@extends('layouts.master')
@section('title', 'Stock Categoria')
@section('header')
    <hr>
    <h2>Stock por categoria</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Cantidad</th>         
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($stocks as $stock)
                        <tr>
                            @foreach($libros as $libro)
                                @if($stock->libro_id == $libro->id)
                                    <th scope="row">{{ $libro->codigo }}</th>
                                    <td>{{ $libro->nombre }}</td>
                                    <td>{{ $libro->precio }}</td>    
                                @endif
                                @foreach($ubicaciones as $ubicacion)
                                    @if($ubicacion->id == $stock->ubicacion_id && $stock->libro_id == $libro->id)
                                    <td>{{ $ubicacion->nombre }}</td>  
                                    @endif
                                @endforeach
                                @if($stock->libro_id == $libro->id)   
                                <td>{{ $stock->cantidad }}</td>
                                @endif    
                            @endforeach 
                            
                        </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop