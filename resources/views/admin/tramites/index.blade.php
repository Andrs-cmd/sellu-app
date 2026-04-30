<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites — Admin Sell·U</title>
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

        /* ── SIDEBAR ── */
        .sidebar { width:230px; background:var(--navy); display:flex; flex-direction:column; flex-shrink:0; transition:transform .25s; }
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

        /* ── OVERLAY ── */
        .sidebar-overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:40; }

        /* ── MAIN ── */
        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; min-width:0; }

        /* ── TOPBAR ── */
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 20px; display:flex; align-items:center; justify-content:space-between; gap:12px; }
        .topbar-left { display:flex; align-items:center; gap:10px; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .topbar-count { font-size:13px; color:var(--muted); white-space:nowrap; }
        .btn-menu { display:none; background:none; border:none; cursor:pointer; padding:4px; color:var(--navy); }
        .btn-menu svg { width:22px; height:22px; }

        /* ── CONTENT ── */
        .content { flex:1; overflow-y:auto; padding:20px; }

        /* ── FILTROS ── */
        .filter-card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:16px 18px; margin-bottom:16px; }
        .filter-card-title { font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; color:var(--navy); margin-bottom:12px; display:flex; align-items:center; gap:8px; }
        .filter-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:10px; margin-bottom:10px; }
        .filter-grid-2 { display:grid; grid-template-columns:1fr 1fr auto auto; gap:10px; align-items:end; }
        .filter-label { font-size:11px; font-weight:700; color:var(--navy); margin-bottom:5px; display:block; }
        .filter-input { width:100%; padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Montserrat',sans-serif; color:var(--text); outline:none; background:var(--white); transition:border-color .2s; }
        .filter-input:focus { border-color:var(--navy); }
        .btn-filter { padding:9px 18px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:600; cursor:pointer; font-family:'Montserrat',sans-serif; white-space:nowrap; }
        .btn-filter:hover { background:var(--navy2); }
        .btn-clear { padding:9px 12px; background:var(--gray2); color:var(--text); border:none; border-radius:6px; font-size:13px; cursor:pointer; text-decoration:none; display:inline-flex; align-items:center; white-space:nowrap; }
        .active-filters { display:flex; gap:6px; flex-wrap:wrap; margin-top:10px; }
        .filter-tag { display:inline-flex; align-items:center; background:var(--blue-bg); color:var(--blue); font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }

        /* ── TABLA DESKTOP ── */
        .table-wrap { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:16px; }
        table { width:100%; border-collapse:collapse; }
        th { padding:12px 16px; text-align:left; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; border-bottom:1px solid var(--gray2); background:var(--gray); white-space:nowrap; }
        td { padding:13px 16px; font-size:13px; border-bottom:1px solid var(--gray2); vertical-align:middle; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:var(--gray); }
        .td-empresa { font-weight:600; color:var(--navy); }
        .td-meta { font-size:11px; color:var(--muted); margin-top:2px; }
        .link-detail { color:var(--blue); font-size:12px; font-weight:600; }
        .link-detail:hover { text-decoration:underline; }
        .empty-row td { text-align:center; padding:40px; color:var(--muted); }

        /* ── CARDS MÓVIL ── */
        .mobile-cards { display:none; flex-direction:column; gap:10px; margin-bottom:16px; }
        .tramite-card-m { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:16px; }
        .tramite-card-m-top { display:flex; align-items:flex-start; justify-content:space-between; gap:8px; margin-bottom:8px; }
        .tramite-card-m-nombre { font-weight:700; font-size:14px; color:var(--navy); margin-bottom:2px; }
        .tramite-card-m-meta { font-size:11px; color:var(--muted); }
        .tramite-card-m-row { display:flex; align-items:center; gap:6px; flex-wrap:wrap; margin-bottom:10px; }
        .tramite-card-m-actions { display:flex; gap:8px; }
        .btn-ver-m { flex:1; padding:8px; background:var(--blue-bg); color:var(--blue); border:none; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer; font-family:'Montserrat',sans-serif; text-align:center; text-decoration:none; display:block; }
        .btn-gestionar-m { flex:1; padding:8px; background:var(--gold); color:var(--navy); border:none; border-radius:6px; font-size:12px; font-weight:700; cursor:pointer; font-family:'Montserrat',sans-serif; text-align:center; text-decoration:none; display:block; }

        /* ── BADGES ── */
        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; white-space:nowrap; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        /* ── PAGINACIÓN ── */
        .pagination { display:flex; gap:6px; justify-content:center; flex-wrap:wrap; }
        .pagination a, .pagination span { padding:7px 13px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; color:var(--text); background:var(--white); }
        .pagination a:hover { background:var(--gray); }
        .pagination .active span { background:var(--navy); color:var(--white); border-color:var(--navy); }

        /* ── BOTTOM NAV ── */
        .bottom-nav { display:none; position:fixed; bottom:0; left:0; right:0; background:var(--navy); border-top:1px solid rgba(255,255,255,.1); padding:8px 0 12px; z-index:30; }
        .bottom-nav-inner { display:flex; justify-content:space-around; }
        .bottom-nav-item { display:flex; flex-direction:column; align-items:center; gap:3px; color:rgba(255,255,255,.5); font-size:10px; font-weight:600; text-decoration:none; padding:4px 10px; position:relative; }
        .bottom-nav-item.active { color:var(--gold); }
        .bottom-nav-item svg { width:20px; height:20px; }
        .bottom-nav-badge { position:absolute; top:0; right:4px; background:var(--red); color:white; font-size:9px; font-weight:800; padding:1px 5px; border-radius:10px; }

        /* ── RESPONSIVE ── */
        @media(max-width:768px) {
            .sidebar { position:fixed; top:0; left:0; bottom:0; z-index:50; transform:translateX(-100%); }
            .sidebar.open { transform:translateX(0); }
            .sidebar-overlay.open { display:block; }
            .btn-menu { display:flex; }
            .topbar { padding:12px 14px; }
            .content { padding:14px 14px 80px; }

            /* Filtros en columna */
            .filter-grid { grid-template-columns:1fr; gap:8px; }
            .filter-grid-2 { grid-template-columns:1fr 1fr; gap:8px; }
            .btn-filter, .btn-clear { width:100%; justify-content:center; }

            /* Ocultar tabla, mostrar cards */
            .table-wrap { display:none; }
            .mobile-cards { display:flex; }
            .bottom-nav { display:block; }
        }

        @media(max-width:480px) {
            .filter-grid-2 { grid-template-columns:1fr; }
        }
    </style>
</head>
<body>

<div class="sidebar-overlay" id="overlay" onclick="cerrarMenu()"></div>

<div class="shell">
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">Sell<span>·U</span></div>
            <span class="sidebar-logo-sub">Admin</span>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section">Panel</div>
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.tramites.index') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M5 6h6M5 9h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Trámites
            </a>
            <a href="{{ route('admin.clientes') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.3"/><path d="M2 14c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Clientes
            </a>
            <a href="{{ route('admin.usuarios.index') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><circle cx="6" cy="5" r="2.5" stroke="currentColor" stroke-width="1.3"/><path d="M1 14c0-2.8 2.2-5 5-5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M11 9v6M8 12h6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Usuarios
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
                <span>Administrador</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Cerrar sesión</button>
            </form>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-left">
                <button class="btn-menu" onclick="abrirMenu()">
                    <svg viewBox="0 0 22 22" fill="none"><path d="M3 6h16M3 11h16M3 16h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                </button>
                <div class="topbar-title">Todos los trámites</div>
            </div>
            <div class="topbar-count">{{ $tramites->total() }} resultado(s)</div>
        </div>

        <div class="content">

            {{-- FILTROS --}}
            <div class="filter-card">
                <div class="filter-card-title">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M1 2h12M3 7h8M5 12h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                    Filtros
                </div>
                <form method="GET">
                    <div class="filter-grid">
                        <div>
                            <span class="filter-label">Buscar</span>
                            <input type="text" name="buscar" class="filter-input"
                                placeholder="Nombre empresa, cliente, email..."
                                value="{{ request('buscar') }}">
                        </div>
                        <div>
                            <span class="filter-label">Estado</span>
                            <select name="estado" class="filter-input">
                                <option value="">Todos</option>
                                <option value="pendiente" {{ request('estado') === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="en_proceso" {{ request('estado') === 'en_proceso' ? 'selected' : '' }}>En proceso</option>
                                <option value="completado" {{ request('estado') === 'completado' ? 'selected' : '' }}>Completado</option>
                                <option value="cancelado" {{ request('estado') === 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                            </select>
                        </div>
                        <div>
                            <span class="filter-label">Jurisdicción</span>
                            <select name="jurisdiccion" class="filter-input">
                                <option value="">Todos</option>
                                @foreach(['FL','DE','WY','TX','NY','CA','AL','AZ','CO','GA','IL'] as $j)
                                    <option value="{{ $j }}" {{ request('jurisdiccion') === $j ? 'selected' : '' }}>{{ $j }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <span class="filter-label">Plan</span>
                            <select name="plan" class="filter-input">
                                <option value="">Todos</option>
                                <option value="Básico" {{ request('plan') === 'Básico' ? 'selected' : '' }}>Básico</option>
                                <option value="Full" {{ request('plan') === 'Full' ? 'selected' : '' }}>Full</option>
                                <option value="Luxury" {{ request('plan') === 'Luxury' ? 'selected' : '' }}>Luxury</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-grid-2">
                        <div>
                            <span class="filter-label">Fecha desde</span>
                            <input type="date" name="fecha_desde" class="filter-input" value="{{ request('fecha_desde') }}">
                        </div>
                        <div>
                            <span class="filter-label">Fecha hasta</span>
                            <input type="date" name="fecha_hasta" class="filter-input" value="{{ request('fecha_hasta') }}">
                        </div>
                        <button type="submit" class="btn-filter">Buscar</button>
                        <a href="{{ route('admin.tramites.index') }}" class="btn-clear">Limpiar</a>
                    </div>
                </form>

                @php
                    $filtrosActivos = array_filter([
                        'buscar'       => request('buscar'),
                        'estado'       => request('estado'),
                        'jurisdiccion' => request('jurisdiccion'),
                        'plan'         => request('plan'),
                        'fecha_desde'  => request('fecha_desde'),
                        'fecha_hasta'  => request('fecha_hasta'),
                    ]);
                @endphp
                @if(count($filtrosActivos))
                    <div class="active-filters" style="margin-top:10px">
                        @foreach($filtrosActivos as $key => $val)
                            <span class="filter-tag">{{ ucfirst($key) }}: {{ $val }}</span>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- TABLA DESKTOP --}}
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Empresa</th>
                            <th>Cliente</th>
                            <th>Plan</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Etapa</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tramites as $tramite)
                            @php $badge = $tramite->estado_badge; @endphp
                            <tr>
                                <td style="color:var(--muted);font-size:12px">{{ $tramite->id }}</td>
                                <td>
                                    <div class="td-empresa">{{ $tramite->nombre_empresa ?? 'Sin nombre' }}</div>
                                    <div class="td-meta">{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }}</div>
                                </td>
                                <td>
                                    <div>{{ $tramite->user->name }}</div>
                                    <div class="td-meta">{{ $tramite->user->email }}</div>
                                </td>
                                <td>{{ $tramite->plan_seleccionado ?? '—' }}</td>
                                <td>{{ $tramite->precio_plan ? '$'.number_format($tramite->precio_plan,0) : '—' }}</td>
                                <td><span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span></td>
                                <td style="text-transform:capitalize;font-size:12px;color:var(--muted)">{{ $tramite->etapa }}</td>
                                <td style="font-size:12px">{{ $tramite->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div style="display:flex;gap:6px">
                                        <a href="{{ route('admin.tramites.show', $tramite) }}" class="link-detail">Ver</a>
                                        <span style="color:var(--gray2)">·</span>
                                        <a href="{{ route('admin.tramites.gestion', $tramite) }}" class="link-detail" style="color:var(--amber)">Gestionar</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="empty-row"><td colspan="9">No hay trámites con esos filtros.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- CARDS MÓVIL --}}
            <div class="mobile-cards">
                @forelse($tramites as $tramite)
                    @php $badge = $tramite->estado_badge; @endphp
                    <div class="tramite-card-m">
                        <div class="tramite-card-m-top">
                            <div>
                                <div class="tramite-card-m-nombre">{{ $tramite->nombre_empresa ?? 'Sin nombre' }}</div>
                                <div class="tramite-card-m-meta">{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} · {{ $tramite->created_at->format('d/m/Y') }}</div>
                            </div>
                            <span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span>
                        </div>
                        <div class="tramite-card-m-row">
                            <span style="font-size:12px;color:var(--muted)">{{ $tramite->user->name }}</span>
                            @if($tramite->plan_seleccionado)
                                <span style="font-size:12px;color:var(--muted)">· {{ $tramite->plan_seleccionado }}</span>
                            @endif
                            @if($tramite->precio_plan)
                                <span style="font-size:12px;font-weight:700;color:var(--green)">${{ number_format($tramite->precio_plan,0) }}</span>
                            @endif
                        </div>
                        <div class="tramite-card-m-actions">
                            <a href="{{ route('admin.tramites.show', $tramite) }}" class="btn-ver-m">Ver detalle</a>
                            <a href="{{ route('admin.tramites.gestion', $tramite) }}" class="btn-gestionar-m">Gestionar</a>
                        </div>
                    </div>
                @empty
                    <div style="background:var(--white);border:1px solid var(--gray2);border-radius:12px;padding:32px;text-align:center;color:var(--muted)">No hay trámites con esos filtros.</div>
                @endforelse
            </div>

            {{-- PAGINACIÓN --}}
            <div class="pagination">
                {{ $tramites->withQueryString()->links() }}
            </div>

        </div>
    </div>
</div>

{{-- BOTTOM NAV MÓVIL --}}
<nav class="bottom-nav">
    <div class="bottom-nav-inner">
        <a href="{{ route('admin.dashboard') }}" class="bottom-nav-item">
            <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
            Dashboard
        </a>
        <a href="{{ route('admin.tramites.index') }}" class="bottom-nav-item active">
            <svg viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M5 6h6M5 9h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
            Trámites
        </a>
        <a href="{{ route('admin.clientes') }}" class="bottom-nav-item">
            <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="5" r="3" stroke="currentColor" stroke-width="1.3"/><path d="M2 14c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
            Clientes
        </a>
        <a href="{{ route('admin.notificaciones.index') }}" class="bottom-nav-item" style="position:relative">
            <svg viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 015 5v3l1 2H2l1-2V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.3"/></svg>
            @if($noLeidas > 0)<span class="bottom-nav-badge">{{ $noLeidas }}</span>@endif
            Alertas
        </a>
        <form method="POST" action="{{ route('logout') }}" style="display:contents">
            @csrf
            <button type="submit" class="bottom-nav-item" style="background:none;border:none;cursor:pointer">
                <svg viewBox="0 0 16 16" fill="none"><path d="M6 3H3v10h3M10 5l3 3-3 3M13 8H6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                Salir
            </button>
        </form>
    </div>
</nav>

<script>
function abrirMenu() {
    document.getElementById('sidebar').classList.add('open');
    document.getElementById('overlay').classList.add('open');
}
function cerrarMenu() {
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('overlay').classList.remove('open');
}
</script>
</body>
</html>