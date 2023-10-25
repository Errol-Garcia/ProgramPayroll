<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogNomina extends Model
{
    use HasFactory;

    public function logNominaEmpleado() : BelongsTo{
        return $this->belongsTo(LogNominaEmpleado::class);
    }
}