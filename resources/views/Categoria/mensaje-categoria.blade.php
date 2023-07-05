@extends('layouts.master')
@section('title', 'Eliminando Categoria')
@section('header')
    <hr>
    <h2>Eliminando Categoria</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <h4>ESTA SEGURO DE ELIMINAR LA CATEGORIA {{ $categoria[0]->nombre }}?</h4>
        <p style="color:red;">Aviso Importante! Se eliminaran todos los libros de esta categoria y sus stock en cada estante!!!</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/categoria/eliminar/{{ $categoria[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/categoria/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop