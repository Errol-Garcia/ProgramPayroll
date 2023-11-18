<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sueldo extends Model
{
    use HasFactory;

    protected $fillable = [
        'diasT',
        'horasExtras',
        'vhora',
        'bono',
        'valorDevengado',
        'valorDescuento',
        'sueldoNeto',
        'empleado_id',
        'descuento_id',
        'devengado_id',
    ];
    public function empleado():BelongsTo{
        return $this->belongsTo(Empleado::class);
    }
    public function descuento():BelongsTo{
        return $this->belongsTo(Descuento::class);
    }
    public function devengado():BelongsTo{
        return $this->belongsTo(Devengado::class);
    }
}