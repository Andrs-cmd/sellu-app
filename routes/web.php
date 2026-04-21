<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TramiteController as AdminTramiteController;
use App\Http\Controllers\Admin\DocumentoController as AdminDocumentoController;
use App\Http\Controllers\Admin\NotaTramiteController;

// ── Páginas públicas ──
Route::get('/', fn() => view('pages.home'));
Route::get('/abre-empresa', fn() => view('pages.abre-empresa'));
Route::get('/contabilidad', fn() => view('pages.contabilidad'));
Route::get('/amazon', fn() => view('pages.amazon'));
Route::get('/marca', fn() => view('pages.marca'));
Route::get('/envios', fn() => view('pages.envios'));
Route::get('/sanitario', fn() => view('pages.sanitario'));

// ── Auth (Breeze) ──
require __DIR__.'/auth.php';

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
});