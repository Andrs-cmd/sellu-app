<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok Shop — Vende en EE.UU. desde LATAM | Sell-U</title>
    <meta name="description" content="Abre tu tienda TikTok Shop en EE.UU. desde LATAM. Sell-U gestiona tu cuenta Seller Center, shoppable videos, FBT y afiliados en 3–5 días.">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @verbatim
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "name": "TikTok Shop — Apertura y gestión desde LATAM",
      "provider": { "@type": "Organization", "name": "Sell-U" },
      "description": "Abrimos y configuramos tu cuenta TikTok Shop en EE.UU. desde LATAM. Gestión de Seller Center, shoppable content, FBT y programa de afiliados.",
      "areaServed": "LATAM",
      "serviceType": "TikTok Shop Setup"
    }
    </script>
    @endverbatim
    <style>
    /* ============================================================
       TikTok Shop page — Sell-U
       ============================================================ */

    /* Token overrides scoped to this page */
    .tt-page {
        --tt-black:     #010101;
        --tt-cyan:      #25F4EE;
        --tt-pink:      #FE2C55;
        --tt-cyan-deep: #008a85;
        --t-dark:       #434966;
        --t-yellow:     #f6bb33;
        --t-gray:       #f2f2f2;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html, body {
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        -webkit-font-smoothing: antialiased;
        background: #fff;
        color: #434966;
    }
    a  { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }

    .tt-page {
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--t-dark);
        background: #fff;
        -webkit-font-smoothing: antialiased;
    }
    .tt-page button { font-family: inherit; cursor: pointer; border: none; background: none; }

    .tt-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 32px;
    }

    /* ---- Buttons ---- */
    .tt-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 15px;
        padding: 14px 28px;
        border-radius: 12px;
        border: 2px solid transparent;
        cursor: pointer;
        line-height: 1;
        letter-spacing: -0.005em;
        text-decoration: none;
        transition: transform 200ms ease, box-shadow 200ms ease, background 200ms ease, border-color 200ms ease;
        white-space: nowrap;
    }
    .tt-btn:hover { transform: translateY(-2px); }
    .tt-btn-yellow  { background: var(--t-yellow); color: var(--t-dark); box-shadow: 0 6px 18px rgba(246,187,51,0.32); }
    .tt-btn-yellow:hover  { box-shadow: 0 12px 28px rgba(246,187,51,0.45); }
    .tt-btn-pink    { background: var(--tt-pink); color: #fff; box-shadow: 0 6px 18px rgba(254,44,85,0.32); }
    .tt-btn-pink:hover    { box-shadow: 0 12px 28px rgba(254,44,85,0.45); }
    .tt-btn-od      { background: transparent; color: var(--t-dark); border-color: var(--t-dark); }
    .tt-btn-od:hover      { background: var(--t-dark); color: #fff; }
    .tt-btn-op      { background: transparent; color: var(--tt-pink); border-color: var(--tt-pink); }
    .tt-btn-op:hover      { background: var(--tt-pink); color: #fff; }
    .tt-btn-ow      { background: transparent; color: #fff; border-color: #fff; }
    .tt-btn-ow:hover      { background: #fff; color: var(--t-dark); }

    /* ---- Eyebrow ---- */
    .tt-eyebrow {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--tt-pink);
    }

    /* ---- Sections ---- */
    .tt-section      { padding: 96px 0; position: relative; }
    .tt-section-dark { background: var(--tt-black); color: #fff; }
    .tt-section-gray { background: var(--t-gray); }

    /* ---- Keyframe animations ---- */
    @keyframes tt-pulseDot {
        0%, 100% { opacity: 1; }
        50%      { opacity: 0.3; }
    }
    @keyframes tt-fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes tt-drawBag {
        to { stroke-dashoffset: 0; }
    }
    @keyframes tt-bagFillIn {
        from { fill-opacity: 0; opacity: 0; }
        to   { fill-opacity: 1; opacity: 1; }
    }
    @keyframes tt-fadeIn {
        from { opacity: 0; }
        to   { opacity: 1; }
    }
    @keyframes tt-bagGlow {
        0%, 100% { box-shadow: 0 32px 80px rgba(1,1,1,0.4), 0 0 60px rgba(37,244,238,0.10); }
        50%      { box-shadow: 0 32px 80px rgba(1,1,1,0.4), 0 0 90px rgba(37,244,238,0.22), 0 0 120px rgba(254,44,85,0.10); }
    }
    @keyframes tt-glitchCyan {
        0%, 90%, 100% { transform: translate(0,0); opacity: 0.9; }
        91%           { transform: translate(-4px,-2px); opacity: 0.7; }
        93%           { transform: translate(-7px,1px);  opacity: 0.85; }
        95%           { transform: translate(-3px,-3px); opacity: 0.6; }
        97%           { transform: translate(-5px,0px);  opacity: 0.9; }
    }
    @keyframes tt-glitchPink {
        0%, 90%, 100% { transform: translate(0,0); opacity: 0.9; }
        91%           { transform: translate(4px,2px);   opacity: 0.7; }
        93%           { transform: translate(7px,-1px);  opacity: 0.85; }
        95%           { transform: translate(3px,3px);   opacity: 0.6; }
        97%           { transform: translate(5px,0px);   opacity: 0.9; }
    }
    @keyframes tt-floatUp {
        0%   { transform: translate(var(--x,0), 0) scale(1);    opacity: 1; }
        70%  { transform: translate(var(--x,0), -160px) scale(1.2); opacity: 0.8; }
        100% { transform: translate(var(--x,0), -240px) scale(0.7); opacity: 0; }
    }
    @keyframes tt-slideUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes tt-reactionPop {
        0%   { opacity: 0; transform: translateY(8px) scale(0.7); }
        20%  { opacity: 1; transform: translateY(0) scale(1.1); }
        80%  { opacity: 1; transform: translateY(-4px) scale(1); }
        100% { opacity: 0; transform: translateY(-12px) scale(0.9); }
    }
    @keyframes tt-scrollX {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }
    @keyframes tt-lineFlow {
        from { background-position: 0 0; }
        to   { background-position: 48px 0; }
    }

    .tt-fade-in-up { animation: tt-fadeInUp 700ms cubic-bezier(0.16,1,0.3,1) backwards; }

    /* ---- Hero ---- */
    .tt-hero {
        position: relative;
        min-height: 92vh;
        display: flex;
        align-items: center;
        padding: 56px 0;
        overflow: hidden;
        background: #fff;
    }
    .tt-hero-grid {
        display: grid;
        grid-template-columns: 1.18fr 1fr;
        gap: 64px;
        align-items: center;
        width: 100%;
    }
    .tt-scan-lines {
        position: absolute; inset: 0; pointer-events: none; overflow: hidden;
    }
    .tt-scan-lines::before,
    .tt-scan-lines::after {
        content: ''; position: absolute; left: -10%; right: -10%; height: 1px;
        background: linear-gradient(90deg, transparent, rgba(1,1,1,0.08), transparent);
        transform: rotate(-12deg);
    }
    .tt-scan-lines::before { top: 30%; }
    .tt-scan-lines::after  { top: 70%; }

    /* Hero animated card */
    .tt-logo-card {
        position: relative;
        background: var(--tt-black);
        border-radius: 24px;
        padding: 32px;
        width: 100%;
        max-width: 460px;
        margin-left: auto;
        overflow: hidden;
        animation: tt-bagGlow 3s ease-in-out infinite;
    }
    .tt-live-badge {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 5px 10px;
        background: var(--tt-pink);
        color: #fff;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.02em;
    }
    .tt-live-dot {
        display: inline-block;
        width: 8px; height: 8px;
        border-radius: 50%;
        background: var(--tt-pink);
        animation: tt-pulseDot 1.2s ease-in-out infinite;
    }
    .tt-logo-area {
        position: relative;
        height: 320px;
        display: flex; align-items: center; justify-content: center;
    }
    /* Particles spawn point */
    #tt-particles {
        position: absolute;
        bottom: 80px;
        left: 50%;
        width: 0; height: 0;
        overflow: visible;
        pointer-events: none;
        z-index: 5;
    }
    .tt-particle {
        position: absolute;
        bottom: 0;
        font-size: 22px;
        pointer-events: none;
        animation: tt-floatUp linear forwards;
        filter: drop-shadow(0 0 6px rgba(0,0,0,0.4));
    }

    /* ---- Marquee ---- */
    .tt-marquee-track {
        display: flex;
        gap: 14px;
        width: max-content;
        animation: tt-scrollX 40s linear infinite;
    }
    .tt-client-pill {
        padding: 9px 20px;
        background: rgba(255,255,255,0.08);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 20px;
        color: rgba(255,255,255,0.75);
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
    }

    /* ---- Metric cards ---- */
    .tt-metrics-grid {
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 20px;
    }
    .tt-metric-card {
        background: var(--t-gray);
        border-radius: 16px;
        padding: 32px 28px;
        transition: transform 250ms ease, box-shadow 250ms ease;
    }
    .tt-metric-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(67,73,102,0.12); }
    .tt-metric-num {
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
        font-size: 56px;
        line-height: 1;
        letter-spacing: -0.03em;
    }
    .tt-metric-label { margin-top: 14px; font-weight: 700; color: var(--t-dark); font-size: 15px; }
    .tt-metric-desc  { margin-top: 8px; font-weight: 400; color: #6b6f7a; font-size: 13px; line-height: 1.55; }
    .tt-glitch-text {
        position: relative;
        display: inline-block;
        text-shadow: 2px 0 0 var(--tt-cyan), -2px 0 0 var(--tt-pink);
    }

    /* ---- Live mockup (phone) ---- */
    .tt-live-mockup {
        position: relative;
        width: 100%;
        max-width: 360px;
        aspect-ratio: 9/16;
        margin: 0 auto;
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 40px 80px rgba(0,0,0,0.5), 0 0 60px rgba(254,44,85,0.15);
    }
    .tt-live-mockup::after {
        content: '';
        position: absolute; inset: 0;
        background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
        background-size: 4px 4px;
        pointer-events: none;
        mix-blend-mode: overlay;
    }
    .tt-mockup-pinned {
        position: absolute; left: 14px; bottom: 110px; z-index: 3;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 12px;
        padding: 10px;
        display: flex; align-items: center; gap: 10px;
        animation: tt-slideUp 600ms ease forwards;
        border: 1px solid rgba(255,255,255,0.12);
    }
    .tt-mockup-reactions {
        position: absolute; right: 16px; bottom: 100px; z-index: 3;
        width: 80px; height: 240px; pointer-events: none;
        overflow: visible;
    }
    .tt-mockup-reaction {
        position: absolute;
        font-size: 22px;
        animation: tt-reactionPop 1.8s ease forwards;
        filter: drop-shadow(0 2px 6px rgba(0,0,0,0.4));
    }

    /* ---- Service cards ---- */
    .tt-services-grid {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        gap: 20px;
    }
    .tt-service-card {
        position: relative;
        background: #fff;
        border-radius: 16px;
        padding: 32px 28px;
        border-top: 3px solid transparent;
        transition: transform 250ms ease, box-shadow 250ms ease, border-top-color 250ms ease;
        display: flex; flex-direction: column;
        gap: 14px;
    }
    .tt-service-card:hover { transform: translateY(-6px); box-shadow: 0 22px 50px rgba(67,73,102,0.14); }
    .tt-service-icon {
        width: 56px; height: 56px;
        border-radius: 14px;
        display: inline-flex; align-items: center; justify-content: center;
        font-size: 26px;
    }

    /* ---- Process timeline ---- */
    .tt-process-grid {
        display: grid;
        grid-template-columns: repeat(4,1fr);
        gap: 16px;
        position: relative;
    }
    .tt-process-line {
        flex: 1;
        margin-left: 12px;
        height: 4px;
        background: var(--t-gray);
        border-radius: 2px;
        overflow: hidden;
        position: relative;
    }
    .tt-process-line::after {
        content: '';
        position: absolute; inset: 0;
        background: repeating-linear-gradient(90deg,
            var(--tt-pink)  0 6px,
            transparent     6px 16px,
            var(--tt-cyan)  16px 22px,
            transparent     22px 32px,
            var(--t-yellow) 32px 38px,
            transparent     38px 48px);
        animation: tt-lineFlow 1.6s linear infinite;
        opacity: 0.85;
    }
    .tt-step-num {
        width: 56px; height: 56px;
        border-radius: 50%;
        background: var(--tt-black);
        color: #fff;
        font-weight: 800;
        font-size: 20px;
        display: inline-flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        position: relative; z-index: 2;
    }

    /* ---- Requisites ---- */
    .tt-req-grid {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        gap: 16px;
    }
    .tt-req-card {
        background: #fff;
        border-radius: 12px;
        padding: 24px 22px;
        border-left: 4px solid;
        display: flex; gap: 14px;
        transition: transform 250ms ease, box-shadow 250ms ease;
    }
    .tt-req-card:hover { transform: translateY(-4px); box-shadow: 0 16px 36px rgba(67,73,102,0.10); }

    /* ---- Dark stat cards ---- */
    .tt-stats-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    .tt-stat-dark-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 16px;
        padding: 28px 24px;
        transition: transform 250ms ease, background 250ms ease;
    }
    .tt-stat-dark-card:hover { transform: translateY(-4px); background: rgba(255,255,255,0.07); }

    /* ---- Responsive ---- */
    @media (max-width: 980px) {
        .tt-hero-grid        { grid-template-columns: 1fr !important; gap: 48px !important; }
        .tt-hero-grid .tt-card-col { order: 2; }
        .tt-live-grid        { grid-template-columns: 1fr !important; gap: 48px !important; }
        .tt-quote-grid       { grid-template-columns: 1fr !important; gap: 48px !important; }
        .tt-services-grid    { grid-template-columns: 1fr 1fr !important; }
        .tt-req-grid         { grid-template-columns: 1fr 1fr !important; }
        .tt-metrics-grid     { grid-template-columns: 1fr 1fr !important; }
        .tt-process-grid     { grid-template-columns: 1fr !important; }
        .tt-process-line     { width: 4px !important; height: 60px !important; margin: 12px auto !important; flex: none !important; }
        .tt-hero-h1  { font-size: 40px !important; }
        .tt-section-h2 { font-size: 30px !important; }
    }
    @media (max-width: 600px) {
        .tt-container   { padding: 0 20px; }
        .tt-section     { padding: 64px 0; }
        .tt-services-grid { grid-template-columns: 1fr !important; }
        .tt-req-grid    { grid-template-columns: 1fr !important; }
        .tt-metrics-grid { grid-template-columns: 1fr !important; }
        .tt-stats-grid  { grid-template-columns: 1fr !important; }
        .tt-hero-ctas   { flex-direction: column !important; align-items: stretch !important; }
        .tt-hero-ctas .tt-btn { justify-content: center; }
        .tt-hero-h1 { font-size: 34px !important; }
        .tt-section-h2 { font-size: 28px !important; }
        .tt-final-h2 { font-size: 36px !important; }
    }
    </style>
</head>
<body>
<x-nav />
<div class="tt-page">

    {{-- ===== HERO ===== --}}
    <section class="tt-hero">
        <div aria-hidden style="position:absolute;top:-80px;right:-120px;width:460px;height:460px;background:var(--tt-black);opacity:0.05;border-radius:52% 48% 38% 62% / 56% 44% 56% 44%;pointer-events:none;"></div>
        <div aria-hidden style="position:absolute;top:160px;right:80px;width:220px;height:220px;background:var(--tt-pink);opacity:0.05;border-radius:60% 40% 50% 50% / 40% 60% 40% 60%;pointer-events:none;"></div>
        <div aria-hidden style="position:absolute;bottom:-60px;left:-80px;width:280px;height:280px;background:var(--tt-cyan);opacity:0.06;border-radius:50% 50% 40% 60% / 60% 40% 60% 40%;pointer-events:none;"></div>
        <div class="tt-scan-lines" aria-hidden></div>

        <div class="tt-container" style="position:relative;">
            <div class="tt-hero-grid">

                {{-- Left --}}
                <div>
                    <!--<span class="tt-eyebrow tt-fade-in-up" style="animation-delay:0ms;">TikTok Shop · Social Commerce USA</span>-->
                    <h1 class="tt-hero-h1 tt-fade-in-up" style="font-family:'Poppins',sans-serif;font-weight:800;font-size:56px;line-height:1.05;letter-spacing:-0.025em;margin-top:18px;margin-bottom:22px;color:var(--t-dark);animation-delay:50ms;">
                        <span style="display:block;">Tu producto</span>
                        <span style="display:block;">en el feed de</span>
                        <span style="display:block;color:#f6bb33;">150 millones</span>
                        <span style="display:block;">de compradores.</span>
                    </h1>
                    <p style="font-size:18px;line-height:1.65;color:#555;max-width:500px;margin-bottom:32px;font-weight:400;">
                        TikTok Shop convierte videos en ventas. Abrimos tu cuenta, configuramos tu tienda y dejamos todo listo para que tu producto aparezca en el feed de EE.UU. desde LATAM.
                    </p>
                    <div class="tt-hero-ctas" style="display:flex;gap:12px;flex-wrap:wrap;align-items:center;">
                        <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-yellow">Empezar ahora →</a>
                        <!--<a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-pink">▶ Vender en TikTok Shop</a>
                        <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20hablar%20con%20un%20asesor%20sobre%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-od">Hablar con un asesor</a>-->
                    </div>
                    <p style="margin-top:22px;font-size:12px;color:#9298a3;font-weight:500;">
                        Sin compromiso · En español · Desde cualquier país de LATAM
                    </p>
                </div>

                {{-- Right: animated TikTok card --}}
                <div class="tt-card-col" style="display:flex;justify-content:flex-end;">
                    <div class="tt-logo-card">
                        {{-- bg texture --}}
                        <div aria-hidden style="position:absolute;inset:0;background:radial-gradient(circle at 50% 50%, rgba(37,244,238,0.06), transparent 60%), radial-gradient(circle at 80% 90%, rgba(254,44,85,0.06), transparent 50%);pointer-events:none;"></div>

                        {{-- Header row --}}
                        <div style="position:relative;display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;">
                            <span class="tt-live-badge">
                                <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:#fff;animation:tt-pulseDot 1.2s ease-in-out infinite;"></span>
                                LIVE · <span id="tt-hero-viewers">247</span> viendo
                            </span>
                            <span style="font-size:11px;font-weight:600;color:rgba(255,255,255,0.5);letter-spacing:0.04em;">TikTokShop</span>
                        </div>

                        {{-- Logo area --}}
                        <div class="tt-logo-area">
                            <div id="tt-particles"></div>

                            {{-- Bag SVG --}}
                            <div style="position:relative;width:220px;height:240px;">
                                <svg width="220" height="262" viewBox="0 0 220 240" style="overflow:visible;" aria-hidden="true">
                                    {{-- Stroke draw layer --}}
                                    <path d="M 60 60 C 60 36, 80 18, 110 18 C 140 18, 160 36, 160 60 L 160 70 L 188 70 C 198 70, 206 78, 206 88 L 206 196 C 206 210, 196 220, 182 220 L 38 220 C 24 220, 14 210, 14 196 L 14 88 C 14 78, 22 70, 32 70 L 60 70 Z M 78 60 L 78 70 L 142 70 L 142 60 C 142 44, 128 32, 110 32 C 92 32, 78 44, 78 60 Z"
                                        fill="none" stroke="#ffffff" stroke-width="3" stroke-linejoin="round" stroke-linecap="round"
                                        style="stroke-dasharray:1200;stroke-dashoffset:1200;animation:tt-drawBag 1.6s cubic-bezier(0.4,0,0.2,1) forwards;"/>
                                    {{-- Fill layer --}}
                                    <path d="M 60 60 C 60 36, 80 18, 110 18 C 140 18, 160 36, 160 60 L 160 70 L 188 70 C 198 70, 206 78, 206 88 L 206 196 C 206 210, 196 220, 182 220 L 38 220 C 24 220, 14 210, 14 196 L 14 88 C 14 78, 22 70, 32 70 L 60 70 Z M 78 60 L 78 70 L 142 70 L 142 60 C 142 44, 128 32, 110 32 C 92 32, 78 44, 78 60 Z"
                                        fill="#010101" fill-rule="evenodd"
                                        style="fill-opacity:0;animation:tt-bagFillIn 600ms ease forwards 1.4s;"/>
                                    <circle cx="60"  cy="105" r="3.2" fill="#ffffff" style="opacity:0;animation:tt-fadeIn 400ms ease forwards 2s;"/>
                                    <circle cx="160" cy="105" r="3.2" fill="#ffffff" style="opacity:0;animation:tt-fadeIn 400ms ease forwards 2s;"/>
                                </svg>

                                {{-- Note glyphs (glitch layers) --}}
                                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-42%);width:64px;height:84px;opacity:0;animation:tt-fadeIn 500ms ease forwards 2.1s;">
                                    <div style="position:absolute;inset:0;mix-blend-mode:screen;animation:tt-glitchCyan 3.4s ease-in-out infinite;">
                                        <svg width="64" height="84" viewBox="0 0 64 84"><path d="M 38 6 C 38 6, 46 22, 60 24 L 60 38 C 50 38, 42 34, 38 30 L 38 56 C 38 71, 25 80, 14 80 C 6 80, 0 73, 0 64 C 0 54, 8 47, 18 47 C 21 47, 23 47.5, 24 48 L 24 62 C 23 61, 21 60, 19 60 C 16 60, 13 62.5, 13 66 C 13 69, 16 71, 19 71 C 23 71, 26 68, 26 63 L 26 6 Z" fill="#25F4EE"/></svg>
                                    </div>
                                    <div style="position:absolute;inset:0;mix-blend-mode:screen;animation:tt-glitchPink 3.4s ease-in-out infinite;">
                                        <svg width="64" height="84" viewBox="0 0 64 84"><path d="M 38 6 C 38 6, 46 22, 60 24 L 60 38 C 50 38, 42 34, 38 30 L 38 56 C 38 71, 25 80, 14 80 C 6 80, 0 73, 0 64 C 0 54, 8 47, 18 47 C 21 47, 23 47.5, 24 48 L 24 62 C 23 61, 21 60, 19 60 C 16 60, 13 62.5, 13 66 C 13 69, 16 71, 19 71 C 23 71, 26 68, 26 63 L 26 6 Z" fill="#FE2C55"/></svg>
                                    </div>
                                    <div style="position:absolute;inset:0;">
                                        <svg width="64" height="84" viewBox="0 0 64 84"><path d="M 38 6 C 38 6, 46 22, 60 24 L 60 38 C 50 38, 42 34, 38 30 L 38 56 C 38 71, 25 80, 14 80 C 6 80, 0 73, 0 64 C 0 54, 8 47, 18 47 C 21 47, 23 47.5, 24 48 L 24 62 C 23 61, 21 60, 19 60 C 16 60, 13 62.5, 13 66 C 13 69, 16 71, 19 71 C 23 71, 26 68, 26 63 L 26 6 Z" fill="#ffffff"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>{{-- /logo-area --}}

                        {{-- Title --}}
                        <div style="position:relative;text-align:center;margin-top:8px;">
                            <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:28px;color:#fff;letter-spacing:-0.02em;opacity:0;animation:tt-fadeInUp 700ms ease forwards 2.4s;">
                                TikTok<span style="font-weight:500;opacity:0.85;">Shop</span>
                            </div>
                        </div>

                        <div style="height:1px;background:rgba(255,255,255,0.1);margin:20px 0 16px;"></div>

                        {{-- Stats row --}}
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;position:relative;">
                            <div style="background:rgba(255,255,255,0.05);border-radius:12px;padding:12px 14px;">
                                <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:22px;color:var(--tt-cyan);letter-spacing:-0.02em;">150M+</div>
                                <div style="font-size:11px;color:rgba(255,255,255,0.6);margin-top:2px;">Usuarios EE.UU.</div>
                            </div>
                            <div style="background:rgba(255,255,255,0.05);border-radius:12px;padding:12px 14px;">
                                <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:22px;color:var(--tt-pink);letter-spacing:-0.02em;">$26.2B</div>
                                <div style="font-size:11px;color:rgba(255,255,255,0.6);margin-top:2px;">GMV · H1 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== MARQUEE ===== --}}
    <!--<section style="background:var(--tt-black);padding:36px 0;overflow:hidden;">
        <div class="tt-container" style="text-align:center;margin-bottom:18px;">
            <span style="font-size:11px;font-weight:600;letter-spacing:0.16em;text-transform:uppercase;color:rgba(255,255,255,0.4);">Marcas que ya venden con Sell-U</span>
        </div>
        <div style="overflow:hidden;mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);-webkit-mask-image:linear-gradient(90deg,transparent,#000 8%,#000 92%,transparent);">
            <div class="tt-marquee-track">
                <span class="tt-client-pill">Marathon</span><span class="tt-client-pill">Differenza</span><span class="tt-client-pill">Sense</span><span class="tt-client-pill">Haiko Natural</span><span class="tt-client-pill">Buddy Beauty</span><span class="tt-client-pill">Nutrelle</span><span class="tt-client-pill">Yax Socks</span><span class="tt-client-pill">D Casa</span>
                <span class="tt-client-pill">Marathon</span><span class="tt-client-pill">Differenza</span><span class="tt-client-pill">Sense</span><span class="tt-client-pill">Haiko Natural</span><span class="tt-client-pill">Buddy Beauty</span><span class="tt-client-pill">Nutrelle</span><span class="tt-client-pill">Yax Socks</span><span class="tt-client-pill">D Casa</span>
                <span class="tt-client-pill">Marathon</span><span class="tt-client-pill">Differenza</span><span class="tt-client-pill">Sense</span><span class="tt-client-pill">Haiko Natural</span><span class="tt-client-pill">Buddy Beauty</span><span class="tt-client-pill">Nutrelle</span><span class="tt-client-pill">Yax Socks</span><span class="tt-client-pill">D Casa</span>
                <span class="tt-client-pill">Marathon</span><span class="tt-client-pill">Differenza</span><span class="tt-client-pill">Sense</span><span class="tt-client-pill">Haiko Natural</span><span class="tt-client-pill">Buddy Beauty</span><span class="tt-client-pill">Nutrelle</span><span class="tt-client-pill">Yax Socks</span><span class="tt-client-pill">D Casa</span>
            </div>
        </div>
    </section>-->

    {{-- ===== WHY TIKTOK SHOP ===== --}}
    <section class="tt-section">
        <div class="tt-container">
            <div style="text-align:center;max-width:760px;margin:0 auto 56px;">
                <h2 class="tt-section-h2" style="font-family:'Poppins',sans-serif;font-weight:700;font-size:38px;line-height:1.2;letter-spacing:-0.02em;color:var(--t-dark);margin:0;">
                    El marketplace de <span class="tt-glitch-text">social commerce</span> más grande del mundo.
                </h2>
            </div>
            <div class="tt-metrics-grid">
                <div class="tt-metric-card">
                    <div class="tt-metric-num tt-count" data-target="150" data-suffix="M+" style="color:#f6bb33;">150M+</div>
                    <div class="tt-metric-label">Usuarios activos en EE.UU.</div>
                    <div class="tt-metric-desc">La audiencia más joven y más comprometida del mundo digital.</div>
                </div>
                <div class="tt-metric-card">
                    <div class="tt-metric-num tt-count" data-target="26.2" data-prefix="$" data-suffix="B" data-decimals="1" style="color:#434966;">$26.2B</div>
                    <div class="tt-metric-label">GMV global · H1 2025</div>
                    <div class="tt-metric-desc">Casi el doble del año completo 2024. El canal de mayor crecimiento en e-commerce.</div>
                </div>
                <div class="tt-metric-card">
                    <div class="tt-metric-num tt-count" data-target="6" data-suffix="%" style="color:#f6bb33;">6%</div>
                    <div class="tt-metric-label">Fee por venta</div>
                    <div class="tt-metric-desc">Sin cuota mensual. Solo pagas cuando vendes. Amazon cobra hasta 15%.</div>
                </div>
                <div class="tt-metric-card">
                    <div class="tt-metric-num" style="color:#434966;">3–5</div>
                    <div class="tt-metric-label">Días para estar activo</div>
                    <div class="tt-metric-desc">El proceso de aprobación más rápido entre los marketplaces de EE.UU.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== LIVE SHOPPING ===== --}}
    <!--<section class="tt-section tt-section-dark" style="overflow:hidden;position:relative;">
        <div aria-hidden style="position:absolute;top:-160px;left:-120px;width:420px;height:420px;background:radial-gradient(circle,rgba(254,44,85,0.18),transparent 60%);pointer-events:none;"></div>
        <div aria-hidden style="position:absolute;bottom:-180px;right:-120px;width:460px;height:460px;background:radial-gradient(circle,rgba(37,244,238,0.12),transparent 60%);pointer-events:none;"></div>
        <div class="tt-container" style="position:relative;">
            <div class="tt-live-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">

                {{-- Left text --}}
                <div>
                    <span class="tt-eyebrow">Exclusivo TikTok Shop</span>
                    <h2 style="font-family:'Poppins',sans-serif;font-weight:800;font-size:44px;line-height:1.15;letter-spacing:-0.025em;color:#fff;margin-top:16px;margin-bottom:18px;">
                        Vende <span style="border-bottom:3px dotted var(--tt-cyan);padding-bottom:4px;">en vivo</span>.<br>
                        Tu tienda abierta<br>las 24 horas.
                    </h2>
                    <p style="font-size:16px;line-height:1.65;color:rgba(255,255,255,0.7);margin-bottom:26px;">
                        TikTok Shop tiene 3 canales de venta que ningún otro marketplace ofrece:
                    </p>
                    <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:28px;">
                        <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-left:3px solid var(--tt-pink);border-radius:12px;padding:16px 18px;display:flex;gap:14px;align-items:flex-start;">
                            <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">▶</div>
                            <div>
                                <div style="color:#fff;font-weight:700;font-size:15px;margin-bottom:4px;">Shoppable Videos</div>
                                <div style="color:rgba(255,255,255,0.7);font-size:13px;line-height:1.55;">Cualquier video puede tener un producto pinneado. El usuario compra sin salir del feed.</div>
                            </div>
                        </div>
                        <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-left:3px solid var(--tt-cyan);border-radius:12px;padding:16px 18px;display:flex;gap:14px;align-items:flex-start;">
                            <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">📡</div>
                            <div>
                                <div style="color:#fff;font-weight:700;font-size:15px;margin-bottom:4px;">Live Shopping</div>
                                <div style="color:rgba(255,255,255,0.7);font-size:13px;line-height:1.55;">Vende en tiempo real durante streams. Cupones de live-only y pines de producto.</div>
                            </div>
                        </div>
                        <div style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.08);border-left:3px solid var(--t-yellow);border-radius:12px;padding:16px 18px;display:flex;gap:14px;align-items:flex-start;">
                            <div style="width:36px;height:36px;border-radius:10px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;">🤝</div>
                            <div>
                                <div style="color:#fff;font-weight:700;font-size:15px;margin-bottom:4px;">Programa de Afiliados</div>
                                <div style="color:rgba(255,255,255,0.7);font-size:13px;line-height:1.55;">Creadores de TikTok promueven tus productos y ganan comisión por venta.</div>
                            </div>
                        </div>
                    </div>
                    <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-yellow">Hablar con un asesor →</a>
                </div>

                {{-- Right: live phone mockup --}}
                <div style="display:flex;justify-content:center;">
                    <div class="tt-live-mockup">
                        {{-- Top bar --}}
                        <div style="position:absolute;top:0;left:0;right:0;padding:14px 16px;display:flex;align-items:center;justify-content:space-between;z-index:3;background:linear-gradient(180deg,rgba(0,0,0,0.6),transparent);">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div style="width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,var(--tt-pink),var(--tt-cyan));border:2px solid #fff;flex-shrink:0;"></div>
                                <div>
                                    <div style="color:#fff;font-weight:700;font-size:13px;">@TuMarcaLatam</div>
                                    <div style="color:rgba(255,255,255,0.7);font-size:10px;">Latina · LIVE</div>
                                </div>
                            </div>
                            <span class="tt-live-badge" style="padding:4px 10px;font-size:10px;">
                                <span style="display:inline-block;width:7px;height:7px;border-radius:50%;background:#fff;animation:tt-pulseDot 1.2s ease-in-out infinite;"></span>
                                EN VIVO
                            </span>
                        </div>
                        {{-- Center placeholder --}}
                        <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;z-index:1;">
                            <div style="color:rgba(255,255,255,0.35);font-weight:600;font-size:14px;letter-spacing:0.04em;display:flex;flex-direction:column;align-items:center;gap:8px;">
                                <div style="font-size:36px;">🎥</div>
                                <div>En vivo ahora</div>
                            </div>
                        </div>
                        {{-- Pinned product --}}
                        <div class="tt-mockup-pinned">
                            <div style="width:44px;height:44px;border-radius:8px;background:linear-gradient(135deg,#f6bb33 0%,#e8501a 100%);display:flex;align-items:center;justify-content:center;color:#fff;font-size:9px;font-weight:700;flex-shrink:0;">Producto</div>
                            <div>
                                <div style="color:#fff;font-size:12px;font-weight:700;">Salsa X</div>
                                <div style="display:flex;align-items:center;gap:6px;font-size:11px;color:rgba(255,255,255,0.85);">
                                    <span style="color:var(--tt-pink);font-weight:800;">$29.99</span>
                                    <span style="font-size:9px;color:#f6bb33;">★★★★★</span>
                                </div>
                            </div>
                            <button style="margin-left:6px;background:var(--tt-pink);color:#fff;padding:6px 10px;border-radius:8px;font-size:10px;font-weight:700;border:none;cursor:pointer;">🛒 Comprar</button>
                        </div>
                        {{-- Reactions --}}
                        <div class="tt-mockup-reactions" id="tt-mockup-reactions"></div>
                        {{-- Footer bar --}}
                        <div style="position:absolute;left:0;right:0;bottom:0;padding:14px 16px;display:flex;align-items:center;justify-content:space-between;z-index:3;background:linear-gradient(0deg,rgba(0,0,0,0.7),transparent);">
                            <div style="color:#fff;font-size:12px;font-weight:600;display:flex;align-items:center;gap:6px;">
                                <span style="font-size:14px;">👁</span> <span id="tt-mockup-viewers">1,247</span>
                            </div>
                            <button style="background:var(--tt-pink);color:#fff;padding:8px 14px;border-radius:999px;font-size:11px;font-weight:700;display:inline-flex;align-items:center;gap:6px;border:none;cursor:pointer;">🛒 Comprar</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->

    {{-- ===== SERVICES ===== --}}
    <section class="tt-section tt-section-gray">
        <div class="tt-container">
            <div style="text-align:center;max-width:760px;margin:0 auto 56px;">
                <h2 class="tt-section-h2" style="font-family:'Poppins',sans-serif;font-weight:700;font-size:38px;line-height:1.2;letter-spacing:-0.02em;color:var(--t-dark);margin:0;">
                    Todo lo que hacemos para que<br>tu tienda TikTok Shop venda.
                </h2>
            </div>
            <div class="tt-services-grid">

                <div class="tt-service-card" data-hc="#FE2C55">
                    <div class="tt-service-icon" style="background:#FFF0F3;">🏪</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">Apertura de cuenta TikTok Shop</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Creamos y verificamos tu cuenta Business Seller en TikTok Shop Seller Center correctamente desde el inicio.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Registro con tu LLC y EIN</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Verificación de identidad guiada</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Configuración de cuenta bancaria US</span></li>
                    </ul>
                </div>

                <div class="tt-service-card" data-hc="#25F4EE">
                    <div class="tt-service-icon" style="background:#E6FCFB;">📦</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">Configuración de tienda</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Configuramos tu Seller Center, nombre de tienda, categorías y preferencias de envío.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Nombre y perfil de tienda</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Categorías de producto</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Políticas de envío y devolución</span></li>
                    </ul>
                </div>

                <div class="tt-service-card" data-hc="#f6bb33">
                    <div class="tt-service-icon" style="background:#FEF5DD;">🎥</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">Listings para shoppable content</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Cargamos tus productos optimizados para aparecer en shoppable videos y live streams.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Títulos y descripciones en inglés</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Imágenes y videos de producto</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Precios y variantes configuradas</span></li>
                    </ul>
                </div>

                <div class="tt-service-card" data-hc="#FE2C55">
                    <div class="tt-service-icon" style="background:#FFF0F3;">🚚</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">FBT — Fulfilled by TikTok</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Configuramos Fulfilled by TikTok para que la plataforma gestione tu logística y envíos.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Envío a warehouse TikTok</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Etiquetas y requisitos de prep</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#FE2C55;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Entrega rápida activada</span></li>
                    </ul>
                </div>

                <div class="tt-service-card" data-hc="#25F4EE">
                    <div class="tt-service-icon" style="background:#E6FCFB;">📣</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">Activación de afiliados</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Conectamos tu tienda con creadores de TikTok para que promuevan tus productos a cambio de comisión.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Acceso al TikTok Affiliate Marketplace</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Configuración de comisiones</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#25F4EE;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Onboarding de primeros creadores</span></li>
                    </ul>
                </div>

                <div class="tt-service-card" data-hc="#f6bb33">
                    <div class="tt-service-icon" style="background:#FEF5DD;">💵</div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;line-height:1.25;letter-spacing:-0.015em;color:var(--t-dark);margin:0;">Cobros y payouts en USD</h3>
                    <p style="font-size:14px;line-height:1.6;color:#6b6f7a;margin:0;">Configuramos cómo recibes los pagos de TikTok en dólares americanos desde LATAM.</p>
                    <ul style="list-style:none;padding:0;margin:6px 0 0;display:flex;flex-direction:column;gap:8px;">
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Cuenta bancaria US vinculada</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Formulario W-9 gestionado</span></li>
                        <li style="display:flex;gap:10px;align-items:flex-start;font-size:13px;color:var(--t-dark);font-weight:500;"><span style="color:#f6bb33;font-weight:800;line-height:1.4;flex-shrink:0;">✓</span><span>Configuración fiscal con EIN</span></li>
                    </ul>
                </div>

            </div>
            <div style="text-align:center;margin-top:48px;">
                <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20empezar%20a%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-pink">Empezar ahora →</a>
            </div>
        </div>
    </section>

    {{-- ===== PROCESS ===== --}}
    <section class="tt-section">
        <div class="tt-container">
            <div style="text-align:center;max-width:800px;margin:0 auto 64px;">
                <h2 class="tt-section-h2" style="font-family:'Poppins',sans-serif;font-weight:700;font-size:38px;line-height:1.2;letter-spacing:-0.02em;color:var(--t-dark);margin:0;">
                    <span style="color:var(--tt-pink);">3–5 días</span>, 4 pasos,<br>
                    para tener tu tienda TikTok Shop activa y vendiendo.
                </h2>
            </div>
            <div class="tt-process-grid">

                <div style="display:flex;flex-direction:column;align-items:flex-start;gap:16px;">
                    <div style="display:flex;align-items:center;width:100%;">
                        <div class="tt-step-num">01</div>
                        <div class="tt-process-line"></div>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:17px;line-height:1.3;color:var(--t-dark);margin:4px 0 0;">Diagnóstico inicial</h3>
                    <p style="font-size:14px;line-height:1.6;color:#666;margin:0;">Analizamos tu LLC, producto y estructura para diseñar el mejor camino de entrada a TikTok Shop.</p>
                </div>

                <div style="display:flex;flex-direction:column;align-items:flex-start;gap:16px;">
                    <div style="display:flex;align-items:center;width:100%;">
                        <div class="tt-step-num">02</div>
                        <div class="tt-process-line"></div>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:17px;line-height:1.3;color:var(--t-dark);margin:4px 0 0;">Preparamos documentación</h3>
                    <p style="font-size:14px;line-height:1.6;color:#666;margin:0;">Recopilamos LLC, EIN, identificación y cuenta bancaria. Preparamos el W-9 y documentación de negocio.</p>
                </div>

                <div style="display:flex;flex-direction:column;align-items:flex-start;gap:16px;">
                    <div style="display:flex;align-items:center;width:100%;">
                        <div class="tt-step-num">03</div>
                        <div class="tt-process-line"></div>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:17px;line-height:1.3;color:var(--t-dark);margin:4px 0 0;">Registro y verificación</h3>
                    <p style="font-size:14px;line-height:1.6;color:#666;margin:0;">Creamos tu cuenta Seller Center, verificamos tu identidad y completamos el onboarding de la tienda.</p>
                </div>

                <div style="display:flex;flex-direction:column;align-items:flex-start;gap:16px;">
                    <div style="display:flex;align-items:center;width:100%;">
                        <div class="tt-step-num">04</div>
                    </div>
                    <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:17px;line-height:1.3;color:var(--t-dark);margin:4px 0 0;">Lanzamiento</h3>
                    <p style="font-size:14px;line-height:1.6;color:#666;margin:0;">Cargamos productos, activamos shoppable links, configuramos FBT y conectamos con primeros creadores afiliados.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== REQUISITES ===== --}}
    <section class="tt-section tt-section-gray">
        <div class="tt-container">
            <div style="text-align:center;max-width:720px;margin:0 auto 24px;">
                <h2 class="tt-section-h2" style="font-family:'Poppins',sans-serif;font-weight:700;font-size:38px;line-height:1.2;letter-spacing:-0.02em;color:var(--t-dark);margin:0;">
                    Lo que necesitas tener<br>antes de empezar.
                </h2>
                <p style="font-size:16px;line-height:1.65;color:#666;max-width:580px;margin:20px auto 0;">
                    Para abrir tu TikTok Shop desde LATAM necesitas estos elementos. Si aún no tienes alguno, también te ayudamos.
                </p>
                <!--<div style="margin-top:24px;">
                    <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20verificar%20si%20estoy%20listo%20para%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-op">Verificar si estoy listo →</a>
                </div>-->
            </div>
            <div class="tt-req-grid" style="margin-top:32px;">

                <div class="tt-req-card" style="border-left-color:var(--tt-pink);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">🏢</div>
                    <div>
                        <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">LLC activa en EE.UU.</h3>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">Empresa registrada en EE.UU. Wyoming o Florida recomendados.</p>
                    </div>
                </div>

                <div class="tt-req-card" style="border-left-color:var(--tt-cyan);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">🔢</div>
                    <div>
                        <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">EIN del IRS</h3>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">Número de identificación fiscal para tu empresa americana.</p>
                    </div>
                </div>

                <div class="tt-req-card" style="border-left-color:var(--t-yellow);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">🏦</div>
                    <div>
                        <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">Cuenta bancaria US</h3>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">Cuenta bancaria americana para recibir tus pagos de TikTok en dólares.</p>
                    </div>
                </div>

                <div class="tt-req-card" style="border-left-color:var(--tt-pink);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">📱</div>
                    <div>
                        <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">Cuenta TikTok Business</h3>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">Cuenta TikTok convertida a Business Account. No puedes usar una cuenta personal para vender.</p>
                    </div>
                </div>

                <div class="tt-req-card" style="border-left-color:var(--tt-cyan);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">📋</div>
                    <div>
                        <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;">
                            <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">W-9 / Información fiscal</h3>
                            <span style="background:#FFF0F3;color:var(--tt-pink);font-size:10px;font-weight:700;padding:3px 8px;border-radius:999px;letter-spacing:0.04em;">Exclusivo TikTok</span>
                        </div>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">TikTok reporta transacciones al IRS. Necesitas completar el W-9 con tu TIN (EIN o SSN).</p>
                    </div>
                </div>

                <div class="tt-req-card" style="border-left-color:var(--t-yellow);">
                    <div style="font-size:24px;line-height:1;flex-shrink:0;">📸</div>
                    <div>
                        <h3 style="font-family:'Poppins',sans-serif;font-weight:700;font-size:15px;line-height:1.3;color:var(--t-dark);margin:0;">Producto listo con imágenes</h3>
                        <p style="font-size:13px;line-height:1.55;color:#666;margin:6px 0 0;">Producto definido con proveedor o inventario, fotos en fondo blanco (mínimo 800×800 px).</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== QUOTE ===== --}}
    <section class="tt-section tt-section-dark" style="position:relative;overflow:hidden;">
        <div aria-hidden style="position:absolute;top:-100px;right:-80px;width:360px;height:360px;background:radial-gradient(circle,rgba(254,44,85,0.15),transparent 65%);pointer-events:none;"></div>
        <div class="tt-container" style="position:relative;">
            <div class="tt-quote-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">
                <div>
                    <div style="font-family:'Poppins',sans-serif;font-size:120px;font-weight:800;color:var(--tt-pink);opacity:0.3;line-height:0.7;margin-bottom:12px;">"</div>
                    <p style="font-family:'Poppins',sans-serif;font-weight:600;font-size:22px;line-height:1.55;color:#fff;font-style:italic;margin:0;max-width:520px;">
                        TikTok Shop no es solo un marketplace. Es el único canal donde el algoritmo trabaja para ti: un video viral puede generar $20,000 en ventas en 48 horas sin gastar un dólar en ads.
                    </p>
                    <div style="display:flex;align-items:center;gap:14px;margin-top:28px;">
                        <div style="width:56px;height:56px;border-radius:50%;background:var(--tt-pink);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:18px;flex-shrink:0;">SU</div>
                        <div>
                            <div style="font-weight:700;font-size:15px;color:var(--tt-pink);">Equipo Sell-U Marketplace</div>
                            <div style="font-size:12px;color:rgba(255,255,255,0.5);">Especialistas en Social Commerce EE.UU. desde LATAM</div>
                        </div>
                    </div>
                </div>
                <div class="tt-stats-grid">
                    <div class="tt-stat-dark-card">
                        <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:40px;line-height:1;letter-spacing:-0.03em;color:var(--tt-cyan);">17<span style="font-size:26px;">%</span></div>
                        <div style="font-size:13px;line-height:1.5;color:rgba(255,255,255,0.78);margin-top:12px;font-weight:500;">Menor costo por adquisición vs Instagram Shops</div>
                        <div style="font-size:11px;color:rgba(255,255,255,0.4);margin-top:6px;font-weight:500;">CommerceNext 2025</div>
                    </div>
                    <div class="tt-stat-dark-card">
                        <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:40px;line-height:1;letter-spacing:-0.03em;color:var(--tt-pink);">1<span style="font-size:26px;">h+</span></div>
                        <div style="font-size:13px;line-height:1.5;color:rgba(255,255,255,0.78);margin-top:12px;font-weight:500;">Tiempo diario promedio de usuarios US en TikTok</div>
                        <div style="font-size:11px;color:rgba(255,255,255,0.4);margin-top:6px;font-weight:500;">Sensor Tower</div>
                    </div>
                    <div class="tt-stat-dark-card">
                        <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:40px;line-height:1;letter-spacing:-0.03em;color:var(--t-yellow);">3<span style="font-size:26px;">%</span></div>
                        <div style="font-size:13px;line-height:1.5;color:rgba(255,255,255,0.78);margin-top:12px;font-weight:500;">Fee reducido para nuevos sellers</div>
                        <div style="font-size:11px;color:rgba(255,255,255,0.4);margin-top:6px;font-weight:500;">Primeros 30 días</div>
                    </div>
                    <div class="tt-stat-dark-card">
                        <div style="font-family:'Poppins',sans-serif;font-weight:800;font-size:40px;line-height:1;letter-spacing:-0.03em;color:#fff;">24<span style="font-size:26px;">/48h</span></div>
                        <div style="font-size:13px;line-height:1.5;color:rgba(255,255,255,0.78);margin-top:12px;font-weight:500;">Tiempo de aprobación de cuenta</div>
                        <div style="font-size:11px;color:rgba(255,255,255,0.4);margin-top:6px;font-weight:500;">TikTok Shop Seller</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== FINAL CTA ===== --}}
    <section class="tt-section" style="padding-top:120px;padding-bottom:120px;position:relative;overflow:hidden;background:#fff;">
        <div aria-hidden style="position:absolute;top:-40px;right:-60px;opacity:0.04;transform:rotate(8deg);pointer-events:none;">
            <svg width="520" height="680" viewBox="0 0 64 84">
                <path d="M 38 6 C 38 6, 46 22, 60 24 L 60 38 C 50 38, 42 34, 38 30 L 38 56 C 38 71, 25 80, 14 80 C 6 80, 0 73, 0 64 C 0 54, 8 47, 18 47 C 21 47, 23 47.5, 24 48 L 24 62 C 23 61, 21 60, 19 60 C 16 60, 13 62.5, 13 66 C 13 69, 16 71, 19 71 C 23 71, 26 68, 26 63 L 26 6 Z" fill="#010101"/>
            </svg>
        </div>
        <div class="tt-container" style="position:relative;text-align:center;">
            <div style="display:inline-flex;align-items:center;gap:8px;padding:6px 14px;background:rgba(254,44,85,0.10);border:1px solid rgba(254,44,85,0.25);color:var(--tt-pink);border-radius:999px;font-size:12px;font-weight:700;letter-spacing:0.06em;">
                <span class="tt-live-dot"></span>
                DISPONIBLE AHORA
            </div>
            <h2 class="tt-final-h2" style="font-family:'Poppins',sans-serif;font-weight:800;font-size:56px;line-height:1.1;letter-spacing:-0.025em;color:var(--t-dark);margin:24px 0 22px;">
                Tu tienda TikTok Shop,<br>lista para <span style="color:var(--tt-pink);">vender</span>.
            </h2>
            <p style="font-size:18px;line-height:1.6;color:#6b6f7a;margin:0 auto;max-width:640px;">
                Habla hoy con uno de nuestros especialistas en social commerce. Sin compromiso, en español, desde donde estés en LATAM.
            </p>
            <div style="margin-top:40px;display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20empezar%20a%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-yellow" style="padding:16px 28px;font-size:16px;">Empezar ahora →</a>
                <!--<a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20informaci%C3%B3n%20sobre%20vender%20en%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-pink" style="padding:16px 28px;font-size:16px;">▶ Vender en TikTok Shop</a>
                <a href="https://wa.me/573116473200?text=Hola%2C%20quiero%20hablar%20con%20un%20asesor%20sobre%20TikTok%20Shop" target="_blank" class="tt-btn tt-btn-od" style="padding:16px 28px;font-size:16px;">Hablar con un asesor</a>-->
            </div>
        </div>
    </section>

