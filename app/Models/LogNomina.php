<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LogNomina extends Model
{
    use HasFactory;

    public function Empleados() : BelongsTo{
        return $this->belongsTo(Empleado::class);
    }
}