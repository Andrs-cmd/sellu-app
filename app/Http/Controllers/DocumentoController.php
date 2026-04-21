<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index(Tramite $tramite)
    {
        abort_if($tramite->user_id !== auth()->id(), 403);
        $tramite->load('documentos');
        return view('documentos.index', compact('tramite'));
    }

    public function store(Request $request, Tramite $tramite)
    {
        abort_if($tramite->user_id !== auth()->id(), 403);

        $request->validate([
            'tipo'     => 'required|string',
            'archivo'  => 'required|file|max:10240|mimes:pdf,jpg,jpeg,png,webp',
        ]);

        $archivo = $request->file('archivo');
        $path = $archivo->store("documentos/tramite-{$tramite->id}", 'public');

        Documento::create([
            'tramite_id'     => $tramite->id,
            'user_id'        => auth()->id(),
            'nombre'         => $this->nombresTipo()[$request->tipo] ?? $request->tipo,
            'tipo'           => $request->tipo,
            'path'           => $path,
            'nombre_original' => $archivo->getClientOriginalName(),
            'mime_type'      => $archivo->getMimeType(),
            'tamano'         => $archivo->getSize(),
            'estado'         => 'pendiente',
        ]);

        return back()->with('success', 'Documento subido correctamente.');
    }

    public function destroy(Documento $documento)
    {
        abort_if($documento->user_id !== auth()->id(), 403);
        abort_if($documento->estado === 'aprobado', 403, 'No puedes eliminar un documento aprobado.');

        Storage::disk('public')->delete($documento->path);
        $documento->delete();

        return back()->with('success', 'Documento eliminado.');
    }

    private function nombresTipo(): array
    {
        return [
            'identificacion'  => 'Identificación oficial',
            'curp'            => 'CURP',
            'comprobante'     => 'Comprobante de domicilio',
            'pasaporte'       => 'Pasaporte',
            'acta'            => 'Acta de nacimiento',
            'otros'           => 'Otro documento',
        ];
    }
}