<?php
// RETOCAR URGENEMTENTE CON LA VERSION DEL MAESTRO DE REFERENCIA

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Alquiler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\StorePeliculaRequest;
use App\Http\Requests\UpdatePeliculaRequest;
use App\Models\Proyecto;
use App\Services\PeliculaService;

class PeliculaController extends Controller
{

    protected $peliculaService;
    public function __construct(PeliculaService $peliculaService)
    {
        $this->peliculaService = $peliculaService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('peliculas.create', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeliculaRequest $request)
    {
        $validate = $request->validated();
        Pelicula::create($validate);
        return redirect()->route('peliculas.index');
        $this->peliculaService->crearPelicula($validate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        return view('peliculas.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {

        return view('peliculas.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeliculaRequest $request, Pelicula $pelicula)
    {
        $validate = $request->validated();
        
        $this->peliculaService->actualizarPelicula($pelicula, $validate);
        return redirect()->route('peliculas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $this->peliculaService->eliminarPelicula($pelicula);
        return redirect()->route('peliculas.index')->with('success', 'La película se ha eliminado satisfactoriamente.');
    }
}
