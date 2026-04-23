<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invitacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::whereIn('role', ['admin','legal','contable','soporte'])
            ->latest()->get();
        $invitaciones = Invitacion::with('invitadoPor')
            ->whereNull('usado_at')->latest()->get();
        return view('admin.usuarios.index', compact('usuarios', 'invitaciones'));
    }

    public function invite(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email|unique:invitaciones,email',
            'role'  => 'required|in:admin,legal,contable,soporte',
        ]);

        $invitacion = Invitacion::create([
            'email'        => $request->email,
            'role'         => $request->role,
            'token'        => Str::random(64),
            'invitado_por' => auth()->id(),
            'expires_at'   => now()->addDays(7),
        ]);

        // TODO: enviar email con el link
        $link = route('invitacion.aceptar', $invitacion->token);

        return back()->with('success', "Invitación enviada. Link: {$link}");
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,legal,contable,soporte,cliente',
        ]);

        abort_if($user->id === auth()->id(), 403, 'No puedes cambiar tu propio rol.');

        $user->update(['role' => $request->role]);

        return back()->with('success', 'Rol actualizado correctamente.');
    }

    public function toggleActivo(User $user)
    {
        abort_if($user->id === auth()->id(), 403, 'No puedes desactivarte a ti mismo.');
        $user->update(['activo' => !$user->activo]);
        return back()->with('success', $user->activo ? 'Usuario activado.' : 'Usuario desactivado.');
    }

    public function aceptarInvitacion(string $token)
    {
        $invitacion = Invitacion::where('token', $token)->firstOrFail();

        if (!$invitacion->isValida()) {
            abort(410, 'Esta invitación ha expirado o ya fue usada.');
        }

        return view('auth.invitacion', compact('invitacion'));
    }

    public function registrarInvitado(Request $request, string $token)
    {
        $invitacion = Invitacion::where('token', $token)->firstOrFail();

        if (!$invitacion->isValida()) {
            abort(410, 'Esta invitación ha expirado o ya fue usada.');
        }

        $request->validate([
            'name'     => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'              => $request->name,
            'email'             => $invitacion->email,
            'password'          => bcrypt($request->password),
            'role'              => $invitacion->role,
            'email_verified_at' => now(),
        ]);

        $invitacion->update(['usado_at' => now()]);

        auth()->login($user);

        return redirect()->route('admin.dashboard');
    }
}