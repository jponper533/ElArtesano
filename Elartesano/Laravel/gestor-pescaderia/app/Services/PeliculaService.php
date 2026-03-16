<?php
namespace App\Services;
use App\Models\Pelicula;
use App\Models\Alquiler;
class PeliculaService
{
    public function obtenerPeliculasPorGenero($genero)
    {
        return Pelicula::where('genero', $genero)->get();
    }

     public function crearPelicula(array $datos): Pelicula
    {
        return Pelicula::create();
        

    }
    public function actualizarPelicula(Pelicula $pelicula, array $datos): Pelicula
    {
        $pelicula->update($datos);
        return $pelicula;
    }

     public function eliminarPelicula(Pelicula $pelicula): void
    {
        $pelicula->delete();
    }
}