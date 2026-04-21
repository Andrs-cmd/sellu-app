<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Trámite — Sell·U</title>
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

        .sidebar { width:220px; background:var(--navy); display:flex; flex-direction:column; flex-shrink:0; }
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

        .main { flex:1; overflow:hidden; display:flex; flex-direction:column; }
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; gap:14px; }
        .topbar-back { color:var(--muted); font-size:13px; display:flex; align-items:center; gap:5px; }
        .topbar-back:hover { color:var(--navy); }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }

        .content { flex:1; overflow-y:auto; padding:28px; }
        .content-inner { max-width:860px; margin:0 auto; }

        .badge { font-size:12px; font-weight:600; padding:5px 12px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-blue { background:var(--blue-bg); color:var(--blue); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        /* HERO CARD */
        .hero-card { background:var(--navy); border-radius:14px; padding:28px 32px; margin-bottom:20px; display:flex; align-items:center; justify-content:space-between; gap:20px; flex-wrap:wrap; }
        .hero-card-left h1 { font-family:'Montserrat',sans-serif; font-size:22px; font-weight:800; color:var(--white); margin-bottom:6px; }
        .hero-card-left p { font-size:13px; color:rgba(255,255,255,.5); }
        .hero-card-right { text-align:right; }
        .hero-price { font-family:'Montserrat',sans-serif; font-size:32px; font-weight:900; color:var(--gold); }
        .hero-plan { font-size:12px; color:rgba(255,255,255,.4); margin-top:4px; }

        /* TIMELINE */
        .timeline { display:flex; gap:0; margin-bottom:20px; background:var(--white); border:1px solid var(--gray2); border-radius:14px; overflow:hidden; }
        .timeline-step { flex:1; padding:16px 12px; text-align:center; border-right:1px solid var(--gray2); position:relative; }
        .timeline-step:last-child { border-right:none; }
        .timeline-dot { width:32px; height:32px; border-radius:50%; border:2px solid var(--gray2); background:var(--white); display:flex; align-items:center; justify-content:center; margin:0 auto 8px; font-size:12px; font-weight:700; color:var(--muted); transition:all .3s; }
        .timeline-dot.done { background:var(--green); border-color:var(--green); color:var(--white); }
        .timeline-dot.active { background:var(--blue); border-color:var(--blue); color:var(--white); }
        .timeline-label { font-size:11px; font-weight:600; color:var(--muted); }
        .timeline-label.done { color:var(--green); }
        .timeline-label.active { color:var(--blue); font-weight:700; }

        /* GRID */
        .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px; }
        @media(max-width:700px) { .grid-2 { grid-template-columns:1fr; } }

        /* CARDS */
        .card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:16px; }
        .card-header { padding:16px 20px; border-bottom:1px solid var(--gray2); display:flex; align-items:center; justify-content:space-between; }
        .card-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .card-body { padding:20px; }
        .info-row { display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid var(--gray2); font-size:13px; }
        .info-row:last-child { border-bottom:none; }
        .info-label { color:var(--muted); font-weight:500; }
        .info-value { color:var(--navy); font-weight:600; text-align:right; }

        /* MEMBERS */
        .member-item { display:flex; align-items:center; gap:12px; padding:12px 0; border-bottom:1px solid var(--gray2); }
        .member-item:last-child { border-bottom:none; }
        .member-avatar { width:36px; height:36px; border-radius:50%; background:var(--blue-bg); color:var(--blue); font-size:13px; font-weight:700; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .member-name { font-size:13px; font-weight:600; color:var(--navy); }
        .member-dir { font-size:11px; color:var(--muted); }

        /* CTA */
        .cta-card { background:var(--gold); border-radius:12px; padding:24px; display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap; }
        .cta-card h3 { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:800; color:var(--navy); margin-bottom:4px; }
        .cta-card p { font-size:13px; color:rgba(13,27,62,.6); }
        .btn-wa { display:inline-flex; align-items:center; gap:8px; background:var(--navy); color:var(--white); padding:10px 20px; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; border:none; cursor:pointer; white-space:nowrap; }
    </style>
</head>
<body>
<div class="shell">

    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">Sell<span>·U</span></div>
            <div class="sidebar-logo-sub">Portal del cliente</div>
        </div>
        <nav class="sidebar-nav">
            <div class="sidebar-section">Mi cuenta</div>
            <a href="{{ route('dashboard') }}" class="sidebar-link">
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
            <a href="{{ route('dashboard') }}" class="topbar-back">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Mis trámites
            </a>
            <span style="color:var(--gray2)">›</span>
            <div class="topbar-title">{{ $tramite->nombre_empresa ?? 'Empresa en proceso' }}</div>
        </div>

        <div class="content">
            <div class="content-inner">

                {{-- HERO --}}
                <div class="hero-card">
                    <div class="hero-card-left">
                        <h1>{{ $tramite->nombre_empresa ?? 'Empresa en proceso' }}</h1>
                        <p>{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }} · Iniciado {{ $tramite->created_at->format('d/m/Y') }}</p>
                        @php $badge = $tramite->estado_badge; @endphp
                        <span class="badge badge-{{ $badge['color'] }}" style="margin-top:10px;display:inline-block">{{ $badge['label'] }}</span>
                    </div>
                    <div class="hero-card-right">
                        @if($tramite->precio_plan)
                            <div class="hero-price">${{ number_format($tramite->precio_plan, 0) }} USD</div>
                            <div class="hero-plan">{{ $tramite->plan_seleccionado }}</div>
                        @endif
                    </div>
                    <a href="{{ route('documentos.index', $tramite) }}"
   style="display:inline-flex;align-items:center;gap:6px;margin-top:12px;padding:10px 20px;background:var(--gold);color:var(--navy);border-radius:6px;font-size:13px;font-weight:700;font-family:Montserrat,sans-serif">
    Subir documentos
