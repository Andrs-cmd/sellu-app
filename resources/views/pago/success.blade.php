<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago exitoso — Sell·U</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:#0D1B3E; --navy2:#122050; --gold:#F5A623; --gold2:#E09415;
            --white:#FFFFFF; --gray:#F5F6FA; --gray2:#E8EAF0; --text:#333A50; --muted:#6B7394;
            --green:#0F6E4A; --green-bg:#E6F5EF;
        }
        body { font-family:'Open Sans',sans-serif; background:var(--gray); color:var(--text); min-height:100vh; display:flex; align-items:center; justify-content:center; padding:20px; }

        .card { background:var(--white); border:1px solid var(--gray2); border-radius:16px; width:100%; max-width:480px; overflow:hidden; text-align:center; }

        .card-top { background:var(--navy); padding:40px 36px 36px; }
        .logo { font-family:'Montserrat',sans-serif; font-size:26px; font-weight:900; color:var(--white); letter-spacing:-1px; margin-bottom:24px; }
        .logo span { color:var(--gold); }

        .check-circle { width:72px; height:72px; border-radius:50%; background:rgba(15,110,74,.3); border:2px solid #5DCAA5; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; }
        .check-circle svg { width:36px; height:36px; color:#5DCAA5; }

        .card-top h1 { font-family:'Montserrat',sans-serif; font-size:22px; font-weight:800; color:var(--white); margin-bottom:8px; }
        .card-top p { font-size:14px; color:rgba(255,255,255,.55); line-height:1.6; }

        .card-body { padding:32px 36px; }

        .summary { background:var(--gray); border:1px solid var(--gray2); border-radius:10px; padding:18px 20px; margin-bottom:24px; text-align:left; }
        .summary-row { display:flex; justify-content:space-between; font-size:13px; padding:6px 0; border-bottom:1px solid var(--gray2); }
        .summary-row:last-child { border-bottom:none; font-weight:700; color:var(--navy); font-size:14px; }
        .summary-label { color:var(--muted); }
        .summary-value { font-weight:600; color:var(--navy); }

        .steps { text-align:left; margin-bottom:28px; }
        .steps h3 { font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; color:var(--navy); margin-bottom:14px; }
        .step-item { display:flex; align-items:flex-start; gap:12px; margin-bottom:12px; }
        .step-num { width:24px; height:24px; border-radius:50%; background:var(--gold); color:var(--navy); font-size:11px; font-weight:800; display:flex; align-items:center; justify-content:center; flex-shrink:0; margin-top:1px; }
        .step-text { font-size:13px; color:var(--text); line-height:1.5; }
        .step-text strong { color:var(--navy); font-weight:700; display:block; margin-bottom:2px; }

        .btn-continue { display:block; width:100%; padding:14px; background:var(--navy); color:var(--white); border:none; border-radius:8px; font-family:'Montserrat',sans-serif; font-size:14px; font-weight:700; cursor:pointer; text-align:center; text-decoration:none; transition:background .2s; margin-bottom:12px; }
        .btn-continue:hover { background:var(--navy2); }
        .btn-secondary { display:block; width:100%; padding:13px; background:var(--gray); color:var(--navy); border:1px solid var(--gray2); border-radius:8px; font-family:'Montserrat',sans-serif; font-size:13px; font-weight:700; cursor:pointer; text-align:center; text-decoration:none; transition:background .2s; }
        .btn-secondary:hover { background:var(--gray2); }

        .confetti { font-size:32px; margin-bottom:12px; display:block; }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-top">
            <div class="logo">Sell<span>·U</span></div>
            <div class="check-circle">
                <svg viewBox="0 0 36 36" fill="none"><path d="M8 18l7 7 13-13" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h1>¡Pago exitoso!</h1>
            <p>Tu pago fue procesado correctamente. Ahora completemos los datos de tu empresa.</p>
        </div>

        <div class="card-body">

            {{-- RESUMEN --}}
            <div class="summary">
                <div class="summary-row">
                    <span class="summary-label">Plan</span>
                    <span class="summary-value">{{ $tramite->plan_seleccionado }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Empresa</span>
                    <span class="summary-value">{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Estado del pago</span>
                    <span class="summary-value" style="color:var(--green)">Pagado</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Total pagado</span>
                    <span class="summary-value">${{ number_format($tramite->precio_plan, 0) }} USD</span>
                </div>
            </div>

            {{-- PRÓXIMOS PASOS --}}
            <div class="steps">
                <h3>Próximos pasos</h3>
                <div class="step-item">
                    <div class="step-num">1</div>
                    <div class="step-text">
                        <strong>Completa los datos de tu empresa</strong>
                        Nombre, dirección y configuración legal de tu LLC.
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-num">2</div>
                    <div class="step-text">
                        <strong>Sube tus documentos</strong>
                        Identificación, CURP o pasaporte y comprobante de domicilio.
                    </div>
                </div>
                <div class="step-item">
                    <div class="step-num">3</div>
                    <div class="step-text">
                        <strong>Nuestro equipo procesa tu LLC</strong>
                        Te notificaremos cuando tu empresa esté lista (5-10 días hábiles).
                    </div>
                </div>
            </div>

            <a href="{{ route('tramite.create') }}?tramite_id={{ $tramite->id }}&step=3" class="btn-continue">
                Continuar con mi solicitud →
            </a>
            <a href="{{ route('dashboard') }}" class="btn-secondary">
                Ir a mi panel
            </a>

        </div>
    </div>
</body>
</html>