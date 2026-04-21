<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos — Sell·U</title>
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
        .sidebar-user strong { display:block; color:rgba(255,255,255,.7); font-size:13px; }
        .sidebar-user span { font-size:11px; color:rgba(255,255,255,.4); }
        .btn-logout { width:100%; margin-top:10px; padding:8px; background:rgba(255,255,255,.07); color:rgba(255,255,255,.5); border:none; border-radius:6px; font-size:12px; cursor:pointer; font-family:'Open Sans',sans-serif; }
        .btn-logout:hover { background:rgba(255,255,255,.12); color:var(--white); }
        .main { flex:1; display:flex; flex-direction:column; overflow:hidden; }
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; gap:12px; }
        .topbar-back { color:var(--muted); font-size:13px; display:flex; align-items:center; gap:5px; }
        .topbar-back:hover { color:var(--navy); }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .content { flex:1; overflow-y:auto; padding:28px; }
        .content-inner { max-width:860px; margin:0 auto; }
        .alert { padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:18px; }
        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; }
        .alert-error { background:var(--red-bg); color:var(--red); border:1px solid #F09595; }
        .badge { font-size:11px; font-weight:600; padding:4px 10px; border-radius:20px; }
        .badge-amber { background:var(--amber-bg); color:var(--amber); }
        .badge-green { background:var(--green-bg); color:var(--green); }
        .badge-red { background:var(--red-bg); color:var(--red); }
        .badge-gray { background:var(--gray2); color:var(--muted); }
        .info-card { background:var(--blue-bg); border:1px solid #B5D4F4; border-radius:12px; padding:18px 20px; margin-bottom:24px; display:flex; gap:12px; align-items:flex-start; }
        .info-card svg { width:20px; height:20px; color:var(--blue); flex-shrink:0; margin-top:1px; }
        .info-card-text { font-size:13px; color:#0C447C; line-height:1.6; }
        .info-card-text strong { display:block; font-weight:700; margin-bottom:4px; }
        .section-title { font-family:'Montserrat',sans-serif; font-size:15px; font-weight:700; color:var(--navy); margin-bottom:14px; }
        .docs-required { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; margin-bottom:28px; }
        @media(max-width:700px) { .docs-required { grid-template-columns:1fr; } }
        .doc-req-card { background:var(--white); border:1px solid var(--gray2); border-radius:10px; padding:16px; display:flex; align-items:flex-start; gap:10px; }
        .doc-req-card.uploaded { border-color:#5DCAA5; background:var(--green-bg); }
        .doc-req-card.rechazado { border-color:#F09595; background:var(--red-bg); }
        .doc-req-icon { width:36px; height:36px; border-radius:8px; background:var(--blue-bg); display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .doc-req-icon svg { width:18px; height:18px; color:var(--blue); }
        .doc-req-card.uploaded .doc-req-icon { background:var(--green-bg); }
        .doc-req-card.uploaded .doc-req-icon svg { color:var(--green); }
        .doc-req-card.rechazado .doc-req-icon { background:var(--red-bg); }
        .doc-req-card.rechazado .doc-req-icon svg { color:var(--red); }
        .doc-req-name { font-size:13px; font-weight:600; color:var(--navy); margin-bottom:3px; }
        .doc-req-status { font-size:11px; color:var(--muted); }
        .doc-req-status.ok { color:var(--green); font-weight:600; }
        .doc-req-status.bad { color:var(--red); font-weight:600; }
        .upload-card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; padding:24px; margin-bottom:24px; }
        .upload-card h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin-bottom:18px; }
        .form-row { display:grid; grid-template-columns:1fr 1fr auto; gap:12px; align-items:end; }
        @media(max-width:700px) { .form-row { grid-template-columns:1fr; } }
        label { display:block; font-size:12px; font-weight:700; color:var(--navy); margin-bottom:6px; }
        select, input[type=file] { width:100%; padding:10px 12px; border:1px solid var(--gray2); border-radius:6px; font-family:'Open Sans',sans-serif; font-size:13px; color:var(--text); background:var(--white); outline:none; transition:border-color .2s; }
        select:focus, input[type=file]:focus { border-color:var(--navy); }
        .btn-upload { padding:10px 22px; background:var(--navy); color:var(--white); border:none; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; cursor:pointer; white-space:nowrap; transition:background .2s; }
        .btn-upload:hover { background:var(--navy2); }
        .docs-list { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; }
        .doc-item { display:flex; align-items:center; gap:14px; padding:14px 18px; border-bottom:1px solid var(--gray2); transition:background .15s; }
        .doc-item:last-child { border-bottom:none; }
        .doc-item:hover { background:var(--gray); }
        .doc-file-icon { width:38px; height:38px; border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .doc-file-icon.pdf { background:#FDEEEE; }
        .doc-file-icon.img { background:var(--blue-bg); }
        .doc-file-icon svg { width:18px; height:18px; }
        .doc-info { flex:1; min-width:0; }
        .doc-name { font-size:13px; font-weight:600; color:var(--navy); white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
        .doc-meta { font-size:11px; color:var(--muted); margin-top:2px; }
        .doc-nota { font-size:11px; color:var(--red); margin-top:3px; display:flex; align-items:center; gap:4px; }
        .doc-actions { display:flex; align-items:center; gap:8px; flex-shrink:0; }
        .btn-delete { background:none; border:none; color:var(--muted); cursor:pointer; padding:4px; border-radius:4px; transition:color .2s; }
        .btn-delete:hover { color:var(--red); }
        .btn-delete svg { width:15px; height:15px; }
        .empty { padding:40px 24px; text-align:center; }
        .empty svg { width:40px; height:40px; color:var(--gray2); margin-bottom:12px; }
        .empty p { font-size:13px; color:var(--muted); }
        .finales-banner { background:var(--green-bg); border:1px solid #5DCAA5; border-radius:10px; padding:14px 18px; margin-bottom:16px; display:flex; align-items:center; gap:10px; font-size:13px; color:var(--green); font-weight:600; }
        .finales-banner svg { width:20px; height:20px; flex-shrink:0; }
        .btn-dl { display:inline-flex; align-items:center; gap:6px; padding:9px 16px; background:var(--green); color:white; border-radius:6px; font-size:12px; font-weight:700; font-family:'Montserrat',sans-serif; white-space:nowrap; transition:background .2s; }
        .btn-dl:hover { background:#085041; }
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
            <a href="{{ route('documentos.index', $tramite) }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><path d="M4 2h6l4 4v8H4V2z" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/><path d="M9 2v4h4" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"/></svg>
                Documentos
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <strong>{{ auth()->user()->name }}</strong>
                <span>{{ auth()->user()->email }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Cerrar sesión</button>
            </form>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <a href="{{ route('tramite.show', $tramite) }}" class="topbar-back">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
                {{ $tramite->nombre_empresa ?? 'Mi trámite' }}
            </a>
            <span style="color:var(--gray2)">›</span>
            <div class="topbar-title">Documentos requeridos</div>
        </div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-error">{{ $errors->first() }}</div>
                @endif

                {{-- ── DOCUMENTOS FINALES ENTREGADOS POR SELL·U ── --}}
                @php
                    $docsFinales = $tramite->documentos
                        ->where('categoria', 'final')
                        ->where('subido_por_admin', true);
                @endphp

                @if($docsFinales->count())
                    <div style="margin-bottom:32px">
                        <div class="section-title" style="color:var(--green);display:flex;align-items:center;gap:8px">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M5.5 9l3 3 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            Tu empresa está lista — documentos oficiales
                        </div>
                        <div class="finales-banner">
                            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            ¡Felicidades! Tu empresa ha sido constituida exitosamente. Descarga tus documentos oficiales a continuación.
                        </div>
                        <div class="docs-list">
                            @foreach($docsFinales as $doc)
                                <div class="doc-item">
                                    <div class="doc-file-icon pdf">
                                        <svg viewBox="0 0 18 18" fill="none"><rect x="3" y="1" width="12" height="16" rx="2" stroke="#8B2020" stroke-width="1.3"/><path d="M6 6h6M6 9h6M6 12h4" stroke="#8B2020" stroke-width="1.3" stroke-linecap="round"/></svg>
                                    </div>
                                    <div class="doc-info">
                                        <div class="doc-name">{{ $doc->nombre }}</div>
                                        <div class="doc-meta">Entregado por Sell·U · {{ $doc->created_at->format('d/m/Y') }}</div>
                                    </div>
                                    <span class="badge badge-green">Oficial</span>
                                    <a href="{{ Storage::url($doc->path) }}" target="_blank" download class="btn-dl">
                                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M6.5 1v7M4 6l2.5 2.5L9 6" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 10h11" stroke="white" stroke-width="1.3" stroke-linecap="round"/></svg>
                                        Descargar
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- ── INFO ── --}}
                <div class="info-card">
                    <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                    <div class="info-card-text">
                        <strong>Documentos necesarios para constituir tu LLC</strong>
                        Sube cada documento en formato PDF, JPG o PNG. Máximo 10MB por archivo. Nuestro equipo revisará y aprobará cada uno. Si alguno es rechazado te indicaremos el motivo.
                    </div>
                </div>

                {{-- ── ESTADO DE DOCUMENTOS REQUERIDOS ── --}}
                @php
                    $tiposRequeridos = [
                        'identificacion' => 'Identificación oficial',
                        'pasaporte'      => 'Pasaporte',
                        'curp'           => 'CURP',
                        'comprobante'    => 'Comprobante de domicilio',
                    ];
                    $docsSubidos = $tramite->documentos->where('categoria','cliente')->keyBy('tipo');
                @endphp

                <div class="section-title">Estado de documentos</div>
                <div class="docs-required">
                    @foreach($tiposRequeridos as $tipo => $nombre)
                        @php
                            $doc = $docsSubidos->get($tipo);
                            $clase = $doc ? ($doc->estado === 'rechazado' ? 'rechazado' : 'uploaded') : '';
                        @endphp
                        <div class="doc-req-card {{ $clase }}">
                            <div class="doc-req-icon">
                                @if($doc && $doc->estado === 'aprobado')
                                    <svg viewBox="0 0 18 18" fill="none"><path d="M4 9l4 4 6-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                @elseif($doc && $doc->estado === 'rechazado')
                                    <svg viewBox="0 0 18 18" fill="none"><path d="M5 5l8 8M13 5l-8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                                @elseif($doc)
                                    <svg viewBox="0 0 18 18" fill="none"><circle cx="9" cy="9" r="6" stroke="currentColor" stroke-width="1.5"/><path d="M9 6v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="9" cy="12.5" r=".75" fill="currentColor"/></svg>
                                @else
                                    <svg viewBox="0 0 18 18" fill="none"><path d="M9 4v6M9 12v.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><rect x="2" y="2" width="14" height="14" rx="3" stroke="currentColor" stroke-width="1.3"/></svg>
                                @endif
                            </div>
                            <div>
                                <div class="doc-req-name">{{ $nombre }}</div>
                                @if($doc)
                                    @php $badge = $doc->estado_badge; @endphp
                                    <div class="doc-req-status {{ $doc->estado === 'aprobado' ? 'ok' : ($doc->estado === 'rechazado' ? 'bad' : '') }}">
                                        {{ $badge['label'] }}
                                    </div>
                                    @if($doc->nota_admin)
                                        <div style="font-size:11px;color:var(--red);margin-top:2px">{{ $doc->nota_admin }}</div>
                                    @endif
                                @else
                                    <div class="doc-req-status">Pendiente de subir</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- ── SUBIR DOCUMENTO ── --}}
                <div class="upload-card">
                    <h3>Subir nuevo documento</h3>
                    <form method="POST" action="{{ route('documentos.store', $tramite) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div>
                                <label>Tipo de documento</label>
                                <select name="tipo" required>
                                    <option value="" disabled selected>Selecciona el tipo</option>
                                    <option value="identificacion">Identificación oficial</option>
                                    <option value="pasaporte">Pasaporte</option>
                                    <option value="curp">CURP</option>
                                    <option value="comprobante">Comprobante de domicilio</option>
                                    <option value="acta">Acta de nacimiento</option>
                                    <option value="otros">Otro documento</option>
                                </select>
                            </div>
                            <div>
                                <label>Archivo (PDF, JPG, PNG — máx. 10MB)</label>
                                <input type="file" name="archivo" accept=".pdf,.jpg,.jpeg,.png,.webp" required
                                    id="file-input" onchange="mostrarNombre(this)">
                                <div id="file-name" style="font-size:11px;color:var(--muted);margin-top:4px"></div>
                            </div>
                            <div>
                                <label style="opacity:0">Subir</label>
                                <button type="submit" class="btn-upload">Subir</button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- ── LISTA DE DOCUMENTOS SUBIDOS POR EL CLIENTE ── --}}
                @php $docsCliente = $tramite->documentos->where('categoria','cliente'); @endphp
                <div class="section-title">Documentos subidos ({{ $docsCliente->count() }})</div>
                <div class="docs-list">
                    @forelse($docsCliente as $doc)
                        @php
                            $isPdf = str_contains($doc->mime_type ?? '', 'pdf');
                            $badge = $doc->estado_badge;
                        @endphp
                        <div class="doc-item">
                            <div class="doc-file-icon {{ $isPdf ? 'pdf' : 'img' }}">
                                @if($isPdf)
                                    <svg viewBox="0 0 18 18" fill="none"><rect x="3" y="1" width="12" height="16" rx="2" stroke="#8B2020" stroke-width="1.3"/><path d="M6 6h6M6 9h6M6 12h4" stroke="#8B2020" stroke-width="1.3" stroke-linecap="round"/></svg>
                                @else
                                    <svg viewBox="0 0 18 18" fill="none"><rect x="2" y="2" width="14" height="14" rx="2" stroke="#1B4FD8" stroke-width="1.3"/><circle cx="6" cy="6" r="1.5" fill="#1B4FD8"/><path d="M2 12l4-4 3 3 2-2 5 5" stroke="#1B4FD8" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                @endif
                            </div>
                            <div class="doc-info">
                                <div class="doc-name">{{ $doc->nombre }}</div>
                                <div class="doc-meta">{{ $doc->nombre_original }} · {{ $doc->tamano_formateado }} · {{ $doc->created_at->format('d/m/Y H:i') }}</div>
                                @if($doc->nota_admin && $doc->estado === 'rechazado')
                                    <div class="doc-nota">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="5" stroke="currentColor" stroke-width="1.2"/><path d="M6 4v3M6 8.5v.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                                        {{ $doc->nota_admin }}
                                    </div>
                                @endif
                            </div>
                            <span class="badge badge-{{ $badge['color'] }}">{{ $badge['label'] }}</span>
                            <div class="doc-actions">
                                <a href="{{ Storage::url($doc->path) }}" target="_blank" style="color:var(--blue);font-size:12px;font-weight:600">Ver</a>
                                @if($doc->estado !== 'aprobado')
                                    <form method="POST" action="{{ route('documentos.destroy', $doc) }}" onsubmit="return confirm('¿Eliminar este documento?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">
                                            <svg viewBox="0 0 15 15" fill="none"><path d="M3 4h9M5 4V3h5v1M6 7v4M9 7v4" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><rect x="2" y="4" width="11" height="9" rx="1.5" stroke="currentColor" stroke-width="1.3"/></svg>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="empty">
                            <svg viewBox="0 0 40 40" fill="none"><rect x="6" y="4" width="28" height="32" rx="4" stroke="currentColor" stroke-width="2"/><path d="M13 14h14M13 20h14M13 26h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                            <p>Aún no has subido ningún documento.</p>
                        </div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function mostrarNombre(input) {
    const nombre = input.files[0]?.name || '';
    document.getElementById('file-name').textContent = nombre;
}
</script>
</body>
</html>