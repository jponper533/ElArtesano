<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //Pasar por el validator para validar los datos, y luego crear el usuario con User::create($validate);
    public function store(Request $request)
    {
        $validate = $request->validate(['name' => 
        'required|string|max:100', 
        'email' => 'required|email|unique:users,email', 
        'password' => 'required|string|min:4', 
        'role_id' => 'required|exists:roles,id']);
        User::create($validate);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    /** * Show the form for editing the specified resource. */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $rol_id = $request->input('rol_id');
        $user->update(['name' => $name, 'email' => $email, 'password' => $password, 'rol_id' => $rol_id]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
