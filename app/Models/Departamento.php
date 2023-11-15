<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    public function empleado() : BelongsTo{
        return $this->belongsTo(Empleado::class);
    }
    
}