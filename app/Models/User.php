<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'activo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'activo'            => 'boolean',
        ];
    }

    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin' || $this->email === config('app.admin_email');
    }

    public function isStaff(): bool
    {
        return in_array($this->role, ['admin', 'legal', 'contable', 'soporte']);
    }

    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

    public function canManageTramites(): bool
    {
        return in_array($this->role, ['admin', 'legal', 'soporte']);
    }

    public function canManageFinanzas(): bool
    {
        return in_array($this->role, ['admin', 'contable']);
    }
}