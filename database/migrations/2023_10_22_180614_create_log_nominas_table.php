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
        Schema::create('log_nominas', function (Blueprint $table) {
            $table->id();
            $table->integer('diasT');
            $table->integer('horasExtras');
            $table->float('vhora');
            $table->float('bono');
            $table->float('sueldo');
            $table->date('fechaRegistro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_nominas');
    }
};