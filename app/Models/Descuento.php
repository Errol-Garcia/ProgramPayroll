<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Descuento extends Model
{
    protected $fillable = [
        'arl',
        'salud',
        'pension',
        'parafiscal',
        'fechaRegistro'
    ];
    use HasFactory;
    public function sueldo() : BelongsTo{
        return $this->belongsTo(Sueldo::class);
    }

}