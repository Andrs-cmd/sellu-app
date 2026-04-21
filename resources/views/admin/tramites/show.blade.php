<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Trámite — Admin Sell·U</title>
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
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; gap:12px; }
        .topbar-back { color:var(--muted); font-size:13px; display:flex; align-items:center; gap:5px; }
        .topbar-back:hover { color:var(--navy); }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }

        .content { flex:1; overflow-y:auto; padding:28px; }
        .content-inner { max-width:960px; margin:0 auto; }

        /* ALERT */
        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:16px; }

        /* HERO */
        .hero-card { background:var(--navy); border-radius:14px; padding:24px 28px; margin-bottom:20px; display:flex; align-items:center; justify-content:space-between; gap:20px; flex-wrap:wrap; }
        .hero-left h1 { font-family:'Montserrat',sans-serif; font-size:20px; font-weight:800; color:var(--white); margin-bottom:6px; }
        .hero-left p { font-size:13px; color:rgba(255,255,255,.5); }
        .hero-right { display:flex; flex-direction:column; align-items:flex-end; gap:8px; }
        .hero-price { font-family:'Montserrat',sans-serif; font-size:28px; font-weight:900; color:var(--gold); }

        /* ESTADO FORM */
        .estado-form { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:20px 24px; margin-bottom:20px; display:flex; align-items:center; gap:14px; flex-wrap:wrap; }
        .estado-form label { font-size:13px; font-weight:700; color:var(--navy); }
        .estado-select { padding:9px 14px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); outline:none; }
        .estado-select:focus { border-color:var(--navy); }
        .btn-update { padding:9px 20px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-size:13px; font-weight:600; cursor:pointer; font-family:'Montserrat',sans-serif; }
        .btn-update:hover { background:var(--navy2); }

        /* GRID */
        .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px; }
        @media(max-width:700px) { .grid-2 { grid-template-columns:1fr; } }

        /* CARDS */
        .card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:16px; }
        .card-header { padding:14px 20px; border-bottom:1px solid var(--gray2); }
        .card-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .card-body { padding:20px; }
        .info-row { display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid var(--gray2); font-size:13px; }
        .info-row:last-child { border-bottom:none; }
        .info-label { color:var(--muted); }
        .info-value { font-weight:600; color:var(--navy); text-align:right; max-width:60%; }

        /* MEMBER */
        .member-item { display:flex; align-items:center; gap:12px; padding:10px 0; border-bottom:1px solid var(--gray2); }
        .member-item:last-child { border-bottom:none; }
        .member-avatar { width:34px; height:34px; border-radius:50%; background:var(--blue-bg); color:var(--blue); font-size:12px; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .member-name { font-size:13px; font-weight:600; color:var(--navy); }
        .member-dir { font-size:11px; color:var(--muted); }

        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }
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
    <a href="{{ route('admin.tramites.index') }}" class="topbar-back">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        Trámites
    </a>
    <span style="color:var(--gray2)">›</span>
    <div class="topbar-title" style="flex:1">{{ $tramite->nombre_empresa ?? 'Trámite #'.$tramite->id }}</div>
    <a href="{{ route('admin.tramites.gestion', $tramite) }}"
       style="padding:9px 18px;background:var(--gold);color:var(--navy);border-radius:6px;font-size:13px;font-weight:700;font-family:Montserrat,sans-serif;white-space:nowrap">
        Gestionar LLC
    </a>
