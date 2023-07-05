@extends('layouts.master')
@section('title', 'Eliminando Estante')
@section('header')
    <hr>
    <h2>Eliminando Estante</h2>
    <hr>
@stop

@section('content')
    <div class="mb-4">
        <h4>ESTA SEGURO DE ELIMINAR EL ESTANTEL {{ $estante[0]->nombre }}?</h4>
        <p style="color:red;">Aviso Importante! Se eliminaran todos los stock de este estante!!!</p>
    </div>
    <div class="btn-group btn-group-lg" role="group">
        <a href="/estante/eliminar/{{ $estante[0]->id }}" type="button" class="btn btn-warning">SI</a>
        <a href="/estante/listar" type="button" class="btn btn-secondary">NO</a>
    </div>
@stop

@section('footer')

@stop