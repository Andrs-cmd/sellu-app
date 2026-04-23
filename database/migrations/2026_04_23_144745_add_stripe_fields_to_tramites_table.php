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
        $table->string('stripe_session_id')->nullable()->after('precio_plan');
        $table->string('stripe_payment_intent')->nullable()->after('stripe_session_id');
        $table->enum('pago_estado', ['pendiente','pagado','fallido','reembolsado'])->default('pendiente')->after('stripe_payment_intent');
        $table->timestamp('pago_at')->nullable()->after('pago_estado');
    });
}

public function down(): void
{
    Schema::table('tramites', function (Blueprint $table) {
        $table->dropColumn(['stripe_session_id','stripe_payment_intent','pago_estado','pago_at']);
    });
}
};