</div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                {{-- HERO --}}
                @php $badge = $tramite->estado_badge; @endphp
                <div class="hero-card">
                    <div class="hero-left">
                        <h1>{{ $tramite->nombre_empresa ?? 'Sin nombre' }}</h1>
                        <p>{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} · Cliente: {{ $tramite->user->name }}</p>
                        <span class="badge badge-{{ $badge['color'] }}" style="margin-top:10px;display:inline-block">{{ $badge['label'] }}</span>
                    </div>
                    <div class="hero-right">
                        @if($tramite->precio_plan)
                            <div class="hero-price">${{ number_format($tramite->precio_plan,0) }} USD</div>
                            <span style="font-size:12px;color:rgba(255,255,255,.4)">{{ $tramite->plan_seleccionado }}</span>
                        @endif
                    </div>
                </div>

                {{-- CAMBIAR ESTADO --}}
                <form method="POST" action="{{ route('admin.tramites.estado', $tramite) }}" class="estado-form">
                    @csrf
                    @method('PATCH')
                    <label>Cambiar estado:</label>
                    <select name="estado" class="estado-select">
                        <option value="pendiente" {{ $tramite->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="en_proceso" {{ $tramite->estado === 'en_proceso' ? 'selected' : '' }}>En proceso</option>
                        <option value="completado" {{ $tramite->estado === 'completado' ? 'selected' : '' }}>Completado</option>
                        <option value="cancelado" {{ $tramite->estado === 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
                    <button type="submit" class="btn-update">Actualizar estado</button>
                    <a href="{{ route('admin.tramites.documentos', $tramite) }}"
   style="display:inline-flex;align-items:center;gap:6px;padding:9px 20px;background:var(--blue-bg);color:var(--blue);border-radius:6px;font-size:13px;font-weight:600;font-family:Montserrat,sans-serif">
    Ver documentos ({{ $tramite->documentos->count() }})
</a>
                </form>

                {{-- DETALLES --}}
                <div class="grid-2">
                    <div class="card">
                        <div class="card-header"><h3>Datos del cliente</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Nombre</span><span class="info-value">{{ $tramite->user->name }}</span></div>
                            <div class="info-row"><span class="info-label">Email</span><span class="info-value">{{ $tramite->user->email }}</span></div>
                            <div class="info-row"><span class="info-label">Registrado</span><span class="info-value">{{ $tramite->user->created_at->format('d/m/Y') }}</span></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><h3>Datos de la empresa</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Tipo</span><span class="info-value">{{ $tramite->tipo_entidad }}</span></div>
                            <div class="info-row"><span class="info-label">Jurisdicción</span><span class="info-value">{{ $tramite->jurisdiccion }}</span></div>
                            <div class="info-row"><span class="info-label">Plan</span><span class="info-value">{{ $tramite->plan_seleccionado ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Precio</span><span class="info-value">{{ $tramite->precio_plan ? '$'.number_format($tramite->precio_plan,0).' USD' : '—' }}</span></div>
                        </div>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="card">
                        <div class="card-header"><h3>Configuración legal</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Gestión</span><span class="info-value">{{ $tramite->tipo_gestion ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Dir. física</span><span class="info-value">{{ $tramite->direccion_fisica ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Dir. envío</span><span class="info-value">{{ $tramite->direccion_envio ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Copia abogado</span><span class="info-value">{{ $tramite->copia_abogado ?? '—' }}</span></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><h3>Estado del proceso</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Etapa actual</span><span class="info-value" style="text-transform:capitalize">{{ $tramite->etapa }}</span></div>
                            <div class="info-row"><span class="info-label">Estado</span><span class="info-value"><span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span></span></div>
                            <div class="info-row"><span class="info-label">Iniciado</span><span class="info-value">{{ $tramite->created_at->format('d/m/Y H:i') }}</span></div>
                            <div class="info-row"><span class="info-label">Actualizado</span><span class="info-value">{{ $tramite->updated_at->format('d/m/Y H:i') }}</span></div>
                        </div>
                    </div>
                </div>

                {{-- MIEMBROS --}}
                @if($tramite->miembros->count())
                    <div class="card">
                        <div class="card-header"><h3>Miembros ({{ $tramite->miembros->count() }})</h3></div>
                        <div class="card-body">
                            @foreach($tramite->miembros as $miembro)
                                <div class="member-item">
                                    <div class="member-avatar">{{ strtoupper(substr($miembro->nombre,0,1)) }}{{ strtoupper(substr($miembro->apellido,0,1)) }}</div>
                                    <div>
                                        <div class="member-name">{{ $miembro->nombre }} {{ $miembro->apellido }}</div>
                                        <div class="member-dir">{{ $miembro->direccion }}{{ $miembro->es_entidad ? ' · Entidad comercial' : '' }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
</body>
</html>