<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre nosotros — Sell·U</title>
<meta name="description" content="Sell-U lleva negocios de LATAM al mercado americano. LLC, IRS, USPTO, FDA, Amazon y logística — en un solo lugar, en español.">
<link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}

:root{
  --navy-700:#434966; --navy-800:#434966; --navy-900:#434966;
  --blue-50:#f3f5fe; --blue-700:#072ac8;
  --accent-500:#f6bb33; --accent-400:#f9cc66; --accent-300:#fbdd95;
  --accent-200:#fdecc2; --accent-100:#fef5dd; --accent-700:#c89320;
  --paper:#ffffff; --paper-2:#eef1f8;
  --white:#ffffff;
  --ink-700:#3a3d46; --ink-500:#6b6f7a; --ink-400:#9298a3;
  --ink-300:#c5c8d0; --ink-200:#e5e6ea; --ink-100:#f0f0f2;
  --success-700:#0f6b3f; --success-500:#1aa05f; --success-100:#e3f6ec;
  --fg-primary:#434966; --fg-secondary:#3a3d46; --fg-tertiary:#6b6f7a;
  --border-default:#e5e6ea; --border-strong:#c5c8d0; --border-subtle:#f0f0f2;
  --font-display:'Montserrat',ui-sans-serif,system-ui,sans-serif;
  --font-sans:'Montserrat',ui-sans-serif,system-ui,sans-serif;
  --font-mono:'JetBrains Mono',ui-monospace,monospace;
  --shadow-sm:0 1px 2px rgba(46,56,86,.05),0 1px 3px rgba(46,56,86,.04);
  --shadow-md:0 4px 8px -2px rgba(46,56,86,.06),0 2px 4px -2px rgba(46,56,86,.04);
  --shadow-lg:0 12px 24px -8px rgba(46,56,86,.10),0 4px 8px -4px rgba(46,56,86,.06);
  --shadow-xl:0 24px 48px -12px rgba(46,56,86,.16),0 8px 16px -8px rgba(46,56,86,.08);
  --ease-out:cubic-bezier(.16,1,.3,1);
}

body{font-family:var(--font-sans);font-size:16px;line-height:24px;color:var(--fg-primary);background:var(--paper);-webkit-font-smoothing:antialiased}
a{text-decoration:none;color:inherit}
img{max-width:100%;height:auto}

/* ── Layout ── */
.container{max-width:1200px;margin:0 auto;padding:0 32px}
.section{padding:96px 0}
.section-band{background:var(--paper-2)}

/* ── Reveal ── */
.reveal{opacity:0;transform:translateY(12px);transition:opacity 500ms var(--ease-out),transform 500ms var(--ease-out)}
.reveal.in{opacity:1;transform:translateY(0)}
@media(prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none}}

/* ── Eyebrow ── */
.eyebrow{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary)}

/* ── Buttons ── */
.btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--font-sans);font-weight:600;font-size:14px;padding:10px 18px;border-radius:10px;border:1px solid transparent;cursor:pointer;line-height:20px;text-decoration:none;transition:background .2s,box-shadow .2s,border-color .2s}
.btn-primary{background:var(--navy-900);color:var(--paper);box-shadow:var(--shadow-sm)}
.btn-primary:hover{box-shadow:var(--shadow-md)}
.btn-accent{background:var(--accent-500);color:var(--navy-900);box-shadow:var(--shadow-sm)}
.btn-accent:hover{background:var(--accent-400);box-shadow:var(--shadow-md)}
.btn-secondary{background:var(--white);color:var(--navy-900);border-color:var(--border-strong)}
.btn-secondary:hover{background:var(--paper-2);border-color:var(--navy-700)}
.btn-on-dark{background:var(--paper);color:var(--navy-900)}
.btn-on-dark:hover{background:var(--white)}
.btn-lg{padding:14px 22px;font-size:16px;border-radius:12px}
.btn .arrow{display:inline-block;transition:transform 200ms var(--ease-out)}
.btn:hover .arrow{transform:translateX(3px)}

