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
            --navy:  #0D1B3E; --navy2: #122050; --gold: #F5A623; --gold2: #E09415;
            --white: #FFFFFF; --gray: #F5F6FA; --gray2: #E8EAF0; --text: #333A50; --muted: #6B7394;
            --green: #0F6E4A; --green-bg: #E6F5EF; --amber: #92600A; --amber-bg: #FEF7E6;
            --blue: #1B4FD8; --blue-bg: #EEF3FF; --red: #8B2020; --red-bg: #FDEEEE;
        }
        body { font-family: 'Open Sans', sans-serif; background: var(--gray); color: var(--text); }
        a { text-decoration: none; color: inherit; }

        .shell { display: flex; min-height: 100vh; }

        /* SIDEBAR */
        .sidebar { width: 220px; background: var(--navy); display: flex; flex-direction: column; flex-shrink: 0; }
        .sidebar-logo { padding: 20px 18px; border-bottom: 1px solid rgba(255,255,255,.07); }
        .sidebar-logo-text { font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 900; color: var(--white); letter-spacing: -1px; }
        .sidebar-logo-text span { color: var(--gold); }
        .sidebar-logo-sub { font-size: 10px; color: rgba(255,255,255,.35); margin-top: 2px; }
        .sidebar-nav { flex: 1; padding: 16px 0; }
        .sidebar-section { font-size: 10px; font-weight: 700; color: rgba(255,255,255,.25); text-transform: uppercase; letter-spacing: .08em; padding: 10px 18px 5px; }
        .sidebar-link { display: flex; align-items: center; gap: 10px; padding: 9px 18px; font-size: 13px; color: rgba(255,255,255,.55); border-left: 2px solid transparent; transition: all .15s; cursor: pointer; }
        .sidebar-link:hover { color: rgba(255,255,255,.9); background: rgba(255,255,255,.05); }
        .sidebar-link.active { color: var(--white); background: rgba(245,166,35,.15); border-left-color: var(--gold); font-weight: 600; }
        .sidebar-link svg { width: 16px; height: 16px; flex-shrink: 0; }
        .sidebar-footer { padding: 16px 18px; border-top: 1px solid rgba(255,255,255,.07); }
        .sidebar-user { font-size: 12px; color: rgba(255,255,255,.4); margin-bottom: 10px; }
        .sidebar-user strong { display: block; color: rgba(255,255,255,.7); font-size: 13px; }
        .btn-logout { width: 100%; padding: 8px; background: rgba(255,255,255,.07); color: rgba(255,255,255,.5); border: none; border-radius: 6px; font-size: 12px; cursor: pointer; font-family: 'Open Sans', sans-serif; transition: background .15s; }
        .btn-logout:hover { background: rgba(255,255,255,.12); color: var(--white); }

        /* MAIN */
        .main { flex: 1; display: flex; flex-direction: column; overflow: hidden; }
        .topbar { background: var(--white); border-bottom: 1px solid var(--gray2); padding: 14px 28px; display: flex; align-items: center; justify-content: space-between; }
        .topbar-title { font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 700; color: var(--navy); }
        .topbar-greeting { font-size: 13px; color: var(--muted); }
        .btn-primary { background: var(--gold); color: var(--navy); padding: 9px 20px; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; border: none; cursor: pointer; text-transform: uppercase; letter-spacing: .04em; transition: background .2s; }
        .btn-primary:hover { background: var(--gold2); }

        .content { flex: 1; overflow-y: auto; padding: 28px; }

        /* MÉTRICAS */
        .metrics { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; margin-bottom: 28px; }
        .metric { background: var(--white); border: 1px solid var(--gray2); border-radius: 12px; padding: 20px; }
        .metric-label { font-size: 11px; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: .06em; margin-bottom: 8px; }
        .metric-value { font-family: 'Montserrat', sans-serif; font-size: 28px; font-weight: 800; color: var(--navy); }
        .metric-sub { font-size: 12px; color: var(--muted); margin-top: 4px; }

        /* TRAMITES */
        .section-title { font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 700; color: var(--navy); margin-bottom: 16px; }
        .tramites-list { display: flex; flex-direction: column; gap: 12px; }
        .tramite-card { background: var(--white); border: 1px solid var(--gray2); border-radius: 12px; padding: 20px 24px; display: flex; align-items: center; gap: 16px; transition: border-color .15s; }
        .tramite-card:hover { border-color: var(--gold); }
        .tramite-icon { width: 44px; height: 44px; border-radius: 10px; background: var(--blue-bg); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .tramite-icon svg { width: 20px; height: 20px; color: var(--blue); }
        .tramite-info { flex: 1; }
        .tramite-nombre { font-weight: 600; font-size: 14px; color: var(--navy); margin-bottom: 3px; }
        .tramite-meta { font-size: 12px; color: var(--muted); }
        .badge { font-size: 11px; font-weight: 600; padding: 4px 10px; border-radius: 20px; }
        .badge-amber { background: var(--amber-bg); color: var(--amber); }
        .badge-blue { background: var(--blue-bg); color: var(--blue); }
        .badge-green { background: var(--green-bg); color: var(--green); }
        .badge-red { background: var(--red-bg); color: var(--red); }
        .badge-gray { background: var(--gray2); color: var(--muted); }
        .tramite-arrow { color: var(--gray2); }
        .tramite-arrow svg { width: 18px; height: 18px; }

        /* EMPTY STATE */
        .empty { background: var(--white); border: 1px dashed var(--gray2); border-radius: 12px; padding: 56px 24px; text-align: center; }
        .empty svg { width: 48px; height: 48px; color: var(--gray2); margin-bottom: 16px; }
        .empty h3 { font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
        .empty p { font-size: 14px; color: var(--muted); margin-bottom: 24px; }
    </style>
</head>
<body>
<div class="shell">

    {{-- SIDEBAR --}}
    <aside class="sidebar">
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

    {{-- MAIN --}}
    <div class="main">
        <div class="topbar">
            <div>
                <div class="topbar-title">Mi Panel</div>
                <div class="topbar-greeting">Bienvenido, {{ auth()->user()->name }}</div>
            </div>
            <a href="{{ route('tramite.create') }}" class="btn-primary">+ Constituir empresa</a>
        </div>

        <div class="content">

            {{-- MÉTRICAS --}}
            <div class="metrics">
                <div class="metric">
                    <div class="metric-label">Trámites totales</div>
                    <div class="metric-value">{{ $tramites->count() }}</div>
                    <div class="metric-sub">Desde tu registro</div>
                </div>
                <div class="metric">
                    <div class="metric-label">En proceso</div>
                    <div class="metric-value">{{ $tramites->where('estado', 'en_proceso')->count() }}</div>
                    <div class="metric-sub">Activos actualmente</div>
                </div>
                <div class="metric">
                    <div class="metric-label">Completados</div>
                    <div class="metric-value">{{ $tramites->where('estado', 'completado')->count() }}</div>
                    <div class="metric-sub">Empresas constituidas</div>
                </div>
            </div>

            {{-- LISTA DE TRÁMITES --}}
            <div class="section-title">Mis trámites</div>

            @if($tramites->isEmpty())
                <div class="empty">
                    <svg viewBox="0 0 48 48" fill="none"><rect x="8" y="8" width="32" height="32" rx="6" stroke="currentColor" stroke-width="2"/><path d="M16 24h16M24 16v16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                    <h3>Aún no tienes trámites</h3>
                    <p>Comienza el proceso de constitución de tu empresa en EE.UU.</p>
                    <a href="{{ route('tramite.create') }}" class="btn-primary" style="display:inline-block">Empezar ahora</a>
                </div>
            @else
                <div class="tramites-list">
                    @foreach($tramites as $tramite)
                        <a href="{{ route('tramite.show', $tramite) }}" class="tramite-card">
                            <div class="tramite-icon">
                                <svg viewBox="0 0 20 20" fill="none"><path d="M4 4h12v12H4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M7 8h6M7 11h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                            </div>
                            <div class="tramite-info">
                                <div class="tramite-nombre">
                                    {{ $tramite->nombre_empresa ?? 'Empresa en proceso' }}
                                </div>
                                <div class="tramite-meta">
                                    {{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} ·
                                    {{ $tramite->plan_seleccionado ?? 'Sin plan' }} ·
                                    {{ $tramite->created_at->format('d/m/Y') }}
                                </div>
                            </div>
                            @php $badge = $tramite->estado_badge; @endphp
                            <span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span>
                            <div class="tramite-arrow">
                                <svg viewBox="0 0 18 18" fill="none"><path d="M7 4l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</div>
</body>
</html>