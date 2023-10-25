<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    use HasFactory;

    public function logNominaEmpleado() : BelongsTo{
        return $this->belongsTo(LogNominaEmpleado::class);
    }

    public function nominaEmpleado() : BelongsTo{
        return $this->belongsTo(NominaEmpleado::class);
    }

    public function sueldo() : BelongsTo{
        return $this->belongsTo(Sueldo::class);
    }


    public function departamento():HasMany{
        return $this->hasMany(Departamento::class);
    }

    public function cargo():HasMany{
        return $this->hasMany(Cargo::class);
    }
}