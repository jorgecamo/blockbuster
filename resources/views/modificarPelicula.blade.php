@extends('plantilla')
@section('titulo', 'Listado de peliculas')
@section('contenido')
<h1>Modificar una pelicula</h1>
<form action="{{ route('pelicula.update',$pelicula) }}" method="post">
@csrf
@method('PUT')
<div class="row mb-3">
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $pelicula->title }}">
    </div>

    <div class="form-group">
        <label for="year">Año:</label>
        <input type="text" class="form-control" name="year" id="year" value="{{ $pelicula->year }}">
    </div>

    <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" class="form-control" name="director" id="director" value="{{ $pelicula->director }}">
    </div>

    <div class="form-group">
        <label for="poster">Caratula:</label>
        <input type="text" class="form-control" name="poster" id="poster" value="{{ $pelicula->poster }}">
    </div>

    <div class="form-group">
        <label for="synopsis">Synopsis:</label>
        <input type="text" class="form-control" name="synopsis" id="synopsis" value="{{ $pelicula->synopsis }}">
    </div>

    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
</div>
</form>
@endsection