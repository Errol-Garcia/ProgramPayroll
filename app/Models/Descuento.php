<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function sueldo() : HasMany{
        return $this->hasMany(Sueldo::class);
    }

}