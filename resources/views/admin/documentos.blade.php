<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos del trámite — Admin Sell·U</title>
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
        .content-inner { max-width:900px; margin:0 auto; }

        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:16px; }

        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }

        /* HEADER TRAMITE */
        .tramite-header { background:var(--navy); border-radius:12px; padding:20px 24px; margin-bottom:20px; display:flex; align-items:center; justify-content:space-between; }
        .tramite-header h2 { font-family:'Montserrat',sans-serif; font-size:18px; font-weight:800; color:var(--white); margin-bottom:4px; }
        .tramite-header p { font-size:13px; color:rgba(255,255,255,.5); }

        /* DOC CARDS */
        .section-title { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin-bottom:14px; }
        .doc-card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:14px; }
        .doc-card-header { padding:16px 20px; display:flex; align-items:center; gap:14px; border-bottom:1px solid var(--gray2); }
        .doc-file-icon { width:40px; height:40px; border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .doc-file-icon.pdf { background:var(--red-bg); }
        .doc-file-icon.img { background:var(--blue-bg); }
        .doc-file-icon svg { width:20px; height:20px; }
        .doc-card-info { flex:1; }
        .doc-card-name { font-size:14px; font-weight:600; color:var(--navy); margin-bottom:3px; }
        .doc-card-meta { font-size:12px; color:var(--muted); }
        .doc-card-actions { display:flex; align-items:center; gap:8px; }
        .btn-download { display:inline-flex; align-items:center; gap:6px; padding:8px 14px; background:var(--navy); color:var(--white); border-radius:6px; font-size:12px; font-weight:600; font-family:'Montserrat',sans-serif; transition:background .2s; }
        .btn-download:hover { background:var(--navy2); }
        .btn-preview { display:inline-flex; align-items:center; gap:6px; padding:8px 14px; background:var(--blue-bg); color:var(--blue); border-radius:6px; font-size:12px; font-weight:600; font-family:'Montserrat',sans-serif; transition:background .2s; }
        .btn-preview:hover { background:#B5D4F4; }

        /* REVIEW FORM */
        .doc-card-body { padding:16px 20px; background:var(--gray); }
        .review-form { display:flex; gap:12px; align-items:flex-end; flex-wrap:wrap; }
        .review-form label { font-size:12px; font-weight:700; color:var(--navy); margin-bottom:5px; display:block; }
        .review-form select { padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); background:var(--white); outline:none; min-width:160px; }
        .review-form textarea { padding:9px 12px; border:1px solid var(--gray2); border-radius:6px; font-size:13px; font-family:'Open Sans',sans-serif; color:var(--text); background:var(--white); outline:none; resize:none; min-width:260px; height:40px; }
        .btn-save { padding:9px 20px; background:var(--gold); color:var(--navy); border:none; border-radius:6px; font-size:13px; font-weight:700; cursor:pointer; font-family:'Montserrat',sans-serif; white-space:nowrap; }
        .btn-save:hover { background:var(--gold2); }

        .empty { background:var(--white); border:1px dashed var(--gray2); border-radius:12px; padding:48px 24px; text-align:center; }
        .empty svg { width:40px; height:40px; color:var(--gray2); margin-bottom:12px; }
        .empty p { font-size:13px; color:var(--muted); }
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
            <a href="{{ route('admin.tramites.show', $tramite) }}" class="topbar-back">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                Trámite
            </a>
            <span style="color:var(--gray2)">›</span>
            <div class="topbar-title">Documentos</div>
        </div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                {{-- HEADER --}}
                <div class="tramite-header">
                    <div>
                        <h2>{{ $tramite->nombre_empresa ?? 'Empresa sin nombre' }}</h2>
                        <p>{{ $tramite->user->name }} · {{ $tramite->user->email }} · {{ $tramite->tipo_entidad }} {{ $tramite->jurisdiccion }}</p>
                    </div>
                    <span class="badge badge-{{ $tramite->estado_badge['color'] }}">{{ $tramite->estado_badge['label'] }}</span>
                </div>

                {{-- DOCUMENTOS --}}
                <div class="section-title">Documentos subidos ({{ $tramite->documentos->count() }})</div>

                @forelse($tramite->documentos as $doc)
                    @php
                        $isPdf = str_contains($doc->mime_type ?? '', 'pdf');
                        $badge = $doc->estado_badge;
                    @endphp
                    <div class="doc-card">
                        <div class="doc-card-header">
                            <div class="doc-file-icon {{ $isPdf ? 'pdf' : 'img' }}">
                                @if($isPdf)
                                    <svg viewBox="0 0 20 20" fill="none"><rect x="3" y="1" width="14" height="18" rx="2" stroke="#8B2020" stroke-width="1.5"/><path d="M7 7h6M7 10h6M7 13h4" stroke="#8B2020" stroke-width="1.5" stroke-linecap="round"/></svg>
                                @else
                                    <svg viewBox="0 0 20 20" fill="none"><rect x="2" y="2" width="16" height="16" rx="2" stroke="#1B4FD8" stroke-width="1.5"/><circle cx="7" cy="7" r="1.5" fill="#1B4FD8"/><path d="M2 14l5-5 3 3 2-2 6 6" stroke="#1B4FD8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                @endif
                            </div>
                            <div class="doc-card-info">
                                <div class="doc-card-name">{{ $doc->nombre }}</div>
                                <div class="doc-card-meta">{{ $doc->nombre_original }} · {{ $doc->tamano_formateado }} · Subido {{ $doc->created_at->format('d/m/Y H:i') }}</div>
                            </div>
                            <div class="doc-card-actions">
                                <span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span>
                                <a href="{{ Storage::url($doc->path) }}" target="_blank" class="btn-preview">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M6.5 2C3.5 2 1 6.5 1 6.5S3.5 11 6.5 11 12 6.5 12 6.5 9.5 2 6.5 2z" stroke="currentColor" stroke-width="1.2"/><circle cx="6.5" cy="6.5" r="1.5" stroke="currentColor" stroke-width="1.2"/></svg>
                                    Ver
                                </a>
                                <a href="{{ route('admin.documentos.download', $doc) }}" class="btn-download">
                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M6.5 1v7M4 6l2.5 2.5L9 6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 10h11" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                                    Descargar
                                </a>
                            </div>
                        </div>
                        <div class="doc-card-body">
                            <form method="POST" action="{{ route('admin.documentos.update', $doc) }}" class="review-form">
                                @csrf
                                @method('PATCH')
                                <div>
                                    <label>Estado</label>
                                    <select name="estado">
                                        <option value="pendiente" {{ $doc->estado === 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                                        <option value="aprobado" {{ $doc->estado === 'aprobado' ? 'selected' : '' }}>Aprobado</option>
                                        <option value="rechazado" {{ $doc->estado === 'rechazado' ? 'selected' : '' }}>Rechazado</option>
                                    </select>
                                </div>
                                <div style="flex:1">
                                    <label>Nota para el cliente (opcional)</label>
                                    <textarea name="nota_admin" placeholder="Ej: El documento está borroso, por favor sube una versión más clara.">{{ $doc->nota_admin }}</textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn-save">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="empty">
                        <svg viewBox="0 0 40 40" fill="none"><rect x="6" y="4" width="28" height="32" rx="4" stroke="currentColor" stroke-width="2"/><path d="M13 14h14M13 20h14M13 26h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                        <p>Este cliente aún no ha subido documentos.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
</body>
</html>