<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlquilerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
           
            'user_id' => 'nullable|exists:users,id',
            'pelicula_id' => 'nullable|exists:peliculas,id',
            'fecha_alquiler' => 'required|date',
            'fecha_devolucion' => 'nullable|date|after_or_equal:fecha_alquiler',
                'notas' => 'nullable|string|max:500'
        ];
    }
    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo nombre no debe exceder los 50 caracteres.',
            'alquiler_id.required' => 'El campo alquiler_id es obligatorio.',
            'alquiler_id.string' => 'El campo alquiler_id debe ser una cadena de texto.',
            'alquiler_id.max' => 'El campo alquiler_id no debe exceder los 30 caracteres.',
            'alquiler_id.unique' => 'El valor de alquiler_id ya está en uso.',
            'user_id.exists' => 'El usuario seleccionado no existe.',
            'pelicula_id.exists' => 'La película seleccionada no existe.',
            'fecha_alquiler.required' => 'El campo fecha_alquiler es obligatorio.',
            'fecha_alquiler.date' => 'El campo fecha_alquiler debe ser una fecha válida.',
            'fecha_devolucion.date' => 'El campo fecha_devolucion debe ser una fecha válida.',
            'fecha_devolucion.after_or_equal' => 'La fecha_devolucion debe ser posterior o igual a la fecha_alquiler.',
        ];
    }
 
}
