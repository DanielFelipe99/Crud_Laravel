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
        Schema::table('users', function (Blueprint $table) {
            $table->string('edad')->unique();
            $table->string('telefono')->unique();
            $table->string('direccion')->unique();
            $table->string('ciudad')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['edad', 'telefono', 'direccion', 'ciudad']);
        // Eliminar las columnas que se agregaron en la migración
        });
    }
};
