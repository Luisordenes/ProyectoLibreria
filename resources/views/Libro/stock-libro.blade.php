@extends('layouts.master')
@section('title', 'Listado stock')
@section('header')
    <hr>
    <h2>Stock de {{ $libro[0]->nombre }}</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ubicación</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($stocks as $stock)
                @if($libro[0]->id == $stock->libro_id)
                    <tr>
                        <th scope="row">{{ $libro[0]->codigo }}</th>
                        <td>{{ $libro[0]->nombre }}</td>
                        @foreach($categorias as $categoria)
                            @if($categoria->id == $libro[0]->categoria_id)
                                <td>{{ $categoria->nombre }}</td>  
                            @endif
                        @endforeach
                        @foreach($ubicaciones as $ubicacion)
                            @if($ubicacion->id == $stock->ubicacion_id)
                                <td>{{ $ubicacion->nombre }}</td>  
                            @endif
                        @endforeach
                        <td>{{ $stock->cantidad }}</td>
                        <td>{{ $libro[0]->precio }}</td>
                    </tr>            
                @endif   
            @endforeach                           
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop