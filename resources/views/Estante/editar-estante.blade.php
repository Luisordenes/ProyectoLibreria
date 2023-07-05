@extends('layouts.master')
@section('title', 'Editar Estante')
@section('header')
    <hr>
    <h2>Editando Estante</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/estante/regrabar/'.$estante[0]->id)}}" method="post">
        @csrf
        
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estante[0]->nombre }}">
        </div>
        <div class="mb-4">
            <label for="direccion" class="form-label">Pasillo: </label>
            <input type="text" class="form-control" id="pasillo" name="pasillo" value="{{ $estante[0]->pasillo }}">
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
        
        <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop