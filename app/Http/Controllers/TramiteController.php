<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use App\Models\Miembro;
use Illuminate\Http\Request;

class TramiteController extends Controller
{
    public function dashboard()
    {
        $tramites = auth()->user()->tramites()->latest()->get();
        return view('dashboard', compact('tramites'));
    }

    public function create()
    {
        $tramite = auth()->user()->tramites()
            ->whereNotIn('etapa', ['completado'])
            ->latest()->first();
        return view('constituir.form', compact('tramite'));
    }

    public function saveCuenta(Request $request)
    {
        $request->validate([
            'tipo_entidad' => 'required|string',
            'jurisdiccion' => 'required|string|size:2',
        ]);

        $tramite = Tramite::updateOrCreate(
            ['user_id' => auth()->id(), 'etapa' => 'cuenta'],
            [
                'tipo_entidad' => $request->tipo_entidad,
                'jurisdiccion' => $request->jurisdiccion,
                'etapa'        => 'pago',
                'estado'       => 'pendiente',
            ]
        );

        return response()->json(['ok' => true, 'tramite_id' => $tramite->id]);
    }

    public function savePago(Request $request)
    {
        $request->validate([
            'tramite_id'       => 'required|exists:tramites,id',
            'plan_seleccionado' => 'required|string',
            'precio_plan'      => 'required|numeric',
        ]);

        $tramite = Tramite::findOrFail($request->tramite_id);
        $tramite->update([
            'plan_seleccionado' => $request->plan_seleccionado,
            'precio_plan'       => $request->precio_plan,
            'etapa'             => 'compania',
        ]);

        return response()->json(['ok' => true]);
    }

    public function saveCompania(Request $request)
    {
        $request->validate([
            'tramite_id'     => 'required|exists:tramites,id',
            'nombre_empresa' => 'required|string|max:255',
        ]);

        $tramite = Tramite::findOrFail($request->tramite_id);
        $tramite->update([
            'nombre_empresa'  => $request->nombre_empresa,
            'copia_abogado'   => $request->copia_abogado ?? 'No, gracias',
            'direccion_fisica' => $request->direccion_fisica,
            'direccion_envio'  => $request->direccion_envio,
            'etapa'           => 'gestion',
        ]);

        return response()->json(['ok' => true]);
    }

    public function saveGestion(Request $request)
    {
        $request->validate([
            'tramite_id'   => 'required|exists:tramites,id',
            'tipo_gestion' => 'required|string',
            'miembros'     => 'required|array|min:1',
        ]);

        $tramite = Tramite::findOrFail($request->tramite_id);
        $tramite->update([
            'tipo_gestion' => $request->tipo_gestion,
            'etapa'        => 'contacto',
        ]);

        $tramite->miembros()->delete();
        foreach ($request->miembros as $i => $m) {
            Miembro::create([
                'tramite_id' => $tramite->id,
                'nombre'     => $m['nombre'] ?? '',
                'apellido'   => $m['apellido'] ?? '',
                'es_entidad' => isset($m['es_entidad']),
                'direccion'  => $m['direccion'] ?? 'Agente Registrado',
                'orden'      => $i + 1,
            ]);
        }

        return response()->json(['ok' => true]);
    }

    public function saveContacto(Request $request)
    {
        $request->validate([
            'tramite_id' => 'required|exists:tramites,id',
            'telefono'   => 'required|string',
            'pais'       => 'required|string',
        ]);

        $tramite = Tramite::findOrFail($request->tramite_id);
        $tramite->update([
            'etapa'  => 'completado',
            'estado' => 'en_proceso',
        ]);

        $user = auth()->user();
        $user->update([
            'phone'   => $request->telefono ?? null,
        ]);

        return response()->json(['ok' => true, 'redirect' => route('tramite.show', $tramite)]);
    }

    public function show(Tramite $tramite)
    {
        abort_if($tramite->user_id !== auth()->id(), 403);
        $tramite->load('miembros');
        return view('constituir.show', compact('tramite'));
    }
}