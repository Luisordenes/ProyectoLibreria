@extends('layouts.master')
@section('title', 'Editar Stock')
@section('header')
    <hr>
    <h2>Editar Stock</h2>
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
                <th scope="col">Categoria</th>
                <th scope="col">Ubicacion</th>
                <th scope="col">Cantidad</th> 
                <th scope="col">Editar</th>
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
                                    @foreach($categorias as $categoria)
                                        @if($categoria->id == $libro->categoria_id)
                                            <td>{{ $categoria->nombre }}</td>  
                                        @endif
                                    @endforeach 
                                @endif
                            @endforeach 
                            @foreach($ubicaciones as $ubicacion)
                                @if($ubicacion->id == $stock->ubicacion_id)
                                    <td>{{ $ubicacion->nombre }}</td>  
                                @endif
                            @endforeach   
                            <td>{{ $stock->cantidad }}</td>
                            
                            <td><a type="button" class="btn btn-secondary" href="/stock/editando/{{ $stock->id }}">&#9998;</a></td>
                        </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop