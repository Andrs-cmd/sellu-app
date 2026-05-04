<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
    <title>Elige tu estado para formar tu LLC — Sell·U</title>
    <meta name="description" content="Compara los 50 estados de EE.UU. para formar tu LLC. Delaware, Wyoming, Florida o Texas: conoce costos, privacidad e impuestos antes de decidir.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sellu.co/pages/cual-es-el-mejor-estado-para-formar-una-llc">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy:      #2e3856;
            --navy2:     #1a2340;
            --gold:      #F6BB33;
            --white:     #ffffff;
            --paper:     #fbfaf7;
            --paper-2:   #f5f3ee;
            --ink-900:   #15161a;
            --ink-700:   #3a3d46;
            --ink-500:   #6b6f7a;
            --ink-400:   #9298a3;
            --ink-300:   #c5c8d0;
            --ink-200:   #e5e6ea;
            --ink-100:   #f0f0f2;
            --blue-700:  #072ac8;
            --blue-500:  #3d5cdb;
            --blue-100:  #e6ecfb;
            --blue-50:   #f3f5fe;
            --accent-700:#c89320;
            --accent-500:#f6bb33;
            --accent-100:#fef5dd;
            --border:    var(--ink-200);
            --fg-primary: var(--navy);
            --fg-secondary: var(--ink-700);
            --fg-tertiary: var(--ink-500);
            --fg-muted:  var(--ink-400);
            --shadow-xs: 0 1px 2px rgba(46,56,86,0.04);
            --shadow-sm: 0 1px 3px rgba(46,56,86,0.06);
            --shadow-md: 0 4px 8px -2px rgba(46,56,86,0.08), 0 2px 4px -2px rgba(46,56,86,0.04);
            --ease-out:  cubic-bezier(0.16,1,0.3,1);
            --duration:  200ms;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { background: #EEF1F8 ; color: var(--fg-primary); font-family: 'Montserrat', sans-serif; -webkit-font-smoothing: antialiased; line-height: 1.6; }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; display: block; }

        /* PAGE WRAPPER */
        .page { max-width: 1200px; margin: 0 auto; padding: 48px 32px 96px; }

        /* SECTION HEADER */
        .section-header { max-width: 880px; margin-bottom: 40px; }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 11px; font-weight: 700; letter-spacing: 0.12em;
            text-transform: uppercase; color: var(--fg-tertiary);
            margin-bottom: 16px;
        }
        .eyebrow-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--gold); display: inline-block; }
        .page-h1 {
            font-size: clamp(32px, 4.4vw, 52px); line-height: 1.08;
            letter-spacing: -0.02em; font-weight: 800; color: var(--ink-900);
            margin-bottom: 16px;
        }
        .page-h1 .accent {
            background-image: linear-gradient(transparent 62%, rgba(246,187,51,0.45) 62%, rgba(246,187,51,0.45) 92%, transparent 92%);
            padding: 0 2px;
        }
        .lead-link {
            font-size: 15px; color: var(--fg-secondary);
            display: inline-flex; align-items: center; gap: 8px;
        }
        .lead-link a {
            color: var(--blue-700); font-weight: 600;
            border-bottom: 1px solid transparent; padding-bottom: 1px;
            transition: border-color var(--duration) var(--ease-out);
        }
        .lead-link a:hover { border-bottom-color: var(--blue-700); }

        /* FEATURED CARDS */
        .featured {
            display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px;
            margin-bottom: 32px;
        }
        .featured-card {
            background: var(--white); border: 1px solid var(--border);
            border-radius: 14px; padding: 20px 22px;
            display: flex; flex-direction: column; gap: 6px;
            transition: border-color var(--duration) var(--ease-out),
                        box-shadow var(--duration) var(--ease-out);
            cursor: pointer;
        }
        .featured-card:hover { border-color: var(--ink-300); box-shadow: var(--shadow-md); }
        .featured-card-row { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
        .featured-card-name { font-size: 18px; font-weight: 700; color: var(--ink-900); letter-spacing: -0.01em; }
        .featured-card-tag {
            font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em;
            color: var(--accent-700); background: var(--accent-100);
            padding: 4px 8px; border-radius: 999px; font-weight: 700; white-space: nowrap;
        }
        .featured-card-meta { font-size: 13px; color: var(--fg-tertiary); line-height: 1.4; }
        .featured-card-price { font-size: 12px; color: var(--ink-900); font-weight: 600; }

        /* HELPER BAR */
        .helper-bar {
            display: flex; align-items: center; justify-content: space-between; gap: 24px;
            padding: 16px 22px; background: var(--white);
            border: 1px solid var(--border); border-radius: 14px;
            box-shadow: var(--shadow-xs); margin-bottom: 24px;
        }
        .helper-bar-left { display: flex; align-items: center; gap: 10px; color: var(--fg-secondary); font-size: 14px; }
        .state-count {
            font-weight: 700; color: var(--ink-900);
            background: var(--paper-2); padding: 4px 10px;
            border-radius: 999px; font-size: 13px;
        }
        .search-box {
            display: flex; align-items: center; gap: 10px;
            background: var(--paper); border: 1px solid var(--border);
            border-radius: 10px; padding: 9px 14px; min-width: 280px;
            transition: border-color var(--duration) var(--ease-out),
                        box-shadow var(--duration) var(--ease-out);
        }
        .search-box:focus-within { border-color: var(--navy); box-shadow: 0 0 0 3px rgba(46,56,86,0.1); }
        .search-box svg { color: var(--fg-tertiary); flex-shrink: 0; }
        .search-box input {
            border: 0; outline: 0; background: transparent;
            font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 500;
            color: var(--fg-primary); width: 100%;
        }
        .search-box input::placeholder { color: var(--fg-muted); }

        /* STATES GRID */
        .states-grid {
            background: var(--white); border: 1px solid var(--border);
            border-radius: 14px; box-shadow: var(--shadow-sm);
            padding: 12px; display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 2px;
        }
        .state-link {
            display: flex; align-items: center; justify-content: space-between;
            padding: 14px 16px; border-radius: 10px;
            color: var(--ink-900); font-size: 15px; font-weight: 500; line-height: 1.3;
            border: 1px solid transparent;
            transition: background var(--duration) var(--ease-out),
                        border-color var(--duration) var(--ease-out),
                        color var(--duration) var(--ease-out);
        }
        .state-link .state-label { display: inline-flex; align-items: baseline; gap: 6px; }
        .state-link .state-suffix { color: var(--fg-tertiary); font-weight: 400; font-size: 12px; }
        .state-link .state-arrow {
            color: var(--fg-muted); opacity: 0; transform: translateX(-4px);
            transition: opacity var(--duration) var(--ease-out),
                        transform var(--duration) var(--ease-out);
            font-size: 14px;
        }
        .state-link:hover { background: var(--blue-50); border-color: var(--blue-100); color: var(--blue-700); }
        .state-link:hover .state-suffix { color: var(--blue-500); }
        .state-link:hover .state-arrow { opacity: 1; transform: translateX(0); color: var(--blue-700); }
        .state-pop-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: var(--accent-500); display: inline-block;
            margin-left: 6px; box-shadow: 0 0 0 3px var(--accent-100);
        }
        .states-empty {
            grid-column: 1/-1; padding: 48px; text-align: center;
            color: var(--fg-tertiary); font-size: 14px;
        }

        /* HELP BLOCK */
        .help-block {
            margin-top: 48px; background: var(--paper-2);
            border-radius: 20px; padding: 40px 48px;
            display: flex; align-items: center; justify-content: space-between;
            gap: 32px; border: 1px solid var(--ink-200);
        }
        .help-block h3 { font-size: 22px; font-weight: 800; color: var(--ink-900); margin-bottom: 8px; }
        .help-block p { color: var(--fg-secondary); font-size: 15px; max-width: 520px; line-height: 1.6; }
        .help-actions { display: flex; gap: 12px; flex-shrink: 0; flex-wrap: wrap; }
        .btn-outline-navy {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; border-radius: 10px;
            border: 1.5px solid var(--navy); color: var(--navy);
            font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 700;
            transition: background var(--duration), box-shadow var(--duration);
        }
        .btn-outline-navy:hover { background: var(--navy); color: var(--white); }
        .btn-navy-solid {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; border-radius: 10px;
            background: var(--navy); color: var(--white);
            font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 700;
            transition: background var(--duration), box-shadow var(--duration);
        }
        .btn-navy-solid:hover { background: var(--navy2); box-shadow: var(--shadow-md); }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .states-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .featured { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 720px) {
            .page { padding: 32px 20px 64px; }
            .helper-bar { flex-direction: column; align-items: stretch; gap: 12px; }
            .search-box { min-width: 0; }
            .states-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .help-block { flex-direction: column; align-items: flex-start; padding: 28px 24px; }
            .help-actions { width: 100%; }
            .help-actions a { flex: 1; justify-content: center; }
        }
        @media (max-width: 480px) {
            .states-grid { grid-template-columns: 1fr; }
            .featured { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<x-nav />

<main class="page">

    <div class="section-header">
        <div class="eyebrow"><span class="eyebrow-dot"></span> Paso 1 · Selección de estado</div>
        <h1 class="page-h1">
            Empieza a crear tu LLC:<br>
            elige tu <span class="accent">estado</span>.
        </h1>
        <p class="lead-link">
            <a href="#guia">¿Cuál es el mejor estado para formar una LLC?</a>
            <span aria-hidden="true">→</span>
        </p>
    </div>

    <!-- Estados destacados -->
    <div class="featured" aria-label="Estados más populares">
        <a class="featured-card" href="{{ url('/pages/crear-empresa-en-estados-unidos') }}?estado=DE">
            <div class="featured-card-row">
                <span class="featured-card-name">Delaware</span>
                <span class="featured-card-tag">Más popular</span>
            </div>
            <span class="featured-card-meta">El estándar para startups e inversión.</span>
            <span class="featured-card-price">Desde $199 USD + tasas</span>
        </a>
        <a class="featured-card" href="{{ url('/pages/crear-empresa-en-estados-unidos') }}?estado=WY">
            <div class="featured-card-row">
                <span class="featured-card-name">Wyoming</span>
                <span class="featured-card-tag">Bajo costo</span>
            </div>
            <span class="featured-card-meta">Ideal para freelancers y e-commerce.</span>
            <span class="featured-card-price">Desde $199 USD + tasas</span>
        </a>
        <a class="featured-card" href="{{ url('/pages/crear-llc-en-florida') }}">
            <div class="featured-card-row">
                <span class="featured-card-name">Florida</span>
                <span class="featured-card-tag">LATAM</span>
            </div>
            <span class="featured-card-meta">Operación local, banca cercana a LATAM.</span>
            <span class="featured-card-price">Desde $199 USD + tasas</span>
        </a>
        <a class="featured-card" href="{{ url('/pages/crear-empresa-en-estados-unidos') }}?estado=TX">
            <div class="featured-card-row">
                <span class="featured-card-name">Texas</span>
                <span class="featured-card-tag">Sin impuesto estatal</span>
            </div>
            <span class="featured-card-meta">Mercado grande, sin income tax estatal.</span>
            <span class="featured-card-price">Desde $199 USD + tasas</span>
        </a>
    </div>

    <!-- Barra de búsqueda -->
    <div class="helper-bar">
        <div class="helper-bar-left">
            <span class="state-count" id="state-count">50 estados</span>
            <span>Selecciona el estado donde quieres constituir tu empresa.</span>
        </div>
        <label class="search-box" aria-label="Buscar estado">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input id="state-search" type="search" placeholder="Buscar estado…" autocomplete="off">
        </label>
    </div>

    <!-- Grid de estados -->
    <div class="states-grid" id="states-grid" role="list"></div>

    <!-- Bloque de ayuda -->
    <section class="help-block" id="guia">
        <div>
            <h3>¿No estás seguro de qué estado elegir?</h3>
            <p>Te ayudamos a evaluar Delaware, Wyoming, Florida o tu estado de operación según tu modelo de negocio, residencia fiscal y planes de inversión.</p>
        </div>
        <div class="help-actions">
            <a class="btn-outline-navy" href="{{ url('/pages/crear-empresa-en-estados-unidos') }}">Ver planes</a>
            <a class="btn-navy-solid" href="https://wa.me/19542108455?text=Hola,%20necesito%20ayuda%20para%20elegir%20el%20estado%20de%20mi%20LLC" target="_blank" rel="noopener">
                Agenda una llamada →
            </a>
        </div>
    </section>

</main>

<x-footer />

<script>
    const STATES = [
        "Alabama","Alaska","Arizona","Arkansas","California","Carolina del Norte",
        "Carolina del Sur","Colorado","Connecticut","Dakota del Norte","Dakota del Sur",
        "Delaware","Florida","Georgia","Hawái","Idaho","Illinois","Indiana","Iowa",
        "Kansas","Kentucky","Luisiana","Maine","Maryland","Massachusetts","Míchigan",
        "Minnesota","Misisipi","Misuri","Montana","Nebraska","Nevada","Nueva Jersey",
        "Nueva York","Nuevo Hampshire","Nuevo México","Ohio","Oklahoma","Oregón",
        "Pensilvania","Rhode Island","Tennessee","Texas","Utah","Vermont","Virginia",
        "Virginia Occidental","Washington","Wisconsin","Wyoming"
    ];

    const STATE_CODES = {
        "Delaware":"DE","Wyoming":"WY","Texas":"TX",
        "California":"CA","Nueva York":"NY","Nevada":"NV","Colorado":"CO"
    };

    const STATE_URLS = {
        "Florida": "{{ url('/pages/crear-llc-en-florida') }}"
    };

    const POPULAR = new Set(["Delaware","Wyoming","Florida","Texas"]);

    const grid    = document.getElementById("states-grid");
    const countEl = document.getElementById("state-count");
    const search  = document.getElementById("state-search");

    function normalize(s) {
        return s.normalize("NFD").replace(/[̀-ͯ]/g,"").toLowerCase();
    }

    function render(filter) {
        const q = normalize(filter || "");
        const filtered = STATES.filter(s => normalize(s).includes(q));

        grid.innerHTML = "";

        if (filtered.length === 0) {
            const el = document.createElement("div");
            el.className = "states-empty";
            el.textContent = "No encontramos ese estado. Revisa la ortografía.";
            grid.appendChild(el);
        } else {
            filtered.forEach(name => {
                const code = STATE_CODES[name] || "";
                const url  = STATE_URLS[name] || ("{{ url('/pages/crear-empresa-en-estados-unidos') }}" + (code ? "?estado=" + code : ""));

                const a = document.createElement("a");
                a.href = url;
                a.className = "state-link";
                a.setAttribute("role","listitem");

                const label = document.createElement("span");
                label.className = "state-label";

                const nameSpan = document.createElement("span");
                nameSpan.textContent = name;
                label.appendChild(nameSpan);

                const suffix = document.createElement("span");
                suffix.className = "state-suffix";
                suffix.textContent = "LLC";
                label.appendChild(suffix);

                if (POPULAR.has(name)) {
                    const dot = document.createElement("span");
                    dot.className = "state-pop-dot";
                    dot.title = "Estado popular";
                    label.appendChild(dot);
                }

                const arrow = document.createElement("span");
                arrow.className = "state-arrow";
                arrow.setAttribute("aria-hidden","true");
                arrow.textContent = "→";

                a.appendChild(label);
                a.appendChild(arrow);
                grid.appendChild(a);
            });
        }

        countEl.textContent = filtered.length + " " + (filtered.length === 1 ? "estado" : "estados");
    }

    search.addEventListener("input", e => render(e.target.value));
    render();
</script>

</body>
</html>
