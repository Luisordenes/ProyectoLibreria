@extends('layouts.master')
@section('title', 'Agregar Categoria')
@section('header')
    <hr>
    <h2>Agregar Categoria</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/categoria/grabar')}}" method="post">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre">
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
        
        <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop