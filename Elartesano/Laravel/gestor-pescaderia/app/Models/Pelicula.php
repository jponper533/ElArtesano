<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelicula extends Model
{
    use HasFactory;
    
      protected $fillable = [
        'nombre',
        'genero',
        'precio',
        'pelicula_id'
        
    ];

  

    public function alquiler()
    {
        return $this->belongsTo(Alquiler::class, 'pelicula_id');
    }
}
