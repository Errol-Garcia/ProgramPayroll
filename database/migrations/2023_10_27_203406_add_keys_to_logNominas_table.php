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
        Schema::table('logNominas', function (Blueprint $table) {
            $table->foreignId('empleado_id')->constrained('empleados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logNominas', function (Blueprint $table) {
            $table->dropConstrainedForeignId('empleado_id');
        });
    }
};