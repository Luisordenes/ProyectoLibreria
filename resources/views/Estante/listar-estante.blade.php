@extends('layouts.master')
@section('title', 'Listado Estantes')
@section('header')
    <hr>
    <h2>Listado Estantes</h2>
    <br><a href="/estante/agregar" type="button" class="btn btn-primary">Agregar Estante</a><br>
    <hr>
@stop

@section('content')
    <div class="row">
        @foreach($estantes as $estante)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$estante->nombre}}</h3>
                        <p class="card-text">{{$estante->pasillo}}</p>
        
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group">
                            <a href="/estante/editar/{{ $estante->id }}" type="button" class="btn btn-success">Modificar</a>
                            <a href="/estante/stock/{{ $estante->id }}" type="button" class="btn btn-warning">Stock</a>
                            <a href="/estante/mensaje/{{ $estante->id }}" type="button" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

@section('footer')

@stop