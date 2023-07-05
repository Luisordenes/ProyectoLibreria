@extends('layouts.master')
@section('title', 'Agregar Libro')
@section('header')
    <hr>
    <h2>Agregar Libro</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/libro/grabar')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-4">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" maxlength="10">
        </div>
        <div class="mb-4">
            <label for="autor" class="form-label">Autor: </label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="mb-4">
            <label for="precio" class="form-label">Precio: </label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-4">
            <label for="image" class="form-label">Imagen: </label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg .png .jpeg">
        </div>
        <div class="mb-4">
            <label for="categoria">Categoria: </label>
            <select class="form-select" id="categoria" name="categoria">
                <option selected></option>
                @foreach($categorias as $categoria)
                <option value={{ $categoria->id }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
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