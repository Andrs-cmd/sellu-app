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
    Schema::table('documentos', function (Blueprint $table) {
        $table->boolean('subido_por_admin')->default(false)->after('estado');
        $table->string('categoria')->default('cliente')->after('subido_por_admin');
        // categoria: 'cliente' = sube el cliente | 'final' = sube el admin (acta, EIN, etc)
    });
}

public function down(): void
{
    Schema::table('documentos', function (Blueprint $table) {
        $table->dropColumn(['subido_por_admin', 'categoria']);
    });
}
};
