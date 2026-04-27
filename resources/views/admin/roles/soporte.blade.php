<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Soporte — Sell·U</title>
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

        .metrics { display:grid; grid-template-columns:repeat(3,1fr); gap:14px; margin-bottom:24px; }
        .metric { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:18px 20px; }
        .metric-label { font-size:11px; font-weight:600; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; margin-bottom:8px; }
        .metric-value { font-family:'Montserrat',sans-serif; font-size:28px; font-weight:800; }

        /* FILTROS */
        .filter-bar { background:var(--white); border:1px solid var(--gray2); border-radius:10px; padding:14px 18px; margin-bottom:18px; }
        .filter-form { display:flex; gap:10px; align-items:flex-end; flex-wrap:wrap; }
        .filter-group { flex:1; min-width:140px; }
        .filter-label { display:block; font-size:11px; font-weight:700; color:var(--navy); margin-bottom:5px; }
        .filter-input { width:100%; padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); outline:none; background:var(--white); transition:border-color .2s; }
        .filter-input:focus { border-color:var(--navy); }
        .btn-buscar { padding:9px 18px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:600; cursor:pointer; font-family:'Montserrat',sans-serif; white-space:nowrap; }
        .btn-buscar:hover { background:var(--navy2); }
        .btn-limpiar { padding:9px 12px; background:var(--gray2); color:var(--text); border:none; border-radius:6px; font-size:13px; cursor:pointer; text-decoration:none; display:inline-flex; align-items:center; }
        .btn-limpiar:hover { background:#D3D1C7; }
        .filtros-activos { display:flex; gap:6px; flex-wrap:wrap; margin-top:10px; }
        .filtro-tag { display:inline-flex; align-items:center; gap:4px; background:var(--blue-bg); color:var(--blue); font-size:11px; font-weight:600; padding:3px 10px; border-radius:20px; }

        .section-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:14px; }
        .section-title { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:700; color:var(--navy); }
        .section-count { font-size:12px; color:var(--muted); }

        .table-wrap { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:20px; }
        table { width:100%; border-collapse:collapse; }
        th { padding:11px 16px; text-align:left; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; border-bottom:1px solid var(--gray2); background:var(--gray); }
        td { padding:12px 16px; font-size:13px; border-bottom:1px solid var(--gray2); vertical-align:middle; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:var(--gray); }

        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        .td-empresa { font-weight:600; color:var(--navy); }
        .td-meta { font-size:11px; color:var(--muted); margin-top:2px; }

        .btn-action { display:inline-flex; align-items:center; gap:5px; padding:6px 12px; border-radius:6px; font-size:12px; font-weight:600; font-family:'Montserrat',sans-serif; border:none; cursor:pointer; transition:all .2s; text-decoration:none; white-space:nowrap; }
        .btn-ver { background:var(--blue-bg); color:var(--blue); }
        .btn-ver:hover { background:#B5D4F4; }
        .btn-nota { background:var(--amber-bg); color:var(--amber); }
        .btn-nota:hover { background:#FAC775; }

        .empty-row td { text-align:center; padding:40px; color:var(--muted); }

        .pagination { display:flex; gap:6px; justify-content:center; margin-top:16px; }
        .pagination a, .pagination span { padding:7px 13px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; color:var(--text); background:var(--white); }
        .pagination a:hover { background:var(--gray); }
        .pagination .active span { background:var(--navy); color:var(--white); border-color:var(--navy); }

        .modal-overlay { position:fixed; inset:0; background:rgba(0,0,0,.5); display:flex; align-items:center; justify-content:center; z-index:100; }
        .modal-overlay.hidden { display:none; }
        .modal { background:var(--white); border-radius:12px; width:90%; max-width:480px; overflow:hidden; }
        .modal-header { padding:16px 20px; border-bottom:1px solid var(--gray2); display:flex; align-items:center; justify-content:space-between; }
        .modal-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .modal-body { padding:20px; }
        .modal-footer { padding:14px 20px; border-top:1px solid var(--gray2); display:flex; justify-content:flex-end; gap:8px; }
        label { display:block; font-size:12px; font-weight:700; color:var(--navy); margin-bottom:6px; }
        textarea { width:100%; padding:10px 12px; border:1px solid var(--gray2); border-radius:6px; font-family:'Open Sans',sans-serif; font-size:13px; color:var(--text); outline:none; resize:vertical; min-height:100px; margin-bottom:12px; }
        select { width:100%; padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-family:'Open Sans',sans-serif; font-size:13px; color:var(--text); outline:none; }
        .btn-cancel-modal { padding:8px 16px; background:var(--gray2); color:var(--text); border:none; border-radius:6px; font-size:13px; cursor:pointer; }
        .btn-guardar { padding:8px 16px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:700; cursor:pointer; font-family:'Montserrat',sans-serif; }
    </style>
</head>
<body>
<div class="shell">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">Sell<span>·U</span></div>
            <span class="sidebar-logo-sub">Soporte</span>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section">Mi panel</div>
            <a href="{{ route('admin.mi.panel') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.tramites.index') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.3"/><path d="M5 6h6M5 9h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Todos los trámites
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
                <span>Equipo Soporte</span>
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
                <div class="topbar-title">Panel Soporte</div>
                <div class="topbar-sub">Seguimiento y atención a clientes</div>
            </div>
        </div>

        <div class="content">

            {{-- MÉTRICAS --}}
            <div class="metrics">
                <div class="metric">
                    <div class="metric-label">Pendientes</div>
                    <div class="metric-value" style="color:var(--amber)">{{ $stats['pendientes'] }}</div>
                </div>
                <div class="metric">
                    <div class="metric-label">En proceso</div>
                    <div class="metric-value" style="color:var(--blue)">{{ $stats['en_proceso'] }}</div>
                </div>
                <div class="metric">
                    <div class="metric-label">Completados</div>
                    <div class="metric-value" style="color:var(--green)">{{ $stats['completados'] }}</div>
                </div>
            </div>

            {{-- FILTROS --}}
            <div class="filter-bar">
                <form method="GET" action="{{ route('admin.mi.panel') }}" class="filter-form">
                    <div class="filter-group" style="flex:2">
                        <span class="filter-label">Buscar</span>
                        <input type="text" name="buscar" class="filter-input"
                            placeholder="Nombre empresa, cliente, email..."
                            value="{{ request('buscar') }}">
                    </div>
                    <div class="filter-group">
                        <span class="filter-label">Estado</span>
                        <select name="estado" class="filter-input">
                            <option value="">Todos</option>
                            <option value="pendiente"  {{ request('estado') === 'pendiente'  ? 'selected' : '' }}>Pendiente</option>
                            <option value="en_proceso" {{ request('estado') === 'en_proceso' ? 'selected' : '' }}>En proceso</option>
                            <option value="completado" {{ request('estado') === 'completado' ? 'selected' : '' }}>Completado</option>
                            <option value="cancelado"  {{ request('estado') === 'cancelado'  ? 'selected' : '' }}>Cancelado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-buscar">Buscar</button>
                    @if(request('buscar') || request('estado'))
                        <a href="{{ route('admin.mi.panel') }}" class="btn-limpiar">Limpiar</a>
                    @endif
                </form>

                @if(request('buscar') || request('estado'))
                    <div class="filtros-activos">
                        @if(request('buscar'))
                            <span class="filtro-tag">Búsqueda: "{{ request('buscar') }}"</span>
                        @endif
                        @if(request('estado'))
                            <span class="filtro-tag">Estado: {{ ucfirst(request('estado')) }}</span>
                        @endif
                    </div>
                @endif
            </div>

            {{-- TABLA TRÁMITES --}}
            <div class="section-header">
                <div class="section-title">Todos los trámites</div>
                <div class="section-count">{{ $tramites->total() }} resultado(s)</div>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Cliente</th>
                            <th>Estado</th>
                            <th>Etapa</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tramites as $tramite)
                            @php $badge = $tramite->estado_badge; @endphp
                            <tr>
                                <td>
                                    <div class="td-empresa">{{ $tramite->nombre_empresa ?? 'Sin nombre' }}</div>
                                    <div class="td-meta">{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }}</div>
                                </td>
                                <td>
                                    <div>{{ $tramite->user->name }}</div>
                                    <div class="td-meta">{{ $tramite->user->email }}</div>
                                </td>
                                <td><span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span></td>
                                <td style="font-size:12px;color:var(--muted);text-transform:capitalize">{{ $tramite->etapa }}</td>
                                <td style="font-size:12px;color:var(--muted)">{{ $tramite->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div style="display:flex;gap:6px">
                                        <a href="{{ route('admin.tramites.show', $tramite) }}" class="btn-action btn-ver">Ver</a>
                                        <button type="button" class="btn-action btn-nota" onclick="abrirNota({{ $tramite->id }})">+ Nota</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="empty-row"><td colspan="6">No hay trámites con esos filtros.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="pagination">
                {{ $tramites->withQueryString()->links() }}
            </div>

        </div>
    </div>
</div>

{{-- MODAL AGREGAR NOTA --}}
<div class="modal-overlay hidden" id="modal-nota">
    <div class="modal">
        <div class="modal-header">
            <h3>Agregar nota al trámite</h3>
            <button type="button" onclick="cerrarNota()" style="background:none;border:none;cursor:pointer;font-size:18px;color:var(--muted)">×</button>
        </div>
        <form id="form-nota" method="POST">
            @csrf
            <div class="modal-body">
                <label>Nota</label>
                <textarea name="contenido" placeholder="Escribe tu nota aquí..." required></textarea>
                <label>Tipo</label>
                <select name="tipo">
                    <option value="cliente">Para el cliente (visible en su portal)</option>
                    <option value="interna">Interna (solo el equipo)</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-cancel-modal" onclick="cerrarNota()">Cancelar</button>
                <button type="submit" class="btn-guardar">Guardar nota</button>
            </div>
        </form>
    </div>
</div>

<script>
function abrirNota(tramiteId) {
    document.getElementById('form-nota').action = `/admin/tramites/${tramiteId}/notas`;
    document.getElementById('modal-nota').classList.remove('hidden');
}
function cerrarNota() {
    document.getElementById('modal-nota').classList.add('hidden');
}
</script>
</body>
</html>