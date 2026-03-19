<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public function platos() {
        return $this->hasMany(Plato::class, 'ingrediente_id');
    }
}
