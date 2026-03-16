<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlquilerRequest;
use App\Http\Requests\UpdateTareaRequest;
use App\Http\Requests\UpdateAlquilerRequest;
use App\Models\Alquiler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pelicula;
use App\Services\AlquilerService;
class AlquilerController extends Controller
{

    protected $alquilerService;
    public function __construct(AlquilerService $alquilerService)
    {
        $this->alquilerService = $alquilerService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alquileres = Alquiler::paginate(10);
        $user = Auth::user();
        $user = Auth::id();
        //  $alquileres = Alquiler::all();
        return view('alquileres.index', compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $peliculas = Pelicula::all();
        return view('alquileres.create', compact('users', 'peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlquilerRequest $request)
    {
        $validate = $request->validated();
        Alquiler::create($validate);
        return redirect()->route('alquileres.index');
        $this->alquilerService->crearAlquiler($validate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alquiler $alquiler)
    {
        $usuarios = User::all();
        $peliculas = Pelicula::all();
        return view('alquileres.show', compact('alquiler', 'usuarios', 'peliculas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alquiler $alquiler)
    {
        $usuarios = User::all();
        $peliculas = Pelicula::all();
        return view('alquileres.edit', compact('alquiler', 'usuarios', 'peliculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlquilerRequest $request, Alquiler $alquiler)
    {
        $users = User::all();
        $peliculas = Pelicula::all();
        $validate = $request->validated();
        $this->alquilerService->actualizarAlquiler($alquiler, $validate);
        return redirect()->route('alquileres.index', compact('users', 'peliculas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alquiler $alquiler)
    {
        $this->alquilerService->eliminarAlquiler($alquiler);
        return redirect()->route('alquileres.index')->with('success', 'El alquiler se ha eliminado satisfactoriamente.');
    }
}
