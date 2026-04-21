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
    Schema::table('tramites', function (Blueprint $table) {
        $table->string('numero_registro')->nullable()->after('etapa');
        $table->date('fecha_presentacion')->nullable()->after('numero_registro');
        $table->date('fecha_aprobacion')->nullable()->after('fecha_presentacion');
        $table->string('agente_registrado')->nullable()->after('fecha_aprobacion');
        $table->boolean('ein_solicitado')->default(false)->after('agente_registrado');
        $table->string('ein_numero')->nullable()->after('ein_solicitado');
        $table->text('notas_internas')->nullable()->after('ein_numero');
    });
}

public function down(): void
{
    Schema::table('tramites', function (Blueprint $table) {
        $table->dropColumn([
            'numero_registro', 'fecha_presentacion', 'fecha_aprobacion',
            'agente_registrado', 'ein_solicitado', 'ein_numero', 'notas_internas'
        ]);
    });
}

};
