<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaTramite extends Model
{
    protected $table = 'notas_tramite';

    protected $fillable = [
        'tramite_id', 'user_id', 'contenido', 'tipo',
    ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}