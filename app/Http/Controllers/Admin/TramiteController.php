<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{
    public function index(Request $request)
    {
        $tramites = Tramite::with('user')
            ->when($request->estado, fn($q) => $q->where('estado', $request->estado))
            ->when($request->buscar, fn($q) => $q->whereHas('user', fn($u) =>
                $u->where('email', 'like', '%'.$request->buscar.'%')
            ))
            ->latest()
            ->paginate(20);

        return view('admin.tramites.index', compact('tramites'));
    }

    public function show(Tramite $tramite)
    {
        $tramite->load('user', 'miembros');
        return view('admin.tramites.show', compact('tramite'));
    }

    public function updateEstado(Request $request, Tramite $tramite)
    {
        $request->validate([
            'estado' => 'required|in:pendiente,en_proceso,completado,cancelado',
        ]);

        $tramite->update(['estado' => $request->estado]);

        return back()->with('success', 'Estado actualizado correctamente.');
    }
    public function gestion(Tramite $tramite)
{
    $tramite->load('user', 'miembros', 'documentos', 'notas.user');
    return view('admin.gestion-llc', compact('tramite'));
}
}