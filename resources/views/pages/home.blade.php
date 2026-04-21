<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellu — Tu aliado para constituir y operar tu empresa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:   #0D1B3E;
            --navy2:  #122050;
            --gold:   #F5A623;
            --gold2:  #E09415;
            --white:  #FFFFFF;
            --gray:   #F5F6FA;
            --gray2:  #E8EAF0;
            --text:   #333A50;
            --muted:  #6B7394;
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Open Sans', sans-serif; color: var(--text); background: var(--white); -webkit-font-smoothing: antialiased; }
        a { text-decoration: none; color: inherit; }

        /* ── TOPBAR ── */
        .topbar { background: var(--navy2); padding: 7px 5%; display: flex; justify-content: space-between; align-items: center; }
        .topbar-left { font-size: 12px; color: rgba(255,255,255,.6); }
        .topbar-left strong { color: var(--gold); }
        .topbar-right { display: flex; gap: 14px; }
        .topbar-right a { color: rgba(255,255,255,.6); font-size: 13px; transition: color .2s; }
        .topbar-right a:hover { color: var(--white); }

        /* ── NAV ── */
        .nav { background: var(--white); border-bottom: 1px solid var(--gray2); padding: 0 5%; display: flex; align-items: center; height: 68px; position: sticky; top: 0; z-index: 100; gap: 0; }
        .nav-logo { display: flex; align-items: center; margin-right: 36px; }
        .nav-logo-text { font-family: 'Montserrat', sans-serif; font-size: 26px; font-weight: 900; color: var(--navy); letter-spacing: -1px; }
        .nav-logo-text span { color: var(--gold); }
        .nav-links { display: flex; gap: 0; flex: 1; overflow: hidden; }
        .nav-link { padding: 0 14px; height: 68px; display: flex; align-items: center; font-size: 12px; font-weight: 600; color: var(--text); border-bottom: 3px solid transparent; transition: all .2s; white-space: nowrap; }
        .nav-link:hover { color: var(--navy); border-bottom-color: var(--gold); }
        .nav-cta { margin-left: auto; background: var(--gold); color: var(--navy); padding: 10px 22px; border-radius: 6px; font-size: 13px; font-weight: 700; font-family: 'Montserrat', sans-serif; transition: background .2s; white-space: nowrap; }
        .nav-cta:hover { background: var(--gold2); }

        /* ── HERO ── */
        .hero { background: var(--navy); min-height: 520px; position: relative; overflow: hidden; display: flex; align-items: center; }
        .hero-content { position: relative; z-index: 2; padding: 72px 5%; max-width: 580px; }
        .hero-eyebrow { font-size: 12px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: .12em; margin-bottom: 20px; }
        .hero h1 { font-family: 'Montserrat', sans-serif; font-size: 42px; font-weight: 900; line-height: 1.1; color: var(--white); margin-bottom: 20px; letter-spacing: -.5px; }
        .hero h1 em { font-style: normal; color: var(--gold); }
        .hero p { font-size: 16px; color: rgba(255,255,255,.7); line-height: 1.7; margin-bottom: 36px; max-width: 460px; }
        .hero-btn { display: inline-block; background: var(--gold); color: var(--navy); padding: 14px 32px; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: .06em; transition: background .2s; }
        .hero-btn:hover { background: var(--gold2); }

        /* ── SERVICIOS ── */
        .servicios { padding: 72px 5%; background: var(--white); }
        .section-tag { font-size: 11px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: .12em; margin-bottom: 10px; display: block; text-align: center; }
        .section-title { font-family: 'Montserrat', sans-serif; font-size: 26px; font-weight: 800; color: var(--navy); text-align: center; margin-bottom: 10px; text-transform: uppercase; }
        .section-sub { font-size: 15px; color: var(--muted); text-align: center; margin-bottom: 48px; line-height: 1.6; }
        .servicios-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; max-width: 860px; margin: 0 auto 32px; }
        .servicio-card { background: var(--gold); border-radius: 8px; padding: 28px 20px; display: flex; flex-direction: column; align-items: center; gap: 12px; text-align: center; cursor: pointer; transition: transform .2s; }
        .servicio-card:hover { transform: translateY(-3px); }
        .servicio-card.dark { background: var(--navy); }
        .servicio-icon { width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; }
        .servicio-icon svg { width: 32px; height: 32px; }
        .servicio-label { font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; color: var(--navy); text-transform: uppercase; letter-spacing: .03em; line-height: 1.3; }
        .servicio-card.dark .servicio-label { color: var(--white); }
        .servicios-cta { display: flex; justify-content: center; margin-top: 8px; }
        .btn-navy { display: inline-block; background: var(--navy); color: var(--white); padding: 13px 36px; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em; transition: background .2s; }
        .btn-navy:hover { background: var(--navy2); }

        /* ── MISIÓN ── */
        .mision { background: var(--gray); padding: 72px 5%; }
        .mision-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr auto; gap: 60px; align-items: center; }
        .mision-tag { font-size: 11px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: .12em; margin-bottom: 14px; display: block; }
        .mision h2 { font-family: 'Montserrat', sans-serif; font-size: 24px; font-weight: 800; color: var(--navy); line-height: 1.3; margin-bottom: 16px; text-transform: uppercase; }
        .mision p { font-size: 15px; color: var(--muted); line-height: 1.75; }
        .mision-img { width: 180px; height: 180px; border-radius: 50%; overflow: hidden; flex-shrink: 0; background: var(--navy2); display: flex; align-items: center; justify-content: center; }
        .mision-img svg { width: 80px; height: 80px; opacity: .2; }

        /* ── STATS ── */
        .stats { background: var(--white); padding: 56px 5%; border-top: 1px solid var(--gray2); border-bottom: 1px solid var(--gray2); }
        .stats-inner { display: grid; grid-template-columns: repeat(4, 1fr); max-width: 1000px; margin: 0 auto; }
        .stat-item { text-align: center; padding: 20px; border-right: 1px solid var(--gray2); }
        .stat-item:last-child { border-right: none; }
        .stat-num { font-family: 'Montserrat', sans-serif; font-size: 52px; font-weight: 900; color: var(--navy); line-height: 1; margin-bottom: 8px; }
        .stat-num.gold { color: var(--gold); }
        .stat-icon { margin-bottom: 8px; }
        .stat-icon svg { width: 36px; height: 36px; color: var(--navy); }
        .stat-label { font-size: 13px; color: var(--muted); font-weight: 500; line-height: 1.4; }

        /* ── CLIENTES ── */
        .clientes { background: var(--gray); padding: 52px 5%; }
        .clientes-header { display: flex; align-items: center; justify-content: center; margin-bottom: 36px; }
        .clientes-badge { background: var(--navy); color: var(--white); font-family: 'Montserrat', sans-serif; font-size: 12px; font-weight: 700; padding: 6px 18px; border-radius: 20px; text-transform: uppercase; letter-spacing: .06em; }
        .clientes-grid { display: flex; align-items: center; justify-content: center; gap: 48px; flex-wrap: wrap; }
        .cliente-logo { font-family: 'Montserrat', sans-serif; font-size: 18px; font-weight: 800; color: var(--navy); opacity: .45; transition: opacity .2s; letter-spacing: -1px; }
        .cliente-logo:hover { opacity: 1; }

        /* ── CTA ASESOR ── */
        .cta-asesor { background: var(--navy); display: grid; grid-template-columns: 1fr 1fr; min-height: 280px; }
        .cta-asesor-img { background: var(--navy2); min-height: 280px; display: flex; align-items: center; justify-content: center; }
        .cta-asesor-img svg { width: 80px; height: 80px; opacity: .15; color: white; }
        .cta-asesor-content { padding: 56px 60px; display: flex; flex-direction: column; justify-content: center; }
        .cta-asesor h2 { font-family: 'Montserrat', sans-serif; font-size: 28px; font-weight: 900; color: var(--white); line-height: 1.2; margin-bottom: 16px; text-transform: uppercase; }
        .cta-asesor p { font-size: 15px; color: rgba(255,255,255,.6); line-height: 1.65; margin-bottom: 32px; }
        .cta-btns { display: flex; gap: 12px; flex-wrap: wrap; }
        .btn-whatsapp { display: inline-flex; align-items: center; gap: 8px; background: #25D366; color: var(--white); padding: 12px 24px; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; transition: background .2s; }
        .btn-whatsapp:hover { background: #1ebe5b; }
        .btn-messenger { display: inline-flex; align-items: center; gap: 8px; background: transparent; color: var(--white); padding: 11px 22px; border-radius: 6px; font-family: 'Montserrat', sans-serif; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: .05em; border: 2px solid rgba(255,255,255,.3); transition: border-color .2s; }
        .btn-messenger:hover { border-color: var(--white); }

        /* ── FAQ ── */
        .faq { padding: 80px 5%; background: var(--white); }
        .faq-inner { max-width: 780px; margin: 0 auto; }
        .faq-header { text-align: center; margin-bottom: 48px; }
        .faq-item { border-bottom: 1px solid var(--gray2); }
        .faq-q { width: 100%; padding: 20px 0; text-align: left; background: none; border: none; font-family: 'Open Sans', sans-serif; font-size: 15px; font-weight: 600; color: var(--navy); cursor: pointer; display: flex; justify-content: space-between; align-items: center; gap: 16px; }
        .faq-q:hover { color: var(--gold2); }
        .faq-icon { width: 22px; height: 22px; border-radius: 50%; background: var(--gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: transform .3s; }
        .faq-icon svg { width: 12px; height: 12px; }
        .faq-a { max-height: 0; overflow: hidden; transition: max-height .3s ease, padding .3s; font-size: 14px; color: var(--muted); line-height: 1.75; }
        .faq-item.open .faq-a { max-height: 200px; padding-bottom: 20px; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }

        /* ── BLOG ── */
        .blog { padding: 80px 5%; background: var(--gray); }
        .blog-inner { max-width: 1100px; margin: 0 auto; }
        .blog-header { margin-bottom: 40px; }
        .blog-tag { font-size: 11px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: .12em; margin-bottom: 8px; display: block; }
        .blog-header h2 { font-family: 'Montserrat', sans-serif; font-size: 26px; font-weight: 800; color: var(--navy); margin-bottom: 8px; }
        .blog-header p { font-size: 14px; color: var(--muted); max-width: 600px; line-height: 1.6; }
        .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .blog-card { background: var(--white); border-radius: 10px; overflow: hidden; border: 1px solid var(--gray2); transition: transform .2s; }
        .blog-card:hover { transform: translateY(-3px); }
        .blog-thumb { height: 180px; display: flex; align-items: flex-end; padding: 16px; position: relative; overflow: hidden; }
        .blog-thumb-bg { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; }
        .blog-thumb-bg svg { width: 64px; height: 64px; opacity: .12; color: white; }
        .blog-date { font-size: 10px; font-weight: 600; color: rgba(255,255,255,.6); text-transform: uppercase; letter-spacing: .08em; position: relative; z-index: 1; }
        .blog-body { padding: 20px; }
        .blog-cat { font-size: 10px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: .08em; margin-bottom: 8px; display: block; }
        .blog-card h3 { font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 700; color: var(--navy); line-height: 1.4; margin-bottom: 10px; }
        .blog-card p { font-size: 13px; color: var(--muted); line-height: 1.6; }

        /* ── FOOTER ── */
        .footer { background: var(--white); border-top: 1px solid var(--gray2); padding: 56px 5% 24px; }
        .footer-inner { max-width: 1100px; margin: 0 auto; }
        .footer-top { display: grid; grid-template-columns: 1.4fr 1fr 1fr; gap: 60px; margin-bottom: 48px; }
        .footer-logo-text { font-family: 'Montserrat', sans-serif; font-size: 24px; font-weight: 900; color: var(--navy); letter-spacing: -1px; display: block; margin-bottom: 16px; }
        .footer-logo-text span { color: var(--gold); }
        .footer-brand-title { font-size: 13px; font-weight: 700; color: var(--navy); margin-bottom: 12px; }
        .footer-brand-info { font-size: 13px; color: var(--muted); line-height: 1.9; }
        .footer-brand-info a { color: var(--navy); font-weight: 600; }
        .footer-col-title { font-family: 'Montserrat', sans-serif; font-size: 12px; font-weight: 800; color: var(--navy); text-transform: uppercase; letter-spacing: .08em; margin-bottom: 18px; }
        .footer-col a { display: block; font-size: 13px; color: var(--muted); margin-bottom: 10px; transition: color .2s; }
        .footer-col a:hover { color: var(--navy); }
        .footer-bottom { border-top: 1px solid var(--gray2); padding-top: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; }
        .footer-bottom p { font-size: 12px; color: var(--muted); }
        .footer-legal { display: flex; gap: 20px; }
        .footer-legal a { font-size: 12px; color: var(--muted); transition: color .2s; }
        .footer-legal a:hover { color: var(--navy); }

        @media (max-width: 900px) {
            .hero h1 { font-size: 28px; }
            .nav-links { display: none; }
            .servicios-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-inner { grid-template-columns: repeat(2, 1fr); }
            .cta-asesor { grid-template-columns: 1fr; }
            .cta-asesor-img { min-height: 160px; }
            .blog-grid { grid-template-columns: 1fr; }
            .footer-top { grid-template-columns: 1fr; gap: 32px; }
            .mision-inner { grid-template-columns: 1fr; }
            .mision-img { display: none; }
        }
    </style>
</head>
<body>

<x-nav />

<section class="hero">
    <div class="hero-content">
        <p class="hero-eyebrow">Tu aliado para operar, vender y crecer</p>
        <h1>La forma más <em>fácil</em> y profesional de establecer tu empresa en USA</h1>
        <p>Nos encargamos de lo legal, contable y logístico para que tú te enfoques en lo más importante: crecer.</p>
        <a href="#servicios" class="hero-btn">Empezar ahora</a>
    </div>
</section>

<section id="servicios" class="servicios">
    <span class="section-tag">Lo que hacemos</span>
    <h2 class="section-title">Servicios clave para tu empresa en Estados Unidos</h2>
    <p class="section-sub">Simplificamos los procesos para que tu empresa crezca sin límites.</p>
    <div class="servicios-grid">
        <div class="servicio-card">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><rect x="4" y="6" width="24" height="20" rx="3" stroke="#0D1B3E" stroke-width="2"/><path d="M10 14h12M10 19h8" stroke="#0D1B3E" stroke-width="2" stroke-linecap="round"/><path d="M16 2v6" stroke="#0D1B3E" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="servicio-label">Crea tu empresa</span>
        </div>
        <div class="servicio-card">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><rect x="4" y="4" width="24" height="24" rx="3" stroke="#0D1B3E" stroke-width="2"/><path d="M10 10h12M10 16h12M10 22h8" stroke="#0D1B3E" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="servicio-label">Contabilidad e impuestos</span>
        </div>
        <div class="servicio-card">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="11" stroke="#0D1B3E" stroke-width="2"/><path d="M16 10v6l4 3" stroke="#0D1B3E" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="servicio-label">Registro de marca (USPTO)</span>
        </div>
        <div class="servicio-card dark">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><path d="M6 26l4-8 6 4 4-12 6 16" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="servicio-label">Registro sanitario (FDA)</span>
        </div>
        <div class="servicio-card dark">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><rect x="3" y="14" width="18" height="12" rx="2" stroke="#F5A623" stroke-width="2"/><path d="M21 18h5a2 2 0 012 2v2a2 2 0 01-2 2h-5" stroke="#F5A623" stroke-width="2"/><circle cx="8" cy="29" r="2" fill="#F5A623"/><circle cx="18" cy="29" r="2" fill="#F5A623"/></svg>
            </div>
            <span class="servicio-label">Logística y almacenamiento</span>
        </div>
        <div class="servicio-card dark">
            <div class="servicio-icon">
                <svg viewBox="0 0 32 32" fill="none"><rect x="4" y="8" width="16" height="14" rx="2" stroke="#F5A623" stroke-width="2"/><path d="M20 12l8-4v14l-8-4" stroke="#F5A623" stroke-width="2" stroke-linejoin="round"/></svg>
            </div>
            <span class="servicio-label">Apertura de marketplaces</span>
        </div>
    </div>
    <div class="servicios-cta">
        <a href="#asesor" class="btn-navy">Agenda tu asesoría gratuita</a>
    </div>
</section>

<section class="mision">
    <div class="mision-inner">
        <div>
            <span class="mision-tag">Nuestra misión</span>
            <h2>Cada empresa que ayudamos a crecer es una nueva historia de éxito.</h2>
            <p>En Sell·U no solo ofrecemos servicios: vivimos la emoción de convertir ideas en resultados. Cada estrategia y cada empresa que ayudamos a crecer refleja nuestro compromiso. Porque cuando tú triunfas, nosotros también lo hacemos.</p>
        </div>
        <div class="mision-img">
            <svg viewBox="0 0 80 80" fill="none"><circle cx="40" cy="30" r="14" stroke="white" stroke-width="2"/><path d="M16 68c0-13.3 10.7-24 24-24s24 10.7 24 24" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
    </div>
</section>

<div class="stats">
    <div class="stats-inner">
        <div class="stat-item">
            <div class="stat-num gold">7</div>
            <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 36 36" fill="none"><path d="M6 18h24M18 6v24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg></div>
            <div class="stat-label">Servicios personalizados</div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="12" stroke="currentColor" stroke-width="2"/><path d="M12 18l4 4 8-8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="stat-label">Red de contactos estratégicos</div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 36 36" fill="none"><path d="M18 4l3.5 7.5 8.5 1-6 6 1.5 8.5L18 23l-7.5 4 1.5-8.5-6-6 8.5-1z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg></div>
            <div class="stat-label">Éxito comprobado</div>
        </div>
    </div>
</div>

<section class="clientes">
    <div class="clientes-header">
        <span class="clientes-badge">↑ Algunos de nuestros clientes</span>
    </div>
    <div class="clientes-grid">
        <span class="cliente-logo">HAIKO NATURAL</span>
        <span class="cliente-logo">BUDDY BEAUTY</span>
        <span class="cliente-logo">Cinco Jotos</span>
        <span class="cliente-logo">YAX SOCKS</span>
        <span class="cliente-logo">Nutrelle.Co</span>
    </div>
</section>

<section id="asesor" class="cta-asesor">
    <div class="cta-asesor-img">
        <svg viewBox="0 0 80 80" fill="none"><circle cx="40" cy="28" r="16" stroke="white" stroke-width="2"/><path d="M14 72c0-14.4 11.6-26 26-26s26 11.6 26 26" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
    </div>
    <div class="cta-asesor-content">
        <h2>¿Quieres hablar con un asesor?</h2>
        <p>Contáctanos por WhatsApp o Messenger y recibe atención personalizada de nuestros expertos.</p>
        <div class="cta-btns">
            <a href="https://wa.me/15551234567" class="btn-whatsapp" target="_blank">WhatsApp</a>
            <a href="#" class="btn-messenger">Messenger</a>
        </div>
    </div>
</section>

<section id="faq" class="faq">
    <div class="faq-inner">
        <div class="faq-header">
            <span class="section-tag">Dudas frecuentes</span>
            <h2 class="section-title">Preguntas Frecuentes</h2>
        </div>
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">¿Cuál es el primer paso para crear empresa en Estados Unidos?<span class="faq-icon"><svg viewBox="0 0 12 12" fill="none"><path d="M6 2v8M2 6h8" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg></span></button>
            <div class="faq-a">El primer paso es elegir el estado y el tipo de entidad (LLC o Corporation). Nosotros te guiamos según tu modelo de negocio y objetivos fiscales.</div>
        </div>
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">¿Puedo acceder a sus servicios si no soy residente en Estados Unidos?<span class="faq-icon"><svg viewBox="0 0 12 12" fill="none"><path d="M6 2v8M2 6h8" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg></span></button>
            <div class="faq-a">Sí, la mayoría de nuestros servicios están diseñados para emprendedores latinoamericanos que desean operar en USA sin ser residentes.</div>
        </div>
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">¿Qué sucede si no estoy satisfecho con un servicio?<span class="faq-icon"><svg viewBox="0 0 12 12" fill="none"><path d="M6 2v8M2 6h8" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg></span></button>
            <div class="faq-a">Trabajamos contigo para resolver cualquier inconveniente. Contáctanos directamente y encontramos la mejor solución.</div>
        </div>
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">¿Cómo puedo saber cuál es el servicio adecuado para mi empresa?<span class="faq-icon"><svg viewBox="0 0 12 12" fill="none"><path d="M6 2v8M2 6h8" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg></span></button>
            <div class="faq-a">Agenda una asesoría gratuita. En 30 minutos analizamos tu situación y te recomendamos el camino más eficiente.</div>
        </div>
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">¿Ofrecen asesoría en idiomas distintos al español?<span class="faq-icon"><svg viewBox="0 0 12 12" fill="none"><path d="M6 2v8M2 6h8" stroke="white" stroke-width="1.5" stroke-linecap="round"/></svg></span></button>
            <div class="faq-a">Sí, contamos con equipo bilingüe español-inglés y podemos coordinar en portugués para clientes brasileños.</div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="blog-inner">
        <div class="blog-header">
            <span class="blog-tag">Artículos de interés</span>
            <h2>Conoce las Claves para Exportar.</h2>
            <p>Explora nuestros artículos más recientes sobre registro de marca, normatividad FDA, estrategias de exportación y consejos para destacar en marketplaces como Amazon y Walmart.</p>
        </div>
        <div class="blog-grid">
            <a href="#" class="blog-card">
                <div class="blog-thumb" style="background:#1a2d5a">
                    <div class="blog-thumb-bg"><svg viewBox="0 0 64 64" fill="none"><rect x="8" y="12" width="48" height="40" rx="4" stroke="white" stroke-width="3"/><path d="M20 28h24M20 36h16" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>
                    <span class="blog-date">Febrero 18, 2025 · 5 min lectura</span>
                </div>
                <div class="blog-body">
                    <span class="blog-cat">Empresa en USA</span>
                    <h3>Requisitos para Abrir una Empresa en Estados Unidos como Extranjero</h3>
                    <p>Todo lo que necesitas para llevar tu negocio al mercado estadounidense.</p>
                </div>
            </a>
            <a href="#" class="blog-card">
                <div class="blog-thumb" style="background:#0f3d2e">
                    <div class="blog-thumb-bg"><svg viewBox="0 0 64 64" fill="none"><circle cx="32" cy="32" r="20" stroke="white" stroke-width="3"/><path d="M24 32l6 6 12-12" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    <span class="blog-date">Septiembre 27, 2025 · 5 min lectura</span>
                </div>
                <div class="blog-body">
                    <span class="blog-cat">Registro de marca</span>
                    <h3>¿Por qué es Fundamental Registrar tu Marca en Estados Unidos?</h3>
                    <p>Aprende todo lo necesario para llevar tu negocio al mercado estadounidense.</p>
                </div>
            </a>
            <a href="#" class="blog-card">
                <div class="blog-thumb" style="background:#3d1a0f">
                    <div class="blog-thumb-bg"><svg viewBox="0 0 64 64" fill="none"><path d="M12 44l10-20 10 12 8-16 12 24" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                    <span class="blog-date">Octubre 13, 2025 · 5 min lectura</span>
                </div>
                <div class="blog-body">
                    <span class="blog-cat">FDA</span>
                    <h3>Registro FDA para Alimentos: ¿Por Qué es Obligatorio y Cómo Aplicarlo?</h3>
                    <p>Aprende todo lo necesario para llevar tu negocio al mercado estadounidense.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-inner">
        <div class="footer-top">
            <div>
                <span class="footer-logo-text">Sell<span>·U</span></span>
                <p class="footer-brand-title">Oficina Principal Estados Unidos</p>
                <div class="footer-brand-info">
                    Ubicación: Spring Hill, Florida, Zipcode 34609<br>
                    Email: <a href="mailto:contacto@sellu.co">contacto@sellu.co</a><br>
                    Teléfono: +1 954 210 5405<br>
                    Horario: Lunes – Sábado: 9:00 am – 9:00 pm EST
                </div>
            </div>
            <div class="footer-col">
                <p class="footer-col-title">Menú principal</p>
                <a href="{{ url('/abre-empresa') }}">Abre tu empresa</a>
<a href="{{ url('/contabilidad') }}">Contabilidad</a>
<a href="{{ url('/amazon') }}">Vende en Amazon</a>
<a href="{{ url('/marca') }}">Registro de marca</a>
<a href="{{ url('/envios') }}">Envíos</a>
<a href="{{ url('/sanitario') }}">Registro Sanitario</a>
<a href="{{ url('/soporte') }}">Soporte</a>
            </div>
            <div class="footer-col">
                <p class="footer-col-title">Información legal</p>
                <a href="#">Términos de Servicio</a>
                <a href="#">Políticas de privacidad</a>
                <a href="#">Política de Garantía</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Hecho con ♥ por el equipo de Sell·U LATAM LLC</p>
            <div class="footer-legal">
                <a href="#">Términos</a>
                <a href="#">Privacidad</a>
            </div>
            <p>© {{ date('Y') }} Empresa registrada en el estado de Florida, EE.UU. EIN: 84-3761818.</p>
        </div>
    </div>
</footer>

<script>
function toggleFaq(btn) {
    const item = btn.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}
</script>
</body>
</html>
