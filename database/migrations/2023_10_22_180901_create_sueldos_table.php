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
        Schema::create('sueldos', function (Blueprint $table) {
            $table->id();            
            $table->integer('diasT');
            $table->integer('horasExtras');
            $table->float('vhora');
            $table->float('bono');
            $table->float('valorDevengado');
            $table->float('valorDescuento');
            $table->float('sueldoNeto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sueldos');
    }
};