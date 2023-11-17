<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'sueldo',
        'telefono',
        'direccion',
        'email',
        'departamento_id',
        'cargo_id',
    ];
    
    public function logNominas() : HasMany{
        return $this->hasMany(LogNomina::class);
    }

    public function sueldo() : HasOne{
        return $this->hasOne(Sueldo::class);
    }


    public function departamento():BelongsTo{
        return $this->belongsTo(Departamento::class);
    }

    public function cargo():BelongsTo{
        return $this->belongsTo(Cargo::class);
    }
}