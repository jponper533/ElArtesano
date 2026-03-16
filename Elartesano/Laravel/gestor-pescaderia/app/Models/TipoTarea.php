<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTarea extends Model
{
    protected $table = 'tipos_tareas';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public function tareas() {
        return $this->hasMany(Tarea::class, 'tipo_tarea_id');
    }
}
