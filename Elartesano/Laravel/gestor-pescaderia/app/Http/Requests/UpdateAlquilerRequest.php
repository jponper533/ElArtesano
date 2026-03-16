<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class UpdateAlquilerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        
        $user = Auth::user();
        if ($user->id === $this->user_id ) {
            return true;
        }
        return false;
        

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
          
          
            'user_id' => [
                'nullable',
                'exists:users,id'
            ],
            'pelicula_id' => [
                'nullable',
                'exists:peliculas,id'
            ],
            'fecha_alquiler' => [
                'required',
                'date'
            ],
            'fecha_devolucion' => [
                'nullable',
                'date',
                'after_or_equal:fecha_alquiler'
            ]
        ];
    }
}
