<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios — Admin Sell·U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:#0D1B3E; --navy2:#122050; --gold:#F5A623; --gold2:#E09415;
            --white:#FFFFFF; --gray:#F5F6FA; --gray2:#E8EAF0; --text:#333A50; --muted:#6B7394;
            --green:#0F6E4A; --green-bg:#E6F5EF; --amber:#92600A; --amber-bg:#FEF7E6;
            --blue:#1B4FD8; --blue-bg:#EEF3FF; --red:#8B2020; --red-bg:#FDEEEE;
            --purple:#534AB7; --purple-bg:#EEEDFE;
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
        .topbar { background:var(--white); border-bottom:1px solid var(--gray2); padding:14px 28px; display:flex; align-items:center; justify-content:space-between; }
        .topbar-title { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--navy); }
        .content { flex:1; overflow-y:auto; padding:28px; }
        .content-inner { max-width:1000px; margin:0 auto; }

        .alert { padding:12px 16px; border-radius:8px; font-size:13px; margin-bottom:18px; }
        .alert-success { background:var(--green-bg); color:var(--green); border:1px solid #5DCAA5; }
        .alert-error { background:var(--red-bg); color:var(--red); border:1px solid #F09595; }

        .badge { font-size:11px; font-weight:700; padding:4px 10px; border-radius:20px; }
        .badge-admin { background:#26215C; color:#CECBF6; }
        .badge-legal { background:var(--blue-bg); color:var(--blue); }
        .badge-contable { background:var(--green-bg); color:var(--green); }
        .badge-soporte { background:var(--amber-bg); color:var(--amber); }
        .badge-cliente { background:var(--gray2); color:var(--muted); }

        .grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:24px; }
        @media(max-width:800px) { .grid-2 { grid-template-columns:1fr; } }

        .card { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; margin-bottom:20px; }
        .card-header { padding:16px 20px; border-bottom:1px solid var(--gray2); display:flex; align-items:center; justify-content:space-between; }
        .card-header h3 { font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; color:var(--navy); margin:0; }
        .card-body { padding:20px; }

        label { display:block; font-size:12px; font-weight:700; color:var(--navy); margin-bottom:6px; }
        input[type=email], select { width:100%; padding:10px 12px; border:1px solid var(--gray2); border-radius:6px; font-family:'Open Sans',sans-serif; font-size:13px; color:var(--text); background:var(--white); outline:none; transition:border-color .2s; margin-bottom:14px; }
        input:focus, select:focus { border-color:var(--navy); }

        .btn { padding:9px 18px; border-radius:6px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; cursor:pointer; border:none; transition:all .2s; }
        .btn-navy { background:var(--navy); color:var(--white); }
        .btn-navy:hover { background:var(--navy2); }
        .btn-gold { background:var(--gold); color:var(--navy); }
        .btn-gold:hover { background:var(--gold2); }
        .btn-sm { padding:6px 12px; font-size:11px; }
        .btn-full { width:100%; text-align:center; }
        .btn-danger { background:var(--red-bg); color:var(--red); }
        .btn-danger:hover { background:#F7C1C1; }

        .table-wrap { background:var(--white); border:1px solid var(--gray2); border-radius:12px; overflow:hidden; }
        table { width:100%; border-collapse:collapse; }
        th { padding:11px 16px; text-align:left; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; border-bottom:1px solid var(--gray2); background:var(--gray); }
        td { padding:12px 16px; font-size:13px; border-bottom:1px solid var(--gray2); vertical-align:middle; }
        tr:last-child td { border-bottom:none; }
        tr:hover td { background:var(--gray); }

        .user-cell { display:flex; align-items:center; gap:10px; }
        .avatar { width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; font-weight:700; flex-shrink:0; }
        .avatar-admin { background:#26215C; color:#CECBF6; }
        .avatar-legal { background:var(--blue-bg); color:var(--blue); }
        .avatar-contable { background:var(--green-bg); color:var(--green); }
        .avatar-soporte { background:var(--amber-bg); color:var(--amber); }
        .avatar-cliente { background:var(--gray2); color:var(--muted); }
        .user-name { font-weight:600; color:var(--navy); font-size:13px; }
        .user-email { font-size:11px; color:var(--muted); }

        .status-dot { width:8px; height:8px; border-radius:50%; display:inline-block; margin-right:6px; }
        .status-dot.active { background:var(--green); }
        .status-dot.inactive { background:var(--red); }

        .role-form { display:flex; gap:8px; align-items:center; }
        .role-form select { width:auto; margin:0; padding:6px 10px; font-size:12px; }

        .invite-link { background:var(--blue-bg); border:1px solid #B5D4F4; border-radius:8px; padding:12px 16px; font-size:12px; color:var(--blue); word-break:break-all; margin-top:8px; display:flex; align-items:center; gap:10px; justify-content:space-between; }
        .btn-copy { padding:5px 12px; background:var(--blue); color:white; border:none; border-radius:5px; font-size:11px; font-weight:700; cursor:pointer; white-space:nowrap; }

        .inv-item { display:flex; align-items:center; justify-content:space-between; padding:10px 0; border-bottom:1px solid var(--gray2); font-size:13px; gap:12px; }
        .inv-item:last-child { border-bottom:none; }
        .inv-email { font-weight:600; color:var(--navy); }
        .inv-meta { font-size:11px; color:var(--muted); margin-top:2px; }

        .empty-row td { text-align:center; padding:32px; color:var(--muted); font-size:13px; }

        .roles-info { display:grid; grid-template-columns:repeat(4,1fr); gap:10px; margin-bottom:20px; }
        .role-card { padding:12px 14px; border-radius:8px; border:1px solid var(--gray2); }
        .role-card-name { font-size:12px; font-weight:700; margin-bottom:4px; }
        .role-card-desc { font-size:11px; color:var(--muted); line-height:1.5; }
        .role-card.admin { background:#EEEDFE; border-color:#AFA9EC; }
        .role-card.admin .role-card-name { color:#3C3489; }
        .role-card.legal { background:var(--blue-bg); border-color:#85B7EB; }
        .role-card.legal .role-card-name { color:var(--blue); }
        .role-card.contable { background:var(--green-bg); border-color:#97C459; }
        .role-card.contable .role-card-name { color:var(--green); }
        .role-card.soporte { background:var(--amber-bg); border-color:#EF9F27; }
        .role-card.soporte .role-card-name { color:var(--amber); }
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
            <a href="{{ route('admin.usuarios.index') }}" class="sidebar-link active">
                <svg viewBox="0 0 16 16" fill="none"><circle cx="6" cy="5" r="2.5" stroke="currentColor" stroke-width="1.3"/><path d="M1 14c0-2.8 2.2-5 5-5" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/><path d="M11 9v6M8 12h6" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg>
                Usuarios
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
            <div class="topbar-title">Gestión de usuarios y roles</div>
        </div>

        <div class="content">
            <div class="content-inner">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-error">{{ $errors->first() }}</div>
                @endif

                {{-- ROLES INFO --}}
                <div class="roles-info">
                    <div class="role-card admin">
                        <div class="role-card-name">Admin</div>
                        <div class="role-card-desc">Acceso total al sistema</div>
                    </div>
                    <div class="role-card legal">
                        <div class="role-card-name">Legal</div>
                        <div class="role-card-desc">Gestiona trámites y documentos LLC</div>
                    </div>
                    <div class="role-card contable">
                        <div class="role-card-name">Contable</div>
                        <div class="role-card-desc">Acceso a finanzas y clientes</div>
                    </div>
                    <div class="role-card soporte">
                        <div class="role-card-name">Soporte</div>
                        <div class="role-card-desc">Ve trámites, agrega notas</div>
                    </div>
                </div>

                <div class="grid-2">

                    {{-- INVITAR USUARIO --}}
                    <div class="card">
                        <div class="card-header"><h3>Invitar nuevo usuario</h3></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.usuarios.invite') }}">
                                @csrf
                                <label>Correo electrónico</label>
                                <input type="email" name="email" placeholder="colaborador@email.com" required>
                                <label>Rol asignado</label>
                                <select name="role">
                                    <option value="legal">Legal</option>
                                    <option value="contable">Contable</option>
                                    <option value="soporte">Soporte</option>
                                    <option value="admin">Admin</option>
                                </select>
                                <button type="submit" class="btn btn-gold btn-full">Enviar invitación</button>
                            </form>
                        </div>
                    </div>

                    {{-- INVITACIONES PENDIENTES --}}
                    <div class="card">
                        <div class="card-header">
                            <h3>Invitaciones pendientes</h3>
                            <span style="font-size:12px;color:var(--muted)">{{ $invitaciones->count() }} activas</span>
                        </div>
                        <div class="card-body">
                            @forelse($invitaciones as $inv)
                                <div class="inv-item">
                                    <div>
                                        <div class="inv-email">{{ $inv->email }}</div>
                                        <div class="inv-meta">
                                            <span class="badge badge-{{ $inv->role }}">{{ ucfirst($inv->role) }}</span>
                                            · Expira {{ $inv->expires_at->format('d/m/Y') }}
                                        </div>
                                    </div>
                                    <button onclick="copiarLink('{{ route('invitacion.aceptar', $inv->token) }}')" class="btn-copy">Copiar link</button>
                                </div>
                            @empty
                                <p style="font-size:13px;color:var(--muted);text-align:center;padding:20px 0">No hay invitaciones pendientes.</p>
                            @endforelse
                        </div>
                    </div>

                </div>

                {{-- TABLA DE USUARIOS STAFF --}}
                <div class="card">
                    <div class="card-header">
                        <h3>Equipo Sell·U ({{ $usuarios->count() }} usuarios)</h3>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Rol actual</th>
                                    <th>Estado</th>
                                    <th>Desde</th>
                                    <th>Cambiar rol</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($usuarios as $usuario)
                                    <tr>
                                        <td>
                                            <div class="user-cell">
                                                <div class="avatar avatar-{{ $usuario->role }}">
                                                    {{ strtoupper(substr($usuario->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div class="user-name">{{ $usuario->name }}</div>
                                                    <div class="user-email">{{ $usuario->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $usuario->role }}">{{ ucfirst($usuario->role) }}</span>
                                        </td>
                                        <td>
                                            <span class="status-dot {{ $usuario->activo ? 'active' : 'inactive' }}"></span>
                                            {{ $usuario->activo ? 'Activo' : 'Inactivo' }}
                                        </td>
                                        <td style="font-size:12px;color:var(--muted)">{{ $usuario->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            @if($usuario->id !== auth()->id())
                                                <form method="POST" action="{{ route('admin.usuarios.role', $usuario) }}" class="role-form">
                                                    @csrf
                                                    @method('PATCH')
                                                    <select name="role">
                                                        @foreach(['admin','legal','contable','soporte','cliente'] as $rol)
                                                            <option value="{{ $rol }}" {{ $usuario->role === $rol ? 'selected' : '' }}>{{ ucfirst($rol) }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-sm btn-navy">Guardar</button>
                                                </form>
                                            @else
                                                <span style="font-size:12px;color:var(--muted)">Eres tú</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($usuario->id !== auth()->id())
                                                <form method="POST" action="{{ route('admin.usuarios.toggle', $usuario) }}" onsubmit="return confirm('¿Confirmar cambio de estado?')">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm {{ $usuario->activo ? 'btn-danger' : 'btn-gold' }}">
                                                        {{ $usuario->activo ? 'Desactivar' : 'Activar' }}
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="empty-row"><td colspan="6">No hay usuarios de staff todavía.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function copiarLink(url) {
    navigator.clipboard.writeText(url).then(() => {
        alert('Link copiado al portapapeles');
    });
}
</script>
</body>
</html>