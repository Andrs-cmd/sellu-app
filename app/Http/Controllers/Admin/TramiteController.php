<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Helpers\Historial;
use App\Helpers\Notificar;

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

public function gestion(Tramite $tramite)
{
    $tramite->load('user', 'miembros', 'documentos', 'notas.user', 'historial.user');
    return view('admin.gestion-llc', compact('tramite'));
}
public function updateEstado(Request $request, Tramite $tramite)
{
    $request->validate([
        'estado' => 'required|in:pendiente,en_proceso,completado,cancelado',
    ]);

    $anterior = $tramite->estado;
    $tramite->update(['estado' => $request->estado]);

    Historial::registrar(
        $tramite->id,
        'estado_cambiado',
        "Estado cambiado de '{$anterior}' a '{$request->estado}'",
        'estado',
        $anterior,
        $request->estado
    );
    Notificar::alEquipo(
    'estado_cambiado',
    'Estado de trámite actualizado',
    auth()->user()->name . ' cambió el estado de "' . $anterior . '" a "' . $request->estado . '" en ' . ($tramite->nombre_empresa ?? 'trámite #'.$tramite->id),
    $tramite->id,
    route('admin.tramites.gestion', $tramite),
    ['admin', 'legal', 'soporte']
);
    return back()->with('success', 'Estado actualizado correctamente.');
}
}