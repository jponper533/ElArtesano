<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = 'alquileres';

    //
    protected $fillable = [
        'id',
        'user_id',
        'pelicula_id',
        'fecha_alquiler',
        'fecha_devolucion',
        'notas'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'pelicula_id');
    }
}
