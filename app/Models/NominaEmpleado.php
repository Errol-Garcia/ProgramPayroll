<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NominaEmpleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'sueldoNeto',
        'empleado_id',
    ];
    public function empleado():HasMany{
        return $this->hasMany(Empleado::class);
    }
}