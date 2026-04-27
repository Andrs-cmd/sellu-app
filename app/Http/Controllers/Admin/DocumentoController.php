<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Helpers\Notificar;

class DocumentoController extends Controller
{
    public function show(Tramite $tramite)
    {
        $tramite->load('user', 'documentos');
        return view('admin.documentos', compact('tramite'));
    }

    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'estado'     => 'required|in:pendiente,aprobado,rechazado',
            'nota_admin' => 'nullable|string|max:500',
        ]);

    $anterior = $documento->estado;

    $documento->update([
        'estado'     => $request->estado,
        'nota_admin' => $request->nota_admin,
    ]);
    Historial::registrar(
        $documento->tramite_id,
        $request->estado === 'aprobado' ? 'documento_aprobado' : 'documento_rechazado',
        "Documento '{$documento->nombre}' " . ($request->estado === 'aprobado' ? 'aprobado' : 'rechazado'),
        'documento',
        $anterior,
        $request->estado
    );
    Notificar::alEquipo(
    $request->estado === 'aprobado' ? 'documento_aprobado' : 'documento_rechazado',
    'Documento ' . ($request->estado === 'aprobado' ? 'aprobado' : 'rechazado'),
    auth()->user()->name . ' ' . ($request->estado === 'aprobado' ? 'aprobó' : 'rechazó') . ' el documento "' . $documento->nombre . '"',
    $documento->tramite_id,
    route('admin.tramites.gestion', $documento->tramite_id),
    ['admin', 'legal']
);
        return back()->with('success', 'Documento actualizado.');
    }

    public function download(Documento $documento)
    {
        return response()->download(
            storage_path('app/public/' . $documento->path),
            $documento->nombre_original
        );
    }

    public function storeAdmin(Request $request, Tramite $tramite)
    {
        $request->validate([
            'tipo'    => 'required|string',
            'archivo' => 'required|file|max:20480|mimes:pdf,jpg,jpeg,png',
            'nombre'  => 'nullable|string|max:255',
        ]);

        $archivo = $request->file('archivo');
        $path = $archivo->store("documentos/tramite-{$tramite->id}/finales", 'public');

        $nombres = [
            'acta'        => 'Acta Constitutiva',
            'ein'         => 'Número EIN',
            'operating'   => 'Operating Agreement',
            'certificado' => 'Certificado de Formación',
            'otros_final' => 'Documento adicional',
        ];

        Documento::create([
            'tramite_id'       => $tramite->id,
            'user_id'          => auth()->id(),
            'nombre'           => $request->nombre ?: ($nombres[$request->tipo] ?? $request->tipo),
            'tipo'             => $request->tipo,
            'path'             => $path,
            'nombre_original'  => $archivo->getClientOriginalName(),
            'mime_type'        => $archivo->getMimeType(),
            'tamano'           => $archivo->getSize(),
            'estado'           => 'aprobado',
            'subido_por_admin' => true,
            'categoria'        => 'final',
        ]);

        return back()->with('success', 'Documento final subido correctamente.');
    }
}