<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = [
    'user_id', 'tipo_entidad', 'jurisdiccion', 'nombre_empresa',
    'plan_seleccionado', 'precio_plan', 'tipo_gestion',
    'direccion_fisica', 'direccion_envio', 'copia_abogado',
    'estado', 'etapa',
    'numero_registro', 'fecha_presentacion', 'fecha_aprobacion',
    'agente_registrado', 'ein_solicitado', 'ein_numero', 'notas_internas',
    'stripe_session_id', 'stripe_payment_intent', 'pago_estado', 'pago_at',
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function miembros()
    {
        return $this->hasMany(Miembro::class);
    }

    public function getEstadoBadgeAttribute()
    {
        return match($this->estado) {
            'pendiente'   => ['color' => 'amber',  'label' => 'Pendiente'],
            'en_proceso'  => ['color' => 'blue',   'label' => 'En proceso'],
            'completado'  => ['color' => 'green',  'label' => 'Completado'],
            'cancelado'   => ['color' => 'red',    'label' => 'Cancelado'],
            default       => ['color' => 'gray',   'label' => 'Desconocido'],
        };
    }
    public function documentos()
{
    return $this->hasMany(Documento::class);
}
public function notas()
{
    return $this->hasMany(NotaTramite::class)->latest();
}
public function historial()
{
    return $this->hasMany(HistorialTramite::class)->latest();
}
}