<?php

namespace App\Helpers;

use App\Models\Notificacion;
use App\Models\User;

class Notificar
{
    public static function alEquipo(
        string $tipo,
        string $titulo,
        string $mensaje,
        ?int $tramiteId = null,
        ?string $url = null,
        array $roles = ['admin', 'legal', 'soporte']
    ): void {
        $usuarios = User::whereIn('role', $roles)
            ->where('activo', true)
            ->where('id', '!=', auth()->id())
            ->get();

        foreach ($usuarios as $usuario) {
            Notificacion::create([
                'user_id'    => $usuario->id,
                'tramite_id' => $tramiteId,
                'tipo'       => $tipo,
                'titulo'     => $titulo,
                'mensaje'    => $mensaje,
                'url'        => $url,
            ]);
        }
    }

    public static function alAdmin(
        string $tipo,
        string $titulo,
        string $mensaje,
        ?int $tramiteId = null,
        ?string $url = null
    ): void {
        self::alEquipo($tipo, $titulo, $mensaje, $tramiteId, $url, ['admin']);
    }
}