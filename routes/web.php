<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TramiteController as AdminTramiteController;
use App\Http\Controllers\Admin\DocumentoController as AdminDocumentoController;
use App\Http\Controllers\Admin\NotaTramiteController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\Admin\NotificacionController;

// ── Páginas públicas ──
Route::get('/', fn() => view('pages.home'));

Route::prefix('pages')->group(function () {
    Route::get('/abre-empresa', fn() => view('pages.abre-empresa'))->name('pages.abre-empresa');
    Route::get('/contabilidad', fn() => view('pages.contabilidad'))->name('pages.contabilidad');
    Route::get('/amazon', fn() => view('pages.amazon'))->name('pages.amazon');
    Route::get('/marca', fn() => view('pages.marca'))->name('pages.marca');
    Route::get('/envios', fn() => view('pages.envios'))->name('pages.envios');
    Route::get('/sanitario', fn() => view('pages.sanitario'))->name('pages.sanitario');
    Route::get('/soporte', fn() => view('pages.soporte'))->name('soporte');
    Route::post('/soporte/contacto', function (Request $request) {
        $validated = $request->validate([
            'nombre'   => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'telefono' => 'nullable|string|max:50',
            'mensaje'  => 'required|string|max:3000',
        ]);
        Mail::raw(
            "Nombre: {$validated['nombre']}\n" .
            "Email: {$validated['email']}\n" .
            "Teléfono: " . ($validated['telefono'] ?? 'N/A') . "\n\n" .
            "Mensaje:\n{$validated['mensaje']}",
            function ($msg) use ($validated) {
                $msg->to('contacto@sellu.co')
                    ->subject('Mensaje de contacto — ' . $validated['nombre'])
                    ->replyTo($validated['email'], $validated['nombre']);
            }
        );
        return back()->with('success', '¡Mensaje enviado! Te responderemos pronto.');
    })->name('soporte.contacto');
});

// ── Redirects 301 desde URLs antiguas (SEO) ──
Route::permanentRedirect('/abre-empresa', '/pages/abre-empresa');
Route::permanentRedirect('/contabilidad', '/pages/contabilidad');
Route::permanentRedirect('/amazon', '/pages/amazon');
Route::permanentRedirect('/marca', '/pages/marca');
Route::permanentRedirect('/envios', '/pages/envios');
Route::permanentRedirect('/sanitario', '/pages/sanitario');
Route::permanentRedirect('/soporte', '/pages/soporte');

// ── Auth (Breeze) ──
require __DIR__.'/auth.php';
Route::post('/webhook/stripe', [PagoController::class, 'webhook'])->name('webhook.stripe');
// ── Panel del cliente ──
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [TramiteController::class, 'dashboard'])->name('dashboard');
    Route::get('/constituir', [TramiteController::class, 'create'])->name('tramite.create');
    Route::post('/constituir/paso/cuenta', [TramiteController::class, 'saveCuenta'])->name('tramite.cuenta');
    Route::post('/constituir/paso/pago', [TramiteController::class, 'savePago'])->name('tramite.pago');
    Route::post('/constituir/paso/compania', [TramiteController::class, 'saveCompania'])->name('tramite.compania');
    Route::post('/constituir/paso/gestion', [TramiteController::class, 'saveGestion'])->name('tramite.gestion');
    Route::post('/constituir/paso/contacto', [TramiteController::class, 'saveContacto'])->name('tramite.contacto');
    Route::get('/tramite/{tramite}', [TramiteController::class, 'show'])->name('tramite.show');
    Route::get('/tramite/{tramite}/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
    Route::post('/tramite/{tramite}/documentos', [DocumentoController::class, 'store'])->name('documentos.store');
    Route::delete('/documentos/{documento}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');

    Route::post('/pago/checkout', [PagoController::class, 'checkout'])->name('pago.checkout');
Route::get('/pago/success', [PagoController::class, 'success'])->name('pago.success');

});

// ── Panel admin ──
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/tramites', [AdminTramiteController::class, 'index'])->name('tramites.index');
    Route::get('/tramites/{tramite}', [AdminTramiteController::class, 'show'])->name('tramites.show');
    Route::patch('/tramites/{tramite}/estado', [AdminTramiteController::class, 'updateEstado'])->name('tramites.estado');
    Route::get('/clientes', [DashboardController::class, 'clientes'])->name('clientes');
    Route::get('/tramites/{tramite}/documentos', [AdminDocumentoController::class, 'show'])->name('tramites.documentos');
    Route::patch('/documentos/{documento}', [AdminDocumentoController::class, 'update'])->name('documentos.update');
    Route::get('/documentos/{documento}/download', [AdminDocumentoController::class, 'download'])->name('documentos.download');
    Route::post('/tramites/{tramite}/notas', [NotaTramiteController::class, 'store'])->name('notas.store');
Route::delete('/notas/{nota}', [NotaTramiteController::class, 'destroy'])->name('notas.destroy');
Route::patch('/tramites/{tramite}/registro', [NotaTramiteController::class, 'updateRegistro'])->name('tramites.registro');
Route::get('/tramites/{tramite}/gestion', [AdminTramiteController::class, 'gestion'])->name('tramites.gestion');
Route::post('/tramites/{tramite}/documentos-finales', [AdminDocumentoController::class, 'storeAdmin'])->name('tramites.documentos.admin');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::patch('/usuarios/{user}/role', [UsuarioController::class, 'updateRole'])->name('usuarios.role');
Route::patch('/usuarios/{user}/toggle', [UsuarioController::class, 'toggleActivo'])->name('usuarios.toggle');
Route::delete('/usuarios/{user}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/mi-panel', [DashboardController::class, 'miPanel'])->name('mi.panel');
Route::get('/notificaciones', [NotificacionController::class, 'index'])->name('notificaciones.index');
Route::patch('/notificaciones/todas', [NotificacionController::class, 'marcarTodasLeidas'])->name('notificaciones.todas');
Route::patch('/notificaciones/{notificacion}', [NotificacionController::class, 'marcarLeida'])->name('notificaciones.leida');
});

// RUTA TEMPORAL — ELIMINAR DESPUÉS
Route::get('/setup-admin', function () {
    $user = App\Models\User::where('email', 'admin@sellu.co')->first();
    
    if ($user) {
        $user->update([
            'role'     => 'admin',
            'activo'   => true,
            'password' => bcrypt('Sellu2026*'),
        ]);
        return 'Admin actualizado correctamente';
    }
    
    App\Models\User::create([
        'name'              => 'Admin Sellu',
        'email'             => 'admin@sellu.co',
        'password'          => bcrypt('Sellu2026*'),
        'role'              => 'admin',
        'activo'            => true,
        'email_verified_at' => now(),
    ]);
    
    return 'Admin creado correctamente';
});