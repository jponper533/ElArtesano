<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    //
     public function index()
    {
        $peliculas = Pelicula::all();
        return $peliculas->toJson();
    }
    public function store(Request $request)
    {
          $nombre = $request->input('nombre');
          $genero = $request->input('genero');
          $precio = $request->input('precio');
          $pelicula_id = $request->input('pelicula_id');
          $id = Pelicula::create([
            'nombre' => $nombre,
            'genero' => $genero,
            'precio' => $precio,
            'pelicula_id' => $pelicula_id
        ])->id; 
        return Pelicula::find($id)->toJson();
        $this->peliculaService->crearPelicula($validate);

    }
}
