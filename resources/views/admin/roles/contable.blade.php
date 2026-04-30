<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Contable — Sell·U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:#0D1B3E; --navy2:#122050; --gold:#F5A623; --gold2:#E09415;
            --white:#FFFFFF; --gray:#F5F6FA; --gray2:#E8EAF0; --text:#333A50; --muted:#6B7394;
            --green:#0F6E4A; --green-bg:#E6F5EF; --amber:#92600A; --amber-bg:#FEF7E6;
            --blue:#1B4FD8; --blue-bg:#EEF3FF; --red:#8B2020; --red-bg:#FDEEEE;
        }
        body { font-family:'Montserrat',sans-serif; background:var(--gray); color:var(--text); }
        a { text-decoration:none; color:inherit; }
        .shell { display:flex; min-height:100vh; }

        .sidebar { width:230px; background:var(--navy); display:flex; flex-direction:column; flex-shrink:0; }
        .sidebar-logo { padding:20px 18px 16px; border-bottom:1px solid rgba(255,255,255,.07); }
        .sidebar-logo-text { font-family:'Montserrat',sans-serif; font-size:22px; font-weight:900; color:var(--white); letter-spacing:-1px; }
        .sidebar-logo-text span { color:var(--gold); }
        .sidebar-logo-sub { font-size:10px; background:rgba(245,166,35,.2); color:var(--gold); padding:2px 8px; border-radius:10px; display:inline-block; margin-top:6px; font-weight:700; }
        .sidebar-nav { flex:1; padding:16px 0; }
        .sidebar-section { font-size:10px; font-weight:700; color:rgba(255,255,255,.25); text-transform:uppercase; letter-spacing:.08em; padding:10px 18px 5px; }
        .sidebar-link { display:flex; align-items:center; gap:10px; padding:9px 18px; font-size:13px; color:rgba(255,255,255,.55); border-left:2px solid transparent; transition:all .15s; }
        .sidebar-link:hover { color:rgba(255,255,255,.9); background:rgba(255,255,255,.05); }
        .sidebar-link.active { color:var(--white); background:rgba(245,166,35,.15); border-left-color:var(--gold); font-weight:600; }
        .sidebar-link svg { width:16px; height:16px; flex-shrink:0; }
        .sidebar-badge { margin-left:auto; background:var(--gold); color:var(--navy); font-size:10px; font-weight:800; padding:1px 7px; border-radius:10px; }
