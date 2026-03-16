<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $alquileres = Alquiler::all()->sortByDesc('updated_at')->slice(0, 3);
        $peliculas = Pelicula::all()->sortByDesc('updated_at')->slice(0, 3);
        $usuarios = User::all()->sortByDesc('updated_at')->slice(0, 3);
        return view('dashboard.index', compact('alquileres', 'peliculas', 'usuarios'));
    }
}
