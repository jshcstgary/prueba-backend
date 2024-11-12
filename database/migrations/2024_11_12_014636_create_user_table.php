<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario')->unique();
            $table->string('email')->unique();
            $table->string("primerNombre");
            $table->string("segundoNombre");
            $table->string("primerApellido");
            $table->string("segundoApellido");
            $table->foreignId('idDepartamento')->constrained('departamentos')->onDelete('restrict');
            $table->foreignId('idCargo')->constrained('cargos')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};