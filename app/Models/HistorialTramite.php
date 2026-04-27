<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialTramite extends Model
{
    protected $table = 'historial_tramites';

    protected $fillable = [
        'tramite_id', 'user_id', 'accion',
        'campo', 'valor_anterior', 'valor_nuevo', 'descripcion',
    ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getIconoAttribute(): string
    {
        return match($this->accion) {
            'estado_cambiado'    => '🔄',
            'documento_aprobado' => '✅',
            'documento_rechazado'=> '❌',
            'nota_agregada'      => '📝',
            'registro_actualizado'=> '📋',
            'documento_subido'   => '📎',
            'documento_final'    => '📄',
            'tramite_creado'     => '🏢',
            'pago_confirmado'    => '💳',
            default              => '•',
        };
    }
}