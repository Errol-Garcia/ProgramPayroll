<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LogNominaEmpleado extends Model
{
    use HasFactory;
    public function empleado():HasMany{
        return $this->hasMany(Empleado::class);
    }

    public function log_empleado():HasMany{
        return $this->hasMany(LogNomina::class);
    }
}