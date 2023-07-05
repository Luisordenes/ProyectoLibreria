@extends('layouts.master')
@section('title', 'Editar Libro')
@section('header')
    <hr>
    <h2>Editar Libro</h2>
    <hr>
@stop

@section('content')
    <hr>
    <div class="row">
        <form action="{{url('/libro/regrabar/'.$libro[0]->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $libro[0]->nombre }}">
        </div>
        <div class="mb-4">
            <label for="codigo" class="form-label">Codigo: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" maxlength="10" value="{{ $libro[0]->codigo }}">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="form-label">Autor: </label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro[0]->autor }}">
        </div>
        <div class="mb-4">
            <label for="precio" class="form-label">Precio: </label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{ $libro[0]->precio }}">
        </div>
        <div class="mb-4">
            <label for="image" class="form-label">Imagen: </label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg .png .jpeg" value="{{ $libro[0]->image }}">
        </div>
        <div class="mb-4">
            <label for="categoria">Categoria: </label>
            <select class="form-select" id="categoria" name="categoria">
                <option selected>Seleccione una categoria</option>
                @foreach($categorias as $categoria)
                    @if($categoria->id == $libro[0]->categoria_id)
                        <option value={{ $categoria->id }} selected>{{ $categoria->nombre }}</option>
                    @else
                        <option value={{ $categoria->id }}>{{ $categoria->nombre }}</option>
                    @endif    
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

        <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>
    <hr>
@stop

@section('footer')

@stop