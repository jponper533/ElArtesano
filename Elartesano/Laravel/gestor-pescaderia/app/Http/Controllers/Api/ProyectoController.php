<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyecto;
class ProyectoController extends Controller
{
    public function index()
    {
        // Lógica para obtener y devolver una lista de proyectos
        $proyectos = Proyecto::all();
        return response()->json($proyectos);
    }

    public function store(Request $request)
    {
        // Lógica para crear un nuevo proyecto
        $codigo = $request->input('codigo');
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $proyecto = Proyecto::create([
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            
        ]);
        return redirect()->route('proyectos.index');
    }
}