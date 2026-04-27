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
   public function miPanel()
{
    $user = auth()->user();

    if ($user->hasRole('legal')) {
        $query = \App\Models\Tramite::with('user', 'documentos')
            ->whereIn('estado', ['pendiente', 'en_proceso']);

        if (request()->filled('buscar')) {
            $buscar = request('buscar');
            $query->where(function($q) use ($buscar) {
                $q->where('nombre_empresa', 'like', "%{$buscar}%")
                  ->orWhere('jurisdiccion', 'like', "%{$buscar}%")
                  ->orWhereHas('user', fn($u) =>
                      $u->where('name', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%")
                  );
            });
        }

        if (request()->filled('jurisdiccion')) {
            $query->where('jurisdiccion', request('jurisdiccion'));
        }

        if (request('docs') === 'pendientes') {
            $query->whereHas('documentos', fn($d) => $d->where('estado', 'pendiente'));
        }

        $tramites  = $query->latest()->get();
        $completados = \App\Models\Tramite::where('estado', 'completado')->count();
        return view('admin.roles.legal', compact('tramites', 'completados'));
    }

    if ($user->hasRole('contable')) {
        $ingresos_total = \App\Models\Tramite::where('pago_estado', 'pagado')->sum('precio_plan');
        $ingresos_mes   = \App\Models\Tramite::where('pago_estado', 'pagado')
            ->whereMonth('pago_at', now()->month)->sum('precio_plan');
        $tramites_completados = \App\Models\Tramite::where('estado', 'completado')->count();
        $clientes  = \App\Models\User::where('role', 'cliente')
            ->withCount('tramites')->latest()->take(20)->get();
        $por_plan  = \App\Models\Tramite::where('pago_estado', 'pagado')
            ->selectRaw('plan_seleccionado, count(*) as total, sum(precio_plan) as ingresos')
            ->groupBy('plan_seleccionado')->get();
        return view('admin.roles.contable', compact(
            'ingresos_total', 'ingresos_mes', 'tramites_completados', 'clientes', 'por_plan'
        ));
    }

    if ($user->hasRole('soporte')) {
        $query = \App\Models\Tramite::with('user');

        if (request()->filled('buscar')) {
            $buscar = request('buscar');
            $query->where(function($q) use ($buscar) {
                $q->where('nombre_empresa', 'like', "%{$buscar}%")
                  ->orWhereHas('user', fn($u) =>
                      $u->where('name', 'like', "%{$buscar}%")
                        ->orWhere('email', 'like', "%{$buscar}%")
                  );
            });
        }

        if (request()->filled('estado')) {
            $query->where('estado', request('estado'));
        }

        $tramites = $query->latest()->paginate(20);
        $stats = [
            'pendientes'  => \App\Models\Tramite::where('estado', 'pendiente')->count(),
            'en_proceso'  => \App\Models\Tramite::where('estado', 'en_proceso')->count(),
            'completados' => \App\Models\Tramite::where('estado', 'completado')->count(),
        ];
        return view('admin.roles.soporte', compact('tramites', 'stats'));
    }

    return redirect()->route('admin.dashboard');
}
}