/* ── Hero ── */
.hero{padding:56px 0 96px;position:relative;overflow:hidden;background:linear-gradient(180deg,var(--accent-100) 0%,var(--paper) 38%,var(--paper) 70%,var(--blue-50) 100%)}
.hero-puzzle-l{position:absolute;left:-200px;top:80px;width:480px;height:480px;background:var(--accent-500);opacity:.14;clip-path:path("M260 0 C 320 0, 360 40, 360 100 L 360 180 C 400 180, 440 200, 440 240 C 440 280, 400 300, 360 300 L 360 380 C 360 440, 320 480, 260 480 L 80 480 C 40 480, 0 440, 0 380 L 0 260 C 40 260, 80 240, 80 200 C 80 160, 40 140, 0 140 L 0 80 C 0 40, 40 0, 80 0 Z");pointer-events:none}
.hero-puzzle-r{position:absolute;right:-180px;bottom:-120px;width:420px;height:420px;background:var(--blue-700);opacity:.10;clip-path:path("M260 0 C 320 0, 360 40, 360 100 L 360 180 C 400 180, 440 200, 440 240 C 440 280, 400 300, 360 300 L 360 380 C 360 440, 320 480, 260 480 L 80 480 C 40 480, 0 440, 0 380 L 0 260 C 40 260, 80 240, 80 200 C 80 160, 40 140, 0 140 L 0 80 C 0 40, 40 0, 80 0 Z");pointer-events:none}
.hero-inner{position:relative;max-width:1040px;margin:0 auto;padding:0 32px;text-align:center}
.hero-h1{font-family:var(--font-display);font-size:80px;line-height:1;letter-spacing:-.03em;font-weight:600;color:var(--navy-900);margin:8px 0 40px;display:inline-flex;align-items:center;gap:18px;flex-wrap:wrap;justify-content:center}
.hero-logo{height:.92em;width:auto;vertical-align:middle;display:inline-block}

/* ── Video placeholder ── */
.video-frame{max-width:920px;margin:0 auto;border-radius:20px;overflow:hidden;box-shadow:var(--shadow-xl);border:1px solid var(--border-default)}
.video-aspect{position:relative;width:100%;padding-top:56.25%;background:var(--navy-900)}
.video-inner{position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px;color:var(--paper);background:radial-gradient(circle at 30% 20%,rgba(246,187,51,.10),transparent 50%),radial-gradient(circle at 80% 90%,rgba(7,42,200,.18),transparent 55%),var(--navy-900)}
.video-play{width:84px;height:84px;border-radius:999px;background:var(--accent-500);color:var(--navy-900);display:inline-flex;align-items:center;justify-content:center;box-shadow:0 0 0 8px rgba(246,187,51,.18);margin-bottom:8px;padding-left:6px}
.video-eyebrow{font-size:11px;font-weight:600;letter-spacing:.16em;text-transform:uppercase;color:var(--accent-500)}
.video-label{font-family:var(--font-display);font-size:22px;line-height:28px;letter-spacing:-.01em;font-weight:600;color:var(--paper)}
.video-meta{display:inline-flex;align-items:center;gap:10px;font-family:var(--font-mono);font-size:12px;color:rgba(251,250,247,.6);letter-spacing:.04em;margin-top:4px}

/* ── Stats ── */
.stat-badge{display:inline-flex;flex-direction:column;gap:4px;align-items:center}
.stat-badge .num{font-family:var(--font-display);font-size:32px;line-height:36px;letter-spacing:-.02em;font-weight:600;color:var(--navy-900)}
.stat-badge .lbl{font-size:12px;letter-spacing:.08em;text-transform:uppercase;color:var(--fg-tertiary);font-weight:600}

/* ── Section heading ── */
.section-heading{max-width:760px}
.section-heading h2{font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;color:var(--navy-900);margin:16px 0}
.section-heading p.lead{font-size:18px;line-height:28px;color:var(--fg-secondary);max-width:640px}

/* ── Service map ── */
.svc-map{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--border-default);border:1px solid var(--border-default);border-radius:14px;overflow:hidden}
.svc-cell{background:var(--white);padding:24px;display:flex;flex-direction:column;gap:8px}
.svc-icon{width:36px;height:36px;border-radius:10px;background:var(--paper-2);display:inline-flex;align-items:center;justify-content:center;color:var(--navy-900);margin-bottom:8px}
.svc-cell h5{font-family:var(--font-display);font-size:16px;line-height:22px;font-weight:600;color:var(--navy-900);letter-spacing:-.005em}
.svc-cell p{font-size:13px;line-height:20px;color:var(--fg-secondary)}

