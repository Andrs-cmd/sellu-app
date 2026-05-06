<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sell·U × Faire — Vende en tiendas físicas de EE.UU.</title>
<meta name="description" content="Faire conecta tu marca de LATAM con más de 700,000 tiendas físicas y boutiques en EE.UU. Sin ferias, sin intermediarios. Sell-U gestiona todo el proceso.">
<link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Poppins',ui-sans-serif,system-ui,sans-serif;background:#fbfaf7;color:#434966;-webkit-font-smoothing:antialiased}
a{text-decoration:none;color:inherit}
img{max-width:100%;height:auto}

/* ── TOKENS ── */
:root{
  --navy:#434966; --navy-700:#434966; --navy-900:#434966;
  --accent:#f6bb33; --accent-100:#fef5dd; --accent-300:#fbdd95; --accent-500:#f6bb33; --accent-700:#c89320;
  --paper:#fbfaf7; --paper-2:#f5f3ee;
  --white:#ffffff;
  --ink-200:#e5e6ea; --ink-300:#c5c8d0; --ink-500:#6b6f7a; --ink-700:#3a3d46;
  --success-100:#e3f6ec; --success-500:#1aa05f; --success-700:#0f6b3f;
  --danger-100:#fbe4e2; --danger-700:#99231b;
  --border-default:#e5e6ea; --border-strong:#c5c8d0; --border-subtle:#f0f0f2;
  --fg-secondary:#3a3d46; --fg-tertiary:#6b6f7a;
  --font-display:'Poppins',sans-serif; --font-mono:'JetBrains Mono',monospace;
  --shadow-sm:0 1px 3px rgba(46,56,86,.05); --shadow-md:0 4px 8px -2px rgba(46,56,86,.08);
  --shadow-lg:0 12px 24px -8px rgba(46,56,86,.12); --shadow-xl:0 24px 48px -12px rgba(46,56,86,.16);
  --ease-out:cubic-bezier(.16,1,.3,1); --ease-in-out:cubic-bezier(.65,0,.35,1);
}

/* ── LAYOUT ── */
.f-container{max-width:1200px;margin:0 auto;padding:0 32px}
.f-section{padding:96px 0}
.f-band{background:var(--paper-2)}
.f-inverse{background:var(--navy-900);color:var(--paper)}

/* ── BUTTONS ── */
.f-btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--font-display);font-weight:600;font-size:14px;padding:10px 18px;border-radius:10px;border:1px solid transparent;cursor:pointer;text-decoration:none;transition:background .2s,box-shadow .2s,border-color .2s}
.f-btn-primary{background:var(--navy-900);color:var(--paper);box-shadow:var(--shadow-sm)}
.f-btn-primary:hover{box-shadow:var(--shadow-md)}
.f-btn-accent{background:var(--accent-500);color:var(--navy-900)}
.f-btn-accent:hover{background:#f9cc66;box-shadow:var(--shadow-md)}
.f-btn-secondary{background:var(--white);color:var(--navy-900);border-color:var(--border-strong)}
.f-btn-secondary:hover{border-color:var(--navy-700);background:var(--paper-2)}
.f-btn-on-dark{background:var(--paper);color:var(--navy-900)}
.f-btn-on-dark:hover{background:var(--white)}
.f-btn-lg{padding:14px 22px;font-size:16px;border-radius:12px}

/* ── EYEBROW ── */
.f-eyebrow{display:inline-flex;align-items:center;gap:12px;font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary)}
.f-eyebrow::before{content:'';width:28px;height:1px;background:var(--accent-500)}

/* ── CARDS ── */
.f-card{background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:28px;box-shadow:var(--shadow-sm);transition:box-shadow .2s,border-color .2s,transform .2s}
.f-card:hover{box-shadow:var(--shadow-md);border-color:var(--border-strong);transform:translateY(-2px)}
.f-tag{display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:600;padding:4px 10px;border-radius:999px;background:var(--accent-100);color:var(--accent-700)}

/* ── COMPARISON TABLE ── */
.cmp-row{display:grid;grid-template-columns:1.2fr 1fr 1fr;align-items:stretch}
.cmp-row>div{padding:18px 22px;border-bottom:1px solid var(--border-default)}
.cmp-row>div:first-child{border-right:1px solid var(--border-default);font-weight:500;color:var(--navy-900);background:var(--paper-2)}
.cmp-row>div:nth-child(2){color:var(--fg-secondary);border-right:1px solid var(--border-default)}
.cmp-row>div:nth-child(3){color:var(--navy-900);background:rgba(246,187,51,.06)}
.cmp-row.cmp-head>div{font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);padding:14px 22px;background:var(--paper);border-bottom:1px solid var(--border-strong)}
.cmp-row.cmp-head>div:nth-child(3){color:var(--accent-700);background:rgba(246,187,51,.08)}
.cmp-row:last-child>div{border-bottom:none}
.cmp-row:hover>div:nth-child(2){background:var(--paper-2)}

/* ── STEPPER ── */
.step-rail{position:absolute;left:27px;top:60px;bottom:24px;width:2px;background:var(--ink-200);border-radius:2px}
.step-rail-fill{position:absolute;left:0;top:0;right:0;background:var(--navy-900);border-radius:2px;transition:height 600ms var(--ease-out)}

/* ── DIAGRAM ── */
.d-node{background:var(--white);border:1px solid var(--border-strong);border-radius:14px;padding:18px 20px;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;gap:6px}
.d-node .nlabel{font-size:11px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary)}
.d-node .nname{font-family:var(--font-display);font-weight:600;font-size:18px;color:var(--navy-900);letter-spacing:-.01em}

/* ── FAQ ── */
.faq-panel{display:grid;grid-template-rows:0fr;transition:grid-template-rows 320ms var(--ease-in-out)}
.faq-panel.is-open{grid-template-rows:1fr}
.faq-panel>.faq-inner{overflow:hidden}
.faq-chev{transition:transform 220ms var(--ease-out)}
.faq-chev.is-open{transform:rotate(180deg)}

/* ── REVEAL ANIMATIONS ── */
.reveal{opacity:0;transform:translateY(16px);transition:opacity 520ms var(--ease-out),transform 520ms var(--ease-out)}
.reveal.on{opacity:1;transform:none}
.reveal-left{transform:translateX(-24px)}
.reveal-left.on{transform:none}
.reveal-right{transform:translateX(24px)}
.reveal-right.on{transform:none}
.reveal-scale{transform:scale(.97)}
.reveal-scale.on{transform:none}

/* ── CTA PULSE ── */
@keyframes faire-pulse{0%{box-shadow:0 0 0 0 rgba(246,187,51,.55)}70%{box-shadow:0 0 0 14px rgba(246,187,51,0)}100%{box-shadow:0 0 0 0 rgba(246,187,51,0)}}
.cta-pulse{animation:faire-pulse 3.2s var(--ease-out) infinite}

@media(prefers-reduced-motion:reduce){.reveal,.reveal-left,.reveal-right,.reveal-scale{opacity:1!important;transform:none!important;transition:none!important}.cta-pulse{animation:none!important}}

/* ── PUZZLE BG ── */
.puzzle-bg{position:absolute;inset:0;pointer-events:none;overflow:hidden}
.puzzle-bg svg{position:absolute;right:-120px;top:40px;opacity:.07}

/* ── RESPONSIVE ── */
@media(max-width:980px){
  .f-hero-grid{grid-template-columns:1fr!important}
  .f-hero-visual{display:none}
  .f-2col{grid-template-columns:1fr!important}
  .f-3col{grid-template-columns:1fr 1fr!important}
  .f-navy-2col{grid-template-columns:1fr!important}
  .cmp-row{grid-template-columns:1fr!important}
  .cmp-row>div:first-child{border-right:none}
  .cmp-row>div:nth-child(2){border-right:none}
  .faq-grid{grid-template-columns:1fr!important}
  .faq-sticky{position:static!important}
  .cta-final-grid{grid-template-columns:1fr!important}
  .f-section{padding:64px 0}
  .f-container{padding:0 20px}
}
@media(max-width:640px){
  .f-3col{grid-template-columns:1fr!important}
  .f-hero-h1{font-size:40px!important;line-height:48px!important}
}
</style>
</head>
<body>
<x-nav />

