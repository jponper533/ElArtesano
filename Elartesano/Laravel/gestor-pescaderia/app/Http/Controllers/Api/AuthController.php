<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function login (Request $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales))
        {
            $request->session()->regenerate();
           $token = $request->user()->createToken('api_token')->plainTextToken;
            return response()->json([
                'token' => $token
            ]);
        }
        else{
            return response()->json([
                'error' => 'Credenciales incorrectas'
            ], 401);
        }
    
    }
}
