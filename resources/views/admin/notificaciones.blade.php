<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificaciones — Admin Sell·U</title>
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
        .sidebar-badge { margin-left:auto; background:var(--red); color:white; font-size:10px; font-weight:800; padding:1px 7px; border-radius:10px; }
        .sidebar-footer { padding:16px 18px; border-top:1px solid rgba(255,255,255,.07); }
        .sidebar-user strong { display:block; color:rgba(255,255,255,.7); font-size:13px; }
        .sidebar-user span { font-size:11px; color:rgba(255,255,255,.35); }
        .btn-logout { width:100%; margin-top:10px; padding:8px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.5); border:none; border-radius:6px; font-size:12px; cursor:pointer; }
        .btn-logout:hover { background:rgba(255,255,255,.12); color:var(--white); }

        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; }
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; justify-content:space-between; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .content { flex:1; overflow-y:auto; padding:28px; }
        .content-inner { max-width:800px; margin:0 auto; }

        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:16px; }

        .btn { padding:9px 18px; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; cursor:pointer; border:none; transition:all .2s; }
        .btn-ghost { background:var(--gray2); color:var(--text); }
        .btn-ghost:hover { background:#D3D1C7; }

        .notif-list { display:flex; flex-direction:column; gap:0; background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:20px; }

        .notif-item { display:flex; align-items:flex-start; gap:14px; padding:16px 20px; border-bottom:1px solid var(--gray2); transition:background .15s; position:relative; }
        .notif-item:last-child { border-bottom:none; }
        .notif-item.no-leida { background:#FFFBF0; }
        .notif-item:hover { background:var(--gray); }

        .notif-icono { width:40px; height:40px; border-radius:50%; background:var(--gray); display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; }
        .notif-icono.no-leida { background:var(--amber-bg); }

        .notif-body { flex:1; min-width:0; }
        .notif-titulo { font-size:13px; font-weight:700; color:var(--navy); margin-bottom:3px; display:flex; align-items:center; gap:8px; }
        .notif-dot { width:8px; height:8px; border-radius:50%; background:var(--gold); flex-shrink:0; }
        .notif-mensaje { font-size:13px; color:var(--text); line-height:1.5; margin-bottom:4px; }
        .notif-meta { font-size:11px; color:var(--muted); display:flex; gap:10px; align-items:center; }

        .notif-actions { display:flex; gap:8px; align-items:center; flex-shrink:0; }
        .btn-ver { font-size:12px; font-weight:600; color:var(--blue); padding:5px 10px; background:var(--blue-bg); border:none; border-radius:5px; cursor:pointer; text-decoration:none; }
        .btn-ver:hover { background:#B5D4F4; }

        .empty { padding:56px 24px; text-align:center; }
        .empty-icon { font-size:48px; margin-bottom:12px; }
        .empty h3 { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); margin-bottom:8px; }
        .empty p { font-size:13px; color:var(--muted); }

        .pagination { display:flex; gap:6px; justify-content:center; }
        .pagination a, .pagination span { padding:7px 13px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; color:var(--text); background:var(--white); }
        .pagination a:hover { background:var(--gray); }
        .pagination .active span { background:var(--navy); color:var(--white); border-color:var(--navy); }
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
            <a href="{{ route('admin.tramites.index') }}" class="sidebar-link">
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
            <a href="{{ route('admin.notificaciones.index') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><path d="M8 2a5 5 0 015 5v3l1 2H2l1-2V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M6.5 13a1.5 1.5 0 003 0" stroke="currentColor" stroke-width="1.3"/></svg>
                Notificaciones
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <strong>{{ auth()->user()->name }}</strong>
                <span>{{ ucfirst(auth()->user()->role) }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Cerrar sesión</button>
            </form>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">Notificaciones</div>
            <form method="POST" action="{{ route('admin.notificaciones.todas') }}">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-ghost" style="font-size:12px;padding:7px 14px">
                    Marcar todas como leídas
                </button>
            </form>
        </div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                @if($notificaciones->count())
                    <div class="notif-list">
                        @foreach($notificaciones as $notif)
                            <div class="notif-item {{ !$notif->isLeida() ? 'no-leida' : '' }}">
                                <div class="notif-icono {{ !$notif->isLeida() ? 'no-leida' : '' }}">
                                    {{ $notif->icono }}
                                </div>
                                <div class="notif-body">
                                    <div class="notif-titulo">
                                        @if(!$notif->isLeida())
                                            <span class="notif-dot"></span>
                                        @endif
                                        {{ $notif->titulo }}
                                    </div>
                                    <div class="notif-mensaje">{{ $notif->mensaje }}</div>
                                    <div class="notif-meta">
                                        <span>{{ $notif->created_at->diffForHumans() }}</span>
                                        @if($notif->tramite)
                                            <span>·</span>
                                            <span>{{ $notif->tramite->nombre_empresa ?? 'Trámite #'.$notif->tramite_id }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="notif-actions">
                                    @if($notif->url)
                                        <a href="{{ $notif->url }}" class="btn-ver">Ver →</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        {{ $notificaciones->links() }}
                    </div>
                @else
                    <div class="empty">
                        <div class="empty-icon">🔔</div>
                        <h3>Sin notificaciones</h3>
                        <p>Aquí aparecerán las actualizaciones importantes del equipo.</p>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
</body>
</html>