/* ── Pull quote ── */
.pull-quote{font-family:var(--font-display);font-size:28px;line-height:38px;letter-spacing:-.015em;font-weight:500;color:var(--navy-900);max-width:760px}
.pull-quote em{font-style:normal;background:linear-gradient(180deg,transparent 60%,var(--accent-300) 60%);padding:0 4px}

/* ── Timeline ── */
.timeline{position:relative;display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:56px}
.timeline::before{content:"";position:absolute;top:9px;left:8px;right:8px;height:1px;background:var(--border-default);z-index:0}
.timeline-item{position:relative;padding-top:32px}
.timeline-item .dot{position:absolute;top:0;left:0;width:18px;height:18px;border-radius:999px;background:var(--white);border:2px solid var(--navy-700);z-index:1;transform:scale(0);transition:transform 320ms var(--ease-out)}
.timeline-item.in .dot{transform:scale(1)}
.timeline-item.accent .dot{background:var(--accent-500);border-color:var(--accent-700)}
.timeline-year{font-family:var(--font-mono);font-size:13px;letter-spacing:.04em;color:var(--accent-700);font-weight:500;margin-bottom:8px}
.timeline-h{font-family:var(--font-display);font-size:18px;line-height:24px;letter-spacing:-.01em;font-weight:600;color:var(--navy-900);margin:0 0 6px}
.timeline-p{font-size:14px;line-height:20px;color:var(--fg-secondary)}

/* ── Profile cards ── */
.profiles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:56px}
.profile-card{background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:32px;display:flex;flex-direction:column;gap:16px;height:100%;transition:transform .2s var(--ease-out),box-shadow .2s var(--ease-out),border-color .2s var(--ease-out)}
.profile-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-lg);border-color:var(--border-strong)}
.profile-num{font-family:var(--font-mono);font-size:12px;font-weight:500;letter-spacing:.08em;color:var(--accent-700)}
.profile-card h3{font-family:var(--font-display);font-size:22px;line-height:28px;letter-spacing:-.01em;font-weight:600;color:var(--navy-900)}
.profile-card > p{font-size:15px;line-height:23px;color:var(--fg-secondary);flex:1}
.profile-ftr{display:flex;align-items:center;gap:8px;font-size:13px;font-weight:600;color:var(--navy-900);padding-top:12px;border-top:1px solid var(--border-default);margin-top:4px}

/* ── Team ── */
.team-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:24px;margin-top:56px}
.team-card{background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:20px;display:flex;flex-direction:column;align-items:center;text-align:center;gap:12px;transition:transform .2s,box-shadow .2s,border-color .2s}
.team-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:var(--border-strong)}
.team-photo{width:96px;height:96px;border-radius:999px;background:var(--paper-2);border:1px dashed var(--border-strong);display:inline-flex;align-items:center;justify-content:center;color:var(--fg-tertiary);font-size:12px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;position:relative}
.team-photo::before{content:"";position:absolute;inset:6px;border-radius:999px;background:var(--white)}
.team-photo span{position:relative;z-index:1;display:inline-flex;flex-direction:column;align-items:center;gap:2px;color:var(--fg-tertiary)}
.team-name{font-family:var(--font-display);font-size:15px;line-height:20px;font-weight:600;color:var(--navy-900);letter-spacing:-.005em}
.team-role{font-size:12px;line-height:16px;color:var(--fg-tertiary);font-weight:500;letter-spacing:.04em;text-transform:uppercase}

