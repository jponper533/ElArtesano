<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reserva;
class ReservaController extends Controller
{
    public function index()
    {
        // Lógica para obtener y devolver una lista de reservas
        $reservas = Reserva::all();
        return response()->json($reservas);
    }

    public function store(Request $request)
    {
        // Lógica para crear un nueva reserva
      $validated = $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i:s',
            'estado' => 'required|in:pendiente,confirmada,cancelada,completada',
            'usuario_id' => 'required|exists:usuarios,id',
            'mesa_id' => 'required|exists:mesas,id',
        ]);
        $reserva = Reserva::create($validated);
        return response()->json($reserva->load(['usuario', 'mesa']), 201);
    }
}