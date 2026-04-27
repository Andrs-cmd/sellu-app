<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
     protected $table = 'notificaciones';
    protected $fillable = [
        'user_id', 'tramite_id', 'tipo',
        'titulo', 'mensaje', 'url', 'leida_at',
    ];

    protected $casts = [
        'leida_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    public function isLeida(): bool
    {
        return !is_null($this->leida_at);
    }

    public function getIconoAttribute(): string
    {
        return match($this->tipo) {
            'documento_subido'   => '📎',
            'estado_cambiado'    => '🔄',
            'pago_confirmado'    => '💳',
            'tramite_nuevo'      => '🏢',
            'documento_aprobado' => '✅',
            'documento_rechazado'=> '❌',
            'nota_cliente'       => '💬',
            default              => '🔔',
        };
    }
}