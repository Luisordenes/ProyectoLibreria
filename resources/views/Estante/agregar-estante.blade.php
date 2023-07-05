@extends('layouts.master')
@section('title', 'Agregar Estante')
@section('header')
    <hr>
    <h2>Agregar Estante</h2>
    <hr>
@stop

@section('content')
<hr>
    <div class="row">
        <form action="{{url('/estante/grabar')}}" method="post">
        @csrf
        
        <div class="mb-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="2">
        </div>
        <div class="mb-4">
            <label for="pasillo" class="form-label">Pasillo: </label>
            <input type="number" class="form-control" id="pasillo" name="pasillo" maxlength="1" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
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