.sidebar-badge.red { background:var(--red); color:white; }
        .sidebar-footer { padding:16px 18px; border-top:1px solid rgba(255,255,255,.07); }
        .sidebar-user strong { display:block; color:rgba(255,255,255,.7); font-size:13px; }
        .sidebar-user span { font-size:11px; color:rgba(255,255,255,.35); }
        .btn-logout { width:100%; margin-top:10px; padding:8px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.5); border:none; border-radius:6px; font-size:12px; cursor:pointer; }
        .btn-logout:hover { background:rgba(255,255,255,.12); color:var(--white); }

        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; }
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; justify-content:space-between; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .topbar-sub { font-size:12px; color:var(--muted); margin-top:2px; }
        .content { flex:1; overflow-y:auto; padding:28px; }

        /* MÉTRICAS */
        .metrics { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-bottom:24px; }
        .metric { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:20px; }
        .metric.highlight { background:var(--navy); border-color:var(--navy); }
        .metric-label { font-size:11px; font-weight:600; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; margin-bottom:8px; }
        .metric.highlight .metric-label { color:rgba(255,255,255,.5); }
        .metric-value { font-family:'Montserrat',sans-serif; font-size:28px; font-weight:800; color:var(--navy); }
        .metric.highlight .metric-value { color:var(--gold); }
        .metric-sub { font-size:11px; color:var(--muted); margin-top:3px; }
        .metric.highlight .metric-sub { color:rgba(255,255,255,.35); }

        /* GRID */
        .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px; }
        @media(max-width:800px) { .grid-2 { grid-template-columns:1fr; } }

        /* CARDS */
        .card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:18px; }
        .card-header { padding:14px 20px; border-bottom:1px solid var(--gray2); display:flex; align-items:center; justify-content:space-between; }
        .card-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .card-body { padding:20px; }

        /* PLAN ROWS */
        .plan-row { display:flex; align-items:center; justify-content:space-between; padding:10px 0; border-bottom:1px solid var(--gray2); font-size:13px; }
        .plan-row:last-child { border-bottom:none; }
        .plan-name { font-weight:600; color:var(--navy); }
        .plan-stats { display:flex; gap:16px; align-items:center; }
        .plan-count { font-size:12px; color:var(--muted); }
        .plan-amount { font-family:'Montserrat',sans-serif; font-weight:700; color:var(--green); }

        /* TABLE */
        .table-wrap { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; }
        table { width:100%; border-collapse:collapse; }
        th { padding:11px 16px; text-align:left; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; border-bottom:1px solid var(--gray2); background:var(--gray); }
        td { padding:12px 16px; font-size:13px; border-bottom:1px solid var(--gray2); vertical-align:middle; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:var(--gray); }

        .user-cell { display:flex; align-items:center; gap:10px; }
        .avatar { width:32px; height:32px; border-radius:50%; background:var(--blue-bg); color:var(--blue); font-size:12px; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .user-name { font-weight:600; color:var(--navy); font-size:13px; }
        .user-email { font-size:11px; color:var(--muted); }

        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        .section-title { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:14px; }

        /* PROGRESS BAR */
        .progress-wrap { margin-bottom:6px; }
        .progress-label { display:flex; justify-content:space-between; font-size:11px; color:var(--muted); margin-bottom:4px; }
        .progress-bar { height:6px; background:var(--gray2); border-radius:3px; overflow:hidden; }
        .progress-fill { height:100%; background:var(--green); border-radius:3px; }
    </style>
</head>
<body>
<div class="shell">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">Sell<span>·U</span></div>
            <span class="sidebar-logo-sub">Contable</span>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section">Mi panel</div>
            <a href="{{ route('admin.mi.panel') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.clientes') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.3"/><path d="M2 14c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Clientes
            </a>
            @php $noLeidas = auth()->user()->notificacionesNoLeidas()->count(); @endphp
                <a href="{{ route('admin.notificaciones.index') }}" class="sidebar-link">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 015 5v3l1 2H2l1-2V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.3"/></svg>
                    Notificaciones
                    @if($noLeidas > 0)
                        <span class="sidebar-badge red">{{ $noLeidas }}</span>
                    @endif
                </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <strong>{{ auth()->user()->name }}</strong>
                <span>Equipo Contable</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Cerrar sesión</button>
            </form>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div>
                <div class="topbar-title">Panel Contable</div>
                <div class="topbar-sub">Resumen financiero de Sell·U</div>
            </div>
        </div>

        <div class="content">

            {{-- MÉTRICAS --}}
            <div class="metrics">
                <div class="metric highlight">
                    <div class="metric-label">Ingresos totales</div>
                    <div class="metric-value">${{ number_format($ingresos_total, 0) }}</div>
                    <div class="metric-sub">USD acumulado</div>
                </div>
                <div class="metric">
                    <div class="metric-label">Ingresos este mes</div>
                    <div class="metric-value" style="color:var(--green)">${{ number_format($ingresos_mes, 0) }}</div>
                    <div class="metric-sub">{{ now()->format('F Y') }}</div>
                </div>
                <div class="metric">
                    <div class="metric-label">Empresas constituidas</div>
                    <div class="metric-value" style="color:var(--blue)">{{ $tramites_completados }}</div>
                    <div class="metric-sub">Pagos completados</div>
                </div>
            </div>

            <div class="grid-2">

                {{-- INGRESOS POR PLAN --}}
                <div class="card">
                    <div class="card-header"><h3>Ingresos por plan</h3></div>
                    <div class="card-body">
                        @forelse($por_plan as $plan)
                            @php $maxIngreso = $por_plan->max('ingresos'); @endphp
                            <div class="plan-row">
                                <div class="plan-name">{{ $plan->plan_seleccionado ?? 'Sin plan' }}</div>
                                <div class="plan-stats">
                                    <span class="plan-count">{{ $plan->total }} ventas</span>
                                    <span class="plan-amount">${{ number_format($plan->ingresos, 0) }}</span>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width:{{ $maxIngreso > 0 ? round(($plan->ingresos / $maxIngreso) * 100) : 0 }}%"></div>
                                </div>
                            </div>
                        @empty
                            <p style="font-size:13px;color:var(--muted);text-align:center;padding:20px 0">No hay ingresos registrados todavía.</p>
                        @endforelse
                    </div>
                </div>

                {{-- RESUMEN RÁPIDO --}}
                <div class="card">
                    <div class="card-header"><h3>Resumen financiero</h3></div>
                    <div class="card-body">
                        <div style="display:flex;flex-direction:column;gap:14px">
                            <div style="background:var(--green-bg);border-radius:8px;padding:14px 16px">
                                <div style="font-size:11px;font-weight:700;color:var(--green);text-transform:uppercase;margin-bottom:4px">Ticket promedio</div>
                                <div style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:800;color:var(--green)">
                                    ${{ $tramites_completados > 0 ? number_format($ingresos_total / $tramites_completados, 0) : '0' }} USD
                                </div>
                            </div>
                            <div style="background:var(--blue-bg);border-radius:8px;padding:14px 16px">
                                <div style="font-size:11px;font-weight:700;color:var(--blue);text-transform:uppercase;margin-bottom:4px">Total clientes</div>
                                <div style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:800;color:var(--blue)">
                                    {{ $clientes->count() }}
                                </div>
                            </div>
                            <div style="background:var(--amber-bg);border-radius:8px;padding:14px 16px">
                                <div style="font-size:11px;font-weight:700;color:var(--amber);text-transform:uppercase;margin-bottom:4px">Promedio por cliente</div>
                                <div style="font-family:'Montserrat',sans-serif;font-size:22px;font-weight:800;color:var(--amber)">
                                    ${{ $clientes->count() > 0 ? number_format($ingresos_total / $clientes->count(), 0) : '0' }} USD
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- TABLA CLIENTES --}}
            <div class="section-title">Clientes y sus pagos</div>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Trámites</th>
                            <th>Registrado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clientes as $cliente)
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">{{ strtoupper(substr($cliente->name,0,1)) }}</div>
                                        <div>
                                            <div class="user-name">{{ $cliente->name }}</div>
                                            <div class="user-email">{{ $cliente->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge {{ $cliente->tramites_count > 0 ? 'badge-green' : 'badge-gray' }}">
                                        {{ $cliente->tramites_count }} trámite(s)
                                    </span>
                                </td>
                                <td style="font-size:12px;color:var(--muted)">{{ $cliente->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @empty
                            <tr><td colspan="3" style="text-align:center;padding:32px;color:var(--muted)">No hay clientes todavía.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</body>
</html>