<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    protected $fillable = [
        'tramite_id', 'nombre', 'apellido',
        'es_entidad', 'direccion', 'orden',
    ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}