<?php
namespace App\Services;
use App\Models\Pelicula;
use App\Models\Alquiler;
class AlquilerService
{
    public function obtenerAlquileres($id)
    {
        return Alquiler::where('id', $id)->get();
    }

     public function crearAlquiler(array $datos): Alquiler
    {
        return Alquiler::create($datos);
        

    }
    public function actualizarAlquiler(Alquiler $alquiler, array $datos): Alquiler
    {
        $alquiler->update($datos);
        return $alquiler;
    }

     public function eliminarAlquiler(Alquiler $alquiler): void
    {
        $alquiler->delete();
    }
}