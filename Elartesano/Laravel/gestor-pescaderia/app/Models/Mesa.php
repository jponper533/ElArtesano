<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Reserva;
class Mesa extends Model
{
    protected $table = 'mesas';

    protected $fillable = [
        'id',
        'numero',
        'capacidad',
        'estado'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'mesa_id');
    }
}
