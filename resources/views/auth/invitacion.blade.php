<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceptar invitación — Sell·U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:#0D1B3E; --navy2:#122050; --gold:#F5A623; --gold2:#E09415;
            --white:#FFFFFF; --gray:#F5F6FA; --gray2:#E8EAF0; --text:#333A50; --muted:#6B7394;
            --green:#0F6E4A; --green-bg:#E6F5EF; --blue:#1B4FD8; --blue-bg:#EEF3FF;
            --red:#8B2020; --red-bg:#FDEEEE;
        }
        body { font-family:'Montserrat',sans-serif; background:var(--gray); color:var(--text); min-height:100vh; display:flex; align-items:center; justify-content:center; padding:20px; }

        .card { background:var(--white); border:1px solid var(--gray2); border-radius:16px; width:100%; max-width:440px; overflow:hidden; }

        .card-top { background:var(--navy); padding:32px 36px 28px; text-align:center; }
        .logo { font-family:'Montserrat',sans-serif; font-size:28px; font-weight:900; color:var(--white); letter-spacing:-1px; margin-bottom:16px; }
        .logo span { color:var(--gold); }
        .card-top h2 { font-family:'Montserrat',sans-serif; font-size:16px; font-weight:700; color:var(--white); margin-bottom:6px; }
        .card-top p { font-size:13px; color:rgba(255,255,255,.5); line-height:1.5; }

        .role-badge { display:inline-flex; align-items:center; gap:6px; background:rgba(245,166,35,.15); color:var(--gold); font-size:12px; font-weight:700; padding:5px 14px; border-radius:20px; margin-top:12px; text-transform:uppercase; letter-spacing:.04em; }

        .card-body { padding:28px 36px; }

        label { display:block; font-size:12px; font-weight:700; color:var(--navy); margin-bottom:6px; }
        input { width:100%; padding:11px 14px; border:1px solid var(--gray2); border-radius:8px; font-family:'Montserrat',sans-serif; font-size:14px; color:var(--text); background:var(--white); outline:none; transition:border-color .2s; margin-bottom:16px; }
        input:focus { border-color:var(--navy); }
        input[readonly] { background:var(--gray); color:var(--muted); cursor:not-allowed; }

        .pass-wrap { position:relative; }
        .pass-wrap input { padding-right:44px; }
        .pass-toggle { position:absolute; right:12px; top:11px; background:none; border:none; cursor:pointer; color:var(--muted); font-size:12px; padding:0; }

        .req-grid { display:grid; grid-template-columns:1fr 1fr; gap:6px; margin-top:-8px; margin-bottom:16px; }
        .req-item { display:flex; align-items:center; gap:6px; font-size:11px; color:var(--muted); }
        .req-dot { width:7px; height:7px; border-radius:50%; border:1.5px solid var(--gray2); flex-shrink:0; transition:all .2s; }
        .req-dot.valid { background:var(--green); border-color:var(--green); }

        .btn-submit { width:100%; padding:13px; background:var(--navy); color:var(--white); border:none; border-radius:8px; font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; cursor:pointer; transition:background .2s; margin-top:4px; }
        .btn-submit:hover { background:var(--navy2); }

        .info-box { background:var(--blue-bg); border:1px solid #B5D4F4; border-radius:8px; padding:12px 14px; font-size:12px; color:#0C447C; margin-bottom:20px; display:flex; gap:8px; align-items:flex-start; line-height:1.5; }
        .info-box svg { width:16px; height:16px; flex-shrink:0; margin-top:1px; }

        .alert-error { background:var(--red-bg); color:var(--red); border:1px solid #F09595; padding:12px 14px; border-radius:8px; font-size:13px; margin-bottom:16px; }

        .expiry { text-align:center; font-size:12px; color:var(--muted); margin-top:16px; }
        .expiry strong { color:var(--navy); }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-top">
            <div class="logo">Sell<span>·U</span></div>
            <h2>Has sido invitado al equipo</h2>
            <p>Crea tu cuenta para acceder al panel de administración de Sell·U</p>
            <div class="role-badge">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="4" r="2.5" stroke="currentColor" stroke-width="1.2"/><path d="M1 11c0-2.8 2.2-5 5-5s5 2.2 5 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                Rol: {{ ucfirst($invitacion->role) }}
            </div>
        </div>

        <div class="card-body">

            @if($errors->any())
                <div class="alert-error">{{ $errors->first() }}</div>
            @endif

            <div class="info-box">
                <svg viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm-.75-4.75a.75.75 0 001.5 0V7.75a.75.75 0 00-1.5 0v2.5zm.75-5.5a1 1 0 110-2 1 1 0 010 2z" clip-rule="evenodd"/></svg>
                Accederás como <strong>{{ ucfirst($invitacion->role) }}</strong> con el email <strong>{{ $invitacion->email }}</strong>. Solo necesitas crear una contraseña.
            </div>

            <form method="POST" action="{{ route('invitacion.registrar', $invitacion->token) }}">
                @csrf

                <label>Correo electrónico</label>
                <input type="email" value="{{ $invitacion->email }}" readonly>

                <label>Tu nombre completo</label>
                <input type="text" name="name" placeholder="Ej: María García" required value="{{ old('name') }}" autofocus>

                <label>Contraseña</label>
                <div class="pass-wrap">
                    <input type="password" name="password" id="password" placeholder="Mínimo 8 caracteres" required oninput="checkPass(this.value)">
                    <button type="button" class="pass-toggle" onclick="togglePass()">Ver</button>
                </div>

                <div class="req-grid">
                    <div class="req-item"><div class="req-dot" id="req-len"></div>8+ caracteres</div>
                    <div class="req-item"><div class="req-dot" id="req-upper"></div>Mayúscula</div>
                    <div class="req-item"><div class="req-dot" id="req-num"></div>Número</div>
                    <div class="req-item"><div class="req-dot" id="req-special"></div>Símbolo</div>
                </div>

                <label>Confirmar contraseña</label>
                <input type="password" name="password_confirmation" placeholder="Repite tu contraseña" required>

                <button type="submit" class="btn-submit">Crear cuenta y entrar</button>
            </form>

            <div class="expiry">
                Invitación válida hasta <strong>{{ $invitacion->expires_at->format('d/m/Y H:i') }}</strong>
            </div>
        </div>
    </div>

<script>
function checkPass(v) {
    document.getElementById('req-len').classList.toggle('valid', v.length >= 8);
    document.getElementById('req-upper').classList.toggle('valid', /[A-Z]/.test(v));
    document.getElementById('req-num').classList.toggle('valid', /[0-9]/.test(v));
    document.getElementById('req-special').classList.toggle('valid', /[^A-Za-z0-9]/.test(v));
}
function togglePass() {
    const input = document.getElementById('password');
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>
</body>
</html>
