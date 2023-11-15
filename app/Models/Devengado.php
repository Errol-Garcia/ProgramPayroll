<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Devengado extends Model
{
    use HasFactory;
    protected $fillable = [
        'alimentacion',
        'vivienda',
        'transporte',
        'extra',
        'fechaRegistro',
    ];
    public function devengado() : BelongsTo{
        return $this->belongsTo(Sueldo::class);
    }
}