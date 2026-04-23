<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    protected $table = 'invitaciones';
    protected $fillable = [
        'email', 'role', 'token', 'invitado_por', 'expires_at', 'usado_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'usado_at'   => 'datetime',
    ];

    public function invitadoPor()
    {
        return $this->belongsTo(User::class, 'invitado_por');
    }

    public function isValida(): bool
    {
        return is_null($this->usado_at) && $this->expires_at->isFuture();
    }
}