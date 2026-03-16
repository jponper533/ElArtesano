<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlquilerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'pelicula_id' => $this->pelicula_id,
            'user_id' => $this->user_id,
            'fecha_alquiler' => $this->fecha_alquiler,
            'categoria' => $this->categoria,
            'pelicula' => $this->pelicula ? $this->pelicula->nombre : null,
             'usuario' => $this->usuario ? $this->usuario->name : null,
        ];
    }
}
