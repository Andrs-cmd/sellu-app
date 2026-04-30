<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Panel — Sell·U</title>
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

        /* ── SHELL ── */
        .shell { display:flex; min-height:100vh; }

        /* ── SIDEBAR ── */
        .sidebar { width:220px; background:var(--navy); display:flex; flex-direction:column; flex-shrink:0; transition:transform .25s; }
        .sidebar-logo { padding:20px 18px; border-bottom:1px solid rgba(255,255,255,.07); }
        .sidebar-logo-text { font-family:'Montserrat',sans-serif; font-size:22px; font-weight:900; color:var(--white); letter-spacing:-1px; }
        .sidebar-logo-text span { color:var(--gold); }
        .sidebar-logo-sub { font-size:10px; color:rgba(255,255,255,.35); margin-top:2px; }
        .sidebar-nav { flex:1; padding:16px 0; }
        .sidebar-section { font-size:10px; font-weight:700; color:rgba(255,255,255,.25); text-transform:uppercase; letter-spacing:.08em; padding:10px 18px 5px; }
        .sidebar-link { display:flex; align-items:center; gap:10px; padding:9px 18px; font-size:13px; color:rgba(255,255,255,.55); border-left:2px solid transparent; transition:all .15s; }
        .sidebar-link:hover { color:rgba(255,255,255,.9); background:rgba(255,255,255,.05); }
        .sidebar-link.active { color:var(--white); background:rgba(245,166,35,.15); border-left-color:var(--gold); font-weight:600; }
        .sidebar-link svg { width:16px; height:16px; flex-shrink:0; }
        .sidebar-footer { padding:16px 18px; border-top:1px solid rgba(255,255,255,.07); }
        .sidebar-user { font-size:12px; color:rgba(255,255,255,.4); margin-bottom:10px; }
        .sidebar-user strong { display:block; color:rgba(255,255,255,.7); font-size:13px; }
        .btn-logout { width:100%; padding:8px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.5); border:none; border-radius:6px; font-size:12px; cursor:pointer; font-family:'Open Sans',sans-serif; }
        .btn-logout:hover { background:rgba(255,255,255,.12); color:var(--white); }

        /* ── OVERLAY ── */
        .sidebar-overlay { display:none; position:fixed; inset:0; background:rgba(0,0,0,.5); z-index:40; }

        /* ── MAIN ── */
        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; min-width:0; }

        /* ── TOPBAR ── */
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 20px; display:flex; align-items:center; justify-content:space-between; gap:10px; }
        .topbar-left { display:flex; align-items:center; gap:10px; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .topbar-greeting { font-size:13px; color:var(--muted); }
        .btn-menu { display:none; background:none; border:none; cursor:pointer; padding:4px; color:var(--navy); flex-shrink:0; }
        .btn-menu svg { width:22px; height:22px; }
        .btn-primary { background:var(--gold); color:var(--navy); padding:9px 16px; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:12px; font-weight:700; border:none; cursor:pointer; text-transform:uppercase; letter-spacing:.04em; transition:background .2s; display:inline-block; white-space:nowrap; flex-shrink:0; }
        .btn-primary:hover { background:var(--gold2); }

        /* ── CONTENT ── */
        .content { flex:1; overflow-y:auto; padding:20px; }

        /* ── MÉTRICAS ── */
        .metrics { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin-bottom:20px; }
        .metric { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:16px; }
        .metric-label { font-size:10px; font-weight:600; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; margin-bottom:6px; }
        .metric-value { font-family:'Montserrat',sans-serif; font-size:26px; font-weight:800; color:var(--navy); }
        .metric-sub { font-size:11px; color:var(--muted); margin-top:3px; }

        /* ── FILTROS ── */
        .filter-bar { background:var(--white); border:1px solid var(--gray2); border-radius:10px; padding:14px 16px; margin-bottom:16px; }
        .filter-form { display:flex; gap:8px; align-items:flex-end; flex-wrap:wrap; }
        .filter-group { flex:1; min-width:140px; }
        .filter-label { display:block; font-size:11px; font-weight:700; color:var(--navy); margin-bottom:5px; }
        .filter-input { width:100%; padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); outline:none; background:var(--white); }
        .filter-input:focus { border-color:var(--navy); }
        .btn-buscar { padding:9px 16px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:600; cursor:pointer; font-family:'Montserrat',sans-serif; white-space:nowrap; }
        .btn-buscar:hover { background:var(--navy2); }
        .btn-limpiar { padding:9px 12px; background:var(--gray2); color:var(--text); border:none; border-radius:6px; font-size:13px; cursor:pointer; text-decoration:none; display:inline-flex; align-items:center; }
        .filtros-activos { display:flex; gap:6px; flex-wrap:wrap; margin-top:10px; }
        .filtro-tag { display:inline-flex; align-items:center; background:var(--blue-bg); color:var(--blue); font-size:11px; font-weight:600; padding:3px 10px; border-radius:20px; }

        /* ── SECTION ── */
        .section-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:12px; }
        .section-title { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:700; color:var(--navy); }
        .section-count { font-size:12px; color:var(--muted); }

        /* ── TRAMITES LIST ── */
        .tramites-list { display:flex; flex-direction:column; gap:10px; }
        .tramite-card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:16px 20px; display:flex; align-items:center; gap:14px; transition:border-color .15s; }
        .tramite-card:hover { border-color:var(--gold); }
        .tramite-icon { width:42px; height:42px; border-radius:10px; background:var(--blue-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .tramite-icon svg { width:20px; height:20px; color:var(--blue); }
        .tramite-info { flex:1; min-width:0; }
        .tramite-nombre { font-weight:600; font-size:14px; color:var(--navy); margin-bottom:3px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
        .tramite-meta { font-size:12px; color:var(--muted); white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
        .tramite-right { display:flex; align-items:center; gap:8px; flex-shrink:0; }
        .tramite-arrow { color:var(--gray2); }
        .tramite-arrow svg { width:16px; height:16px; }

        /* ── BADGES ── */
        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; white-space:nowrap; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        /* ── EMPTY ── */
        .empty { background:var(--white); border:1px dashed var(--gray2); border-radius:12px; padding:48px 24px; text-align:center; }
        .empty svg { width:44px; height:44px; color:var(--gray2); margin-bottom:14px; }
        .empty h3 { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); margin-bottom:8px; }
        .empty p { font-size:14px; color:var(--muted); margin-bottom:20px; }
        .no-resultados { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:32px 24px; text-align:center; }
        .no-resultados p { font-size:14px; color:var(--muted); }
        .no-resultados a { color:var(--blue); font-weight:600; }

        /* ── BOTTOM NAV MÓVIL ── */
        .bottom-nav { display:none; position:fixed; bottom:0; left:0; right:0; background:var(--navy); border-top:1px solid rgba(255,255,255,.1); padding:8px 0 12px; z-index:30; }
        .bottom-nav-inner { display:flex; justify-content:space-around; }
        .bottom-nav-item { display:flex; flex-direction:column; align-items:center; gap:3px; color:rgba(255,255,255,.5); font-size:10px; font-weight:600; text-decoration:none; padding:4px 16px; }
        .bottom-nav-item.active { color:var(--gold); }
        .bottom-nav-item svg { width:20px; height:20px; }

        /* ── BTN FLOTANTE MÓVIL ── */
        .fab { display:none; position:fixed; bottom:76px; right:16px; z-index:29; background:var(--gold); color:var(--navy); width:52px; height:52px; border-radius:50%; font-size:26px; font-weight:700; border:none; cursor:pointer; box-shadow:0 4px 16px rgba(245,166,35,.5); align-items:center; justify-content:center; text-decoration:none; }

        /* ── RESPONSIVE ── */
        @media(max-width:768px) {
            .sidebar { position:fixed; top:0; left:0; bottom:0; z-index:50; transform:translateX(-100%); }
            .sidebar.open { transform:translateX(0); }
            .sidebar-overlay.open { display:block; }
            .btn-menu { display:flex; }
            .topbar { padding:12px 14px; }
            .topbar-title { font-size:15px; }
            .topbar-greeting { display:none; }
            .content { padding:14px 14px 80px; }
            .metrics { gap:8px; }
            .metric { padding:12px; }
            .metric-value { font-size:22px; }
            .metric-label { font-size:9px; }
            .metric-sub { display:none; }
            .filter-form { flex-direction:column; }
            .filter-group { min-width:100%; }
            .btn-buscar, .btn-limpiar { width:100%; justify-content:center; }
            .tramite-card { padding:14px 16px; gap:10px; }
            .tramite-icon { width:36px; height:36px; }
            .tramite-nombre { font-size:13px; }
            .tramite-meta { font-size:11px; }
            .bottom-nav { display:block; }
            .fab { display:flex; }
            .btn-primary.desktop-only { display:none; }
        }

        @media(max-width:380px) {
            .metrics { grid-template-columns:repeat(3,1fr); gap:6px; }
            .metric { padding:10px 8px; }
            .metric-value { font-size:20px; }
        }
    </style>
</head>
<body>

<div class="sidebar-overlay" id="overlay" onclick="cerrarMenu()"></div>

<div class="shell">
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">Sell<span>·U</span></div>
            <div class="sidebar-logo-sub">Portal del cliente</div>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section">Mi cuenta</div>
            <a href="{{ route('dashboard') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
                Dashboard
            </a>
            <a href="{{ route('tramite.create') }}" class="sidebar-link">
                <svg viewBox="0 0 16 16" fill="none"><path d="M8 2v12M2 8h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Nueva empresa
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <strong>{{ auth()->user()->name }}</strong>
                {{ auth()->user()->email }}
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
                <div>
                    <div class="topbar-title">Mi Panel</div>
                    <div class="topbar-greeting">Bienvenido, {{ auth()->user()->name }}</div>
                </div>
            </div>
            <a href="{{ route('tramite.create') }}" class="btn-primary desktop-only">+ Constituir empresa</a>
        </div>

        <div class="content">

            {{-- MÉTRICAS --}}
            <div class="metrics">
                <div class="metric">
                    <div class="metric-label">Trámites</div>
                    <div class="metric-value">{{ $tramites->count() }}</div>
                    <div class="metric-sub">Totales</div>
                </div>
                <div class="metric">
                    <div class="metric-label">En proceso</div>
                    <div class="metric-value" style="color:var(--blue)">{{ $tramites->where('estado','en_proceso')->count() }}</div>
                    <div class="metric-sub">Activos</div>
                </div>
                <div class="metric">
                    <div class="metric-label">Listos</div>
                    <div class="metric-value" style="color:var(--green)">{{ $tramites->where('estado','completado')->count() }}</div>
                    <div class="metric-sub">Completados</div>
                </div>
            </div>

            {{-- FILTROS --}}
            <div class="filter-bar">
                <form method="GET" action="{{ route('dashboard') }}" class="filter-form">
                    <div class="filter-group" style="flex:2">
                        <span class="filter-label">Buscar</span>
                        <input type="text" name="buscar" class="filter-input"
                            placeholder="Nombre empresa, tipo, plan..."
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
                        <a href="{{ route('dashboard') }}" class="btn-limpiar">Limpiar</a>
                    @endif
                </form>
                @if(request('buscar') || request('estado'))
                    <div class="filtros-activos">
                        @if(request('buscar'))<span class="filtro-tag">{{ request('buscar') }}</span>@endif
                        @if(request('estado'))<span class="filtro-tag">{{ ucfirst(request('estado')) }}</span>@endif
                    </div>
                @endif
            </div>

            {{-- LISTA --}}
            <div class="section-header">
                <div class="section-title">Mis trámites</div>
                <div class="section-count">{{ $tramites->count() }} resultado(s)</div>
            </div>

            @if($tramites->isEmpty() && !request('buscar') && !request('estado'))
                <div class="empty">
                    <svg viewBox="0 0 48 48" fill="none"><rect x="8" y="8" width="32" height="32" rx="6" stroke="currentColor" stroke-width="2"/><path d="M16 24h16M24 16v16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    <h3>Aún no tienes trámites</h3>
                    <p>Comienza el proceso de constitución de tu empresa en EE.UU.</p>
                    <a href="{{ route('tramite.create') }}" class="btn-primary">Empezar ahora</a>
                </div>
            @elseif($tramites->isEmpty())
                <div class="no-resultados">
                    <p>No se encontraron trámites. <a href="{{ route('dashboard') }}">Ver todos</a></p>
                </div>
            @else
                <div class="tramites-list">
                    @foreach($tramites as $tramite)
                        <a href="{{ route('tramite.show', $tramite) }}" class="tramite-card">
                            <div class="tramite-icon">
                                <svg viewBox="0 0 20 20" fill="none"><path d="M4 4h12v12H4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M7 8h6M7 11h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                            </div>
                            <div class="tramite-info">
                                <div class="tramite-nombre">{{ $tramite->nombre_empresa ?? 'Empresa en proceso' }}</div>
                                <div class="tramite-meta">
                                    {{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} ·
                                    {{ $tramite->plan_seleccionado ?? 'Sin plan' }} ·
                                    {{ $tramite->created_at->format('d/m/Y') }}
                                </div>
                            </div>
                            @php $badge = $tramite->estado_badge; @endphp
                            <div class="tramite-right">
                                <span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span>
                                <div class="tramite-arrow">
                                    <svg viewBox="0 0 18 18" fill="none"><path d="M7 4l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</div>

{{-- BOTTOM NAV MÓVIL --}}
<nav class="bottom-nav">
    <div class="bottom-nav-inner">
        <a href="{{ route('dashboard') }}" class="bottom-nav-item active">
            <svg viewBox="0 0 16 16" fill="none"><rect x="1" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="1" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="1" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/><rect x="9" y="9" width="6" height="6" rx="1" stroke="currentColor" stroke-width="1.3"/></svg>
            Panel
        </a>
        <a href="{{ route('tramite.create') }}" class="bottom-nav-item">
            <svg viewBox="0 0 16 16" fill="none"><path d="M8 2v12M2 8h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            Nueva
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

{{-- FAB MÓVIL --}}
<a href="{{ route('tramite.create') }}" class="fab">+</a>

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