<!-- ══ HERO ══ -->
<section style="padding-top:56px;padding-bottom:96px;position:relative;overflow:hidden;background:var(--paper)">
  <div class="puzzle-bg" aria-hidden="true">
    <svg width="640" height="640" viewBox="0 0 640 640" fill="none">
      <path d="M340 40 c46 0 80 30 80 76 v52 c46 0 76 22 76 56 c0 34 -30 54 -76 54 v68 c46 0 76 22 76 56 c0 34 -30 56 -76 56 v52 c0 46 -34 76 -80 76 H160 c-40 0 -76 -30 -76 -76 V406 c46 0 76 -22 76 -56 c0 -34 -30 -56 -76 -56 v-58 c0 -46 36 -76 76 -76 h180 z" fill="var(--accent-500)"/>
    </svg>
  </div>
  <div class="f-container" style="position:relative;display:grid;grid-template-columns:1.1fr 1fr;gap:64px;align-items:center;min-height:560px" class="f-hero-grid">
    <div>
      <span class="f-eyebrow reveal">Sell·U × Faire · LATAM → EE.UU.</span>
      <h1 class="f-hero-h1 reveal" style="font-family:var(--font-display);font-size:64px;line-height:70px;letter-spacing:-.025em;font-weight:600;margin-top:22px;margin-bottom:26px;color:var(--navy-900)">
        Vende tus productos<br>en tiendas físicas<br>de Estados Unidos a<br>través de <span style="background:linear-gradient(180deg,transparent 62%,var(--accent-300) 62%);padding:0 6px">Faire</span>.
      </h1>
      <p class="reveal" style="font-size:19px;line-height:30px;color:var(--fg-secondary);max-width:560px;margin-bottom:32px">
        Faire conecta marcas independientes con más de <strong style="color:var(--navy-900)">700,000 tiendas físicas</strong> y boutiques en EE.UU. y el mundo. Sin ferias, sin intermediarios, sin estar en el país. Sell·U te ayuda a entrar, posicionarte y vender.
      </p>
      <div class="reveal" style="display:flex;gap:12px;align-items:center;flex-wrap:wrap">
        <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20Faire" target="_blank" class="f-btn f-btn-primary f-btn-lg">Quiero vender en Faire →</a>
        <a href="#requisitos" class="f-btn f-btn-secondary f-btn-lg">Ver requisitos</a>
      </div>
      <div class="reveal" style="margin-top:32px;display:flex;align-items:center;gap:22px;font-size:13px;color:var(--fg-tertiary);flex-wrap:wrap">
        <span style="display:inline-flex;align-items:center;gap:8px"><i data-lucide="check" style="width:14px;height:14px;color:var(--success-500)"></i>Proceso 100% remoto desde LATAM</span>
        <span style="display:inline-flex;align-items:center;gap:8px"><i data-lucide="check" style="width:14px;height:14px;color:var(--success-500)"></i>Acompañamiento en español</span>
        <span style="display:inline-flex;align-items:center;gap:8px"><i data-lucide="check" style="width:14px;height:14px;color:var(--success-500)"></i>Cosméticos · lifestyle · alimentos</span>
      </div>
    </div>
    <!-- Dashboard mock -->
    <div class="f-hero-visual reveal reveal-right" style="background:var(--navy-900);border-radius:28px;padding:18px;box-shadow:var(--shadow-xl);position:relative">
      <div style="background:var(--white);border-radius:16px;overflow:hidden;border:1px solid var(--border-default)">
        <div style="display:flex;align-items:center;gap:6px;padding:10px 14px;border-bottom:1px solid var(--border-default);background:var(--paper-2)">
          <span style="width:10px;height:10px;border-radius:5px;background:#e0606c;display:block"></span>
          <span style="width:10px;height:10px;border-radius:5px;background:#f6bb33;display:block"></span>
          <span style="width:10px;height:10px;border-radius:5px;background:#1aa05f;display:block"></span>
          <span style="margin-left:14px;font-size:12px;font-family:var(--font-mono);color:var(--fg-tertiary)">faire.com/brand-portal</span>
          <span style="margin-left:auto;font-size:11px;padding:3px 8px;border-radius:999px;background:var(--success-100);color:var(--success-700);font-weight:600">● Activo</span>
        </div>
        <div style="padding:22px">
          <div style="font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--fg-tertiary)">Brand Dashboard</div>
          <div style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900);margin-top:4px;letter-spacing:-.01em">Hola, Casa Mar ☉</div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:18px">
            <div style="padding:14px;border:1px solid var(--border-default);border-radius:10px">
              <div style="font-size:10px;color:var(--fg-tertiary);text-transform:uppercase;letter-spacing:.1em;font-weight:600">Pedidos del mes</div>
              <div style="font-family:var(--font-display);font-size:26px;margin-top:4px;color:var(--navy-900);font-weight:600;letter-spacing:-.02em">34</div>
              <div style="font-size:11px;color:var(--success-700);font-weight:600;margin-top:2px">↑ 28% vs mes anterior</div>
            </div>
            <div style="padding:14px;border:1px solid var(--border-default);border-radius:10px">
              <div style="font-size:10px;color:var(--fg-tertiary);text-transform:uppercase;letter-spacing:.1em;font-weight:600">Retailers únicos</div>
              <div style="font-family:var(--font-display);font-size:26px;margin-top:4px;color:var(--navy-900);font-weight:600;letter-spacing:-.02em">22</div>
              <div style="font-size:11px;color:var(--fg-tertiary);margin-top:2px">Brooklyn · Austin · Chicago</div>
            </div>
          </div>
          <div style="margin-top:14px;padding:14px;border:1px solid var(--border-default);border-radius:10px">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px">
              <span style="font-size:12px;font-weight:600;color:var(--navy-900)">Pedido nuevo · #8842</span>
              <span style="font-size:11px;padding:3px 8px;border-radius:999px;background:var(--accent-100);color:var(--accent-700);font-weight:600">Nuevo retailer</span>
            </div>
            <div style="font-size:13px;color:var(--fg-secondary)">Maven Boutique · Brooklyn, NY</div>
            <div style="display:flex;justify-content:space-between;align-items:baseline;margin-top:8px">
              <span style="font-size:12px;color:var(--fg-tertiary)">12 unid. · 4 SKUs</span>
              <span style="font-family:var(--font-mono);font-size:14px;color:var(--navy-900);font-weight:600">$1,248.00</span>
            </div>
          </div>
          <div style="margin-top:14px;padding:12px;background:var(--paper-2);border-radius:8px;font-size:12px;color:var(--fg-secondary);display:flex;align-items:center;gap:8px">
            <i data-lucide="bell" style="width:14px;height:14px;color:var(--navy-700);flex:none"></i>
            Estás en la lista de "Brands to Watch" esta semana.
          </div>
        </div>
      </div>
      <div style="position:absolute;right:-22px;top:40px;background:var(--white);border:1px solid var(--border-default);border-radius:12px;padding:10px 14px;box-shadow:var(--shadow-md);display:flex;align-items:center;gap:10px;transform:rotate(-2deg)">
        <i data-lucide="store" style="width:16px;height:16px;color:var(--accent-700)"></i>
        <div>
          <div style="font-size:12px;font-weight:600;color:var(--navy-900)">+3 retailers</div>
          <div style="font-size:10px;color:var(--fg-tertiary)">te agregaron a favoritos</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ QUÉ ES FAIRE ══ -->