</div>{{-- /.tt-page --}}
<x-footer />

<script>
(function () {
    'use strict';

    /* 1 — Hero card: live viewer counter */
    var heroViewers = document.getElementById('tt-hero-viewers');
    if (heroViewers) {
        var hv = 247;
        setInterval(function () { hv += 1; heroViewers.textContent = hv.toLocaleString(); }, 3000);
    }

    /* 2 — Hero card: floating emoji reactions */
    var particleContainer = document.getElementById('tt-particles');
    if (particleContainer) {
        var HERO_EMOJIS = ['❤️','🛒','🔥','💛','👏','⭐','💰','🎯'];
        function spawnHeroParticle() {
            var span = document.createElement('span');
            span.className = 'tt-particle';
            var xOffset = (Math.random() - 0.5) * 140;
            var dur = 2.4 + Math.random() * 1.6;
            span.textContent = HERO_EMOJIS[Math.floor(Math.random() * HERO_EMOJIS.length)];
            span.style.setProperty('--x', xOffset + 'px');
            span.style.animationDuration = dur + 's';
            particleContainer.appendChild(span);
            setTimeout(function () { if (span.parentNode) span.parentNode.removeChild(span); }, dur * 1000 + 200);
        }
        setTimeout(spawnHeroParticle, 400);
        setInterval(spawnHeroParticle, 700);
    }

    /* 3 — Live mockup: viewer counter */
    var mockupViewers = document.getElementById('tt-mockup-viewers');
    if (mockupViewers) {
        var mv = 1247;
        setInterval(function () {
            mv += 1 + Math.floor(Math.random() * 3);
            mockupViewers.textContent = mv.toLocaleString();
        }, 2000);
    }

    /* 4 — Live mockup: reaction emojis */
    var mockupReactions = document.getElementById('tt-mockup-reactions');
    if (mockupReactions) {
        var MOCK_EMOJIS = ['💛','🔥','❤️','👏','⭐','🛒'];
        function spawnMockupReaction() {
            var span = document.createElement('span');
            span.className = 'tt-mockup-reaction';
            span.textContent = MOCK_EMOJIS[Math.floor(Math.random() * MOCK_EMOJIS.length)];
            span.style.right  = (16 + Math.random() * 50) + 'px';
            span.style.bottom = (Math.random() * 40) + 'px';
            mockupReactions.appendChild(span);
            setTimeout(function () { if (span.parentNode) span.parentNode.removeChild(span); }, 1800);
        }
        setInterval(spawnMockupReaction, 600);
    }

    /* 5 — CountUp animation for metric numbers */
    var counters = document.querySelectorAll('.tt-count');
    if (counters.length && 'IntersectionObserver' in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                if (el.dataset.done) return;
                el.dataset.done = '1';
                io.unobserve(el);
                var target   = parseFloat(el.dataset.target);
                var prefix   = el.dataset.prefix  || '';
                var suffix   = el.dataset.suffix   || '';
                var decimals = parseInt(el.dataset.decimals || '0', 10);
                var dur      = 1600;
                var t0       = performance.now();
                function tick(now) {
                    var t = Math.min(1, (now - t0) / dur);
                    var eased = 1 - Math.pow(1 - t, 3);
                    var val   = target * eased;
                    var fmt   = decimals > 0 ? val.toFixed(decimals) : String(Math.round(val));
                    el.textContent = prefix + fmt + suffix;
                    if (t < 1) { requestAnimationFrame(tick); }
                    else { el.textContent = prefix + (decimals > 0 ? target.toFixed(decimals) : String(Math.round(target))) + suffix; }
                }
                requestAnimationFrame(tick);
            });
        }, { threshold: 0.4 });
        counters.forEach(function (el) { io.observe(el); });
    }

    /* 6 — Service card hover top-border color */
    document.querySelectorAll('.tt-service-card').forEach(function (card) {
        var color = card.dataset.hc || '#FE2C55';
        card.addEventListener('mouseenter', function () { card.style.borderTopColor = color; });
        card.addEventListener('mouseleave', function () { card.style.borderTopColor = 'transparent'; });
    });

}());
</script>
</body>
</html>
