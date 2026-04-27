<?php

namespace App\Helpers;

use App\Models\HistorialTramite;

class Historial
{
    public static function registrar(
        int $tramiteId,
        string $accion,
        string $descripcion,
        ?string $campo = null,
        ?string $valorAnterior = null,
        ?string $valorNuevo = null
    ): void {
        HistorialTramite::create([
            'tramite_id'      => $tramiteId,
            'user_id'         => auth()->id(),
            'accion'          => $accion,
            'descripcion'     => $descripcion,
            'campo'           => $campo,
            'valor_anterior'  => $valorAnterior,
            'valor_nuevo'     => $valorNuevo,
        ]);
    }
}