<section id="que-es" class="f-section">
  <div class="f-container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:96px;align-items:flex-start" class="f-2col">
      <div class="reveal reveal-left">
        <span class="f-eyebrow">¿Qué es Faire?</span>
        <h2 style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;margin-bottom:16px;color:var(--navy-900)">El marketplace B2B que reemplazó las ferias de comercio.</h2>
        <p style="font-size:18px;line-height:30px;color:var(--fg-secondary);margin-bottom:18px">Faire es una plataforma de comercio mayorista B2B que conecta marcas independientes directamente con retailers que buscan inventario único para sus tiendas. Fundada en 2017 con una idea simple: darle a las marcas pequeñas la distribución que antes solo estaba al alcance de las grandes corporaciones.</p>
        <p style="font-size:16px;line-height:26px;color:var(--fg-secondary);margin-bottom:24px">Antes de Faire, una marca de LATAM que quisiera vender en EE.UU. necesitaba asistir a ferias que costaban entre <strong style="color:var(--navy-900)">$5,000 y $20,000 USD</strong>, contratar representantes locales o hacer outreach manual tienda por tienda. Faire digitalizó esa experiencia.</p>
        <a href="#proceso" style="display:inline-flex;align-items:center;gap:6px;color:var(--navy-900);font-weight:600;font-size:15px">Ver cómo funciona el proceso →</a>
      </div>
      <div style="display:flex;flex-direction:column;gap:24px">
        <!-- Scale counters -->
        <div class="reveal reveal-right" style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
          <div style="background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:22px">
            <div style="font-family:var(--font-display);font-size:40px;line-height:1;font-weight:600;color:var(--navy-900);letter-spacing:-.025em" data-counter="700000" data-suffix="+" data-format="comma">0</div>
            <div style="font-size:14px;font-weight:600;color:var(--navy-900);margin-top:8px">Retailers globales</div>
            <div style="font-size:12px;color:var(--fg-tertiary);margin-top:4px">Boutiques · concept stores · tiendas físicas</div>
          </div>
          <div style="background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:22px">
            <div style="font-family:var(--font-display);font-size:40px;line-height:1;font-weight:600;color:var(--navy-900);letter-spacing:-.025em" data-counter="100000" data-suffix="+" data-format="comma">0</div>
            <div style="font-size:14px;font-weight:600;color:var(--navy-900);margin-top:8px">Marcas independientes</div>
            <div style="font-size:12px;color:var(--fg-tertiary);margin-top:4px">En más de 35 países</div>
          </div>
          <div style="grid-column:1/-1;background:var(--accent-100);border:1px solid rgba(246,187,51,.5);border-radius:14px;padding:22px">
            <div style="font-family:var(--font-display);font-size:40px;line-height:1;font-weight:600;color:var(--navy-900);letter-spacing:-.025em" data-counter="25" data-suffix="%" data-format="plain">0</div>
            <div style="font-size:14px;font-weight:600;color:var(--navy-900);margin-top:8px">Comisión sobre nuevos clientes</div>
            <div style="font-size:12px;color:var(--fg-tertiary);margin-top:4px">Solo cuando vendes — sin cuota mensual</div>
          </div>
        </div>
        <!-- Flow diagram -->
        <div class="reveal reveal-right" style="background:var(--paper-2);border:1px solid var(--border-default);border-radius:14px;padding:28px">
          <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);margin-bottom:16px">Cómo fluye un pedido</div>
          <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:12px;align-items:center">
            <div class="d-node"><span class="nlabel">Tú</span><span class="nname">Marca</span><i data-lucide="package" style="width:20px;height:20px;color:var(--navy-700)"></i></div>
            <div class="d-node" style="background:var(--navy-900);border-color:var(--navy-900)"><span class="nlabel" style="color:var(--accent-500)">Marketplace</span><span class="nname" style="color:var(--paper)">Faire</span><i data-lucide="layers" style="width:20px;height:20px;color:var(--accent-500)"></i></div>
            <div class="d-node"><span class="nlabel">Comprador</span><span class="nname">Retailer</span><i data-lucide="store" style="width:20px;height:20px;color:var(--navy-700)"></i></div>
          </div>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-top:18px">
            <div style="display:flex;align-items:baseline;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-size:12px;font-weight:600;color:var(--navy-900)">→ Catálogo</span><span style="font-size:11px;color:var(--fg-tertiary);font-family:var(--font-mono)">Marca → Faire</span></div>
            <div style="display:flex;align-items:baseline;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-size:12px;font-weight:600;color:var(--navy-900)">→ Pedido</span><span style="font-size:11px;color:var(--fg-tertiary);font-family:var(--font-mono)">Faire → Retailer</span></div>
            <div style="display:flex;align-items:baseline;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-size:12px;font-weight:600;color:var(--navy-900)">→ Envío</span><span style="font-size:11px;color:var(--fg-tertiary);font-family:var(--font-mono)">Marca → Retailer</span></div>
            <div style="display:flex;align-items:baseline;justify-content:space-between;padding:8px 0"><span style="font-size:12px;font-weight:600;color:var(--navy-900)">→ Pago</span><span style="font-size:11px;color:var(--fg-tertiary);font-family:var(--font-mono)">Faire → Marca</span></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navy pull quote -->
    <div class="reveal" style="margin-top:80px;background:var(--navy-900);color:var(--paper);border-radius:20px;padding:48px 56px;display:grid;grid-template-columns:1.2fr 1fr;gap:56px;align-items:center" class="f-navy-2col">
      <div>
        <span style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent-500)">700,000 retailers</span>
        <h3 style="font-family:var(--font-display);font-size:32px;line-height:40px;letter-spacing:-.015em;font-weight:600;margin-top:14px;color:var(--paper)">No es Amazon. Es un comprador profesional buscando productos que hagan diferente su tienda.</h3>
        <p style="margin-top:16px;font-size:16px;line-height:26px;color:rgba(251,250,247,.78)">Boutiques independientes, tiendas de lifestyle, papelerías, concept stores, tiendas de cosméticos y wellness — comercios minoristas buscando productos únicos que no encuentran en los grandes distribuidores.</p>
      </div>
      <div style="display:flex;flex-direction:column;gap:12px">
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:rgba(251,250,247,.06);border-radius:10px;border:1px solid rgba(251,250,247,.08)"><i data-lucide="map-pin" style="width:16px;height:16px;color:var(--accent-500);flex:none"></i><span style="font-weight:600;color:var(--paper)">Brooklyn, NY</span><span style="font-size:13px;color:rgba(251,250,247,.6);margin-left:auto">Concept store · lifestyle</span></div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:rgba(251,250,247,.06);border-radius:10px;border:1px solid rgba(251,250,247,.08)"><i data-lucide="map-pin" style="width:16px;height:16px;color:var(--accent-500);flex:none"></i><span style="font-weight:600;color:var(--paper)">Austin, TX</span><span style="font-size:13px;color:rgba(251,250,247,.6);margin-left:auto">Wellness · aromaterapia</span></div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:rgba(251,250,247,.06);border-radius:10px;border:1px solid rgba(251,250,247,.08)"><i data-lucide="map-pin" style="width:16px;height:16px;color:var(--accent-500);flex:none"></i><span style="font-weight:600;color:var(--paper)">Chicago, IL</span><span style="font-size:13px;color:rgba(251,250,247,.6);margin-left:auto">Papelería + regalo</span></div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:rgba(251,250,247,.06);border-radius:10px;border:1px solid rgba(251,250,247,.08)"><i data-lucide="map-pin" style="width:16px;height:16px;color:var(--accent-500);flex:none"></i><span style="font-weight:600;color:var(--paper)">Portland, OR</span><span style="font-size:13px;color:rgba(251,250,247,.6);margin-left:auto">Cosmética artesanal</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ══ FAIRE VS AMAZON ══ -->
<section id="comparacion" class="f-section f-band">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:48px">
      <span class="f-eyebrow reveal">Faire vs Amazon</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;margin-bottom:16px;color:var(--navy-900)">Faire no es Amazon: es un canal completamente diferente.</h2>
      <p class="reveal" style="font-size:18px;line-height:28px;color:var(--fg-secondary)">Muchos emprendedores de LATAM conocen Amazon. Pocos conocen Faire. Esa diferencia es exactamente la oportunidad. Vender en Amazon te hace visible en una pantalla. Vender en Faire te pone en la estantería de una boutique en Brooklyn.</p>
    </div>
    <div class="reveal" style="background:var(--white);border:1px solid var(--border-default);border-radius:14px;overflow:hidden;box-shadow:var(--shadow-sm)">
      <div class="cmp-row cmp-head">
        <div></div>
        <div style="display:flex;align-items:center;gap:8px"><i data-lucide="x-circle" style="width:14px;height:14px;color:var(--fg-tertiary)"></i>Amazon</div>
        <div style="display:flex;align-items:center;gap:8px"><i data-lucide="check-circle-2" style="width:14px;height:14px;color:var(--accent-700)"></i>Faire</div>
      </div>
      <div class="cmp-row"><div>Modelo</div><div>B2C — marca → consumidor final</div><div>B2B — marca → tienda / retailer</div></div>
      <div class="cmp-row"><div>Comprador</div><div>Consumidor individual</div><div>Dueño de tienda · comprador profesional</div></div>
      <div class="cmp-row"><div>Tamaño del pedido</div><div>1 unidad típicamente</div><div>Cajas o lotes mínimos por pedido</div></div>
      <div class="cmp-row"><div>Competencia</div><div>Altísima · basada en precio y reviews</div><div>Por descubrimiento · historia de marca</div></div>
      <div class="cmp-row"><div>Control de marca</div><div>Limitado — Amazon controla la experiencia</div><div>Mayor control sobre tu narrativa</div></div>
      <div class="cmp-row"><div>Visibilidad</div><div>Necesitas ads desde el primer día</div><div>El algoritmo promueve marcas nuevas los primeros 30 días</div></div>
      <div class="cmp-row"><div>Relación con el comprador</div><div>Anónima</div><div>Directa — el retailer se vuelve recurrente</div></div>
      <div class="cmp-row"><div>Tipo de producto</div><div>Cualquier volumen, cualquier marca</div><div>Marcas con identidad · únicos · artesanales</div></div>
    </div>
    <div class="reveal" style="margin-top:32px;display:grid;grid-template-columns:1fr 1fr;gap:16px" class="f-2col">
      <div style="padding:24px;background:var(--white);border:1px solid var(--border-default);border-radius:14px">
        <div style="font-size:13px;font-weight:600;color:var(--fg-tertiary);letter-spacing:.04em">SCROLL</div>
        <p style="font-size:15px;line-height:24px;color:var(--fg-secondary);margin-top:8px"><strong style="color:var(--navy-900)">Amazon</strong> te hace visible en una pantalla. El consumidor compara, filtra, elige por precio.</p>
      </div>
      <div style="padding:24px;background:var(--accent-100);border:1px solid rgba(246,187,51,.5);border-radius:14px">
        <div style="font-size:13px;font-weight:600;color:var(--accent-700);letter-spacing:.04em">ESTANTERÍA</div>
        <p style="font-size:15px;line-height:24px;color:var(--navy-900);margin-top:8px"><strong>Faire</strong> te pone en la estantería de una boutique en Brooklyn, una tienda wellness en Austin, un concept store en Chicago.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ QUIÉN DEBERÍA VENDER ══ -->
