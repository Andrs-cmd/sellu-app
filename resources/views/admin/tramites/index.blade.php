{{-- resources/views/admin/tramites/index.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trámites — Admin Sell·U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:#0D1B3E; --navy2:#122050; --gold:#F5A623; --gold2:#E09415;
            --white:#FFFFFF; --gray:#F5F6FA; --gray2:#E8EAF0; --text:#333A50; --muted:#6B7394;
            --green:#0F6E4A; --green-bg:#E6F5EF; --amber:#92600A; --amber-bg:#FEF7E6;
            --blue:#1B4FD8; --blue-bg:#EEF3FF; --red:#8B2020; --red-bg:#FDEEEE;
        }
        body { font-family:'Open Sans',sans-serif; background:var(--gray); color:var(--text); }
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
        .sidebar-footer { padding:16px 18px; border-top:1px solid rgba(255,255,255,.07); }
        .sidebar-user strong { display:block; color:rgba(255,255,255,.7); font-size:13px; }
        .sidebar-user span { font-size:11px; color:rgba(255,255,255,.35); }
        .btn-logout { width:100%; margin-top:10px; padding:8px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.5); border:none; border-radius:6px; font-size:12px; cursor:pointer; }
        .btn-logout:hover { background:rgba(255,255,255,.12); color:var(--white); }

        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; }
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; justify-content:space-between; gap:16px; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }

        .content { flex:1; overflow-y:auto; padding:28px; }

        /* FILTERS */
        .filters { display:flex; gap:10px; margin-bottom:20px; flex-wrap:wrap; align-items:center; }
        .filter-input { padding:9px 14px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); outline:none; background:var(--white); }
        .filter-input:focus { border-color:var(--navy); }
        .btn-filter { padding:9px 18px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:600; cursor:pointer; font-family:'Montserrat',sans-serif; }
        .btn-filter:hover { background:var(--navy2); }
        .btn-clear { padding:9px 14px; background:var(--gray2); color:var(--text); border:none; border-radius:6px; font-size:13px; cursor:pointer; }

        /* TABLE */
        .table-wrap { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:20px; }
        table { width:100%; border-collapse:collapse; }
        th { padding:12px 16px; text-align:left; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; border-bottom:1px solid var(--gray2); background:var(--gray); white-space:nowrap; }
        td { padding:13px 16px; font-size:13px; border-bottom:1px solid var(--gray2); vertical-align:middle; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:var(--gray); }
        .td-empresa { font-weight:600; color:var(--navy); }
        .td-meta { font-size:11px; color:var(--muted); margin-top:2px; }

        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        .link-detail { color:var(--blue); font-size:12px; font-weight:600; }
        .link-detail:hover { text-decoration:underline; }

        /* PAGINATION */
        .pagination { display:flex; gap:6px; justify-content:center; }
        .pagination a, .pagination span { padding:7px 13px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; color:var(--text); background:var(--white); }
        .pagination a:hover { background:var(--gray); }
        .pagination .active span { background:var(--navy); color:var(--white); border-color:var(--navy); }

        .empty-row td { text-align:center; padding:40px; color:var(--muted); }
    </style>
</head>
<body>
<div class="shell">
    <aside class="sidebar">
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
            <div class="topbar-title">Todos los trámites</div>
        </div>
        <div class="content">

            {{-- FILTROS --}}
            <form method="GET" class="filters">
                <input type="text" name="buscar" class="filter-input" placeholder="Buscar por email..." value="{{ request('buscar') }}">
                <select name="estado" class="filter-input">
                    <option value="">Todos los estados</option>
                    <option value="pendiente" {{ request('estado') === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="en_proceso" {{ request('estado') === 'en_proceso' ? 'selected' : '' }}>En proceso</option>
                    <option value="completado" {{ request('estado') === 'completado' ? 'selected' : '' }}>Completado</option>
                    <option value="cancelado" {{ request('estado') === 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                </select>
                <button type="submit" class="btn-filter">Filtrar</button>
                <a href="{{ route('admin.tramites.index') }}" class="btn-clear">Limpiar</a>
            </form>

            {{-- TABLA --}}
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
                                <td><a href="{{ route('admin.tramites.show', $tramite) }}" class="link-detail">Ver →</a></td>
                            </tr>
                        @empty
                            <tr class="empty-row"><td colspan="9">No hay trámites.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- PAGINACIÓN --}}
            <div class="pagination">
                {{ $tramites->withQueryString()->links() }}
            </div>

        </div>
    </div>
</div>
</body>
</html>