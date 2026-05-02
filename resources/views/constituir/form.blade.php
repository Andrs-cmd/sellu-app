<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constituye tu Empresa — Sell·U</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy: #0D1B3E; --navy2: #122050; --gold: #F5A623; --gold2: #E09415;
            --white: #FFFFFF; --gray: #F5F6FA; --gray2: #E8EAF0; --text: #333A50; --muted: #6B7394;
            --green: #25D366; --red: #E53935;
        }
        body { font-family: 'Montserrat', sans-serif; background: #f8faff; color: var(--text); min-height: 100vh; }
        a { text-decoration: none; color: inherit; }

        .form-header { background: var(--white); border-bottom: 1px solid var(--gray2); padding: 16px 24px; display: flex; align-items: center; justify-content: space-between; }
        .form-logo { font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 900; color: var(--navy); letter-spacing: -1px; }
        .form-logo span { color: var(--gold); }
        .form-back { font-size: 13px; color: var(--muted); display: flex; align-items: center; gap: 5px; }
        .form-back:hover { color: var(--navy); }

        .steps-wrap { background: var(--white); border-bottom: 1px solid var(--gray2); padding: 0 24px; }
        .steps { display: flex; max-width: 700px; margin: 0 auto; }
        .step-item { flex: 1; text-align: center; padding: 14px 8px 12px; font-size: 12px; font-weight: 600; color: var(--muted); border-bottom: 3px solid transparent; transition: all .2s; }
        .step-item.active { color: var(--gold); border-bottom-color: var(--gold); }
        .step-item.done { color: var(--navy); border-bottom-color: var(--navy); }

        .form-title { text-align: center; padding: 32px 24px 0; font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 800; color: var(--navy); }
        .form-container { max-width: 900px; margin: 28px auto; padding: 0 20px 60px; }

        .card { background: var(--white); border-radius: 10px; border: 1px solid var(--gray2); overflow: visible; margin-bottom: 20px; }
        .card-header { padding: 18px 24px; border-bottom: 1px solid var(--gray2); }
        .card-header h3 { font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 700; color: var(--navy); margin: 0; display: flex; align-items: center; gap: 8px; }
        .card-body { padding: 24px; }

        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        @media(max-width:700px) { .grid-2 { grid-template-columns: 1fr; } }

        label { display: block; font-size: 13px; font-weight: 700; color: var(--navy); margin-bottom: 7px; }
        input, select, textarea { width: 100%; padding: 11px 14px; border: 1px solid var(--gray2); border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 14px; color: var(--text); background: var(--white); outline: none; transition: border-color .2s; margin-bottom: 18px; }
        input:focus, select:focus, textarea:focus { border-color: var(--navy); }
        input::placeholder { color: var(--muted); }

        .radio-group { display: flex; flex-direction: column; gap: 12px; margin-bottom: 18px; }
        .radio-option { display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 12px 16px; border: 1px solid var(--gray2); border-radius: 8px; transition: border-color .2s; }
        .radio-option:hover { border-color: var(--navy); }
        .radio-option input { width: auto; margin: 0; }
        .radio-option-text { font-size: 13px; font-weight: 600; color: var(--navy); }
        .radio-option-badge { font-size: 10px; background: var(--gold); color: var(--navy); padding: 2px 8px; border-radius: 10px; font-weight: 700; margin-left: 6px; }

        .member-block { border: 1px solid var(--gray2); border-radius: 8px; overflow: hidden; margin-bottom: 16px; }
        .member-header { background: var(--gray); padding: 10px 16px; font-weight: 700; font-size: 13px; color: var(--navy); display: flex; justify-content: space-between; align-items: center; }
        .member-body { padding: 20px; }
        .member-remove { background: none; border: none; color: var(--muted); cursor: pointer; font-size: 18px; line-height: 1; }
        .member-remove:hover { color: var(--red); }
        .checkbox-row { display: flex; align-items: center; gap: 8px; margin-bottom: 16px; }
        .checkbox-row input { width: auto; margin: 0; }
        .checkbox-row label { margin: 0; font-weight: 400; }

        .pricing-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
        @media(max-width:700px) { .pricing-grid { grid-template-columns: 1fr; } }
        .price-card { border: 1.5px solid var(--gray2); border-radius: 10px; padding: 24px; text-align: center; position: relative; transition: all .2s; cursor: pointer; }
        .price-card:hover { border-color: var(--gold); }
        .price-card.featured { border-color: var(--navy); }
        .popular-badge { position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: var(--gold); color: var(--navy); font-size: 10px; font-weight: 800; padding: 3px 14px; border-radius: 20px; white-space: nowrap; }
        .price-name { font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
        .price-sub { font-size: 12px; color: var(--muted); margin-bottom: 14px; }
        .price-amount { font-family: 'Montserrat', sans-serif; font-size: 36px; font-weight: 900; color: var(--navy); margin-bottom: 4px; }
        .price-amount .currency { font-size: 18px; vertical-align: top; margin-top: 8px; display: inline-block; }
        .price-period { font-size: 11px; color: var(--muted); margin-bottom: 18px; }
        .price-features { list-style: none; text-align: left; margin-bottom: 20px; }
        .price-features li { font-size: 12px; color: var(--text); padding: 4px 0; display: flex; align-items: flex-start; gap: 6px; }
        .price-features li::before { content: '✓'; color: var(--gold); font-weight: 700; flex-shrink: 0; }
        .btn-buy { width: 100%; padding: 11px; background: var(--navy); color: var(--white); border: none; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; cursor: pointer; transition: background .2s; }
        .btn-buy:hover { background: var(--navy2); }

        .state-selector-wrap { text-align: center; margin-bottom: 28px; display: flex; align-items: center; justify-content: center; gap: 12px; }
        .state-selector-wrap label { margin: 0; font-size: 14px; }
        .state-selector-wrap select { width: auto; margin: 0; }

        .btn-continue { display: block; width: 44%; margin: 24px auto 0; padding: 14px; background: var(--navy); color: var(--white); border: none; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 700; cursor: pointer; transition: background .2s; text-align: center; }
        .btn-continue:hover { background: var(--navy2); }
        .btn-add-member { width: 100%; padding: 11px; background: var(--gray); border: 1px solid var(--gray2); color: var(--navy); border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; cursor: pointer; margin-bottom: 16px; transition: background .2s; }
        .btn-add-member:hover { background: var(--gray2); }

        .modal-overlay { position: fixed; inset: 0; background: rgba(0,0,0,.5); display: flex; align-items: center; justify-content: center; z-index: 100; }
        .modal-overlay.hidden { display: none; }
        .modal { background: var(--white); border-radius: 10px; width: 90%; max-width: 520px; overflow: hidden; }
        .modal-header { padding: 18px 24px; border-bottom: 1px solid var(--gray2); }
        .modal-header h3 { font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 700; color: var(--navy); margin: 0; }
        .modal-body { padding: 24px; }
        .modal-footer { padding: 16px 24px; border-top: 1px solid var(--gray2); display: flex; justify-content: flex-end; gap: 10px; }
        .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; }
        .btn-cancel { padding: 10px 20px; background: var(--gray2); color: var(--text); border: none; border-radius: 6px; font-size: 13px; font-weight: 600; cursor: pointer; }
        .btn-save { padding: 10px 20px; background: var(--navy); color: var(--white); border: none; border-radius: 6px; font-size: 13px; font-weight: 700; cursor: pointer; }

        .alert { padding: 12px 16px; border-radius: 6px; font-size: 13px; margin-bottom: 16px; }
        .alert-error { background: #FDEEEE; color: #8B2020; border: 1px solid #F09595; }
        .alert-success { background: #E6F5EF; color: #0F6E4A; border: 1px solid #5DCAA5; }

        .step-panel { display: none; }
        .step-panel.active { display: block; }

        .section-subtitle { font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 700; color: var(--navy); margin: 24px 0 16px; display: flex; align-items: center; gap: 7px; }

        .faq-simple details { border-bottom: 1px solid var(--gray2); }
        .faq-simple summary { padding: 12px 0; font-size: 13px; font-weight: 600; color: var(--navy); cursor: pointer; }
        .faq-simple p { font-size: 13px; color: var(--muted); padding-bottom: 12px; line-height: 1.6; }

        /* ── TOOLTIPS ── */
        .tt { position: relative; display: inline-flex; align-items: center; margin-left: 6px; vertical-align: middle; }
        .tt-btn { width: 18px; height: 18px; border-radius: 50%; background: #EEF3FF; border: 1.5px solid #B5D4F4; color: #1B4FD8; font-size: 11px; font-weight: 800; cursor: pointer; line-height: 1; display: flex; align-items: center; justify-content: center; padding: 0; transition: all .2s; flex-shrink: 0; }
        .tt-btn:hover { background: #1B4FD8; color: white; border-color: #1B4FD8; }
        .tt-box { display: none; position: absolute; z-index: 9999; background: var(--navy); color: white; font-size: 12px; font-weight: 400; line-height: 1.6; padding: 10px 13px; border-radius: 8px; width: 230px; box-shadow: 0 4px 20px rgba(0,0,0,.25); bottom: calc(100% + 8px); left: 50%; transform: translateX(-50%); }
        .tt-box::after { content: ''; position: absolute; top: 100%; left: 50%; transform: translateX(-50%); border: 6px solid transparent; border-top-color: var(--navy); }
        .tt-box.right { left: calc(100% + 8px); bottom: auto; top: 50%; transform: translateY(-50%); }
        .tt-box.right::after { right: 100%; left: auto; top: 50%; transform: translateY(-50%); border-top-color: transparent; border-right-color: var(--navy); }
        .tt-box.visible { display: block; }

        label .tt { margin-left: 5px; }

        .card-header { padding: 18px 24px; border-bottom: 1px solid var(--gray2); overflow: visible; position: relative; }
.card-body .tt-box { bottom: auto; top: calc(100% + 8px); }
.card-body .tt-box::after { top: auto; bottom: 100%; border-top-color: transparent; border-bottom-color: var(--navy); }
    </style>
</head>
<body>

<div class="form-header">
    <div class="form-logo">Sell<span>·U</span></div>
    <a href="{{ route('dashboard') }}" class="form-back">
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2L4 7l5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
        Volver al panel
    </a>
</div>

<div class="steps-wrap">
    <div class="steps">
        <div class="step-item active" id="step-label-1">Cuenta y orden</div>
        <div class="step-item" id="step-label-2">Pago</div>
        <div class="step-item" id="step-label-3">Compañía</div>
        <div class="step-item" id="step-label-4">Gestión</div>
        <div class="step-item" id="step-label-5">Contacto</div>
    </div>
</div>

<div class="form-title">Constituye tu Empresa</div>

<div class="form-container">
    <div id="alert-box" class="alert alert-error" style="display:none"></div>

    {{-- PASO 1 --}}
    <div class="step-panel active" id="panel-1">
        <div class="grid-2">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Constituir una nueva empresa
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Elige el tipo de entidad legal y el estado de EE.UU. donde quieres registrar tu empresa. Cada estado tiene diferentes costos y beneficios fiscales.</div></span>
                    </h3>
                </div>
                <div class="card-body">
                    <label>
                        Tipo de entidad
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">La LLC es la opción más popular para emprendedores latinos por su flexibilidad fiscal y protección de activos personales. La Corporación es ideal si planeas recibir inversión.</div></span>
                    </label>
                    <select id="tipo_entidad">
                        <option value="LLC">LLC</option>
                        <option value="Corporación">Corporación</option>
                        <option value="Corporación Sin fines de lucro">Corporación Sin fines de lucro</option>
                    </select>

                    <label>
                        Jurisdicción (estado)
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">El estado donde registras tu empresa afecta los costos anuales y requisitos legales. Florida, Wyoming y Delaware son los más populares para no residentes.</div></span>
                    </label>
                    <select id="jurisdiccion">
                        <option value="" disabled selected>Seleccione un estado</option>
                        <option value="AL">Alabama</option><option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option><option value="AR">Arkansas</option>
                        <option value="CA">California</option><option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option><option value="DE">Delaware</option>
                        <option value="FL">Florida</option><option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option><option value="ID">Idaho</option>
                        <option value="IL">Illinois</option><option value="IN">Indiana</option>
                        <option value="IA">Iowa</option><option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option><option value="LA">Louisiana</option>
                        <option value="ME">Maine</option><option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option><option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option><option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option><option value="MT">Montana</option>
                        <option value="NE">Nebraska</option><option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option><option value="NY">New York</option>
                        <option value="NC">North Carolina</option><option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option><option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option><option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option><option value="TN">Tennessee</option>
                        <option value="TX">Texas</option><option value="UT">Utah</option>
                        <option value="VT">Vermont</option><option value="VA">Virginia</option>
                        <option value="WA">Washington</option><option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>
                        Información de tu cuenta
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Usaremos estos datos para asociar el trámite a tu cuenta y enviarte notificaciones sobre el estado de tu empresa.</div></span>
                    </h3>
                </div>
                <div class="card-body">
                    <label>Correo electrónico</label>
                    <input type="email" id="email" value="{{ auth()->user()->email }}" readonly style="background:var(--gray);color:var(--muted)">
                    <label>Tu nombre</label>
                    <input type="text" id="nombre_usuario" value="{{ auth()->user()->name }}" readonly style="background:var(--gray);color:var(--muted)">
                    <p style="font-size:12px;color:var(--muted);margin-top:-10px">Ya estás autenticado. Estos datos se usarán para tu trámite.</p>
                </div>
            </div>
        </div>
        <button class="btn-continue" onclick="irPaso2()">Continuar →</button>
    </div>

    {{-- PASO 2 --}}
    <div class="step-panel" id="panel-2">
        <div class="state-selector-wrap">
            <label>
                Selecciona tu estado:
                <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Los precios varían según el estado porque cada uno tiene diferentes tarifas de registro gubernamentales. El precio mostrado incluye todos los costos estatales.</div></span>
            </label>
            <select id="state-select-plans" onchange="renderPlans(this.value)">
                <optgroup label="Más populares">
                    <option value="FL" selected>Florida</option>
                    <option value="WY">Wyoming</option>
                    <option value="DE">Delaware</option>
                    <option value="TX">Texas</option>
                    <option value="NY">New York</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                </optgroup>
                <optgroup label="Todos los estados">
                    <option value="AL">Alabama</option><option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option><option value="AR">Arkansas</option>
                    <option value="CO">Colorado</option><option value="CT">Connecticut</option>
                    <option value="GA">Georgia</option><option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option><option value="IL">Illinois</option>
                    <option value="IN">Indiana</option><option value="IA">Iowa</option>
                    <option value="KS">Kansas</option><option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option><option value="ME">Maine</option>
                    <option value="MD">Maryland</option><option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option><option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option><option value="MO">Missouri</option>
                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option><option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option><option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option><option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option><option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option><option value="UT">Utah</option>
                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                    <option value="WA">Washington</option><option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                </optgroup>
            </select>
        </div>
        <div class="pricing-grid" id="plans-container"></div>
    </div>

    {{-- PASO 3 --}}
    <div class="step-panel" id="panel-3">
        <div style="max-width:640px;margin:0 auto">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Detalles de la empresa
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">El nombre que elijas debe estar disponible en el estado seleccionado. Nuestro equipo verificará la disponibilidad antes de presentar la solicitud.</div></span>
                    </h3>
                </div>
                <div class="card-body">
                    <label>
                        Nombre de empresa
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">El nombre debe ser único en el estado. Recomendamos tener 2-3 alternativas en mente. Para LLC debe incluir "LLC" o "L.L.C." al final.</div></span>
                    </label>
                    <input type="text" id="nombre_empresa" placeholder="Ej: TechVentures LLC">

                    <label>
                        Envíe una copia de notificaciones legales a su abogado
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Si tienes un abogado, podemos enviarle copias de todas las notificaciones legales que reciba tu empresa. Es opcional y no afecta el proceso.</div></span>
                    </label>
                    <select id="copia_abogado">
                        <option value="No, gracias">No, gracias</option>
                        <option value="Sí, enviar copia">Sí, enviar copia</option>
                    </select>

                    <div class="section-subtitle">
                        Dirección para registros estatales
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">El estado necesita una dirección física en EE.UU. para enviar documentos oficiales. Te recomendamos usar la dirección de nuestro agente registrado para proteger tu privacidad.</div></span>
                    </div>

                    <label>
                        Dirección física
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">La dirección que aparecerá en los registros públicos del estado. Usar la del agente registrado es lo más común y protege tu dirección personal de registros públicos.</div></span>
                    </label>
                    <select id="direccion_fisica" class="address-selector" data-type="Fisica" onchange="checkCustomAddress(this)">
                        <option value="Agente Registrado">SE RECOMIENDA la dirección de nuestro agente registrado</option>
                        <option value="Direccion Postal">Su dirección postal</option>
                        <option value="CUSTOM">Especifique la dirección</option>
                    </select>

                    <label>
                        Dirección de envío
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Aquí recibirás los documentos físicos de tu empresa como el Acta Constitutiva y el certificado de formación. Puede ser una dirección diferente a la física.</div></span>
                    </label>
                    <select id="direccion_envio" class="address-selector" data-type="Envio" onchange="checkCustomAddress(this)">
                        <option value="Agente Registrado">SE RECOMIENDA la dirección de nuestro agente registrado</option>
                        <option value="Direccion Postal">Su dirección postal</option>
                        <option value="CUSTOM">Especifique la dirección</option>
                    </select>

                    <button class="btn-continue" style="width:100%;margin-top:8px" onclick="irPaso4()">Continuar →</button>

                    <div class="faq-simple" style="margin-top:28px">
                        <h4 style="font-size:14px;font-weight:700;color:var(--navy);margin-bottom:8px">Preguntas Frecuentes</h4>
                        <details><summary>¿Qué ocurre si el nombre de mi empresa no está disponible?</summary><p>Nuestro equipo verificará la disponibilidad antes de presentar la solicitud. Si el nombre no está disponible, te contactaremos para coordinar una alternativa.</p></details>
                        <details><summary>¿Necesito un abogado?</summary><p>No es obligatorio. Nuestro equipo se encarga de todo el proceso legal. Sin embargo, si deseas asesoría legal especializada, podemos enviarte notificaciones a tu abogado.</p></details>
                        <details><summary>¿Por qué usar la dirección del agente registrado?</summary><p>Es la opción más recomendada porque protege tu privacidad y garantiza que recibirás todas las notificaciones legales importantes de forma oportuna.</p></details>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PASO 4 --}}
    <div class="step-panel" id="panel-4">
        <div style="max-width:640px;margin:0 auto">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Gestión de la empresa
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Define quién tomará las decisiones en tu empresa y quiénes son los dueños. Esta información se incluye en el Operating Agreement y los documentos oficiales.</div></span>
                    </h3>
                </div>
                <div class="card-body">
                    <label>
                        Tipo de gestión
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">"Gestionado por miembros" significa que todos los dueños participan en las decisiones. "Gerente gestionado" es cuando se designa una persona específica para dirigir la empresa, ideal si hay inversionistas pasivos.</div></span>
                    </label>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="tipo_gestion" value="Gestionado por los miembros" checked>
                            <span class="radio-option-text">Gestionado por los miembros <span class="radio-option-badge">LO MÁS COMÚN</span></span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="tipo_gestion" value="Gerente gestionado">
                            <span class="radio-option-text">Gerente gestionado</span>
                        </label>
                    </div>

                    <label>
                        Miembros de la empresa
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Los miembros son los dueños de la LLC. Agrega a todas las personas que tendrán participación. Puedes ser el único miembro si vas a operar solo.</div></span>
                    </label>

                    <div id="members-container"></div>

                    <button class="btn-add-member" onclick="addMember()">+ Agregar miembro</button>
                    <button class="btn-continue" style="width:100%;margin-top:0" onclick="irPaso5()">Continuar →</button>
                </div>
            </div>
        </div>
    </div>

    {{-- PASO 5 --}}
    <div class="step-panel" id="panel-5">
        <div style="max-width:640px;margin:0 auto">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Datos de contacto
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Usaremos estos datos para contactarte durante el proceso y enviarte actualizaciones sobre tu trámite. Tu información es privada y segura.</div></span>
                    </h3>
                </div>
                <div class="card-body">
                    <p style="font-size:13px;color:var(--muted);margin-bottom:20px">Mantendremos su información privada y segura.</p>

                    <div class="grid-2">
                        <div>
                            <label>Nombre</label>
                            <input type="text" id="contacto_nombre" value="{{ auth()->user()->name }}">
                        </div>
                        <div>
                            <label>Apellido</label>
                            <input type="text" id="contacto_apellido">
                        </div>
                    </div>

                    <label>
                        Número de teléfono
                        <span class="tt"><button type="button" class="tt-btn" onclick="tt(this)">?</button><div class="tt-box">Te contactaremos por WhatsApp o llamada para coordinar cualquier detalle de tu trámite. Incluye el código de país, ej: +57 para Colombia.</div></span>
                    </label>
                    <input type="tel" id="contacto_telefono" placeholder="Ej: +57 300 123 4567">

                    <label>País</label>
                    <select id="contacto_pais">
                        <option value="Colombia">Colombia</option>
                        <option value="México">México</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Chile">Chile</option>
                        <option value="Perú">Perú</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="España">España</option>
                        <option value="Otros">Otros</option>
                    </select>

                    <label>Dirección</label>
                    <input type="text" id="contacto_direccion" placeholder="Calle, número, apto">

                    <div class="grid-3">
                        <div><label>Ciudad</label><input type="text" id="contacto_ciudad"></div>
                        <div><label>Estado/Provincia</label><input type="text" id="contacto_estado" placeholder="Ej: Antioquia"></div>
                        <div><label>Código Postal</label><input type="text" id="contacto_zip"></div>
                    </div>

                    <button class="btn-continue" style="width:100%;background:#434966" onclick="enviarFormulario()">Enviar solicitud</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL DIRECCIÓN --}}
<div class="modal-overlay hidden" id="modal-direccion">
    <div class="modal">
        <div class="modal-header"><h3>Especificar Dirección</h3></div>
        <div class="modal-body">
            <label>País</label>
            <select id="modal-country"><option>Estados Unidos</option></select>
            <label>Dirección</label>
            <input type="text" id="modal-street" placeholder="Calle y número">
            <div class="grid-3">
                <div><label>Ciudad</label><input type="text" id="modal-city"></div>
                <div>
                    <label>Estado</label>
                    <select id="modal-state">
                        <option value="" disabled selected>Estado</option>
                        <option value="FL">Florida</option><option value="DE">Delaware</option>
                        <option value="TX">Texas</option><option value="WY">Wyoming</option>
                        <option value="NY">New York</option><option value="CA">California</option>
                    </select>
                </div>
                <div><label>C.P.</label><input type="text" id="modal-zip"></div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn-cancel" onclick="cerrarModal()">Cancelar</button>
            <button class="btn-save" onclick="guardarDireccion()">Guardar</button>
        </div>
    </div>
</div>

<script>
const CSRF = document.querySelector('meta[name="csrf-token"]').content;
let tramiteId = null;
let modalTarget = null;
let memberIdx = 0;

// ── TOOLTIPS ──
function tt(btn) {
    const box = btn.nextElementSibling;
    const isVisible = box.classList.contains('visible');
    document.querySelectorAll('.tt-box.visible').forEach(b => b.classList.remove('visible'));
    if (!isVisible) box.classList.add('visible');
}
document.addEventListener('click', e => {
    if (!e.target.closest('.tt')) {
        document.querySelectorAll('.tt-box.visible').forEach(b => b.classList.remove('visible'));
    }
});

// ── PLANES (misma tabla de precios que abre-empresa) ──
const statePrices = {
    FL:399, WY:349, DE:449, TX:599, NY:499, CA:399, NV:349,
    AL:349, AK:399, AZ:349, AR:349, CO:349, CT:449, GA:399,
    HI:449, ID:349, IL:499, IN:399, IA:349, KS:349, KY:349,
    LA:399, ME:349, MD:449, MA:449, MI:399, MN:399, MS:349,
    MO:349, MT:349, NE:349, NH:349, NJ:499, NM:349, NC:399,
    ND:349, OH:399, OK:349, OR:399, PA:449, RI:449, SC:399,
    SD:349, TN:349, UT:349, VT:349, VA:399, WA:449, WV:349, WI:399
};

function getPlans(state) {
    const base = statePrices[state] || 399;
    const full = base + 100;
    const lux  = base <= 349 ? 999 : base <= 399 ? 1099 : base <= 449 ? 1199 : 1299;
    return [
        { title:`Plan Básico ${state}`, sub:'Inicio rápido',             price:base, list:['Registro LLC','Agente registrado','Dirección Física','EIN','Tarifas estatales','Operating Agreement'] },
        { title:`Plan Full ${state}`,   sub:'Variedad y acompañamiento', price:full, list:[`Todo Básico ${state}`,'Cuenta Bancaria en Mercury o Relay','Stripe configurado e integrado','Asesoría básica'], featured:true },
        { title:`Plan Luxury ${state}`, sub:'Solución integral',         price:lux,  list:[`Todo Full ${state}`,'Asesoría contable','Página Web','Línea Telefónica'] }
    ];
}

function renderPlans(state) {
    const container = document.getElementById('plans-container');
    const plans = getPlans(state);
    container.innerHTML = plans.map(p => `
        <div class="price-card ${p.featured ? 'featured' : ''}">
            ${p.featured ? '<div class="popular-badge">Más popular</div>' : ''}
            <div class="price-name">${p.title}</div>
            <div class="price-sub">${p.sub}</div>
            <div class="price-amount"><span class="currency">$</span>${p.price.toLocaleString()}</div>
            <div class="price-period">USD · pago único</div>
            <ul class="price-features">${p.list.map(f=>`<li>${f}</li>`).join('')}</ul>
            <button class="btn-buy" onclick="seleccionarPlan('${p.title}', ${p.price})">Seleccionar</button>
        </div>
    `).join('');
}

async function irPaso2() {
    const jurisdiccion = document.getElementById('jurisdiccion').value;
    const tipo_entidad = document.getElementById('tipo_entidad').value;
    if (!jurisdiccion) { showAlert('Por favor selecciona una jurisdicción.'); return; }
    const res = await post('{{ route("tramite.cuenta") }}', { tipo_entidad, jurisdiccion });
    if (!res.ok) { showAlert('Error al guardar. Intenta de nuevo.'); return; }
    tramiteId = res.tramite_id;
    document.getElementById('state-select-plans').value = jurisdiccion;
    renderPlans(jurisdiccion);
    goStep(2);
}

async function seleccionarPlan(plan, precio) {
    if (!tramiteId) { showAlert('Error: trámite no iniciado.'); return; }
    const btn = event.target;
    btn.disabled = true;
    btn.textContent = 'Procesando...';
    try {
        const res = await post('{{ route("pago.checkout") }}', { tramite_id: tramiteId, plan_seleccionado: plan, precio_plan: precio });
        if (res.url) {
            window.location.href = res.url;
        } else {
            showAlert('Error al iniciar el pago. Intenta de nuevo.');
            btn.disabled = false;
            btn.textContent = 'Seleccionar';
        }
    } catch(e) {
        showAlert('Error de conexión. Intenta de nuevo.');
        btn.disabled = false;
        btn.textContent = 'Seleccionar';
    }
}

async function irPaso4() {
    const nombre_empresa = document.getElementById('nombre_empresa').value.trim();
    if (!nombre_empresa) { showAlert('Por favor ingresa el nombre de tu empresa.'); return; }
    const res = await post('{{ route("tramite.compania") }}', {
        tramite_id: tramiteId,
        nombre_empresa,
        copia_abogado: document.getElementById('copia_abogado').value,
        direccion_fisica: document.getElementById('direccion_fisica').value,
        direccion_envio: document.getElementById('direccion_envio').value,
    });
    if (!res.ok) { showAlert('Error al guardar. Intenta de nuevo.'); return; }
    goStep(4);
}

async function irPaso5() {
    const tipo_gestion = document.querySelector('input[name="tipo_gestion"]:checked').value;
    const miembros = [];
    document.querySelectorAll('.member-block').forEach(block => {
        miembros.push({
            nombre:     block.querySelector('.m-nombre')?.value || '',
            apellido:   block.querySelector('.m-apellido')?.value || '',
            es_entidad: block.querySelector('.m-entidad')?.checked ? '1' : '',
            direccion:  block.querySelector('.m-direccion')?.value || 'Agente Registrado',
        });
    });
    if (miembros.length === 0) { showAlert('Agrega al menos un miembro.'); return; }
    const res = await post('{{ route("tramite.gestion") }}', { tramite_id: tramiteId, tipo_gestion, miembros });
    if (!res.ok) { showAlert('Error al guardar. Intenta de nuevo.'); return; }
    goStep(5);
}

async function enviarFormulario() {
    const telefono = document.getElementById('contacto_telefono').value.trim();
    const pais = document.getElementById('contacto_pais').value;
    if (!telefono) { showAlert('Por favor ingresa tu número de teléfono.'); return; }
    const res = await post('{{ route("tramite.contacto") }}', {
        tramite_id: tramiteId, telefono, pais,
        nombre:    document.getElementById('contacto_nombre').value,
        apellido:  document.getElementById('contacto_apellido').value,
        direccion: document.getElementById('contacto_direccion').value,
        ciudad:    document.getElementById('contacto_ciudad').value,
        estado:    document.getElementById('contacto_estado').value,
        zip:       document.getElementById('contacto_zip').value,
    });
    if (res.ok && res.redirect) {
        window.location.href = res.redirect;
    } else {
        showAlert('Error al enviar. Intenta de nuevo.');
    }
}

function goStep(n) {
    document.querySelectorAll('.step-panel').forEach(p => p.classList.remove('active'));
    document.getElementById(`panel-${n}`).classList.add('active');
    document.querySelectorAll('.step-item').forEach((el, i) => {
        el.classList.remove('active', 'done');
        if (i + 1 < n) el.classList.add('done');
        if (i + 1 === n) el.classList.add('active');
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
    hideAlert();
}

function addMember() {
    memberIdx++;
    const container = document.getElementById('members-container');
    const div = document.createElement('div');
    div.className = 'member-block';
    div.id = `member-${memberIdx}`;
    div.innerHTML = `
        <div class="member-header">
            Miembro N.º ${memberIdx}
            ${memberIdx > 1 ? `<button class="member-remove" onclick="removeMember(${memberIdx})">×</button>` : ''}
        </div>
        <div class="member-body">
            <div class="checkbox-row">
                <input type="checkbox" class="m-entidad" id="entidad-${memberIdx}">
                <label for="entidad-${memberIdx}">Este miembro es una entidad comercial</label>
            </div>
            <div class="grid-2">
                <div><label>Nombre</label><input type="text" class="m-nombre" placeholder="Nombre"></div>
                <div><label>Apellido</label><input type="text" class="m-apellido" placeholder="Apellido"></div>
            </div>
            <label>Dirección que debe registrarse ante el Estado</label>
            <select class="m-direccion address-selector" data-type="Miembro${memberIdx}" onchange="checkCustomAddress(this)">
                <option value="Agente Registrado">SE RECOMIENDA la dirección de nuestro agente registrado</option>
                <option value="CUSTOM">Especifique la dirección</option>
            </select>
        </div>`;
    container.appendChild(div);
}

function removeMember(idx) { document.getElementById(`member-${idx}`)?.remove(); }

function checkCustomAddress(select) {
    if (select.value === 'CUSTOM') {
        modalTarget = select;
        document.getElementById('modal-direccion').classList.remove('hidden');
    }
}

function cerrarModal() {
    document.getElementById('modal-direccion').classList.add('hidden');
    if (modalTarget) modalTarget.value = 'Agente Registrado';
    modalTarget = null;
}

function guardarDireccion() {
    const street = document.getElementById('modal-street').value.trim();
    const city   = document.getElementById('modal-city').value.trim();
    const state  = document.getElementById('modal-state').value;
    const zip    = document.getElementById('modal-zip').value.trim();
    if (!street || !city || !state || !zip) { alert('Completa todos los campos de la dirección.'); return; }
    const fullAddress = `${street}, ${city}, ${state} ${zip}`;
    if (modalTarget) {
        const opt = modalTarget.querySelector('option[value="CUSTOM"]');
        if (opt) opt.textContent = `✓ ${fullAddress}`;
        modalTarget.value = 'CUSTOM';
    }
    document.getElementById('modal-direccion').classList.add('hidden');
    modalTarget = null;
}

async function post(url, data) {
    try {
        const res = await fetch(url, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': CSRF, 'Accept': 'application/json' },
            body: JSON.stringify(data),
        });
        return await res.json();
    } catch(e) { return { ok: false }; }
}

function showAlert(msg) {
    const box = document.getElementById('alert-box');
    box.textContent = msg;
    box.style.display = 'block';
    box.scrollIntoView({ behavior: 'smooth', block: 'center' });
}
function hideAlert() { document.getElementById('alert-box').style.display = 'none'; }

document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const estadoParam = params.get('estado');
    const planParam   = params.get('plan');

    // Pre-seleccionar estado desde URL
    const initState = estadoParam && plansByState[estadoParam] ? estadoParam : 'FL';
    renderPlans(initState);
    document.getElementById('state-select-plans').value = initState;
    const jurisdiccionSel = document.getElementById('jurisdiccion');
    if (jurisdiccionSel.querySelector(`option[value="${initState}"]`)) {
        jurisdiccionSel.value = initState;
    }

    // Pre-seleccionar plan desde URL (resaltar visualmente)
    if (planParam) {
        document.querySelectorAll('.btn-buy').forEach(btn => {
            const card = btn.closest('.price-card');
            if (card && card.querySelector('.price-name') && card.querySelector('.price-name').textContent.includes(planParam)) {
                card.style.outline = '2px solid var(--gold, #c9a96e)';
                card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        });
    }

    const step = params.get('step');
    const tid  = params.get('tramite_id');
    if (step && tid) {
        tramiteId = parseInt(tid);
        goStep(parseInt(step));
    }
});
</script>
</body>
</html>