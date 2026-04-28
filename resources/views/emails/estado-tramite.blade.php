<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #F5F6FA; margin: 0; padding: 40px 20px; }
        .container { max-width: 520px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; border: 1px solid #E8EAF0; }
        .header { background: #0D1B3E; padding: 32px; text-align: center; }
        .logo { font-size: 28px; font-weight: 900; color: white; letter-spacing: -1px; }
        .logo span { color: #F5A623; }
        .body { padding: 32px; }
        h2 { color: #0D1B3E; font-size: 20px; margin-bottom: 12px; }
        p { color: #6B7394; font-size: 14px; line-height: 1.6; margin-bottom: 16px; }
        .status-box { border-radius: 8px; padding: 16px 20px; margin: 20px 0; display: flex; align-items: center; gap: 12px; }
        .status-box.pendiente { background: #FEF7E6; border: 1px solid #FAC775; }
        .status-box.en_proceso { background: #EEF3FF; border: 1px solid #B5D4F4; }
        .status-box.completado { background: #E6F5EF; border: 1px solid #5DCAA5; }
        .status-box.cancelado { background: #FDEEEE; border: 1px solid #F09595; }
        .status-label { font-size: 13px; font-weight: 700; }
        .status-label.pendiente { color: #92600A; }
        .status-label.en_proceso { color: #1B4FD8; }
        .status-label.completado { color: #0F6E4A; }
        .status-label.cancelado { color: #8B2020; }
        .info-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #E8EAF0; font-size: 13px; }
        .info-row:last-child { border-bottom: none; }
        .info-label { color: #6B7394; }
        .info-value { font-weight: 600; color: #0D1B3E; }
        .btn { display: block; background: #F5A623; color: #0D1B3E; text-decoration: none; text-align: center; padding: 14px 32px; border-radius: 8px; font-weight: 700; font-size: 15px; margin: 24px 0; }
        .footer { text-align: center; padding: 20px 32px; border-top: 1px solid #E8EAF0; font-size: 12px; color: #6B7394; }

        @php
            $estados = [
                'pendiente'  => ['emoji' => '⏳', 'texto' => 'Tu solicitud está siendo revisada por nuestro equipo.'],
                'en_proceso' => ['emoji' => '🔄', 'texto' => 'Tu empresa está siendo procesada ante el estado correspondiente.'],
                'completado' => ['emoji' => '✅', 'texto' => '¡Tu empresa está lista! Puedes descargar tus documentos desde el portal.'],
                'cancelado'  => ['emoji' => '❌', 'texto' => 'Tu trámite fue cancelado. Contáctanos para más información.'],
            ];
            $info = $estados[$tramite->estado] ?? ['emoji' => '📋', 'texto' => 'El estado de tu trámite fue actualizado.'];
        @endphp
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">Sell<span>·U</span></div>
        </div>
        <div class="body">
            <h2>Actualización de tu trámite</h2>
            <p>Hola <strong>{{ $tramite->user->name }}</strong>, hay una actualización en el proceso de constitución de tu empresa.</p>

            <div class="status-box {{ $tramite->estado }}">
                <span style="font-size:24px">{{ $info['emoji'] }}</span>
                <div>
                    <div class="status-label {{ $tramite->estado }}">
                        {{ ucfirst(str_replace('_', ' ', $tramite->estado)) }}
                    </div>
                    <div style="font-size:13px;color:#6B7394;margin-top:3px">{{ $info['texto'] }}</div>
                </div>
            </div>

            <div style="background:#F5F6FA;border-radius:8px;padding:16px;margin:16px 0">
                <div class="info-row"><span class="info-label">Empresa</span><span class="info-value">{{ $tramite->nombre_empresa ?? '—' }}</span></div>
                <div class="info-row"><span class="info-label">Tipo</span><span class="info-value">{{ $tramite->tipo_entidad }} · {{ $tramite->jurisdiccion }}</span></div>
                <div class="info-row"><span class="info-label">Plan</span><span class="info-value">{{ $tramite->plan_seleccionado ?? '—' }}</span></div>
                @if($tramite->numero_registro)
                    <div class="info-row"><span class="info-label">Registro</span><span class="info-value">{{ $tramite->numero_registro }}</span></div>
                @endif
            </div>

            <a href="{{ config('app.url') }}/dashboard" class="btn">Ver mi panel →</a>

            <p style="font-size:12px">Si tienes alguna pregunta, responde a este correo o contáctanos por WhatsApp.</p>
        </div>
        <div class="footer">
            Sell·U LATAM · Spring Hill, Florida · <a href="mailto:contacto@sellu.co" style="color:#1B4FD8">contacto@sellu.co</a>
        </div>
    </div>
</body>
</html>