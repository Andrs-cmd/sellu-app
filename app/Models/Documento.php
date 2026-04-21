<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Documento extends Model
{
    protected $fillable = [
    'tramite_id', 'user_id', 'nombre', 'tipo',
    'path', 'nombre_original', 'mime_type', 'tamano',
    'estado', 'nota_admin', 'subido_por_admin', 'categoria',
];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }

    public function getEstadoBadgeAttribute()
    {
        return match($this->estado) {
            'pendiente'  => ['color' => 'amber', 'label' => 'Pendiente'],
            'aprobado'   => ['color' => 'green', 'label' => 'Aprobado'],
            'rechazado'  => ['color' => 'red',   'label' => 'Rechazado'],
            default      => ['color' => 'gray',  'label' => 'Desconocido'],
        };
    }

    public function getTamanoFormateadoAttribute()
    {
        $bytes = $this->tamano;
        if ($bytes < 1024) return $bytes . ' B';
        if ($bytes < 1048576) return round($bytes / 1024, 1) . ' KB';
        return round($bytes / 1048576, 1) . ' MB';
    }
}