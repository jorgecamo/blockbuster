@extends('plantilla')
@section('titulo', 'Listado de peliculas')
@section('contenido')
<h1>Listado de peliculas</h1>
<table  class="table table-striped">
    <tr>
        <td>TITULO</td>
        <td>AÑO</td>
        <td>CARATULA</td>
        <td>EDITAR PELICULA</td>
    </tr>
@forelse ($peliculas as $pelicula)
<tr>
<td>{{ $pelicula["title"] }}</td>
<td>{{ $pelicula["year"] }}</td>
<td><img src="{{ $pelicula['poster'] }}" style="width: 150px"></td>
<td><a href="{{route('pelicula.edit',$pelicula)}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
</tr>
@empty
<td>No se encontraron peliculas</td>
@endforelse
</table>
@endsection