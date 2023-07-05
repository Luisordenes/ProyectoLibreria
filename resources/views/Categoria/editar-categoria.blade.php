@extends('layouts.master')
@section('title', 'Editando Categoria')
@section('header')
    <hr>
    <h2>Edición Categoria</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/categoria/regrabar/'.$categoria[0]->id)}}" method="post">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria[0]->nombre }}">
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