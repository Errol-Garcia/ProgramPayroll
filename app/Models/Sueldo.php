<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sueldo extends Model
{
    use HasFactory;

    public function empleado():HasMany{
        return $this->hasMany(Empleado::class);
    }
    public function descuento():HasMany{
        return $this->hasMany(Descuento::class);
    }
    public function devengado():HasMany{
        return $this->hasMany(Devengado::class);
    }
}