/* ── Final CTA ── */
.final-cta{background:var(--navy-900);color:var(--paper);border-radius:28px;padding:64px;position:relative;overflow:hidden}
.final-cta::after{content:"";position:absolute;right:-80px;top:-80px;width:320px;height:320px;border-radius:50%;background:var(--accent-500);opacity:.12;pointer-events:none}
.final-cta-grid{position:relative;z-index:1;display:grid;grid-template-columns:1.3fr 1fr;gap:64px;align-items:center}
.cta-countries{background:rgba(251,250,247,.06);border:1px solid rgba(251,250,247,.14);border-radius:20px;padding:28px}
.country-label{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent-500);margin-bottom:14px}
.country-tags{display:flex;flex-wrap:wrap;gap:8px}
.country-tag{font-size:13px;font-weight:500;padding:6px 12px;border-radius:999px;background:rgba(251,250,247,.08);color:var(--paper);border:1px solid rgba(251,250,247,.14)}
.cta-footer{margin-top:24px;padding-top:20px;border-top:1px solid rgba(251,250,247,.12);display:flex;align-items:center;gap:12px}
.cta-avatar{width:40px;height:40px;border-radius:999px;background:var(--accent-500);color:var(--navy-900);display:inline-flex;align-items:center;justify-content:center;font-weight:700;font-family:var(--font-display)}

/* ── Responsive ── */
@media(max-width:960px){
  .hero-h1{font-size:52px}
  .svc-map{grid-template-columns:1fr 1fr}
  .timeline{grid-template-columns:1fr 1fr}
  .profiles-grid{grid-template-columns:1fr}
  .final-cta-grid{grid-template-columns:1fr}
  .final-cta{padding:40px 32px}
  .section{padding:64px 0}
}
@media(max-width:860px){.team-grid{grid-template-columns:repeat(3,1fr)}}
@media(max-width:640px){
  .hero-h1{font-size:38px}
  .container{padding:0 20px}
  .svc-map{grid-template-columns:1fr}
  .timeline{grid-template-columns:1fr}
  .team-grid{grid-template-columns:repeat(2,1fr)}
}
</style>
</head>
<body>
<x-nav />

<!-- ═══════════════ HERO ═══════════════ -->
<section class="hero">
  <div class="hero-puzzle-l" aria-hidden="true"></div>
  <div class="hero-puzzle-r" aria-hidden="true"></div>
  <div class="hero-inner">
    <h1 class="hero-h1 reveal" data-delay="100">
      <span>¿Por qué</span>
      <img src="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_2.png?v=1737756196"
           alt="Sell·U" class="hero-logo">
      <span>?</span>
    </h1>

    <div class="video-frame reveal" data-delay="400" role="region" aria-label="Video de bienvenida">
      <div class="video-aspect">
        <div class="video-inner">
          <div class="video-play" aria-hidden="true">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
              <path d="M8 5.14v13.72a1 1 0 001.55.83l11-6.86a1 1 0 000-1.66l-11-6.86A1 1 0 008 5.14z" fill="currentColor"/>
            </svg>
          </div>
          <div class="video-eyebrow">Video</div>
          <div class="video-label">Video de bienvenida — por insertar</div>
          <div class="video-meta">
            <span>16:9</span>
            <span style="width:3px;height:3px;border-radius:999px;background:rgba(251,250,247,.4)"></span>
            <span>1920 × 1080</span>
          </div>
        </div>
      </div>
    </div>

    <p class="reveal" data-delay="600" style="font-size:20px;line-height:32px;letter-spacing:-.005em;color:var(--fg-secondary);max-width:720px;margin:48px auto 16px">
      Sell-U nació para resolver un problema concreto: que un emprendedor de Colombia, México, Argentina o cualquier país de América Latina pueda operar legalmente en EE.UU. sin tener que viajar, hablar inglés ni entender un sistema pensado para residentes americanos.
    </p>
    <p class="reveal" data-delay="750" style="font-size:20px;line-height:32px;letter-spacing:-.005em;color:var(--fg-secondary);max-width:720px;margin:0 auto 36px">
      Lo hacemos todos los días. Para marcas reales, con procesos reales y resultados concretos.
    </p>

    <div class="reveal" data-delay="900" style="display:flex;gap:12px;align-items:center;justify-content:center;margin-bottom:56px;flex-wrap:wrap">
      <a href="#hablar" class="btn btn-primary btn-lg">Hablar con el equipo <span class="arrow">→</span></a>
      <a href="/pages/crear-empresa-en-estados-unidos" class="btn btn-secondary btn-lg">Ver servicios</a>
    </div>

    <div class="reveal" data-delay="1050" style="display:flex;gap:64px;padding-top:32px;border-top:1px solid var(--border-default);justify-content:center;flex-wrap:wrap">
      <div class="stat-badge">
        <span class="num">+1,200</span>
        <span class="lbl">Negocios constituidos</span>
      </div>
      <div class="stat-badge">
        <span class="num">12</span>
        <span class="lbl">Países LATAM</span>
      </div>
      <div class="stat-badge">
        <span class="num">100%</span>
        <span class="lbl">En español</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ LO QUE HACEMOS ═══════════════ -->