<section id="quien" class="f-section">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:56px">
      <span class="f-eyebrow reveal">¿Quién debería vender en Faire?</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;margin-bottom:16px;color:var(--navy-900)">Marcas con identidad propia, producto terminado y capacidad de despacho.</h2>
      <p class="reveal" style="font-size:18px;line-height:28px;color:var(--fg-secondary)">Faire prioriza marcas con historia y propósito. Los retailers buscan exactamente eso: algo que no encuentran en distribuidores masivos. Si tu marca tiene un porqué claro detrás del producto, este es tu canal.</p>
    </div>
    <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);margin-bottom:14px">Categorías que funcionan bien</div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px" class="f-3col">
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="sparkles" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Cosméticos · cuidado personal</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Enfoque natural, artesanal o de nicho. Skincare, fragancia, cuidado capilar con identidad.</p></div>
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="home" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Lifestyle · decoración del hogar</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Productos de hogar, mesa, textiles, objetos con curaduría editorial.</p></div>
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="utensils" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Alimentos gourmet</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Snacks artesanales, especialidad, productos de origen, todo lo que un retailer foodie quiere descubrir.</p></div>
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="gift" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Papelería · regalo</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Stationery, accesorios, productos de regalo con diseño propio.</p></div>
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="leaf" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Wellness · aromaterapia</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Bienestar, aromas, rituales — categoría con alta demanda en boutiques americanas.</p></div>
      <div class="f-card reveal"><div style="width:40px;height:40px;border-radius:10px;background:var(--accent-100);display:flex;align-items:center;justify-content:center;margin-bottom:14px"><i data-lucide="shirt" style="width:20px;height:20px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:8px">Moda · accesorios</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Marcas con identidad, no commodity. Joyería, accesorios, moda con autoría.</p></div>
    </div>
    <div style="margin-top:64px;display:grid;grid-template-columns:1fr 1fr 1fr;gap:24px" class="f-3col">
      <div class="reveal reveal-left" style="background:var(--paper-2);border:1px solid var(--border-default);border-radius:14px;padding:28px">
        <div style="font-family:var(--font-mono);font-size:12px;color:var(--accent-700);font-weight:500;margin-bottom:18px">Perfil 01</div>
        <i data-lucide="package-check" style="width:28px;height:28px;color:var(--navy-700);margin-bottom:18px;display:block"></i>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Producto físico con marca propia</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Empaque definido, etiquetado completo, fotografías profesionales. Ya tienes una marca, no un prototipo.</p>
      </div>
      <div class="reveal reveal-left" style="background:var(--navy-900);border:1px solid var(--navy-900);border-radius:14px;padding:28px">
        <div style="font-family:var(--font-mono);font-size:12px;color:var(--accent-500);font-weight:500;margin-bottom:18px">Perfil 02</div>
        <i data-lucide="truck" style="width:28px;height:28px;color:var(--accent-500);margin-bottom:18px;display:block"></i>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--paper);margin-bottom:10px">Capacidad de producción y despacho</h4>
        <p style="font-size:14px;line-height:22px;color:rgba(251,250,247,.78)">Puedes atender pedidos mayoristas y despachar internacional desde tu base de operación en LATAM.</p>
      </div>
      <div class="reveal reveal-left" style="background:var(--paper-2);border:1px solid var(--border-default);border-radius:14px;padding:28px">
        <div style="font-family:var(--font-mono);font-size:12px;color:var(--accent-700);font-weight:500;margin-bottom:18px">Perfil 03</div>
        <i data-lucide="compass" style="width:28px;height:28px;color:var(--navy-700);margin-bottom:18px;display:block"></i>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Buscas un canal distinto a Amazon</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Quieres diversificar tu distribución física en EE.UU. sin canibalizar tu canal D2C ni viajar a ferias.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ PROCESO ══ -->
<section id="proceso" class="f-section f-band">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:56px">
      <span class="f-eyebrow reveal">Cómo funciona</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">Cómo funciona el proceso de venta en Faire.</h2>
    </div>
    <div id="proceso-steps" style="position:relative;max-width:880px;margin:0 auto">
      <div style="position:absolute;left:27px;top:24px;bottom:24px;width:2px;background:var(--ink-200);border-radius:2px"><div id="proceso-rail" style="position:absolute;left:0;top:0;right:0;background:var(--navy-900);border-radius:2px;height:0%;transition:height 600ms var(--ease-out)"></div></div>
      <div class="step-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:40px;position:relative;align-items:flex-start">
        <div class="step-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;position:relative;z-index:1;transition:all 320ms var(--ease-out)">01</div>
        <div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="user-plus" style="width:20px;height:20px;color:var(--accent-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Registro y perfil de marca</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">A diferencia de los retailers, las marcas necesitan aplicar para vender — Faire mantiene una selección curada. Tu perfil incluye historia, fotografías de tu estudio, y por qué eres distinto. No es un trámite: es tu primera impresión ante miles de retailers.</p></div>
      </div>
      <div class="step-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:40px;position:relative;align-items:flex-start">
        <div class="step-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;position:relative;z-index:1;transition:all 320ms var(--ease-out)">02</div>
        <div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="tag" style="width:20px;height:20px;color:var(--accent-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Catálogo y precios mayoristas</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Subes tus productos con fotografías de alta calidad y precios mayoristas — típicamente entre el 40% y 55% del precio retail. Defines mínimos de pedido, unidades por caja y políticas de reposición. Todo afecta directamente cuántos retailers te compran.</p></div>
      </div>
      <div class="step-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:40px;position:relative;align-items:flex-start">
        <div class="step-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;position:relative;z-index:1;transition:all 320ms var(--ease-out)">03</div>
        <div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="sparkles" style="width:20px;height:20px;color:var(--accent-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Conexión con retailers</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Faire trabaja contigo durante los primeros 30 días para ponerte frente a retailers que son un buen fit. El algoritmo cruza el perfil de tu marca con los patrones de compra de sus retailers. Devoluciones gratis en pedidos de apertura eliminan el miedo de probar marcas nuevas.</p></div>
      </div>
      <div class="step-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:0;position:relative;align-items:flex-start">
        <div class="step-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;position:relative;z-index:1;transition:all 320ms var(--ease-out)">04</div>
        <div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="package" style="width:20px;height:20px;color:var(--accent-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Gestión de pedidos y pagos</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Confirmas el pedido desde tu portal y despachas directo a la tienda. Faire garantiza la protección del pago en cada pedido — incluso si hay un inconveniente, recibes tu pago. Eliges entre pago al día siguiente (3% de tarifa) o términos regulares de 30 días.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ══ REQUISITOS ══ -->
