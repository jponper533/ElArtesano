<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\RolSlug;


class Role extends Model
{
      // Necesario si no requiere timestamps
    public $timestamps = false;
    
    protected $casts = [
        'slug' => RolSlug::class,
    ];
}
