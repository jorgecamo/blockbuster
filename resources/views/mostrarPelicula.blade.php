@extends('plantilla')
@section('titulo', 'Listado de peliculas')
@section('contenido')
<h1>Dar de alta una pelicula</h1>
<table  class="table table-striped">
    <tr>
        <td>TITULO</td>
        <td>AÑO</td>
        <td>ALQUILADA</td>
        <td>SYNOPSIS</td>
        <td>CARATULA</td>
        <td>MODIFICAR PELICULA</td>
        <td>BORRAR PELICULA</td>
    </tr>
<tr>
<td>{{ $pelicula["title"] }}</td>
<td>{{ $pelicula["year"] }}</td>
<td>{{ $pelicula["rented"] }}</td>
<td>{{ $pelicula["synopsis"] }}</td>
<td><img src="{{ $pelicula['poster'] }}" style="width: 150px"></td>
<td><a href="{{route('pelicula.show',$pelicula)}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
<td>
<form action="{{route('pelicula.destroy',$pelicula->id)}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-primary">Borrar</button>
</form>
</td>
</tr>
</table>
@endsection