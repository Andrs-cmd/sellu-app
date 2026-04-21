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
    Schema::create('documentos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tramite_id')->constrained()->onDelete('cascade');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('nombre');
        $table->string('tipo'); // identificacion, curp, comprobante, etc
        $table->string('path'); // ruta del archivo
        $table->string('nombre_original');
        $table->string('mime_type')->nullable();
        $table->unsignedBigInteger('tamano')->nullable();
        $table->enum('estado', ['pendiente','aprobado','rechazado'])->default('pendiente');
        $table->text('nota_admin')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