<section class="section">
  <div class="container">
    <div class="section-heading reveal">
      <span class="eyebrow">Lo que hacemos · y cómo lo hacemos</span>
      <h2>Operamos los procesos. No entregamos formularios.</h2>
      <p class="lead">
        Sell-U gestiona todo lo que un negocio necesita para operar en EE.UU.: constituir la empresa, cumplir con el IRS, proteger la marca, registrar productos ante la FDA, abrir canales de venta en Amazon o Faire, estructurar la logística y llevar la contabilidad en orden.
      </p>
    </div>

    <div class="svc-map reveal" data-delay="120" style="margin-top:56px">
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="building-2" width="18" height="18"></i></div>
        <h5>Constitución LLC</h5>
        <p>Delaware o Wyoming, en 7 días hábiles.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="landmark" width="18" height="18"></i></div>
        <h5>Cumplimiento IRS</h5>
        <p>EIN, ITIN, declaraciones anuales.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="shield-check" width="18" height="18"></i></div>
        <h5>Trademark / USPTO</h5>
        <p>Protección de marca en EE.UU.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="pill" width="18" height="18"></i></div>
        <h5>Registro FDA</h5>
        <p>Productos cosméticos, alimentos, suplementos.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="shopping-bag" width="18" height="18"></i></div>
        <h5>Amazon · Faire</h5>
        <p>Apertura de canales y onboarding completo.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="truck" width="18" height="18"></i></div>
        <h5>Logística 3PL</h5>
        <p>Almacenes, fulfillment y rutas en EE.UU.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="calculator" width="18" height="18"></i></div>
        <h5>Contabilidad</h5>
        <p>Bookkeeping mensual y reportes en orden.</p>
      </div>
      <div class="svc-cell">
        <div class="svc-icon"><i data-lucide="mail" width="18" height="18"></i></div>
        <h5>Agente registrado</h5>
        <p>Dirección oficial y reenvío legal.</p>
      </div>
    </div>

    <!-- Pull quote + diferenciador -->
    <div class="reveal" data-delay="200" style="margin-top:96px;display:grid;grid-template-columns:1fr 1.4fr;gap:64px;align-items:start">
      <div>
        <span class="eyebrow">Lo que nos diferencia</span>
        <p style="margin-top:16px;font-size:15px;line-height:24px;color:var(--fg-tertiary)">
          No somos intermediarios que entregan formularios. Somos el equipo que acompaña cada proceso de principio a fin — con especialistas reales, seguimiento en tiempo real y comunicación directa en español.
        </p>
      </div>
      <div class="pull-quote">
        Lo que nos hace distintos no es el catálogo de servicios.<br>
        <em>Es que los conectamos.</em>
        <p style="font-size:16px;line-height:26px;font-weight:400;color:var(--fg-secondary);margin-top:24px;font-family:var(--font-sans);letter-spacing:0">
          Un cliente que llega por su LLC termina con su ITIN, su Trademark, su cuenta de Amazon y su logística estructurada — porque alguien le mostró el mapa completo antes de que empezara a caminar.
        </p>
      </div>
    </div>

    <!-- Timeline -->
    <div style="margin-top:96px;padding-top:64px;border-top:1px solid var(--border-default)">
      <div class="section-heading reveal">
        <span class="eyebrow">Recorrido</span>
        <h2 style="font-size:32px;line-height:40px">Cinco años acompañando founders.</h2>
      </div>
      <div class="timeline">
        <div class="timeline-item reveal" data-delay="0">
          <div class="dot"></div>
          <div class="timeline-year">2021</div>
          <div class="timeline-h">Origen</div>
          <p class="timeline-p">Sell-U nace acompañando a 14 marcas latinas a constituirse en EE.UU.</p>
        </div>
        <div class="timeline-item reveal" data-delay="120">
          <div class="dot"></div>
          <div class="timeline-year">2023</div>
          <div class="timeline-h">+500 negocios</div>
          <p class="timeline-p">Expandimos a IRS, USPTO y FDA bajo un mismo equipo.</p>
        </div>
        <div class="timeline-item reveal" data-delay="240">
          <div class="dot"></div>
          <div class="timeline-year">2024</div>
          <div class="timeline-h">+1,000 marcas</div>
          <p class="timeline-p">Integramos Amazon, Faire y logística 3PL al servicio.</p>
        </div>
        <div class="timeline-item accent reveal" data-delay="360">
          <div class="dot"></div>
          <div class="timeline-year">2026</div>
          <div class="timeline-h">Hoy</div>
          <p class="timeline-p">12 países LATAM operando bajo estructura Sell-U.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ PARA QUIÉN ═══════════════ -->
