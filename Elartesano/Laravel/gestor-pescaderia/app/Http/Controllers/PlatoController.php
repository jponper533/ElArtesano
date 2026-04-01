<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    public function index()
    {
        return response()->json(Plato::with('ingredientes')->get());
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:120',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'nullable|string|max:255',
            'estado' => 'required|in:activo,inactivo',
            'ingredientes' => 'nullable|array',
            'ingredientes.*' => 'exists:ingredientes,id',
        ]);
        $plato = Plato::create($validated);
        if (!empty($validated['ingredientes'])) {
            $plato->ingredientes()->sync($validated['ingredientes']);
        }
        return response()->json($plato->load('ingredientes'), 201);
    }
    public function show(string $id)
    {
        return response()->json(Plato::with('ingredientes')->findOrFail($id));
    }
    public function update(Request $request, string $id)
    {
        $plato = Plato::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:120',
            'descripcion' => 'nullable|string',
            'precio' => 'sometimes|numeric|min:0',
            'imagen' => 'nullable|string|max:255',
            'estado' => 'sometimes|in:activo,inactivo',
            'ingredientes' => 'nullable|array',
            'ingredientes.*' => 'exists:ingredientes,id',
        ]);
        $plato->update($validated);
        if (array_key_exists('ingredientes', $validated)) {
            $plato->ingredientes()->sync($validated['ingredientes'] ?? []);
        }
        return response()->json($plato->load('ingredientes'));
    }
    public function destroy(string $id)
    {
        Plato::findOrFail($id)->delete();
        return response()->json(['message' => 'Plato eliminado']);
    }
}
