<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\RolSlug;


class Role extends Model
{
      // Necesario si no requiere timestamps
    protected $table = 'roles';
    protected $fillable = [
       'nombre'
    ];
    public function usuarios()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
