<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sueldos', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->foreignId('descuento_id')->constrained('descuentos');
            $table->foreignId('devengado_id')->constrained('devengados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sueldo', function (Blueprint $table) {
            $table->dropConstrainedForeignId('empleado_id');
            $table->dropConstrainedForeignId('descuento_id');
            $table->dropConstrainedForeignId('devengado_id');
        });
    }
};