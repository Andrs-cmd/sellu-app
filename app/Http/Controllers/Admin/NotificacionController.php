<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notificacion;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function index()
    {
        $notificaciones = auth()->user()->notificaciones()->with('tramite')->paginate(20);
        auth()->user()->notificacionesNoLeidas()->update(['leida_at' => now()]);
        return view('admin.notificaciones', compact('notificaciones'));
    }

    public function marcarLeida(Notificacion $notificacion)
    {
        abort_if($notificacion->user_id !== auth()->id(), 403);
        $notificacion->update(['leida_at' => now()]);
        return back();
    }

    public function marcarTodasLeidas()
    {
        auth()->user()->notificacionesNoLeidas()->update(['leida_at' => now()]);
        return back()->with('success', 'Todas las notificaciones marcadas como leídas.');
    }
}