<section id="requisitos" class="f-section">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:48px">
      <span class="f-eyebrow reveal">Requisitos para LATAM</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">Lo que necesitas para vender en Faire desde tu país.</h2>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px" class="f-2col">
      <div class="f-card reveal reveal-left" style="display:flex;flex-direction:column">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px">
          <div style="width:44px;height:44px;border-radius:10px;background:var(--navy-900);display:flex;align-items:center;justify-content:center"><i data-lucide="building-2" style="width:22px;height:22px;color:var(--accent-500)"></i></div>
          <span class="f-tag">LLC en EE.UU. recomendada</span>
        </div>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Negocio registrado legalmente</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Empresa formalmente constituida en tu país de origen o, idealmente, una LLC en EE.UU. para facilitar operación y cobros en dólares.</p>
      </div>
      <div class="f-card reveal reveal-left" style="display:flex;flex-direction:column">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px">
          <div style="width:44px;height:44px;border-radius:10px;background:var(--navy-900);display:flex;align-items:center;justify-content:center"><i data-lucide="package-2" style="width:22px;height:22px;color:var(--accent-500)"></i></div>
          <span class="f-tag">No es para prototipos</span>
        </div>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Producto con empaque y etiquetado listo</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Producto terminado, empaque final, etiquetado conforme a las normas de EE.UU. (FDA cuando aplica) y fotografías profesionales.</p>
      </div>
      <div class="f-card reveal reveal-left" style="display:flex;flex-direction:column">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px">
          <div style="width:44px;height:44px;border-radius:10px;background:var(--navy-900);display:flex;align-items:center;justify-content:center"><i data-lucide="truck" style="width:22px;height:22px;color:var(--accent-500)"></i></div>
          <span class="f-tag">Tú exportas</span>
        </div>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Logística de envío al comprador</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Eres el exportador de registro. Necesitas capacidad de despachar pedidos directos a tiendas en EE.UU. y entender costos de envío internacional.</p>
      </div>
      <div class="f-card reveal reveal-left" style="display:flex;flex-direction:column">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px">
          <div style="width:44px;height:44px;border-radius:10px;background:var(--navy-900);display:flex;align-items:center;justify-content:center"><i data-lucide="landmark" style="width:22px;height:22px;color:var(--accent-500)"></i></div>
          <span class="f-tag">Con LLC se simplifica</span>
        </div>
        <h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Cuenta bancaria para recibir pagos</h4>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">La mayoría de los esquemas en Faire requieren una cuenta en EE.UU. con número de ruta y cuenta. Una LLC con cuenta asociada es prácticamente indispensable.</p>
      </div>
    </div>
    <div class="reveal" style="margin-top:32px;padding:32px 36px;background:var(--white);border:1px solid var(--border-default);border-radius:14px;display:flex;align-items:center;gap:28px;box-shadow:var(--shadow-sm)">
      <div style="width:56px;height:56px;border-radius:999px;background:var(--accent-500);display:flex;align-items:center;justify-content:center;flex:none"><i data-lucide="anchor" style="width:26px;height:26px;color:var(--navy-900)"></i></div>
      <div style="flex:1">
        <div style="font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--navy-900);margin-bottom:4px">¿Aún no tienes la base legal y bancaria?</div>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Sell·U puede estructurar tu LLC, EIN y cuenta bancaria en EE.UU. antes de que apliques a Faire — para que entres sin fricciones de pago desde el día uno.</p>
      </div>
      <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20estructurar%20mi%20LLC%20para%20vender%20en%20Faire" target="_blank" class="f-btn f-btn-primary" style="white-space:nowrap">Estructurar mi base →</a>
    </div>
  </div>
</section>

<!-- ══ COSTOS ══ -->
<section id="precios" class="f-section f-band">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:56px">
      <span class="f-eyebrow reveal">Costos y comisiones</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">Lo que necesitas saber antes de fijar tus precios.</h2>
      <p class="reveal" style="font-size:18px;line-height:28px;color:var(--fg-secondary);margin-top:16px">Faire tiene un modelo de comisiones que debes entender bien antes de entrar. Si lo ignoras, tus márgenes no van a funcionar. La buena noticia: solo pagas cuando vendes.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px" class="f-3col">
      <div class="reveal" style="background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:32px;box-shadow:var(--shadow-sm)">
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary)">Cliente nuevo</div>
        <div style="display:flex;align-items:baseline;margin-top:18px"><span style="font-family:var(--font-display);font-size:80px;line-height:1;font-weight:600;color:var(--navy-900);letter-spacing:-.03em">25</span><span style="font-size:32px;margin-left:4px;font-weight:600;opacity:.7;color:var(--navy-900)">%</span></div>
        <div style="font-size:13px;color:var(--fg-tertiary);margin-top:4px">de comisión</div>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary);margin-top:22px">Primer pedido de un retailer que te encuentra a través del marketplace.</p>
      </div>
      <div class="reveal" style="background:var(--navy-900);border:1px solid var(--navy-900);border-radius:14px;padding:32px;position:relative;box-shadow:var(--shadow-lg)">
        <span style="position:absolute;top:-10px;left:24px;background:var(--accent-500);color:var(--navy-900);font-size:11px;font-weight:600;letter-spacing:.08em;text-transform:uppercase;padding:4px 10px;border-radius:999px">El objetivo</span>
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--accent-500)">Pedidos repetidos</div>
        <div style="display:flex;align-items:baseline;margin-top:18px"><span style="font-family:var(--font-display);font-size:80px;line-height:1;font-weight:600;color:var(--paper);letter-spacing:-.03em">15</span><span style="font-size:32px;margin-left:4px;font-weight:600;opacity:.7;color:var(--paper)">%</span></div>
        <div style="font-size:13px;color:rgba(251,250,247,.7);margin-top:4px">de comisión</div>
        <p style="font-size:14px;line-height:22px;color:rgba(251,250,247,.85);margin-top:22px">Una vez que el retailer te compra por primera vez, todos sus pedidos futuros bajan al 15%.</p>
      </div>
      <div class="reveal" style="background:var(--white);border:1px solid var(--border-default);border-radius:14px;padding:32px;box-shadow:var(--shadow-sm)">
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary)">Faire Direct</div>
        <div style="display:flex;align-items:baseline;margin-top:18px"><span style="font-family:var(--font-display);font-size:80px;line-height:1;font-weight:600;color:var(--navy-900);letter-spacing:-.03em">0</span><span style="font-size:32px;margin-left:4px;font-weight:600;opacity:.7;color:var(--navy-900)">%</span></div>
        <div style="font-size:13px;color:var(--fg-tertiary);margin-top:4px">de comisión</div>
        <p style="font-size:14px;line-height:22px;color:var(--fg-secondary);margin-top:22px">Pedidos de tus propios clientes mayoristas que invitas a Faire a través de tu enlace directo.</p>
      </div>
    </div>
    <div class="reveal" style="margin-top:56px;display:grid;grid-template-columns:1fr 1fr;gap:32px;align-items:flex-start" class="f-2col">
      <div>
        <h3 style="font-family:var(--font-display);font-size:26px;line-height:34px;letter-spacing:-.015em;font-weight:600;color:var(--navy-900);margin-bottom:12px">Cuándo tiene sentido — y cuándo no.</h3>
        <p style="font-size:16px;line-height:26px;color:var(--fg-secondary)">El 25% en pedidos nuevos es significativo. Para productos con márgenes ajustados o precios mayoristas muy bajos, los números pueden no cuadrar.</p>
        <div style="margin-top:18px;padding:16px;background:var(--accent-100);border:1px solid rgba(246,187,51,.4);border-radius:10px;font-size:14px;color:var(--navy-900)"><strong style="display:block;margin-bottom:4px">📌 Registrarse en Faire es gratis.</strong>No hay cuotas mensuales, no hay costos de listado. Solo pagas cuando vendes.</div>
      </div>
      <div class="f-card" style="padding:28px">
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);margin-bottom:14px">Checklist de viabilidad</div>
        <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:12px">
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:15px;color:var(--navy-900)"><span style="width:22px;height:22px;border-radius:999px;background:var(--success-100);color:var(--success-700);display:inline-flex;align-items:center;justify-content:center;flex:none"><i data-lucide="check" style="width:14px;height:14px"></i></span>Calcula tu costo de producción por unidad</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:15px;color:var(--navy-900)"><span style="width:22px;height:22px;border-radius:999px;background:var(--success-100);color:var(--success-700);display:inline-flex;align-items:center;justify-content:center;flex:none"><i data-lucide="check" style="width:14px;height:14px"></i></span>Define tu precio mayorista (40–55% del retail)</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:15px;color:var(--navy-900)"><span style="width:22px;height:22px;border-radius:999px;background:var(--success-100);color:var(--success-700);display:inline-flex;align-items:center;justify-content:center;flex:none"><i data-lucide="check" style="width:14px;height:14px"></i></span>Verifica margen positivo después del 25% de Faire</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:15px;color:var(--navy-900)"><span style="width:22px;height:22px;border-radius:999px;background:var(--success-100);color:var(--success-700);display:inline-flex;align-items:center;justify-content:center;flex:none"><i data-lucide="check" style="width:14px;height:14px"></i></span>Suma costos de envío internacional a la ecuación</li>
        </ul>
        <div style="margin-top:18px;padding-top:18px;border-top:1px solid var(--border-default);font-size:13px;color:var(--fg-tertiary)">Sell·U hace este análisis de viabilidad contigo antes de iniciar cualquier proceso.</div>
      </div>
    </div>
  </div>
