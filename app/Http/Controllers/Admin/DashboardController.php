<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tramite;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total'      => Tramite::count(),
            'pendientes' => Tramite::where('estado', 'pendiente')->count(),
            'en_proceso' => Tramite::where('estado', 'en_proceso')->count(),
            'completados' => Tramite::where('estado', 'completado')->count(),
            'clientes'   => User::count(),
        ];
        $recientes = Tramite::with('user')->latest()->take(10)->get();
        return view('admin.dashboard', compact('stats', 'recientes'));
    }

    public function clientes()
    {
        $clientes = User::withCount('tramites')->latest()->paginate(20);
        return view('admin.clientes', compact('clientes'));
    }
}