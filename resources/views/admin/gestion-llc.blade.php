<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión LLC — Admin Sell·U</title>
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
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:12px 16px; display:flex; align-items:center; gap:10px; flex-wrap:wrap; }
        .topbar-back { color:var(--muted); font-size:13px; display:flex; align-items:center; gap:5px; white-space:nowrap; }
        .topbar-back:hover { color:var(--navy); }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:700; color:var(--navy); flex:1; min-width:0; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
        .btn-menu { display:none; background:none; border:none; cursor:pointer; padding:4px; color:var(--navy); flex-shrink:0; }
        .btn-menu svg { width:22px; height:22px; }
        .btn-ghost-sm { background:var(--gray2); color:var(--text); padding:7px 14px; border-radius:6px; font-size:12px; font-weight:600; font-family:'Montserrat',sans-serif; white-space:nowrap; }

        /* ── CONTENT ── */
        .content { flex:1; overflow-y:auto; padding:20px 24px; }
        .content-inner { max-width:1100px; margin:0 auto; }

        .alert { padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:14px; }
        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; }

        /* ── BADGES ── */
        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        /* ── LAYOUT ── */
        .layout { display:grid; grid-template-columns:1fr 340px; gap:18px; align-items:start; }

        /* ── CARDS ── */
        .card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:16px; }
        .card-header { padding:14px 20px; border-bottom:1px solid var(--gray2); display:flex; align-items:center; justify-content:space-between; }
        .card-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .card-body { padding:20px; }

        .info-row { display:flex; justify-content:space-between; align-items:flex-start; padding:8px 0; border-bottom:1px solid var(--gray2); font-size:13px; gap:12px; }
        .info-row:last-child { border-bottom:none; }
        .info-label { color:var(--muted); flex-shrink:0; min-width:120px; }
        .info-value { font-weight:600; color:var(--navy); text-align:right; word-break:break-word; }

        /* ── CHECKLIST ── */
        .checklist { display:flex; flex-direction:column; gap:8px; }
        .check-item { display:flex; align-items:center; gap:10px; padding:10px 14px; border:1px solid var(--gray2); border-radius:8px; font-size:13px; }
        .check-item.done { background:var(--green-bg); border-color:#5DCAA5; }
        .check-item.pending { background:var(--amber-bg); border-color:#FAC775; }
        .check-dot { width:18px; height:18px; border-radius:50%; flex-shrink:0; display:flex; align-items:center; justify-content:center; font-size:11px; font-weight:700; }
        .check-dot.done { background:var(--green); color:white; }
        .check-dot.pending { background:var(--amber); color:white; }
        .check-label { flex:1; }
        .check-val { font-size:11px; font-weight:600; color:var(--muted); }

        /* ── FORM ── */
        label { display:block; font-size:12px; font-weight:700; color:var(--navy); margin-bottom:6px; }
        input[type=text], input[type=date], select, textarea { width:100%; padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-family:'Open Sans',sans-serif; font-size:13px; color:var(--text); background:var(--white); outline:none; transition:border-color .2s; margin-bottom:14px; }
        input:focus, select:focus, textarea:focus { border-color:var(--navy); }
        textarea { resize:vertical; min-height:80px; }
        .form-grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
        .checkbox-row { display:flex; align-items:center; gap:8px; margin-bottom:14px; }
        .checkbox-row input { width:auto; margin:0; }
        .checkbox-row label { margin:0; font-weight:400; font-size:13px; }

        /* ── BUTTONS ── */
        .btn { padding:9px 18px; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; cursor:pointer; border:none; transition:all .2s; }
        .btn-navy { background:var(--navy); color:var(--white); }
        .btn-navy:hover { background:var(--navy2); }
        .btn-gold { background:var(--gold); color:var(--navy); }
        .btn-gold:hover { background:var(--gold2); }
        .btn-ghost { background:var(--gray2); color:var(--text); }
        .btn-sm { padding:6px 12px; font-size:11px; }
        .btn-full { width:100%; text-align:center; }

        /* ── ESTADO FORM ── */
        .estado-form { display:flex; gap:10px; align-items:flex-end; flex-wrap:wrap; }
        .estado-form > div { flex:1; min-width:140px; }

        /* ── DOCS GRID ── */
        .docs-grid { display:grid; grid-template-columns:1fr 1fr; gap:8px; }
        .doc-status { padding:10px 12px; border-radius:8px; border:1px solid var(--gray2); font-size:12px; }
        .doc-status.ok { background:var(--green-bg); border-color:#5DCAA5; color:var(--green); }
        .doc-status.warn { background:var(--amber-bg); border-color:#FAC775; color:var(--amber); }
        .doc-status.bad { background:var(--red-bg); border-color:#F09595; color:var(--red); }
        .doc-status-name { font-weight:700; display:block; margin-bottom:2px; }
        .doc-status-val { font-size:11px; opacity:.8; }

        /* ── NOTAS ── */
        .nota-item { padding:12px 14px; border-radius:8px; margin-bottom:10px; position:relative; }
        .nota-item.interna { background:var(--blue-bg); border:1px solid #B5D4F4; }
        .nota-item.cliente { background:var(--amber-bg); border:1px solid #FAC775; }
        .nota-meta { font-size:11px; color:var(--muted); margin-bottom:6px; display:flex; justify-content:space-between; align-items:center; }
        .nota-tipo { font-size:10px; font-weight:700; padding:2px 8px; border-radius:10px; text-transform:uppercase; }
        .nota-tipo.interna { background:var(--blue-bg); color:var(--blue); border:1px solid #B5D4F4; }
        .nota-tipo.cliente { background:var(--amber-bg); color:var(--amber); border:1px solid #FAC775; }
        .nota-contenido { font-size:13px; color:var(--navy); line-height:1.6; }
        .nota-delete { position:absolute; top:10px; right:10px; background:none; border:none; color:var(--muted); cursor:pointer; font-size:14px; }
        .nota-delete:hover { color:var(--red); }

        /* ── HERO ── */
        .hero-card { background:var(--navy); border-radius:12px; padding:20px 24px; margin-bottom:18px; display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap; }
        .hero-left h1 { font-family:'Montserrat',sans-serif; font-size:18px; font-weight:800; color:var(--white); margin-bottom:4px; }
        .hero-left p { font-size:13px; color:rgba(255,255,255,.5); }
        .hero-right { display:flex; flex-direction:column; align-items:flex-end; gap:6px; }
        .hero-price { font-family:'Montserrat',sans-serif; font-size:24px; font-weight:900; color:var(--gold); }

        /* ── MIEMBROS ── */
        .miembro-item { display:flex; align-items:center; gap:10px; padding:8px 0; border-bottom:1px solid var(--gray2); font-size:13px; }
        .miembro-item:last-child { border-bottom:none; }
        .miembro-avatar { width:30px; height:30px; border-radius:50%; background:var(--blue-bg); color:var(--blue); font-size:11px; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .miembro-name { font-weight:600; color:var(--navy); }
        .miembro-dir { font-size:11px; color:var(--muted); }

        /* ── PROGRESS ── */
        .progress-wrap { margin-bottom:16px; }
        .progress-label { display:flex; justify-content:space-between; font-size:12px; color:var(--muted); margin-bottom:6px; }
        .progress-bar { height:8px; background:var(--gray2); border-radius:4px; overflow:hidden; }
        .progress-fill { height:100%; background:var(--gold); border-radius:4px; transition:width .4s; }
        .progress-fill.green { background:var(--green); }

        /* ── BOTTOM NAV ── */
        .bottom-nav { display:none; position:fixed; bottom:0; left:0; right:0; background:var(--navy); border-top:1px solid rgba(255,255,255,.1); padding:8px 0 12px; z-index:30; }
        .bottom-nav-inner { display:flex; justify-content:space-around; }
        .bottom-nav-item { display:flex; flex-direction:column; align-items:center; gap:3px; color:rgba(255,255,255,.5); font-size:10px; font-weight:600; text-decoration:none; padding:4px 10px; }
        .bottom-nav-item.active { color:var(--gold); }
        .bottom-nav-item svg { width:20px; height:20px; }

        /* ── RESPONSIVE ── */
        @media(max-width:900px) {
            .layout { grid-template-columns:1fr; }
        }

        @media(max-width:768px) {
            .sidebar { position:fixed; top:0; left:0; bottom:0; z-index:50; transform:translateX(-100%); }
            .sidebar.open { transform:translateX(0); }
            .sidebar-overlay.open { display:block; }
            .btn-menu { display:flex; }
            .topbar { padding:10px 12px; }
            .topbar-title { font-size:14px; }
            .content { padding:14px 14px 80px; }

            /* Hero compacto */
            .hero-card { padding:14px 16px; }
            .hero-left h1 { font-size:15px; }
            .hero-price { font-size:20px; }

            /* Form grid en columna */
            .form-grid-2 { grid-template-columns:1fr; gap:0; }
            .estado-form { flex-direction:column; }
            .estado-form > div { min-width:100%; }

            .bottom-nav { display:block; }
            .btn-ghost-sm { display:none; }
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
            <button class="btn-menu" onclick="abrirMenu()">
                <svg viewBox="0 0 22 22" fill="none"><path d="M3 6h16M3 11h16M3 16h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </button>
            <a href="{{ route('admin.tramites.index') }}" class="topbar-back">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Trámites
            </a>
            <span style="color:var(--gray2)">›</span>
            <div class="topbar-title">{{ $tramite->nombre_empresa ?? 'Sin nombre' }}</div>
            <a href="{{ route('admin.tramites.documentos', $tramite) }}" class="btn-ghost-sm">Ver documentos</a>
        </div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @php $badge = $tramite->estado_badge; @endphp

                {{-- HERO --}}
                <div class="hero-card">
                    <div class="hero-left">
                        <h1>{{ $tramite->nombre_empresa ?? 'Empresa sin nombre' }}</h1>
                        <p>{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} · {{ $tramite->user->name }}</p>
                        <span class="badge badge-{{ $badge['color'] }}" style="margin-top:8px;display:inline-block">{{ $badge['label'] }}</span>
                    </div>
                    <div class="hero-right">
                        @if($tramite->precio_plan)
                            <div class="hero-price">${{ number_format($tramite->precio_plan,0) }} USD</div>
                            <span style="font-size:12px;color:rgba(255,255,255,.4)">{{ $tramite->plan_seleccionado }}</span>
                        @endif
                        @if($tramite->numero_registro)
                            <span style="font-size:12px;background:rgba(245,166,35,.2);color:var(--gold);padding:3px 10px;border-radius:10px;font-weight:700">
                                Reg. #{{ $tramite->numero_registro }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="layout">

                    {{-- COLUMNA IZQUIERDA --}}
                    <div>

                        {{-- CHECKLIST --}}
                        @php
                            $docsAprobados = $tramite->documentos->where('estado','aprobado')->count();
                            $docsTotal = $tramite->documentos->count();
                            $checkItems = [
                                ['label'=>'Datos del cliente completos','done'=>$tramite->etapa!=='cuenta','val'=>''],
                                ['label'=>'Plan de pago seleccionado','done'=>!empty($tramite->plan_seleccionado),'val'=>$tramite->plan_seleccionado??''],
                                ['label'=>'Nombre de empresa definido','done'=>!empty($tramite->nombre_empresa),'val'=>$tramite->nombre_empresa??''],
                                ['label'=>'Miembros registrados','done'=>$tramite->miembros->count()>0,'val'=>$tramite->miembros->count().' miembro(s)'],
                                ['label'=>'Documentos aprobados','done'=>$docsTotal>0&&$docsAprobados===$docsTotal,'val'=>"{$docsAprobados}/{$docsTotal}"],
                                ['label'=>'Número de registro LLC','done'=>!empty($tramite->numero_registro),'val'=>$tramite->numero_registro??''],
                                ['label'=>'EIN solicitado','done'=>$tramite->ein_solicitado,'val'=>$tramite->ein_numero??''],
                            ];
                            $completados = collect($checkItems)->where('done',true)->count();
                            $porcentaje = round(($completados/count($checkItems))*100);
                        @endphp
                        <div class="card">
                            <div class="card-header">
                                <h3>Checklist del proceso</h3>
                                <span class="badge badge-{{ $porcentaje===100?'green':'amber' }}">{{ $porcentaje }}% completo</span>
                            </div>
                            <div class="card-body">
                                <div class="progress-wrap">
                                    <div class="progress-label"><span>Progreso general</span><span>{{ $completados }}/{{ count($checkItems) }}</span></div>
                                    <div class="progress-bar"><div class="progress-fill {{ $porcentaje===100?'green':'' }}" style="width:{{ $porcentaje }}%"></div></div>
                                </div>
                                <div class="checklist">
                                    @foreach($checkItems as $item)
                                        <div class="check-item {{ $item['done']?'done':'pending' }}">
                                            <div class="check-dot {{ $item['done']?'done':'pending' }}">{{ $item['done']?'✓':'!' }}</div>
                                            <span class="check-label">{{ $item['label'] }}</span>
                                            @if($item['val'])<span class="check-val">{{ $item['val'] }}</span>@endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- CAMBIAR ESTADO --}}
                        <div class="card">
                            <div class="card-header"><h3>Estado del trámite</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.tramites.estado', $tramite) }}" class="estado-form">
                                    @csrf
                                    @method('PATCH')
                                    <div>
                                        <label>Estado actual</label>
                                        <select name="estado">
                                            <option value="pendiente" {{ $tramite->estado==='pendiente'?'selected':'' }}>Pendiente</option>
                                            <option value="en_proceso" {{ $tramite->estado==='en_proceso'?'selected':'' }}>En proceso</option>
                                            <option value="completado" {{ $tramite->estado==='completado'?'selected':'' }}>Completado</option>
                                            <option value="cancelado" {{ $tramite->estado==='cancelado'?'selected':'' }}>Cancelado</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-navy">Actualizar</button>
                                </form>
                            </div>
                        </div>

                        {{-- REGISTRO LLC --}}
                        <div class="card">
                            <div class="card-header"><h3>Datos del registro LLC</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.tramites.registro', $tramite) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-grid-2">
                                        <div>
                                            <label>Número de registro (LLC)</label>
                                            <input type="text" name="numero_registro" value="{{ $tramite->numero_registro }}" placeholder="Ej: L21000123456">
                                        </div>
                                        <div>
                                            <label>Agente registrado</label>
                                            <input type="text" name="agente_registrado" value="{{ $tramite->agente_registrado }}" placeholder="Nombre del agente">
                                        </div>
                                    </div>
                                    <div class="form-grid-2">
                                        <div>
                                            <label>Fecha de presentación</label>
                                            <input type="date" name="fecha_presentacion" value="{{ $tramite->fecha_presentacion }}">
                                        </div>
                                        <div>
                                            <label>Fecha de aprobación</label>
                                            <input type="date" name="fecha_aprobacion" value="{{ $tramite->fecha_aprobacion }}">
                                        </div>
                                    </div>
                                    <div class="form-grid-2">
                                        <div>
                                            <label>Número EIN</label>
                                            <input type="text" name="ein_numero" value="{{ $tramite->ein_numero }}" placeholder="Ej: 12-3456789">
                                        </div>
                                        <div style="padding-top:24px">
                                            <div class="checkbox-row">
                                                <input type="checkbox" name="ein_solicitado" id="ein_solicitado" value="1" {{ $tramite->ein_solicitado?'checked':'' }}>
                                                <label for="ein_solicitado">EIN ya solicitado</label>
                                            </div>
                                        </div>
                                    </div>
                                    <label>Notas internas del proceso</label>
                                    <textarea name="notas_internas" placeholder="Observaciones internas...">{{ $tramite->notas_internas }}</textarea>
                                    <button type="submit" class="btn btn-gold btn-full">Guardar datos del registro</button>
                                </form>
                            </div>
                        </div>

                        {{-- DATOS DEL CLIENTE --}}
                        <div class="card">
                            <div class="card-header"><h3>Datos del cliente y empresa</h3></div>
                            <div class="card-body">
                                <div class="info-row"><span class="info-label">Cliente</span><span class="info-value">{{ $tramite->user->name }}</span></div>
                                <div class="info-row"><span class="info-label">Email</span><span class="info-value" style="font-size:12px;word-break:break-all">{{ $tramite->user->email }}</span></div>
                                <div class="info-row"><span class="info-label">Tipo</span><span class="info-value">{{ $tramite->tipo_entidad }}</span></div>
                                <div class="info-row"><span class="info-label">Jurisdicción</span><span class="info-value">{{ $tramite->jurisdiccion }}</span></div>
                                <div class="info-row"><span class="info-label">Empresa</span><span class="info-value">{{ $tramite->nombre_empresa??'—' }}</span></div>
                                <div class="info-row"><span class="info-label">Gestión</span><span class="info-value">{{ $tramite->tipo_gestion??'—' }}</span></div>
                                <div class="info-row"><span class="info-label">Dir. física</span><span class="info-value">{{ $tramite->direccion_fisica??'—' }}</span></div>
                                <div class="info-row"><span class="info-label">Dir. envío</span><span class="info-value">{{ $tramite->direccion_envio??'—' }}</span></div>
                                <div class="info-row"><span class="info-label">Plan</span><span class="info-value">{{ $tramite->plan_seleccionado??'—' }}</span></div>
                                <div class="info-row"><span class="info-label">Precio</span><span class="info-value">{{ $tramite->precio_plan?'$'.number_format($tramite->precio_plan,0).' USD':'—' }}</span></div>
                                @if($tramite->miembros->count())
                                    <div style="margin-top:14px;padding-top:14px;border-top:1px solid var(--gray2)">
                                        <div style="font-size:12px;font-weight:700;color:var(--navy);margin-bottom:10px">Miembros</div>
                                        @foreach($tramite->miembros as $m)
                                            <div class="miembro-item">
                                                <div class="miembro-avatar">{{ strtoupper(substr($m->nombre,0,1)) }}{{ strtoupper(substr($m->apellido,0,1)) }}</div>
                                                <div>
                                                    <div class="miembro-name">{{ $m->nombre }} {{ $m->apellido }}</div>
                                                    <div class="miembro-dir">{{ $m->direccion }}{{ $m->es_entidad?' · Entidad':'' }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>

                    {{-- COLUMNA DERECHA --}}
                    <div>

                        {{-- DOCUMENTOS --}}
                        <div class="card">
                            <div class="card-header">
                                <h3>Documentos</h3>
                                <a href="{{ route('admin.tramites.documentos', $tramite) }}" style="font-size:12px;color:var(--blue);font-weight:600">Ver todos →</a>
                            </div>
                            <div class="card-body">
                                @php
                                    $tiposReq = ['identificacion'=>'ID oficial','pasaporte'=>'Pasaporte','curp'=>'CURP','comprobante'=>'Comprobante'];
                                    $docsMap = $tramite->documentos->keyBy('tipo');
                                @endphp
                                <div class="docs-grid">
                                    @foreach($tiposReq as $tipo => $nombre)
                                        @php $doc = $docsMap->get($tipo); @endphp
                                        <div class="doc-status {{ $doc?($doc->estado==='aprobado'?'ok':($doc->estado==='rechazado'?'bad':'warn')):'' }}">
                                            <span class="doc-status-name">{{ $nombre }}</span>
                                            <span class="doc-status-val">@if($doc){{ $doc->estado_badge['label'] }}@else Sin subir @endif</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- SUBIR DOCS FINALES --}}
                        <div class="card">
                            <div class="card-header"><h3>Subir documentos finales al cliente</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.tramites.documentos.admin', $tramite) }}" enctype="multipart/form-data">
                                    @csrf
                                    <label>Tipo de documento</label>
                                    <select name="tipo">
                                        <option value="acta">Acta Constitutiva</option>
                                        <option value="ein">Número EIN</option>
                                        <option value="operating">Operating Agreement</option>
                                        <option value="certificado">Certificado de Formación</option>
                                        <option value="otros_final">Documento adicional</option>
                                    </select>
                                    <label>Nombre personalizado (opcional)</label>
                                    <input type="text" name="nombre" placeholder="Ej: Acta Constitutiva Tech Ventures LLC">
                                    <label>Archivo (PDF, JPG — máx. 20MB)</label>
                                    <input type="file" name="archivo" accept=".pdf,.jpg,.jpeg,.png" required>
                                    <button type="submit" class="btn btn-gold btn-full">Subir al cliente</button>
                                </form>
                                @php $docsFinales = $tramite->documentos->where('categoria','final'); @endphp
                                @if($docsFinales->count())
                                    <div style="margin-top:14px;border-top:1px solid var(--gray2);padding-top:14px">
                                        <div style="font-size:12px;font-weight:700;color:var(--navy);margin-bottom:10px">Documentos entregados</div>
                                        @foreach($docsFinales as $doc)
                                            <div style="display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--gray2);font-size:13px">
                                                <div>
                                                    <div style="font-weight:600;color:var(--navy)">{{ $doc->nombre }}</div>
                                                    <div style="font-size:11px;color:var(--muted)">{{ $doc->tamano_formateado }}</div>
                                                </div>
                                                <a href="{{ Storage::url($doc->path) }}" target="_blank" style="font-size:12px;font-weight:600;color:var(--blue)">Ver →</a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- NOTAS --}}
                        <div class="card">
                            <div class="card-header"><h3>Notas del trámite</h3></div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.notas.store', $tramite) }}">
                                    @csrf
                                    <label>Nueva nota</label>
                                    <textarea name="contenido" placeholder="Escribe una nota..." style="min-height:70px"></textarea>
                                    <div style="display:flex;gap:8px;margin-bottom:14px;align-items:center">
                                        <label style="margin:0;font-weight:400;font-size:13px">Tipo:</label>
                                        <select name="tipo" style="width:auto;margin:0">
                                            <option value="interna">Interna (solo admin)</option>
                                            <option value="cliente">Para el cliente</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-navy btn-full">Agregar nota</button>
                                </form>
                                @if($tramite->notas->count())
                                    <div style="margin-top:16px;border-top:1px solid var(--gray2);padding-top:16px">
                                        @foreach($tramite->notas as $nota)
                                            <div class="nota-item {{ $nota->tipo }}">
                                                <div class="nota-meta">
                                                    <span>{{ $nota->user->name }} · {{ $nota->created_at->format('d/m/Y H:i') }}</span>
                                                    <span class="nota-tipo {{ $nota->tipo }}">{{ $nota->tipo==='interna'?'Interna':'Cliente' }}</span>
                                                </div>
                                                <div class="nota-contenido">{{ $nota->contenido }}</div>
                                                <form method="POST" action="{{ route('admin.notas.destroy', $nota) }}" style="display:inline" onsubmit="return confirm('¿Eliminar nota?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="nota-delete">×</button>
                                                </form>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p style="font-size:13px;color:var(--muted);margin-top:14px;text-align:center">No hay notas todavía.</p>
                                @endif
                            </div>
                        </div>

                        {{-- HISTORIAL --}}
                        <div class="card">
                            <div class="card-header">
                                <h3>Historial de acciones</h3>
                                <span style="font-size:12px;color:var(--muted)">{{ $tramite->historial->count() }} eventos</span>
                            </div>
                            <div class="card-body" style="padding:0">
                                @forelse($tramite->historial as $evento)
                                    <div style="display:flex;gap:12px;padding:12px 16px;border-bottom:1px solid var(--gray2);align-items:flex-start">
                                        <div style="width:32px;height:32px;border-radius:50%;background:var(--gray);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0">{{ $evento->icono }}</div>
                                        <div style="flex:1;min-width:0">
                                            <div style="font-size:13px;font-weight:600;color:var(--navy)">{{ $evento->descripcion }}</div>
                                            <div style="font-size:11px;color:var(--muted);margin-top:3px">{{ $evento->user->name }} · {{ $evento->created_at->diffForHumans() }}</div>
                                            @if($evento->valor_anterior && $evento->valor_nuevo)
                                                <div style="margin-top:5px;display:flex;align-items:center;gap:6px;font-size:11px;flex-wrap:wrap">
                                                    <span style="background:var(--red-bg);color:var(--red);padding:2px 8px;border-radius:4px">{{ $evento->valor_anterior }}</span>
                                                    <span style="color:var(--muted)">→</span>
                                                    <span style="background:var(--green-bg);color:var(--green);padding:2px 8px;border-radius:4px">{{ $evento->valor_nuevo }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @empty
                                    <div style="padding:28px;text-align:center;font-size:13px;color:var(--muted)">No hay acciones registradas todavía.</div>
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- BOTTOM NAV MÓVIL --}}
<nav class="bottom-nav">
    <div class="bottom-nav-inner">
        <a href="{{ route('admin.tramites.index') }}" class="bottom-nav-item">
            <svg viewBox="0 0 16 16" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
            Volver
        </a>
        <a href="{{ route('admin.tramites.documentos', $tramite) }}" class="bottom-nav-item">
            <svg viewBox="0 0 16 16" fill="none"><path d="M4 2h6l4 4v8H4V2z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M10 2v4h4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
            Docs
        </a>
        <a href="{{ route('admin.notificaciones.index') }}" class="bottom-nav-item" style="position:relative">
            <svg viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 015 5v3l1 2H2l1-2V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.3"/></svg>
            @if($noLeidas > 0)<span style="position:absolute;top:0;right:4px;background:var(--red);color:white;font-size:9px;font-weight:800;padding:1px 5px;border-radius:10px">{{ $noLeidas }}</span>@endif
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