</section>

<!-- ══ ERRORES COMUNES ══ -->
<section class="f-section">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:48px">
      <span class="f-eyebrow reveal">Lo que arruina una marca en Faire</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">Los errores que vemos una y otra vez.</h2>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px" class="f-2col">
      <div class="f-card reveal" style="display:flex;gap:18px;padding:28px;align-items:flex-start">
        <div style="width:44px;height:44px;border-radius:10px;background:var(--danger-100);display:flex;align-items:center;justify-content:center;flex:none"><i data-lucide="calculator" style="width:22px;height:22px;color:var(--danger-700)"></i></div>
        <div><div style="font-family:var(--font-mono);font-size:11px;color:var(--danger-700);font-weight:500;letter-spacing:.04em;text-transform:uppercase;margin-bottom:6px">Error 01</div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Precio mayorista mal calculado</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">El error más costoso. Calcular tu precio sin considerar la comisión de Faire, el envío internacional y el margen mínimo. Vendes pero pierdes dinero — o subes precios después y rompes la confianza con retailers que ya te compraban.</p></div>
      </div>
      <div class="f-card reveal" style="display:flex;gap:18px;padding:28px;align-items:flex-start">
        <div style="width:44px;height:44px;border-radius:10px;background:var(--danger-100);display:flex;align-items:center;justify-content:center;flex:none"><i data-lucide="image-off" style="width:22px;height:22px;color:var(--danger-700)"></i></div>
        <div><div style="font-family:var(--font-mono);font-size:11px;color:var(--danger-700);font-weight:500;letter-spacing:.04em;text-transform:uppercase;margin-bottom:6px">Error 02</div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Perfil de marca sin historia ni identidad</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Faire no es un directorio de productos: es un marketplace de marcas. Un perfil con fotos genéricas y descripción de tres líneas es invisible. El algoritmo prioriza marcas con perfiles completos y los retailers compran a marcas en las que confían.</p></div>
      </div>
      <div class="f-card reveal" style="display:flex;gap:18px;padding:28px;align-items:flex-start">
        <div style="width:44px;height:44px;border-radius:10px;background:var(--danger-100);display:flex;align-items:center;justify-content:center;flex:none"><i data-lucide="camera-off" style="width:22px;height:22px;color:var(--danger-700)"></i></div>
        <div><div style="font-family:var(--font-mono);font-size:11px;color:var(--danger-700);font-weight:500;letter-spacing:.04em;text-transform:uppercase;margin-bottom:6px">Error 03</div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Catálogo incompleto o mal fotografiado</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">En Faire, la primera impresión visual es todo. Fotografías oscuras, inconsistentes o de baja resolución generan desconfianza antes de que el retailer lea el precio. Un catálogo bien fotografiado puede multiplicar las conversiones del mismo producto.</p></div>
      </div>
      <div class="f-card reveal" style="display:flex;gap:18px;padding:28px;align-items:flex-start">
        <div style="width:44px;height:44px;border-radius:10px;background:var(--danger-100);display:flex;align-items:center;justify-content:center;flex:none"><i data-lucide="eye-off" style="width:22px;height:22px;color:var(--danger-700)"></i></div>
        <div><div style="font-family:var(--font-mono);font-size:11px;color:var(--danger-700);font-weight:500;letter-spacing:.04em;text-transform:uppercase;margin-bottom:6px">Error 04</div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Ignorar el algoritmo de Faire</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Faire usa IA para recomendar productos a retailers relevantes. Esas recomendaciones dependen de qué tan completo está tu perfil, qué tan bien categorizados están tus productos, y qué tan rápido respondes. Faire premia a las marcas activas — las pasivas no ven resultados.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SELL-U STEPPER ══ -->
<section id="sell-u" class="f-section f-band">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:56px">
      <span class="f-eyebrow reveal">Cómo Sell·U te posiciona</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">No te damos acceso a la plataforma y te dejamos solo.</h2>
      <p class="reveal" style="font-size:18px;line-height:28px;color:var(--fg-secondary);margin-top:16px">Sell·U construye tu presencia en Faire de forma estratégica — desde el perfil hasta la estrategia de precios y el posicionamiento dentro del algoritmo. Todo el proceso es remoto, en español, contigo desde LATAM.</p>
    </div>
    <div id="sellu-steps" style="position:relative;max-width:880px;margin:0 auto">
      <div style="position:absolute;left:27px;top:24px;bottom:24px;width:2px;background:var(--ink-200);border-radius:2px"><div id="sellu-rail" style="position:absolute;left:0;top:0;right:0;background:var(--accent-500);border-radius:2px;height:0%;transition:height 600ms var(--ease-out)"></div></div>
      <div class="sellu-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:36px;position:relative;align-items:flex-start"><div class="sellu-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--navy-900);position:relative;z-index:1;transition:all 320ms var(--ease-out)">01</div><div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="search-check" style="width:20px;height:20px;color:var(--navy-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Evaluamos tu producto y tu viabilidad en Faire</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Antes de crear ningún perfil, analizamos si tu producto, tus márgenes y tu capacidad logística son compatibles con el modelo de Faire. Si hay ajustes que hacer antes de entrar, te los decimos en este punto.</p></div></div>
      <div class="sellu-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:36px;position:relative;align-items:flex-start"><div class="sellu-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--navy-900);position:relative;z-index:1;transition:all 320ms var(--ease-out)">02</div><div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="feather" style="width:20px;height:20px;color:var(--navy-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Estructuramos tu perfil de marca</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Construimos tu perfil con la historia de tu marca, las fotografías correctas, la descripción que conecta con retailers y todos los elementos que el algoritmo de Faire prioriza para marcas nuevas.</p></div></div>
      <div class="sellu-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:36px;position:relative;align-items:flex-start"><div class="sellu-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--navy-900);position:relative;z-index:1;transition:all 320ms var(--ease-out)">03</div><div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="list-ordered" style="width:20px;height:20px;color:var(--navy-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Configuramos tu catálogo y precios mayoristas</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Subimos tus productos con fotografías optimizadas, descripciones en inglés que venden, y una estructura de precios mayoristas que funciona tanto para tu margen como para el modelo de Faire.</p></div></div>
      <div class="sellu-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:36px;position:relative;align-items:flex-start"><div class="sellu-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--navy-900);position:relative;z-index:1;transition:all 320ms var(--ease-out)">04</div><div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="target" style="width:20px;height:20px;color:var(--navy-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Definimos tu estrategia de posicionamiento</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Te orientamos sobre cómo usar las herramientas nativas de Faire — campañas de email a retailers, promociones de apertura, mínimos de pedido — para maximizar tu visibilidad en los primeros 30 días.</p></div></div>
      <div class="sellu-item" style="display:grid;grid-template-columns:56px 1fr;gap:24px;padding-bottom:0;position:relative;align-items:flex-start"><div class="sellu-num" style="width:56px;height:56px;border-radius:999px;background:var(--white);border:2px solid var(--border-strong);display:flex;align-items:center;justify-content:center;font-family:var(--font-mono);font-weight:600;font-size:14px;color:var(--navy-900);position:relative;z-index:1;transition:all 320ms var(--ease-out)">05</div><div class="f-card reveal"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><i data-lucide="handshake" style="width:20px;height:20px;color:var(--navy-700)"></i><h4 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">Acompañamiento en los primeros pedidos</h4></div><p style="font-size:15px;line-height:26px;color:var(--fg-secondary)">Te guiamos en la gestión de tus primeros pedidos: cómo confirmarlos, cómo comunicarte con los retailers y cómo construir la base de clientes recurrentes que reduce tu comisión del 25% al 15%.</p></div></div>
    </div>
  </div>
</section>

