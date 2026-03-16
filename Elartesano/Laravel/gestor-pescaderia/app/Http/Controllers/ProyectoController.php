<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user = Auth::user();
       $user = Auth::id();
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('proyectos.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'codigo' => 'required|unique:App\Models\Proyecto,codigo|string|max:4',
            'descripcion' => 'required|string|max:255',
            'usuario_id' => 'required|exists:App\Models\User,id'
        ]);

        Proyecto::create($validate);

        return redirect(route('proyectos.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        $users = User::all();
        return view('proyectos.show', compact('proyecto', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        $users = User::all();
        return view('proyectos.edit', compact('proyecto', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $validate = $request->validate([
            // TODO unique rule should ignore current project's code
            'codigo' => 'required|string|max:4',
            'descripcion' => 'required|string|max:255',
            'usuario_id' => 'required|exists:App\Models\User,id'
        ]);

        $proyecto->update($validate);

        return redirect(route('proyectos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect(route('proyectos.index'));
    }
}