<section class="section section-band">
  <div class="container">
    <div class="section-heading reveal">
      <span class="eyebrow">Para quién es Sell-U</span>
      <h2>Tres formas de empezar — un mismo destino.</h2>
      <p class="lead">
        No importa si estás partiendo de cero, ordenando lo que ya construiste o consolidando operaciones. Hay un punto de entrada para cada momento del negocio.
      </p>
    </div>

    <div class="profiles-grid">
      <div class="profile-card reveal" data-delay="0">
        <div style="display:flex;align-items:center;justify-content:space-between">
          <span class="profile-num">PERFIL 01</span>
          <span style="width:36px;height:36px;border-radius:10px;background:var(--paper-2);display:inline-flex;align-items:center;justify-content:center;color:var(--navy-900)"><i data-lucide="rocket" width="18" height="18"></i></span>
        </div>
        <h3>Para el emprendedor que quiere operar en EE.UU. sin vivir allá</h3>
        <p>Tienes un producto, un servicio o una idea. Quieres que llegue al mercado americano de forma legal, ordenada y sostenible. No tienes tiempo de descifrar el IRS ni el USPTO en inglés. Sell-U lo hace por ti.</p>
        <div class="profile-ftr">
          <span style="width:6px;height:6px;border-radius:999px;background:var(--accent-500)"></span>
          Empieza desde cero
        </div>
      </div>
      <div class="profile-card reveal" data-delay="150">
        <div style="display:flex;align-items:center;justify-content:space-between">
          <span class="profile-num">PERFIL 02</span>
          <span style="width:36px;height:36px;border-radius:10px;background:var(--paper-2);display:inline-flex;align-items:center;justify-content:center;color:var(--navy-900)"><i data-lucide="layers" width="18" height="18"></i></span>
        </div>
        <h3>Para la marca que ya opera pero necesita estructura</h3>
        <p>Ya tienes tu LLC. Ya estás vendiendo. Pero hay obligaciones fiscales sin cumplir, una marca sin proteger o una logística que no escala. Sell-U entra en cualquier etapa del camino.</p>
        <div class="profile-ftr">
          <span style="width:6px;height:6px;border-radius:999px;background:var(--accent-500)"></span>
          Ordena lo que ya existe
        </div>
      </div>
      <div class="profile-card reveal" data-delay="300">
        <div style="display:flex;align-items:center;justify-content:space-between">
          <span class="profile-num">PERFIL 03</span>
          <span style="width:36px;height:36px;border-radius:10px;background:var(--paper-2);display:inline-flex;align-items:center;justify-content:center;color:var(--navy-900)"><i data-lucide="git-merge" width="18" height="18"></i></span>
        </div>
        <h3>Para el negocio que quiere crecer sin fricción operativa</h3>
        <p>No quieres coordinar cinco proveedores distintos para resolver lo que debería ser un solo sistema. En Sell-U todo está conectado: legal, fiscal, comercial y logístico, en un solo lugar.</p>
        <div class="profile-ftr">
          <span style="width:6px;height:6px;border-radius:999px;background:var(--accent-500)"></span>
          Consolida tus operaciones
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ EQUIPO ═══════════════ -->
<section class="section">
  <div class="container">
    <div class="section-heading reveal" style="text-align:center;margin:0 auto">
      <span class="eyebrow">Nuestro equipo</span>
      <h2>Las personas detrás de Sell-U.</h2>
      <p class="lead" style="margin:0 auto">
        Un equipo construido para acompañar a emprendedores de LATAM en cada paso hacia el mercado americano.
      </p>
    </div>

    <div class="team-grid">
      <div class="team-card reveal" data-delay="0">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">CEO</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="80">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Director Creativo</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="160">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Desarrollador</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="240">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Product Designer</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="320">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Asesora Legal</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="0">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Asesor Fiscal</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="80">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Asesora de Marketplaces</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="160">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Asesor de Logística</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="240">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Especialista en Registros</p>
        </div>
      </div>
      <div class="team-card reveal" data-delay="320">
        <div class="team-photo">
          <span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="3.4" stroke="currentColor" stroke-width="1.6"/><path d="M5.5 19c1.4-3 4-4.4 6.5-4.4S17 16 18.5 19" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
            Foto
          </span>
        </div>
        <div>
          <p class="team-name">Nombre Apellido</p>
          <p class="team-role">Soporte al Cliente</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════ FINAL CTA ═══════════════ -->
