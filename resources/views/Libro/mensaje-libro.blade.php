@extends('layouts.master')
@section('title', 'Eliminando Libro')
@section('header')
    <hr>
    <h2>Eliminando Libro</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <h4>¿ESTA SEGURO DE ELIMINAR EL LIBRO [{{ $libro[0]->nombre }}]?</h4>
        <p style="color:red;">Aviso Importante! Se eliminaran todos los stock de este libro!!!</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/libro/eliminar/{{ $libro[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/libro/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop