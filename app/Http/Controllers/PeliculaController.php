<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use PhpParser\Node\Expr\Cast\String_;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::get();
        return view('listado',compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearPelicula');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula= new Pelicula();
        $pelicula->title = $request->get('title');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->poster = $request->get('poster');
        $pelicula->rented = 0;
        $pelicula->save();

        return redirect()->route('pelicula.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Pelicula::find($id);
        return view('modificarPelicula',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Pelicula::find($id);
        return view('mostrarPelicula',compact('pelicula'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->title = $request->get('title');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->poster = $request->get('poster');
        $pelicula->save();
        return redirect()->route('pelicula.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('pelicula.index');
    }
}
