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
        Schema::table('logNominaEmpleados', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->foreignId('logNomina_id')->constrained('logNominas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logNominaEmpleados', function (Blueprint $table) {
            $table->dropConstrainedForeignId('empleado_id');
            $table->dropConstrainedForeignId('logNomina_id');
        });
    }
};