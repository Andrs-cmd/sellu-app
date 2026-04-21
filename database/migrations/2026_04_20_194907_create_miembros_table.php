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
    Schema::create('miembros', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tramite_id')->constrained()->onDelete('cascade');
        $table->string('nombre')->nullable();
        $table->string('apellido')->nullable();
        $table->boolean('es_entidad')->default(false);
        $table->string('direccion')->nullable();
        $table->integer('orden')->default(1);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('miembros');
    }
};