<!-- ══ BENEFICIOS ══ -->
<section class="f-section">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:48px">
      <span class="f-eyebrow reveal">Beneficios</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">Beneficios de entrar a Faire con Sell·U.</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px" class="f-3col">
      <div class="f-card reveal"><div style="display:inline-flex;width:48px;height:48px;border-radius:10px;background:var(--accent-100);align-items:center;justify-content:center;margin-bottom:16px"><i data-lucide="compass" style="width:22px;height:22px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Entrada estratégica, no improvisada</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Faire tiene más de 100,000 marcas. Entrar sin estrategia es desaparecer en ese mar. Sell·U te posiciona desde el inicio con un perfil que el algoritmo favorece.</p></div>
      <div class="f-card reveal"><div style="display:inline-flex;width:48px;height:48px;border-radius:10px;background:var(--accent-100);align-items:center;justify-content:center;margin-bottom:16px"><i data-lucide="calculator" style="width:22px;height:22px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Precios calculados para que el negocio funcione</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">El error de pricing puede costarte meses de pérdidas. Sell·U hace el análisis de viabilidad antes de que subas un solo producto, para que cada pedido sea rentable.</p></div>
      <div class="f-card reveal"><div style="display:inline-flex;width:48px;height:48px;border-radius:10px;background:var(--accent-100);align-items:center;justify-content:center;margin-bottom:16px"><i data-lucide="languages" style="width:22px;height:22px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Catálogo en inglés listo para retailers</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Tus descripciones no solo deben estar en inglés: deben estar escritas para compradores B2B profesionales que evalúan docenas de marcas por semana.</p></div>
      <div class="f-card reveal"><div style="display:inline-flex;width:48px;height:48px;border-radius:10px;background:var(--accent-100);align-items:center;justify-content:center;margin-bottom:16px"><i data-lucide="store" style="width:22px;height:22px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Acceso a un canal que Amazon no da</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">Faire abre puertas a la distribución física en EE.UU. sin ferias, sin representantes y sin estar en el país. Un canal de expansión real para marcas con visión de largo plazo.</p></div>
      <div class="f-card reveal"><div style="display:inline-flex;width:48px;height:48px;border-radius:10px;background:var(--accent-100);align-items:center;justify-content:center;margin-bottom:16px"><i data-lucide="clock" style="width:22px;height:22px;color:var(--accent-700)"></i></div><h4 style="font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--navy-900);margin-bottom:10px">Menos tiempo de aprendizaje, más tiempo vendiendo</h4><p style="font-size:14px;line-height:22px;color:var(--fg-secondary)">La curva de Faire no es trivial. Sell·U ya la recorrió. Tú produces y despachas. Nosotros nos encargamos de que el canal funcione.</p></div>
    </div>
  </div>
</section>

<!-- ══ TIEMPOS ══ -->
<section class="f-section f-band">
  <div class="f-container">
    <div style="max-width:760px;margin-bottom:56px">
      <span class="f-eyebrow reveal">Requisitos y tiempos estimados</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:44px;line-height:52px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--navy-900)">De cero a operativo en Faire en 3 a 5 semanas.</h2>
    </div>
    <div style="display:grid;grid-template-columns:1fr 1.2fr;gap:32px;align-items:flex-start" class="f-2col">
      <div class="f-card reveal reveal-left" style="padding:32px">
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);margin-bottom:14px">Documentación base</div>
        <h3 style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900);margin-bottom:18px">Lo que necesitas tener listo</h3>
        <ul style="list-style:none;padding:0;display:flex;flex-direction:column;gap:12px">
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Empresa legalmente constituida (en tu país o en EE.UU.)</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Cuenta bancaria en EE.UU. para recibir pagos</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Catálogo de productos terminados con empaque final</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Fotografías de producto en alta resolución</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Precios de venta retail y costos de producción por unidad</li>
          <li style="display:flex;align-items:flex-start;gap:10px;font-size:14px;line-height:22px;color:var(--fg-secondary)"><i data-lucide="file-check-2" style="width:16px;height:16px;color:var(--success-500);flex:none;margin-top:3px"></i>Capacidad de despachar pedidos internacionales</li>
        </ul>
        <div style="margin-top:18px;padding-top:18px;border-top:1px solid var(--border-default);font-size:13px;color:var(--fg-tertiary)">Sell·U te indica qué necesitas exactamente y te orienta si necesitas estructurar la base legal o bancaria primero.</div>
      </div>
      <div class="f-card reveal reveal-right" style="padding:32px">
        <div style="font-size:12px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:var(--fg-tertiary);margin-bottom:14px">Línea de tiempo</div>
        <div style="margin-bottom:18px">
          <div style="position:relative;height:14px;border-radius:999px;background:var(--paper-2);overflow:hidden;border:1px solid var(--border-default)">
            <div id="timeline-bar" style="position:absolute;left:0;top:0;bottom:0;width:0%;background:linear-gradient(90deg,var(--navy-900) 0%,var(--accent-500) 100%);transition:width 1400ms var(--ease-out)"></div>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:11px;font-family:var(--font-mono);color:var(--fg-tertiary);margin-top:6px"><span>Día 0</span><span>Semana 5 — Go-live</span></div>
        </div>
        <div style="display:flex;flex-direction:column">
          <div style="display:grid;grid-template-columns:24px 1fr auto;gap:14px;align-items:center;padding:14px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-family:var(--font-mono);font-size:12px;color:var(--fg-tertiary)">01</span><span style="font-size:14px;color:var(--navy-900);font-weight:500">Evaluación de viabilidad con Sell·U</span><span style="font-family:var(--font-mono);font-size:13px;color:var(--navy-900);font-weight:600">2 a 3 días</span></div>
          <div style="display:grid;grid-template-columns:24px 1fr auto;gap:14px;align-items:center;padding:14px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-family:var(--font-mono);font-size:12px;color:var(--fg-tertiary)">02</span><span style="font-size:14px;color:var(--navy-900);font-weight:500">Estructura legal/bancaria (si aplica)</span><span style="font-family:var(--font-mono);font-size:13px;color:var(--navy-900);font-weight:600">Variable</span></div>
          <div style="display:grid;grid-template-columns:24px 1fr auto;gap:14px;align-items:center;padding:14px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-family:var(--font-mono);font-size:12px;color:var(--fg-tertiary)">03</span><span style="font-size:14px;color:var(--navy-900);font-weight:500">Creación y optimización del perfil</span><span style="font-family:var(--font-mono);font-size:13px;color:var(--navy-900);font-weight:600">5 a 7 días</span></div>
          <div style="display:grid;grid-template-columns:24px 1fr auto;gap:14px;align-items:center;padding:14px 0;border-bottom:1px solid var(--border-subtle)"><span style="font-family:var(--font-mono);font-size:12px;color:var(--fg-tertiary)">04</span><span style="font-size:14px;color:var(--navy-900);font-weight:500">Carga de catálogo y precios</span><span style="font-family:var(--font-mono);font-size:13px;color:var(--navy-900);font-weight:600">3 a 5 días</span></div>
          <div style="display:grid;grid-template-columns:24px 1fr auto;gap:14px;align-items:center;padding:14px 0"><span style="font-family:var(--font-mono);font-size:12px;color:var(--fg-tertiary)">05</span><span style="font-size:14px;color:var(--navy-900);font-weight:500">Aprobación de Faire y go-live</span><span style="font-family:var(--font-mono);font-size:13px;color:var(--navy-900);font-weight:600">1 a 2 sem.</span></div>
        </div>
        <div style="margin-top:18px;padding:16px 18px;border-radius:10px;background:var(--accent-100);border:1px solid rgba(246,187,51,.5);display:flex;justify-content:space-between;align-items:center">
          <span style="font-size:14px;font-weight:600;color:var(--navy-900)">Tiempo total estimado</span>
          <span style="font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--navy-900)">3 a 5 semanas</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section id="faq" class="f-section">
  <div class="f-container" style="display:grid;grid-template-columns:1fr 1.6fr;gap:80px;align-items:flex-start" class="faq-grid">
    <div style="position:sticky;top:120px" class="faq-sticky">
      <div class="reveal reveal-left">
        <span class="f-eyebrow">Preguntas frecuentes</span>
        <h2 style="font-family:var(--font-display);font-size:40px;line-height:48px;letter-spacing:-.02em;font-weight:600;margin-top:16px;margin-bottom:16px;color:var(--navy-900)">Lo que importa, sin rodeos.</h2>
        <p style="font-size:16px;line-height:24px;color:var(--fg-secondary);margin-bottom:24px">¿No ves tu pregunta? Escríbenos y un especialista te responde en menos de 24 horas.</p>
        <a href="https://wa.me/573116473200?text=Hola%2C%20tengo%20una%20pregunta%20sobre%20Faire" target="_blank" class="f-btn f-btn-secondary">Habla con un especialista</a>
      </div>
    </div>
    <div style="border-top:1px solid var(--border-strong)">
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Qué es Faire y cómo funciona exactamente?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">Faire es el marketplace mayorista número 1 de EE.UU., donde los retailers descubren marcas independientes, hacen pedidos en cantidades manejables, acceden a términos de pago a 60 días y pueden devolver productos no vendidos. Tú subes tu catálogo, el algoritmo te recomienda a retailers relevantes, y gestionas pedidos desde tu portal de marca.</div></div></div>
      </div>
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Necesito tener empresa en EE.UU. para vender en Faire?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">No es obligatorio, pero sí prácticamente necesario para operar sin fricciones. La mayoría de los cobros requieren una configuración bancaria en EE.UU. con número de ruta y cuenta. Sin una LLC o entidad legal allá, cobrar en dólares se vuelve complicado. Sell·U puede orientarte sobre cómo estructurar esa base antes de entrar.</div></div></div>
      </div>
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Qué tipo de productos funcionan mejor en Faire?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">Marcas con identidad propia y productos únicos que los retailers no pueden encontrar en distribuidores masivos. Cosméticos artesanales, lifestyle y decoración, alimentos gourmet, papelería, wellness. Lo que más importa no es la categoría, sino que tu producto tenga una historia y diferenciación clara.</div></div></div>
      </div>
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Cuánto cuesta vender en Faire?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">Registrarse y listar productos es gratuito. No hay cuotas mensuales, costos de listado ni cargos de procesamiento. Solo pagas cuando vendes: 25% sobre el primer pedido de cada retailer nuevo y 15% sobre pedidos repetidos. Los pedidos de tus propios clientes invitados a través de Faire Direct no tienen comisión.</div></div></div>
      </div>
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Faire es mejor que Amazon para vender desde LATAM?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">No son comparables — son canales diferentes. Amazon conecta con consumidores finales; Faire conecta con retailers profesionales que luego venden a sus propios clientes. Si quieres vender unidades al consumidor americano, Amazon. Si quieres estar en estanterías de tiendas físicas y construir distribución mayorista, Faire. Muchas marcas maduras usan ambos en paralelo.</div></div></div>
      </div>
      <div class="faq-item" style="border-bottom:1px solid var(--border-default)">
        <button onclick="toggleFaq(this)" style="width:100%;text-align:left;padding:24px 0;display:flex;align-items:center;justify-content:space-between;gap:24px;background:transparent;border:none;cursor:pointer;font-family:var(--font-display);font-size:19px;line-height:26px;font-weight:600;color:var(--navy-900)"><span>¿Qué pasa si un retailer no paga o devuelve los productos?</span><i data-lucide="chevron-down" style="width:22px;height:22px;flex:none;color:var(--fg-tertiary)" class="faq-chev"></i></button>
        <div class="faq-panel"><div class="faq-inner"><div style="padding-bottom:24px;font-size:16px;line-height:26px;color:var(--fg-secondary)">Faire garantiza la protección del pago en cada pedido. Incluso si hay un inconveniente, la marca recibe su pago. Los retailers tienen devoluciones gratuitas en su primer pedido con cada nueva marca. En pedidos posteriores, las políticas dependen de lo que cada marca configure en su perfil.</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA FINAL ══ -->