<section class="section" id="hablar">
  <div class="container">
    <div class="final-cta reveal">
      <div class="final-cta-grid">
        <div>
          <span class="eyebrow" style="color:var(--accent-500)">Da el siguiente paso</span>
          <h2 style="font-family:var(--font-display);font-size:48px;line-height:54px;letter-spacing:-.02em;font-weight:600;color:var(--paper);margin-top:16px;margin-bottom:20px">
            Si EE.UU. está en tus planes,<br>el momento es <em style="font-style:normal;color:var(--accent-500)">antes</em> de que los errores cuesten dinero.
          </h2>
          <p style="font-size:17px;line-height:27px;color:rgba(251,250,247,.78);max-width:540px;margin-bottom:32px">
            Si tienes un negocio en LATAM y Estados Unidos está en tus planes, el mejor momento para estructurarlo bien es antes de la primera multa, el primer ITIN rechazado o el primer producto bloqueado en aduana.
          </p>
          <div style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
            <a href="https://wa.me/19542105405?text=Hola%2C%20quiero%20hablar%20con%20el%20equipo%20de%20Sell-U" class="btn btn-accent btn-lg" target="_blank" rel="noopener">
              Hablar con el equipo <span class="arrow">→</span>
            </a>
            <a href="/" class="btn btn-on-dark btn-lg">Ver todos los servicios</a>
          </div>
          <p style="margin-top:20px;font-size:13px;color:rgba(251,250,247,.55);display:inline-flex;align-items:center;gap:8px">
            Sin compromiso. Una conversación de 30 minutos puede ahorrarte meses de correcciones.
          </p>
        </div>

        <div class="cta-countries">
          <div class="country-label">Atendemos founders en</div>
          <div class="country-tags">
            <span class="country-tag">Colombia</span>
            <span class="country-tag">México</span>
            <span class="country-tag">Argentina</span>
            <span class="country-tag">Chile</span>
            <span class="country-tag">Perú</span>
            <span class="country-tag">Ecuador</span>
            <span class="country-tag">Costa Rica</span>
            <span class="country-tag">Uruguay</span>
            <span class="country-tag">Brasil</span>
            <span class="country-tag">Guatemala</span>
            <span class="country-tag">Panamá</span>
            <span class="country-tag">Rep. Dominicana</span>
          </div>
          <div class="cta-footer">
            <div class="cta-avatar">S</div>
            <div>
              <div style="font-size:14px;font-weight:600;color:var(--paper)">Equipo Sell-U</div>
              <div style="font-size:12px;color:rgba(251,250,247,.6)">Especialistas legales · fiscales · comerciales</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<x-footer />

<script>
/* Scroll reveal */
(function(){
  var els = document.querySelectorAll('.reveal');
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){
        var delay = parseInt(e.target.dataset.delay||0);
        setTimeout(function(){ e.target.classList.add('in'); }, delay);
        io.unobserve(e.target);
      }
    });
  },{threshold:0.12});
  els.forEach(function(el){ io.observe(el); });
  /* Timeline dots */
  var tio = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); tio.unobserve(e.target); } });
  },{threshold:0.2});
  document.querySelectorAll('.timeline-item').forEach(function(el){ tio.observe(el); });
})();
/* Lucide icons */
document.addEventListener('DOMContentLoaded',function(){
  if(window.lucide) lucide.createIcons();
});
</script>
</body>
</html>
