<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vende en Sysco Marketplace · Sell-U</title>
<meta name="description" content="Lleva tus productos latinos a +329,000 restaurantes, hoteles y hospitales en EE.UU. a través de Sysco Marketplace. Sell-U gestiona todo el onboarding.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
*{box-sizing:border-box;margin:0;padding:0}
html,body{background:#fff;color:#434966;font-family:'Montserrat',ui-sans-serif,system-ui,sans-serif;-webkit-font-smoothing:antialiased}
:root{
  --navy:#434966;
  --blue:#434966;
  --yellow:#f6bb33;
  --orange:#E8501A;
  --gray:#f2f2f2;
  --white:#fff;
  --fg:#434966;
  --fg2:#666;
  --border:#ececec;
}
.container{max-width:1200px;margin:0 auto;padding:0 32px}
.section{padding:96px 0}

/* Buttons */
.btn{display:inline-flex;align-items:center;gap:8px;font-family:'Montserrat',sans-serif;font-weight:700;font-size:16px;padding:16px 28px;border-radius:12px;border:2px solid transparent;cursor:pointer;line-height:1;text-decoration:none;white-space:nowrap;transition:transform 150ms,background 200ms,box-shadow 200ms,border-color 200ms,color 200ms}
.btn:active{transform:scale(.98)}
.btn-primary{background:var(--yellow);color:var(--fg);box-shadow:0 6px 14px rgba(246,187,51,.32)}
.btn-primary:hover{background:#f9cc66;box-shadow:0 10px 22px rgba(246,187,51,.38)}
.btn-outline{background:transparent;color:var(--fg);border-color:var(--fg)}
.btn-outline:hover{background:var(--fg);color:#fff}
.btn-on-dark{background:transparent;color:#fff;border-color:#fff}
.btn-on-dark:hover{background:#fff;color:var(--fg)}
.btn-sm{padding:10px 18px;font-size:14px;border-radius:10px}

/* Typography */
.h1{font-family:'Montserrat',sans-serif;font-weight:600;font-size:56px;line-height:1.08;color:var(--fg);letter-spacing:-.025em;margin:20px 0 24px}
.h2{font-family:'Montserrat',sans-serif;font-weight:600;font-size:38px;line-height:1.2;color:var(--fg);letter-spacing:-.02em}
.eyebrow{font-family:'Montserrat',sans-serif;font-size:12px;font-weight:700;letter-spacing:.18em;text-transform:uppercase}

/* Reveal */
.reveal,.reveal-left,.reveal-right{opacity:0;transition:opacity .6s ease,transform .6s ease}
.reveal{transform:translateY(28px)}
.reveal-left{transform:translateX(-32px)}
.reveal-right{transform:translateX(32px)}
.revealed{opacity:1!important;transform:none!important}

/* ──── HERO ──── */
.hero{position:relative;overflow:hidden;padding:64px 0 96px;min-height:30vh;display:flex;align-items:center;background:#fff}
.hero-glow-tr{position:absolute;top:-120px;right:-160px;width:540px;height:540px;background:radial-gradient(circle,rgba(246,233,184,.55) 0%,rgba(246,233,184,0) 65%);pointer-events:none}
.hero-glow-bl{position:absolute;bottom:-80px;left:-100px;width:320px;height:320px;background:radial-gradient(circle,rgba(67,73,102,.05) 0%,rgba(67,73,102,0) 70%);pointer-events:none}
.hero-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:80px;align-items:center;width:100%}
.hero-eyebrow{color:var(--orange)}
.hero-title .blue{color:var(--yellow)}

/* ──── PIPELINE CARD ──── */
.pipeline-wrap{position:relative;width:100%;max-width:420px;padding:28px 0;margin:0 auto}
.chip{position:absolute;font-size:11px;font-weight:700;padding:7px 14px;border-radius:999px;box-shadow:0 8px 20px rgba(0,0,0,.18);white-space:nowrap;z-index:2}
.chip-animate{animation:floatChip 3s ease-in-out infinite alternate}
.pipeline-card{background:var(--navy);border-radius:24px;padding:28px 26px;box-shadow:0 24px 60px rgba(67,73,102,.35);position:relative;overflow:hidden}
.pipeline-blob{position:absolute;top:-60px;right:-60px;width:220px;height:220px;background:radial-gradient(circle,rgba(246,187,51,.18) 0%,transparent 70%);pointer-events:none}
.pipeline-header{display:flex;align-items:center;gap:10px;margin-bottom:22px;position:relative}
.pipeline-brand{font-family:'Montserrat',sans-serif;font-weight:800;font-size:18px;color:#fff;letter-spacing:-.02em}
.pipeline-dot{display:inline-block;width:14px;height:14px;background:var(--orange);border-radius:2px}
.pipeline-sub{font-size:11px;color:rgba(255,255,255,.55);margin-left:4px}
.pipeline-live{margin-left:auto;display:inline-flex;align-items:center;gap:6px;font-size:10px;font-weight:700;color:#22c55e;letter-spacing:.1em;background:rgba(34,197,94,.12);padding:4px 10px;border-radius:999px;border:1px solid rgba(34,197,94,.3)}
.live-dot{width:6px;height:6px;border-radius:999px;background:#22c55e;animation:pulseDot 1.6s ease-in-out infinite}
.pipeline-nodes{position:relative}
.pipe-node{display:flex;align-items:center;gap:14px;transition:opacity .3s}
.pipe-node-icon{width:48px;height:48px;border-radius:14px;display:flex;align-items:center;justify-content:center;flex:none;transition:background .3s,box-shadow .3s}
.pipe-node-icon.active{background:#fff;box-shadow:0 6px 18px rgba(246,187,51,.22)}
.pipe-node-icon.inactive{background:rgba(255,255,255,.08)}
.pipe-node-title{font-size:14px;font-weight:700;line-height:1.3;transition:color .3s}
.pipe-node-sub{font-size:12px;margin-top:2px;line-height:1.4;transition:color .3s}
.pipe-node-badge{font-size:11px;font-weight:700;padding:5px 10px;border-radius:999px;white-space:nowrap;flex:none;animation:fadeInBadge .3s ease-out both}
.pipe-connector{padding-left:23px;height:32px;display:flex;align-items:center}
.pipe-line{width:2px;height:100%;border-radius:1px}
.pipe-line.active{background:linear-gradient(to bottom,var(--yellow) 0%,var(--yellow) 30%,var(--blue) 70%,var(--blue) 100%);background-size:100% 200%;animation:lineFlow 1.8s linear infinite}
.pipe-line.inactive{background:rgba(255,255,255,.1)}
.pipeline-metrics{margin-top:24px;padding:16px;background:rgba(255,255,255,.06);border-radius:14px;border-top:1px solid rgba(255,255,255,.1);display:grid;grid-template-columns:1fr 1fr;gap:12px}
.metric-num{font-family:'Montserrat',sans-serif;font-weight:700;font-size:20px;color:#fff;line-height:1.1}
.metric-label{font-size:11px;color:rgba(255,255,255,.55);margin-top:4px}
.metric-right{border-left:1px solid rgba(255,255,255,.1);padding-left:12px}

/* ──── CLIENT STRIP ──── */
.client-strip{background:#f9f9f9;padding:32px 0;overflow:hidden;border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.strip-label{text-align:center;font-size:12px;color:#999;margin-bottom:20px;letter-spacing:.05em}
.marquee-outer{overflow:hidden;mask-image:linear-gradient(90deg,transparent 0%,#000 12%,#000 88%,transparent 100%);-webkit-mask-image:linear-gradient(90deg,transparent 0%,#000 12%,#000 88%,transparent 100%)}
.marquee-track{display:flex;gap:16px;width:max-content;animation:marquee 32s linear infinite}
.marquee-tag{display:inline-flex;align-items:center;padding:10px 22px;border-radius:999px;background:#fff;border:1px solid var(--border);font-family:'Montserrat',sans-serif;font-weight:600;font-size:14px;color:var(--fg);white-space:nowrap}

/* ──── WHY SYSCO ──── */
.why-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
.why-card{background:var(--gray);border-radius:16px;padding:28px;display:flex;flex-direction:column;gap:12px}
.why-stat{font-family:'Montserrat',sans-serif;font-weight:800;font-size:44px;color:var(--navy);line-height:1;letter-spacing:-.02em}
.why-label{font-family:'Montserrat',sans-serif;font-weight:700;font-size:15px;color:var(--fg)}
.why-desc{font-size:13px;color:var(--fg2);line-height:1.5}

/* ──── SERVICES ──── */
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.svc-card{background:#fff;border:1.5px solid var(--border);border-radius:16px;padding:28px;transition:transform .2s,border-color .2s,box-shadow .2s}
.svc-card:hover{transform:translateY(-4px);border-color:var(--yellow);box-shadow:0 18px 36px -12px rgba(246,187,51,.18)}
.svc-icon{width:52px;height:52px;border-radius:14px;background:#fef5dd;display:flex;align-items:center;justify-content:center;font-size:26px;margin-bottom:16px}
.svc-h{font-family:'Montserrat',sans-serif;font-weight:600;font-size:18px;color:var(--fg);margin:0 0 10px;letter-spacing:-.01em}
.svc-p{font-size:14px;line-height:1.6;color:var(--fg2);margin:0 0 16px}
.svc-bullets{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px}
.svc-bullets li{font-size:13px;color:var(--fg);display:flex;gap:10px;align-items:flex-start}
.svc-bullets li span.dot{color:var(--yellow);font-weight:700;flex:none}

/* ──── CONTRAST ──── */
.contrast-section{background:#434966;padding:96px 0}
.contrast-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;align-items:stretch}
.contrast-card{border-radius:16px;padding:28px}
.contrast-card.featured{background:rgba(255,255,255,.10);border:1.5px solid var(--yellow);box-shadow:0 18px 40px rgba(246,187,51,.10)}
.contrast-card:not(.featured){background:rgba(255,255,255,.07);border:1.5px solid rgba(255,255,255,.12)}
.contrast-card-label{font-size:11px;font-weight:700;letter-spacing:.14em;margin-bottom:18px}
.contrast-items{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:14px}
.contrast-items li{display:flex;align-items:flex-start;gap:12px;font-size:14px;line-height:1.5}

/* ──── PROCESS ──── */
.process-wrap{max-width:760px;margin:0 auto;position:relative}
.process-line{position:absolute;left:23px;top:24px;bottom:24px;width:2px;background:linear-gradient(to bottom,var(--navy) 0%,var(--yellow) 100%);opacity:.25}
.process-step{display:flex;gap:24px;align-items:flex-start;margin-bottom:32px;position:relative}
.process-step:last-child{margin-bottom:0}
.process-num{width:48px;height:48px;border-radius:999px;background:var(--navy);color:#fff;display:flex;align-items:center;justify-content:center;font-family:'Montserrat',sans-serif;font-weight:700;font-size:18px;flex:none;box-shadow:0 6px 16px rgba(67,73,102,.25);z-index:1}
.process-body{background:#fff;border-radius:14px;padding:24px;flex:1;border:1px solid var(--border);box-shadow:0 2px 6px rgba(67,73,102,.04)}
.process-h{font-family:'Montserrat',sans-serif;font-weight:700;font-size:18px;color:var(--fg);margin:0 0 8px;letter-spacing:-.01em}
.process-p{font-size:14px;line-height:1.6;color:var(--fg2);margin:0}

/* ──── PRICING ──── */
.pricing-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;align-items:stretch}
.price-card{background:#fff;border:1.5px solid var(--border);border-radius:20px;padding:32px;display:flex;flex-direction:column;gap:20px;transition:transform .2s,box-shadow .2s}
.price-card.popular{border-color:var(--yellow);border-width:2px;box-shadow:0 24px 48px -16px rgba(246,187,51,.20);transform:scale(1.03);position:relative}
.popular-badge{position:absolute;top:-12px;left:50%;transform:translateX(-50%);background:var(--navy);color:#fff;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:6px 14px;border-radius:999px;white-space:nowrap}
.price-name{font-family:'Montserrat',sans-serif;font-weight:700;font-size:16px;color:var(--fg)}
.price-num{font-family:'Montserrat',sans-serif;font-weight:800;font-size:44px;color:var(--fg);line-height:1;letter-spacing:-.025em}
.price-items{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:10px;flex:1}
.price-items li{display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:1.5;color:var(--fg)}
.price-check{color:var(--yellow);font-weight:700;flex:none}

/* ──── REQUIREMENTS ──── */
.req-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.req-card{background:#fff;border-radius:14px;padding:24px;border:1px solid var(--border);display:flex;flex-direction:column;gap:10px}
.req-card.accent-orange{border-left:4px solid var(--orange)}
.req-card.accent-yellow{border-left:4px solid var(--yellow)}
.req-icon{width:44px;height:44px;border-radius:12px;background:var(--gray);display:flex;align-items:center;justify-content:center;font-size:22px}
.req-h{font-family:'Montserrat',sans-serif;font-weight:600;font-size:16px;color:var(--fg);letter-spacing:-.01em}
.req-p{font-size:13px;line-height:1.6;color:var(--fg2);margin:0}
.req-badge{align-self:flex-start;font-size:11px;font-weight:700;padding:5px 10px;border-radius:999px;margin-top:4px}

/* ──── QUOTE ──── */
.quote-section{background:#434966;padding:96px 0}
.quote-mark{font-family:'Montserrat',sans-serif;font-weight:800;font-size:140px;color:var(--yellow);opacity:.25;line-height:.6;margin-bottom:-20px;user-select:none}
.quote-text{font-family:'Montserrat',sans-serif;font-weight:700;font-size:24px;line-height:1.5;color:#fff;font-style:italic;margin:0 0 32px;letter-spacing:-.01em}
.quote-avatar{width:60px;height:60px;border-radius:999px;background:var(--yellow);display:flex;align-items:center;justify-content:center;font-family:'Montserrat',sans-serif;font-weight:700;font-size:22px;color:var(--fg)}

/* ──── FINAL CTA ──── */
.cta-section{background:#fff;padding:120px 0}

/* ──── Keyframes ──── */
@keyframes floatChip{0%{transform:translateY(-8px)}100%{transform:translateY(8px)}}
@keyframes pulseDot{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.55;transform:scale(.85)}}
@keyframes lineFlow{0%{background-position:0% 0%}100%{background-position:0% 200%}}
@keyframes fadeInBadge{from{opacity:0;transform:translateX(-4px)}to{opacity:1;transform:translateX(0)}}
@keyframes marquee{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}

/* ──── Responsive ──── */
@media(max-width:960px){
  .hero-grid{grid-template-columns:1fr!important;gap:56px}
  .pipeline-wrap{justify-self:center}
  .why-grid{grid-template-columns:repeat(2,1fr)!important}
  .svc-grid,.contrast-grid,.pricing-grid,.req-grid{grid-template-columns:1fr!important}
  .h1{font-size:38px}
  .h2{font-size:30px}
  .price-card.popular{transform:none!important}
  .section{padding:64px 0!important}
  .cta-section{padding:80px 0!important}
}
@media(max-width:560px){
  .why-grid{grid-template-columns:1fr!important}
  .container{padding:0 20px!important}
  .h1{font-size:32px}
  .h2{font-size:26px}
}
</style>
</head>
<body>
<x-nav />

<!-- ═══════════════ HERO ═══════════════ -->
<section class="hero">
  <div class="hero-glow-tr" aria-hidden="true"></div>
  <div class="hero-glow-bl" aria-hidden="true"></div>
  <div class="container">
    <div class="hero-grid">
      <div class="reveal-left">
        <!--<span class="eyebrow hero-eyebrow">Sysco Marketplace · B2B Foodservice USA</span>-->
        <h1 class="h1 hero-title">
          Tu producto latino<br>
          en los mejores<br>
          <span class="blue">restaurantes de EE.UU.</span>
        </h1>
        <p style="font-family:'Montserrat',sans-serif;font-size:18px;line-height:1.7;color:#666;max-width:500px;margin:0 0 32px">
          Accede a Sysco y conecta tus productos con restaurantes, hoteles y negocios en EE.UU. Sell-U gestiona el proceso de onboarding.
        </p>
        <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
          <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20Sysco" class="btn btn-primary" target="_blank" rel="noopener">Hablar con un asesor →</a>
        </div>
        <p style="font-size:12px;color:#999;margin-top:20px">Sin compromiso · En español · Disponible para toda LATAM</p>
      </div>

      <div style="display:flex;justify-content:center" class="reveal-right">
        <div class="pipeline-wrap" id="pipelineWrap">
          <!-- Floating chips -->
          <div class="chip chip-animate" style="top:-4px;right:20px;background:#fff;color:#002B5B;animation-delay:0s">🌮 Especialidades latinas</div>
          <div class="chip chip-animate" style="bottom:84px;left:-22px;background:#f6bb33;color:#434966;animation-delay:1s">🌿 Orgánico · Gluten-free</div>
          <div class="chip chip-animate" style="bottom:4px;right:40px;background:#22c55e;color:#fff;animation-delay:2s">✓ Aprobado Sysco</div>

          <div class="pipeline-card">
            <div class="pipeline-blob" aria-hidden="true"></div>
            <div class="pipeline-header">
              <div style="display:flex;align-items:center;gap:6px">
                <span class="pipeline-brand">sysco</span>
                <span class="pipeline-dot"></span>
              </div>
              <span class="pipeline-sub">Marketplace</span>
              <div class="pipeline-live">
                <span class="live-dot"></span>
                LIVE
              </div>
            </div>
            <div class="pipeline-nodes" id="pipelineNodes">
              <!-- JS rendered -->
            </div>
            <div class="pipeline-metrics">
              <div>
                <div class="metric-num">329K+</div>
                <div class="metric-label">Clientes Sysco US</div>
              </div>
              <div class="metric-right">
                <div class="metric-num">B2B</div>
                <div class="metric-label">Foodservice · No B2C</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ WHY SYSCO ═══════════════ -->
<section class="section" style="background:#fff">
  <div class="container">
    <h2 class="h2 reveal" style="text-align:center;max-width:780px;margin:0 auto 56px">
      El canal B2B de foodservice más grande<br>
      de Estados Unidos, <span style="color:var(--blue)">abierto a tu marca.</span>
    </h2>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-stat">329K+</div>
        <div class="why-label">Clientes activos Sysco</div>
        <div class="why-desc">Restaurantes, hoteles, hospitales, escuelas y venues en EE.UU.</div>
      </div>
      <div class="why-card reveal">
        <div class="why-stat">$37B</div>
        <div class="why-label">Facturación anual Sysco</div>
        <div class="why-desc">El mayor distribuidor de foodservice del mundo por volumen.</div>
      </div>
      <div class="why-card reveal">
        <div class="why-stat">15K+</div>
        <div class="why-label">Productos en el Marketplace</div>
        <div class="why-desc">Niche, étnicos, orgánicos y especiales. Espacio real para tu marca.</div>
      </div>
      <div class="why-card reveal">
        <div class="why-stat">B2B</div>
        <div class="why-label">Sin competencia con el consumidor</div>
        <div class="why-desc">Vendes a negocios, no a personas. Ticket promedio mayor y relaciones de largo plazo.</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ SERVICES ═══════════════ -->
<section class="section" style="background:#fff;padding-top:0">
  <div class="container">
    <h2 class="h2 reveal" style="text-align:center;max-width:740px;margin:0 auto 56px">
      Todo lo que necesitas para vender<br>en Sysco, en un solo equipo.
    </h2>
    <div class="svc-grid">
      <div class="svc-card reveal">
        <div class="svc-icon">📋</div>
        <h3 class="svc-h">Registro como Supplier Sysco</h3>
        <p class="svc-p">Gestionamos tu registro en el portal de proveedores de Sysco y preparamos toda la documentación requerida.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Preparación del perfil de proveedor</span></li>
          <li><span class="dot">·</span><span>Certificaciones y seguros requeridos</span></li>
          <li><span class="dot">·</span><span>Gestión de comunicaciones con Sysco</span></li>
        </ul>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon">🏪</div>
        <h3 class="svc-h">Onboarding en Sysco Marketplace</h3>
        <p class="svc-p">Te damos de alta en la plataforma Sysco Shop como seller del Marketplace y configuramos tu tienda correctamente.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Configuración de cuenta Marketplace</span></li>
          <li><span class="dot">·</span><span>Categorías y atributos de producto</span></li>
          <li><span class="dot">·</span><span>Configuración de drop-ship</span></li>
        </ul>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon">📦</div>
        <h3 class="svc-h">Catálogo y listings optimizados</h3>
        <p class="svc-p">Creamos tus listings con los atributos, imágenes y descripciones que requiere la plataforma de Sysco.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Ficha técnica por producto</span></li>
          <li><span class="dot">·</span><span>Imágenes en formato Sysco</span></li>
          <li><span class="dot">·</span><span>Precios y pack sizes definidos</span></li>
        </ul>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon">🚛</div>
        <h3 class="svc-h">Logística drop-ship configurada</h3>
        <p class="svc-p">Configuramos el modelo de fulfillment directo: tú envías al cliente Sysco sin pasar por almacenes intermedios.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Protocolo de envío directo</span></li>
          <li><span class="dot">·</span><span>Etiquetas y empaque requerido</span></li>
          <li><span class="dot">·</span><span>SLAs de entrega definidos</span></li>
        </ul>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon">✅</div>
        <h3 class="svc-h">Cumplimiento y certificaciones</h3>
        <p class="svc-p">Te orientamos en los requisitos regulatorios que Sysco exige: FDA, seguro de responsabilidad y certificaciones de producto.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Guía de registro FDA si aplica</span></li>
          <li><span class="dot">·</span><span>Seguro de responsabilidad product liability</span></li>
          <li><span class="dot">·</span><span>Certificaciones orgánico / kosher / etc.</span></li>
        </ul>
      </div>
      <div class="svc-card reveal">
        <div class="svc-icon">💵</div>
        <h3 class="svc-h">Cobros y pagos en USD</h3>
        <p class="svc-p">Configuramos cómo recibes los pagos de Sysco en dólares americanos desde tu país en LATAM.</p>
        <ul class="svc-bullets">
          <li><span class="dot">·</span><span>Cuenta bancaria US vinculada</span></li>
          <li><span class="dot">·</span><span>Configuración fiscal con EIN</span></li>
          <li><span class="dot">·</span><span>Transferencias a tu país</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ CONTRAST SECTION ═══════════════ -->
<section class="contrast-section">
  <div class="container">
    <div style="text-align:center;max-width:1000px;margin:0 auto 56px" class="reveal">
      <!-- <span class="eyebrow" style="color:var(--yellow)">Por qué Sysco es diferente</span> -->
      <h2 class="h2" style="color:#fff;margin:16px 0 20px">
        No vendes a consumidores.<br>
        Vendes a negocios que compran semana a semana.
      </h2>
      <p style="font-size:16px;line-height:1.7;color:rgba(255,255,255,.7);max-width:640px;margin:0 auto">
        En Amazon o Walmart compites con miles de sellers por el mismo comprador individual. En Sysco Marketplace vendes a restaurantes, hoteles y cadenas de hospitalidad que realizan pedidos recurrentes y en volumen. Una cuenta activada puede valer $8,000–$50,000 al año.
      </p>
    </div>
    <div class="contrast-grid">
      <div class="contrast-card reveal">
        <div class="contrast-card-label" style="color:#888">B2C MARKETPLACE</div>
        <ul class="contrast-items">
          <li style="color:rgba(255,255,255,.78)"><span style="color:rgba(255,255,255,.35);font-weight:700;width:16px;display:inline-block">✗</span><span>Comprador individual</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:rgba(255,255,255,.35);font-weight:700;width:16px;display:inline-block">✗</span><span>Pedido promedio: $25–$80</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:rgba(255,255,255,.35);font-weight:700;width:16px;display:inline-block">✗</span><span>Alta competencia de precio</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:rgba(255,255,255,.35);font-weight:700;width:16px;display:inline-block">✗</span><span>Decisión impulsiva</span></li>
        </ul>
      </div>
      <div class="contrast-card featured reveal">
        <div class="contrast-card-label" style="color:var(--yellow)">B2B FOODSERVICE ★</div>
        <ul class="contrast-items">
          <li style="color:#fff;font-weight:600"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">✓</span><span>Comprador es un negocio</span></li>
          <li style="color:#fff;font-weight:600"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">✓</span><span>Pedido promedio: $500–$5,000</span></li>
          <li style="color:#fff;font-weight:600"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">✓</span><span>Relación comercial duradera</span></li>
          <li style="color:#fff;font-weight:600"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">✓</span><span>Decisión de compra planificada</span></li>
        </ul>
      </div>
      <div class="contrast-card reveal">
        <div class="contrast-card-label" style="color:#aaa">PRODUCTOS IDEALES</div>
        <ul class="contrast-items">
          <li style="color:rgba(255,255,255,.78)"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">•</span><span>Alimentos y bebidas étnicos / latinos</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">•</span><span>Productos orgánicos y especiales</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">•</span><span>Insumos de cocina y pastelería</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">•</span><span>Salsas, condimentos, bases culinarias</span></li>
          <li style="color:rgba(255,255,255,.78)"><span style="color:var(--yellow);font-weight:700;width:16px;display:inline-block">•</span><span>Packaging y desechables food-grade</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ REQUIREMENTS ═══════════════ -->
<section class="section" style="background:var(--gray)">
  <div class="container">
    <div style="text-align:center;max-width:940px;margin:0 auto 40px" class="reveal">
      <h2 class="h2" style="margin:0 0 16px">
        Lo que Sysco requiere<br>para aprobar tu cuenta de proveedor.
      </h2>
      <p style="font-size:16px;line-height:1.7;color:#666;margin:0 0 24px">
        Sysco tiene requisitos más rigurosos que Amazon o Walmart por ser un canal B2B regulado.
        No te preocupes — también te orientamos si aún no tienes alguno de estos elementos.
      </p>
      <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20verificar%20si%20estoy%20listo%20para%20Sysco" class="btn btn-outline" target="_blank" rel="noopener">Verificar si estoy listo →</a>
    </div>
    <div class="req-grid">
      <div class="req-card reveal">
        <div class="req-icon">🏢</div>
        <h3 class="req-h">LLC activa en EE.UU.</h3>
        <p class="req-p">Empresa registrada en EE.UU. con documentación al día (Wyoming o Florida recomendados).</p>
      </div>
      <div class="req-card reveal">
        <div class="req-icon">🔢</div>
        <h3 class="req-h">EIN del IRS</h3>
        <p class="req-p">Número de identificación fiscal para tu empresa americana.</p>
      </div>
      <div class="req-card accent-orange reveal">
        <div class="req-icon">🛡️</div>
        <h3 class="req-h">Seguro de responsabilidad de producto</h3>
        <p class="req-p">Product liability insurance de mínimo $1M por ocurrencia. Requisito obligatorio de Sysco para todos los suppliers.</p>
        <span class="req-badge" style="background:#fef0e8;color:#E8501A">Exclusivo Sysco</span>
      </div>
      <div class="req-card reveal">
        <div class="req-icon">📋</div>
        <h3 class="req-h">Fichas técnicas y especificaciones</h3>
        <p class="req-p">Especificaciones del producto, ingredientes, información nutricional y ficha de seguridad alimentaria si aplica.</p>
      </div>
      <div class="req-card accent-yellow reveal">
        <div class="req-icon">✅</div>
        <h3 class="req-h">Certificaciones aplicables</h3>
        <p class="req-p">FDA registration si aplica, certificación orgánica, kosher, halal u otras según la categoría del producto.</p>
        <span class="req-badge" style="background:#fef5dd;color:#c89320">Puede aplicar</span>
      </div>
      <div class="req-card reveal">
        <div class="req-icon">🏦</div>
        <h3 class="req-h">Cuenta bancaria US</h3>
        <p class="req-p">Para recibir los pagos de Sysco en dólares americanos.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ QUOTE ═══════════════ -->
<section class="quote-section">
  <div class="container" style="max-width:760px;text-align:center;position:relative" class="reveal">
    <div class="quote-mark" aria-hidden="true">"</div>
    <blockquote class="quote-text">
      "Vender a Sysco no es vender a un cliente más.
      Es conectar tu marca con el sistema de distribución
      de alimentos más grande de Estados Unidos —
      y con las mesas de miles de restaurantes."
    </blockquote>
    <div style="display:flex;align-items:center;justify-content:center;gap:14px">
      <div class="quote-avatar">SU</div>
      <div style="text-align:left">
        <div style="font-family:'Montserrat',sans-serif;font-weight:700;font-size:16px;color:var(--yellow)">Equipo Sell-U Marketplace</div>
        <div style="font-size:13px;color:rgba(255,255,255,.6);margin-top:2px">Especialistas en distribución B2B de alimentos en EE.UU. desde LATAM</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ FINAL CTA ═══════════════ -->
<section class="cta-section" id="contacto">
  <div class="container" style="text-align:center;max-width:820px" class="reveal">
    <h2 class="h2" style="font-size:46px;font-weight:600;color:#434966;margin:0 0 20px;letter-spacing:-.025em">
      Tus productos en restaurantes y negocios de EE.UU.
    </h2>
    <p style="font-size:18px;line-height:1.7;color:#434966;max-width:600px;margin:0 auto 36px">
      Habla hoy con uno de nuestros especialistas en distribución foodservice. Sin compromiso y en español desde cualquier país de LATAM.
    </p>
    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
      <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20Sysco" class="btn btn-primary" target="_blank" rel="noopener">Hablar con un asesor →</a>
    </div>
  </div>
</section>

<x-footer />

<script>
/* ── Pipeline animation ── */
(function(){
  const NODES = [
    { kind:'product',     title:'Tu producto desde LATAM',    sub:'Alimentos, bebidas, especialidades',       badge:'→ Ingresando',     badgeBg:'#f6bb33', badgeFg:'#434966' },
    { kind:'marketplace', title:'Sysco Marketplace',          sub:'+15,000 productos · B2B foodservice',      badge:'✓ Listado activo', badgeBg:'#22c55e', badgeFg:'#fff'    },
    { kind:'truck',       title:'Red de distribución Sysco',  sub:'Drop-ship directo al cliente',             badge:'En tránsito',      badgeBg:'#0064A4', badgeFg:'#fff'    },
    { kind:'restaurant',  title:'Restaurante en EE.UU.',      sub:'Hotels, hospitales, escuelas, venues',     badge:'Pedido recibido',  badgeBg:'#E8501A', badgeFg:'#fff'    },
  ];

  const ICONS = {
    product: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7.5L12 3l9 4.5v9L12 21l-9-4.5v-9z"/><path d="M3 7.5L12 12l9-4.5"/><path d="M12 12v9"/></svg>',
    marketplace: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l1.5-5h15L21 9"/><path d="M3 9v11h18V9"/><path d="M3 9c0 2 1.5 3 3 3s3-1 3-3c0 2 1.5 3 3 3s3-1 3-3c0 2 1.5 3 3 3s3-1 3-3"/><path d="M9 20v-5h6v5"/></svg>',
    truck: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 7h11v9H2z"/><path d="M13 10h5l3 3v3h-8"/><circle cx="6" cy="18" r="2"/><circle cx="17" cy="18" r="2"/></svg>',
    restaurant: '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3v8a3 3 0 0 0 3 3v7"/><path d="M10 3v6"/><path d="M7 9h3"/><path d="M16 3c-1.5 1.5-2 3-2 5s.5 3 2 4v9"/></svg>',
  };

  let active = 0;

  function render() {
    const container = document.getElementById('pipelineNodes');
    if (!container) return;
    let html = '';
    NODES.forEach(function(node, i) {
      const isActive = i === active;
      const iconColor = isActive ? '#002B5B' : 'rgba(255,255,255,0.45)';
      const iconBg = isActive ? '#fff' : 'rgba(255,255,255,0.08)';
      const iconShadow = isActive ? '0 6px 18px rgba(246,187,51,0.22)' : 'none';
      const titleColor = isActive ? '#fff' : 'rgba(255,255,255,0.42)';
      const subColor = isActive ? 'rgba(255,255,255,0.7)' : 'rgba(255,255,255,0.28)';
      const svgStr = ICONS[node.kind].replace('stroke="currentColor"','').replace(/<svg/,'<svg stroke="'+iconColor+'"');

      html += '<div style="display:flex;align-items:center;gap:14px">';
      html += '<div style="width:48px;height:48px;border-radius:14px;background:'+iconBg+';display:flex;align-items:center;justify-content:center;flex:none;transition:background .3s;box-shadow:'+iconShadow+'">';
      html += svgStr;
      html += '</div>';
      html += '<div style="flex:1;min-width:0">';
      html += '<div style="font-size:14px;font-weight:700;color:'+titleColor+';transition:color .3s;line-height:1.3">'+node.title+'</div>';
      html += '<div style="font-size:12px;color:'+subColor+';margin-top:2px;transition:color .3s;line-height:1.4">'+node.sub+'</div>';
      html += '</div>';
      if (isActive) {
        html += '<div style="font-size:11px;font-weight:700;background:'+node.badgeBg+';color:'+node.badgeFg+';padding:5px 10px;border-radius:999px;white-space:nowrap;flex:none;animation:fadeInBadge .3s ease-out both">'+node.badge+'</div>';
      }
      html += '</div>';

      if (i < NODES.length - 1) {
        const lineClass = isActive ? 'pipe-line active' : 'pipe-line inactive';
        html += '<div class="pipe-connector"><div class="'+lineClass+'"></div></div>';
      }
    });
    container.innerHTML = html;
  }

  render();
  setInterval(function(){ active = (active + 1) % 4; render(); }, 1800);
})();

/* ── Scroll reveal ── */
(function(){
  const els = document.querySelectorAll('.reveal,.reveal-left,.reveal-right');
  const io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('revealed'); io.unobserve(e.target); } });
  },{threshold:0.12});
  els.forEach(function(el){ io.observe(el); });
})();
</script>
</body>
</html>