<section id="contacto" class="f-section f-inverse" style="position:relative;overflow:hidden">
  <div aria-hidden="true" style="position:absolute;right:-160px;bottom:-160px;width:700px;height:700px;opacity:.06;pointer-events:none">
    <svg width="100%" height="100%" viewBox="0 0 640 640" fill="none"><path d="M340 40 c46 0 80 30 80 76 v52 c46 0 76 22 76 56 c0 34 -30 54 -76 54 v68 c46 0 76 22 76 56 c0 34 -30 56 -76 56 v52 c0 46 -34 76 -80 76 H160 c-40 0 -76 -30 -76 -76 V406 c46 0 76 -22 76 -56 c0 -34 -30 -56 -76 -56 v-58 c0 -46 36 -76 76 -76 h180 z" fill="var(--accent-500)"/></svg>
  </div>
  <div class="f-container" style="position:relative;display:grid;grid-template-columns:1.4fr 1fr;gap:80px;align-items:center" class="cta-final-grid">
    <div>
      <span class="f-eyebrow reveal" style="color:var(--accent-500)">Empieza hoy</span>
      <h2 class="reveal" style="font-family:var(--font-display);font-size:56px;line-height:64px;letter-spacing:-.02em;font-weight:600;margin-top:16px;color:var(--paper)">Tu marca puede estar en tiendas físicas de EE.UU. <em style="font-style:normal;color:var(--accent-500)">antes de lo que crees</em>.</h2>
      <p class="reveal" style="font-size:18px;line-height:28px;margin-top:24px;color:rgba(251,250,247,.78);max-width:580px">Faire es el acceso más directo que existe hoy para que una marca de LATAM llegue al retail físico americano. Sin ferias, sin intermediarios, sin necesidad de mudarte. Solo tu producto, tu historia y la red de distribución mayorista más grande del mundo.</p>
    </div>
    <div style="display:flex;flex-direction:column;gap:12px">
      <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20entrar%20a%20Faire%20con%20Sell-U" target="_blank" class="f-btn f-btn-accent f-btn-lg cta-pulse reveal" style="width:100%;justify-content:center">Quiero entrar a Faire con Sell·U →</a>
      <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20evaluar%20si%20mi%20producto%20aplica%20para%20Faire" target="_blank" class="f-btn f-btn-on-dark f-btn-lg reveal" style="width:100%;justify-content:center">Primero quiero evaluar mi producto</a>
      <p class="reveal" style="font-size:13px;line-height:20px;color:rgba(251,250,247,.55);text-align:center;margin-top:8px">Evaluación inicial sin compromiso. Te decimos si tu producto tiene potencial en Faire antes de iniciar cualquier proceso.</p>
    </div>
  </div>
</section>

<x-footer />

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Init Lucide icons
  if (window.lucide) lucide.createIcons();

  // ── Reveal on scroll ──
  const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
  reveals.forEach(el => io.observe(el));

  // ── Counter animation ──
  document.querySelectorAll('[data-counter]').forEach(el => {
    const target = +el.dataset.counter;
    const suffix = el.dataset.suffix || '';
    const fmt = el.dataset.format;
    const cio = new IntersectionObserver((entries) => {
      if (!entries[0].isIntersecting) return;
      cio.disconnect();
      const start = performance.now();
      const dur = 1500;
      const tick = (now) => {
        const t = Math.min(1, (now - start) / dur);
        const eased = 1 - Math.pow(1 - t, 3);
        const val = Math.round(eased * target);
        el.textContent = (fmt === 'comma' ? val.toLocaleString('en-US') : val) + suffix;
        if (t < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    }, { threshold: 0.4 });
    cio.observe(el);
  });

  // ── Stepper rails ──
  function setupRail(containerId, railId, numClass) {
    const container = document.getElementById(containerId);
    const rail = document.getElementById(railId);
    if (!container || !rail) return;
    const items = container.querySelectorAll('.' + numClass);
    const nums = container.querySelectorAll('.' + numClass.split('-')[0] + '-num, .step-num');
    const onScroll = () => {
      let active = -1;
      items.forEach((el, i) => {
        if (el.getBoundingClientRect().top < window.innerHeight * 0.55) active = i;
      });
      const pct = active < 0 ? 0 : Math.min(1, (active + 1) / items.length);
      rail.style.height = (pct * 100) + '%';
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
  setupRail('proceso-steps', 'proceso-rail', 'step-item');
  setupRail('sellu-steps', 'sellu-rail', 'sellu-item');

  // ── Timeline bar ──
  const bar = document.getElementById('timeline-bar');
  if (bar) {
    const bio = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) { bar.style.width = '100%'; bio.disconnect(); }
    }, { threshold: 0.4 });
    bio.observe(bar);
  }

  // ── FAQ accordion ──
  window.toggleFaq = (btn) => {
    const panel = btn.nextElementSibling;
    const chev = btn.querySelector('.faq-chev');
    const isOpen = panel.classList.contains('is-open');
    document.querySelectorAll('.faq-panel.is-open').forEach(p => {
      p.classList.remove('is-open');
      p.previousElementSibling.querySelector('.faq-chev').classList.remove('is-open');
    });
    if (!isOpen) { panel.classList.add('is-open'); chev.classList.add('is-open'); }
  };
});
</script>
</body>
</html>
