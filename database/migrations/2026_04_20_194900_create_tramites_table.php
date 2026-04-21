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
    Schema::create('tramites', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('tipo_entidad')->default('LLC');
        $table->string('jurisdiccion');
        $table->string('nombre_empresa')->nullable();
        $table->string('plan_seleccionado')->nullable();
        $table->decimal('precio_plan', 10, 2)->nullable();
        $table->string('tipo_gestion')->default('Gestionado por los miembros');
        $table->string('direccion_fisica')->nullable();
        $table->string('direccion_envio')->nullable();
        $table->string('copia_abogado')->default('No, gracias');
        $table->enum('estado', ['pendiente','en_proceso','completado','cancelado'])->default('pendiente');
        $table->enum('etapa', ['cuenta','pago','compania','gestion','contacto','completado'])->default('cuenta');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