</a>
                </div>

                {{-- TIMELINE --}}
                @php
                    $etapas = ['cuenta','pago','compania','gestion','contacto','completado'];
                    $etapaActual = array_search($tramite->etapa, $etapas);
                    $labels = ['Cuenta','Pago','Compañía','Gestión','Contacto','Completado'];
                @endphp
                <div class="timeline">
                    @foreach($etapas as $i => $etapa)
                        @php
                            $isDone = $i < $etapaActual;
                            $isActive = $i === $etapaActual;
                        @endphp
                        <div class="timeline-step">
                            <div class="timeline-dot {{ $isDone ? 'done' : ($isActive ? 'active' : '') }}">
                                @if($isDone) ✓ @else {{ $i + 1 }} @endif
                            </div>
                            <div class="timeline-label {{ $isDone ? 'done' : ($isActive ? 'active' : '') }}">
                                {{ $labels[$i] }}
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- DETALLES --}}
                <div class="grid-2">
                    <div class="card">
                        <div class="card-header"><h3>Datos de la empresa</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Tipo de entidad</span><span class="info-value">{{ $tramite->tipo_entidad }}</span></div>
                            <div class="info-row"><span class="info-label">Jurisdicción</span><span class="info-value">{{ $tramite->jurisdiccion }}</span></div>
                            <div class="info-row"><span class="info-label">Nombre</span><span class="info-value">{{ $tramite->nombre_empresa ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Plan</span><span class="info-value">{{ $tramite->plan_seleccionado ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Precio</span><span class="info-value">{{ $tramite->precio_plan ? '$'.number_format($tramite->precio_plan,0).' USD' : '—' }}</span></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><h3>Configuración legal</h3></div>
                        <div class="card-body">
                            <div class="info-row"><span class="info-label">Tipo de gestión</span><span class="info-value">{{ $tramite->tipo_gestion ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Dirección física</span><span class="info-value">{{ $tramite->direccion_fisica ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Dirección de envío</span><span class="info-value">{{ $tramite->direccion_envio ?? '—' }}</span></div>
                            <div class="info-row"><span class="info-label">Copia abogado</span><span class="info-value">{{ $tramite->copia_abogado ?? '—' }}</span></div>
                        </div>
                    </div>
                </div>

                {{-- MIEMBROS --}}
                @if($tramite->miembros->count())
                    <div class="card">
                        <div class="card-header"><h3>Miembros de la empresa</h3></div>
                        <div class="card-body">
                            @foreach($tramite->miembros as $miembro)
                                <div class="member-item">
                                    <div class="member-avatar">{{ strtoupper(substr($miembro->nombre, 0, 1)) }}{{ strtoupper(substr($miembro->apellido, 0, 1)) }}</div>
                                    <div>
                                        <div class="member-name">{{ $miembro->nombre }} {{ $miembro->apellido }}</div>
                                        <div class="member-dir">{{ $miembro->direccion }} {{ $miembro->es_entidad ? '· Entidad comercial' : '' }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- CTA WHATSAPP --}}
                <div class="cta-card">
                    <div>
                        <h3>¿Tienes preguntas sobre tu trámite?</h3>
                        <p>Nuestro equipo responde en menos de 2 horas hábiles.</p>
                    </div>
                    <a href="https://wa.me/15551234567?text=Hola, tengo preguntas sobre mi trámite: {{ $tramite->nombre_empresa ?? 'mi empresa' }}" target="_blank" class="btn-wa">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.6 0 0 3.6 0 8c0 1.4.4 2.8 1 4L0 16l4.2-1.1C5.4 15.6 6.7 16 8 16c4.4 0 8-3.6 8-8s-3.6-8-8-8z"/></svg>
                        Contactar asesor
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>