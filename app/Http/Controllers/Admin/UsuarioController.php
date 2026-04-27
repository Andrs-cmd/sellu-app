<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::whereIn('role', ['admin','legal','contable','soporte'])
            ->latest()->get();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role'     => 'required|in:admin,legal,contable,soporte',
        ]);

        User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'role'              => $request->role,
            'activo'            => true,
            'email_verified_at' => now(),
        ]);

        return back()->with('success', "Usuario {$request->name} creado con rol " . ucfirst($request->role) . ".");
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,legal,contable,soporte,cliente',
        ]);
        abort_if($user->id === auth()->id(), 403, 'No puedes cambiar tu propio rol.');
        $user->update(['role' => $request->role]);
        return back()->with('success', 'Rol actualizado.');
    }

    public function toggleActivo(User $user)
    {
        abort_if($user->id === auth()->id(), 403);
        $user->update(['activo' => !$user->activo]);
        return back()->with('success', $user->activo ? 'Usuario activado.' : 'Usuario desactivado.');
    }

    public function destroy(User $user)
    {
        abort_if($user->id === auth()->id(), 403, 'No puedes eliminarte a ti mismo.');
        $user->delete();
        return back()->with('success', 'Usuario eliminado.');
    }
}