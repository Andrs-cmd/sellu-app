<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Helpers\Historial;
use App\Helpers\Notificar;
use Illuminate\Support\Facades\Mail;
use App\Mail\EstadoTramiteMail;
class TramiteController extends Controller
{
    public function index(Request $request)
    {
        $query = Tramite::with('user');

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function($q) use ($buscar) {
                $q->where('nombre_empresa', 'like', "%{$buscar}%")
                  ->orWhere('jurisdiccion', 'like', "%{$buscar}%")
                  ->orWhere('numero_registro', 'like', "%{$buscar}%")
                  ->orWhereHas('user', fn($u) =>
                      $u->where('name', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%")
                  );
            });
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('jurisdiccion')) {
            $query->where('jurisdiccion', $request->jurisdiccion);
        }

        if ($request->filled('plan')) {
            $query->where('plan_seleccionado', 'like', "%{$request->plan}%");
        }

        if ($request->filled('fecha_desde')) {
            $query->whereDate('created_at', '>=', $request->fecha_desde);
        }

        if ($request->filled('fecha_hasta')) {
            $query->whereDate('created_at', '<=', $request->fecha_hasta);
        }

        $tramites = $query->latest()->paginate(20);

        return view('admin.tramites.index', compact('tramites'));
    }

    public function show(Tramite $tramite)
    {
        $tramite->load('user', 'miembros', 'documentos');
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
        // Después de Historial::registrar(...)
Mail::to($tramite->user->email)->send(new EstadoTramiteMail($tramite, $anterior));

        Notificar::alEquipo(
            'estado_cambiado',
            'Estado de trámite actualizado',
            auth()->user()->name . ' cambió el estado de "' . $anterior . '" a "' . $request->estado . '" en ' . ($tramite->nombre_empresa ?? 'trámite #' . $tramite->id),
            $tramite->id,
            route('admin.tramites.gestion', $tramite),
            ['admin', 'legal', 'soporte']
        );

        return back()->with('success', 'Estado actualizado correctamente.');
    }
}