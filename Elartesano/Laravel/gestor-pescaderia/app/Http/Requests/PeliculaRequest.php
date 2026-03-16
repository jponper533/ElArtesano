<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{
    
    public function validacionesCompartidas()
    {
        return [
           'nombre' => 'required|string|max:100'
        ];
    }
}
