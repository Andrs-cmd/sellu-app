<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Historial;
use App\Models\NotaTramite;
use App\Models\Tramite;
use Illuminate\Http\Request;

class NotaTramiteController extends Controller
{
    public function store(Request $request, Tramite $tramite)
    {
        $request->validate([
            'contenido' => 'required|string|max:2000',
            'tipo'      => 'required|in:interna,cliente',
        ]);

        NotaTramite::create([
            'tramite_id' => $tramite->id,
            'user_id'    => auth()->id(),
            'contenido'  => $request->contenido,
            'tipo'       => $request->tipo,
        ]);

        Historial::registrar(
            $tramite->id,
            'nota_agregada',
            "Nota {$request->tipo} agregada por " . auth()->user()->name
        );

        return back()->with('success', 'Nota agregada correctamente.');
    }

    public function destroy(NotaTramite $nota)
    {
        $nota->delete();
        return back()->with('success', 'Nota eliminada.');
    }

    public function updateRegistro(Request $request, Tramite $tramite)
    {
        $request->validate([
            'numero_registro'    => 'nullable|string|max:100',
            'fecha_presentacion' => 'nullable|date',
            'fecha_aprobacion'   => 'nullable|date',
            'agente_registrado'  => 'nullable|string|max:255',
            'ein_solicitado'     => 'nullable|boolean',
            'ein_numero'         => 'nullable|string|max:20',
            'notas_internas'     => 'nullable|string|max:5000',
        ]);

        $tramite->update([
            'numero_registro'    => $request->numero_registro,
            'fecha_presentacion' => $request->fecha_presentacion,
            'fecha_aprobacion'   => $request->fecha_aprobacion,
            'agente_registrado'  => $request->agente_registrado,
            'ein_solicitado'     => $request->boolean('ein_solicitado'),
            'ein_numero'         => $request->ein_numero,
            'notas_internas'     => $request->notas_internas,
        ]);

        Historial::registrar(
            $tramite->id,
            'registro_actualizado',
            'Datos del registro LLC actualizados por ' . auth()->user()->name
        );

        return back()->with('success', 'Datos del registro actualizados.');
    }
}