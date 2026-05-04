<div class="topbar">
    <div class="topbar-left"><strong style="color:var(--gold)">Tu aliado</strong> para operar, vender y crecer</div>
    <div class="topbar-right">
    <a href="https://facebook.com" target="_blank" aria-label="Facebook">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.6)" style="display:block;transition:fill .2s" onmouseover="this.style.fill='white'" onmouseout="this.style.fill='rgba(255,255,255,.6)'">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
        </svg>
    </a>
    <a href="https://instagram.com" target="_blank" aria-label="Instagram">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.6)" stroke-width="2" style="display:block;transition:stroke .2s" onmouseover="this.style.stroke='white'" onmouseout="this.style.stroke='rgba(255,255,255,.6)'">
            <rect x="2" y="2" width="20" height="20" rx="5"/>
            <circle cx="12" cy="12" r="4"/>
            <circle cx="17.5" cy="6.5" r="1.5" fill="rgba(255,255,255,.6)" stroke="none"/>
        </svg>
    </a>
</div>
</div>

<header class="nav-header">
    {{-- FILA 1: Logo centrado --}}
    <div class="nav-logo-row">
        <a href="{{ url('/') }}" class="nav-logo-link">
            <img src="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_2.png?v=1737756196"
                 alt="Sell·U"
                 style="height:44px;width:auto;display:block;object-fit:contain">
        </a>
        {{-- Hamburger (solo móvil) --}}
        <button class="nav-hamburger" id="navHamburger" aria-label="Abrir menú" onclick="toggleMobileNav()">
            <span></span><span></span><span></span>
        </button>

        {{-- Botones auth en esquina derecha de la fila del logo --}}
        <div class="nav-auth">
            @auth
                <a href="{{ route('dashboard') }}" class="nav-auth-btn outline">Mi panel</a>
                @if(auth()->user()->isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="nav-auth-btn solid">Admin</a>
                @endif
            @else
                <a href="{{ route('login') }}" class="nav-auth-btn ghost">Ingresar</a>
                <a href="{{ route('register') }}" class="nav-auth-btn solid">Empezar</a>
            @endauth
        </div>
    </div>

    {{-- FILA 2: Menú centrado (desktop) --}}
    <nav class="nav-menu-row">
        <a href="{{ url('/pages/crear-empresa-en-estados-unidos') }}" class="nav-item {{ request()->is('pages/crear-empresa-en-estados-unidos') ? 'active' : '' }}">Abre tu empresa</a>
        <div class="nav-dropdown {{ request()->is('pages/contabilidad') ? 'active' : '' }}">
            <a href="{{ url('/pages/contabilidad') }}" class="nav-item nav-dropdown-trigger {{ request()->is('pages/contabilidad') ? 'active' : '' }}">
                Contabilidad
                <svg class="nav-chevron" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="nav-submenu">
                <a href="{{ url('/pages/contabilidad') }}#bookkeeping" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M3 2h7l3 3v9H3V2z" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/><path d="M10 2v3h3" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round"/><path d="M5 8h6M5 11h4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    Bookkeeping
                </a>
                <a href="{{ url('/pages/contabilidad') }}#impuestos" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><rect x="2" y="2" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6M5 5.5h2M9 10.5h2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    Presentación de impuestos
                </a>
                <a href="{{ url('/pages/contabilidad') }}#itin" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="6" r="3" stroke="currentColor" stroke-width="1.2"/><path d="M2 14c0-3 2.686-5 6-5s6 2 6 5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    ITIN Number
                </a>
                <a href="{{ url('/pages/contabilidad') }}#revendedor" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M2 4h12v9a1 1 0 01-1 1H3a1 1 0 01-1-1V4z" stroke="currentColor" stroke-width="1.2"/><path d="M5 4V3a3 3 0 016 0v1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    Certificado de revendedor
                </a>
            </div>
        </div>
        <div class="nav-dropdown {{ request()->is('pages/apertura-marketplace') ? 'active' : '' }}">
            <a href="{{ url('/pages/apertura-marketplace') }}" class="nav-item nav-dropdown-trigger {{ request()->is('pages/apertura-marketplace') ? 'active' : '' }}">
                Vende en Marketplace
                <svg class="nav-chevron" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
            <div class="nav-submenu">
                <a href="{{ url('/pages/apertura-marketplace') }}" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><circle cx="8" cy="8" r="6" stroke="currentColor" stroke-width="1.2"/><path d="M5 8h6M8 5v6" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    Amazon
                </a>
                <a href="{{ url('/pages/apertura-marketplace') }}#walmart" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M8 2v12M2 8h12" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><circle cx="8" cy="8" r="2" stroke="currentColor" stroke-width="1.2"/></svg>
                    Walmart
                </a>
                <a href="{{ url('/pages/apertura-marketplace') }}#tiktok" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M10 2a3 3 0 003 3" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/><path d="M13 5v1a6 6 0 01-3-1v5a4 4 0 11-4-4h1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    TikTok
                </a>
                <a href="{{ url('/pages/apertura-marketplace') }}#faire" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><rect x="2" y="4" width="12" height="9" rx="1.5" stroke="currentColor" stroke-width="1.2"/><path d="M5 4V3a3 3 0 016 0v1" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
                    Faire
                </a>
                <a href="{{ url('/pages/apertura-marketplace') }}#cisco" class="nav-subitem">
                    <svg viewBox="0 0 16 16" fill="none"><path d="M2 8c0-3.314 2.686-6 6-6s6 2.686 6 6-2.686 6-6 6-6-2.686-6-6z" stroke="currentColor" stroke-width="1.2"/><path d="M8 5v3l2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Cisco
                </a>
            </div>
        </div>
        <a href="{{ url('/pages/registro-de-marca-ante-la-uspto') }}" class="nav-item {{ request()->is('pages/registro-de-marca-ante-la-uspto') ? 'active' : '' }}">Registro de marca</a>
        <a href="{{ url('/pages/almacenamiento-y-logistica') }}" class="nav-item {{ request()->is('pages/almacenamiento-y-logistica') ? 'active' : '' }}">Envíos</a>
        <a href="{{ url('/pages/registro-fda-de-alimentos') }}" class="nav-item {{ request()->is('pages/registro-fda-de-alimentos') ? 'active' : '' }}">Registro sanitario</a>
        <a href="{{ url('/pages/canales-de-atencion') }}" class="nav-item {{ request()->is('pages/canales-de-atencion') ? 'active' : '' }}">Soporte</a>
    </nav>

    {{-- Menú móvil desplegable --}}
    <nav class="nav-mobile-menu" id="navMobileMenu">
        <a href="{{ url('/pages/crear-empresa-en-estados-unidos') }}" class="mobile-item {{ request()->is('pages/crear-empresa-en-estados-unidos') ? 'active' : '' }}">Abre tu empresa</a>
        <div class="mobile-accordion {{ request()->is('pages/contabilidad') ? 'open' : '' }}">
            <button class="mobile-item mobile-accordion-trigger" onclick="toggleAccordion(this)">
                Contabilidad
                <svg class="mobile-chevron" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="mobile-subitems">
                <a href="{{ url('/pages/contabilidad') }}#bookkeeping" class="mobile-subitem">Bookkeeping</a>
                <a href="{{ url('/pages/contabilidad') }}#impuestos" class="mobile-subitem">Presentación de impuestos</a>
                <a href="{{ url('/pages/contabilidad') }}#itin" class="mobile-subitem">ITIN Number</a>
                <a href="{{ url('/pages/contabilidad') }}#revendedor" class="mobile-subitem">Certificado de revendedor</a>
            </div>
        </div>
        <div class="mobile-accordion {{ request()->is('pages/apertura-marketplace') ? 'open' : '' }}">
            <button class="mobile-item mobile-accordion-trigger" onclick="toggleAccordion(this)">
                Vende en Marketplace
                <svg class="mobile-chevron" viewBox="0 0 12 12" fill="none"><path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="mobile-subitems">
                <a href="{{ url('/pages/apertura-marketplace') }}" class="mobile-subitem">Amazon</a>
                <a href="{{ url('/pages/apertura-marketplace') }}#walmart" class="mobile-subitem">Walmart</a>
                <a href="{{ url('/pages/apertura-marketplace') }}#tiktok" class="mobile-subitem">TikTok</a>
                <a href="{{ url('/pages/apertura-marketplace') }}#faire" class="mobile-subitem">Faire</a>
                <a href="{{ url('/pages/apertura-marketplace') }}#cisco" class="mobile-subitem">Cisco</a>
            </div>
        </div>
        <a href="{{ url('/pages/registro-de-marca-ante-la-uspto') }}" class="mobile-item {{ request()->is('pages/registro-de-marca-ante-la-uspto') ? 'active' : '' }}">Registro de marca</a>
        <a href="{{ url('/pages/almacenamiento-y-logistica') }}" class="mobile-item {{ request()->is('pages/almacenamiento-y-logistica') ? 'active' : '' }}">Envíos</a>
        <a href="{{ url('/pages/registro-fda-de-alimentos') }}" class="mobile-item {{ request()->is('pages/registro-fda-de-alimentos') ? 'active' : '' }}">Registro sanitario</a>
        <a href="{{ url('/pages/canales-de-atencion') }}" class="mobile-item {{ request()->is('pages/canales-de-atencion') ? 'active' : '' }}">Soporte</a>
        <div class="mobile-auth">
            @auth
                <a href="{{ route('dashboard') }}" class="mobile-auth-btn outline">Mi panel</a>
            @else
                <a href="{{ route('login') }}" class="mobile-auth-btn ghost">Ingresar</a>
                <a href="{{ route('register') }}" class="mobile-auth-btn solid">Empezar</a>
            @endauth
        </div>
    </nav>
</header>

<style>
.topbar { background: var(--navy2, #122050); padding: 7px 5%; display: flex; justify-content: space-between; align-items: center; }
.topbar-left { font-size: 12px; color: rgba(255,255,255,.6); }
.topbar-right { display: flex; gap: 14px; }
.topbar-right a { color: rgba(255,255,255,.6); font-size: 13px; text-decoration: none; transition: color .2s; }
.topbar-right a:hover { color: #fff; }

.nav-header { background: #fff; border-bottom: 1px solid #E8EAF0; position: sticky; top: 0; z-index: 100; }

/* FILA LOGO */
.nav-logo-row { display: flex; align-items: center; justify-content: center; padding: 14px 5%; position: relative; border-bottom: 1px solid #E8EAF0; }
.nav-logo-link { display: flex; align-items: center; }
.nav-auth { position: absolute; right: 5%; display: flex; align-items: center; gap: 8px; }
.nav-auth-btn { font-family: 'Montserrat', sans-serif; font-size: 12px; font-weight: 700; padding: 7px 16px; border-radius: 6px; text-decoration: none; transition: all .2s; white-space: nowrap; }
.nav-auth-btn.ghost { color: var(--navy, #0D1B3E); background: transparent; border: none; }
.nav-auth-btn.ghost:hover { color: var(--gold, #F5A623); }
.nav-auth-btn.outline { color: var(--navy, #0D1B3E); background: transparent; border: 1.5px solid #E8EAF0; }
.nav-auth-btn.outline:hover { border-color: var(--navy, #0D1B3E); }
.nav-auth-btn.solid { color: var(--navy, #0D1B3E); background: var(--gold, #F5A623); border: none; }
.nav-auth-btn.solid:hover { background: var(--gold2, #E09415); }

/* FILA MENÚ */
.nav-menu-row { display: flex; align-items: center; justify-content: center; gap: 0; padding: 0 5%; }
.nav-item { padding: 0 16px; height: 44px; display: flex; align-items: center; font-size: 12px; font-weight: 700; color: #333A50; border-bottom: 3px solid transparent; text-decoration: none; transition: all .2s; white-space: nowrap; text-transform: uppercase; letter-spacing: .03em; }
.nav-item:hover { color: var(--navy, #0D1B3E); border-bottom-color: var(--gold, #F5A623); }
.nav-item.active { color: var(--gold, #F5A623); border-bottom-color: var(--gold, #F5A623); }

/* ── DROPDOWN CONTABILIDAD ── */
.nav-dropdown { position: relative; display: flex; align-items: center; }
.nav-dropdown-trigger { display: flex; align-items: center; gap: 5px; }
.nav-chevron { width: 10px; height: 10px; transition: transform .2s; flex-shrink: 0; }
.nav-dropdown:hover .nav-chevron { transform: rotate(180deg); }

.nav-submenu {
    position: absolute; top: calc(100% + 1px); left: 50%; transform: translateX(-50%);
    background: #fff; border: 1px solid #E8EAF0; border-radius: 12px;
    box-shadow: 0 8px 24px rgba(13,27,62,0.10); padding: 8px;
    min-width: 220px; z-index: 200;
    opacity: 0; visibility: hidden; pointer-events: none;
    transform: translateX(-50%) translateY(6px);
    transition: opacity .18s, transform .18s, visibility .18s;
}
.nav-dropdown:hover .nav-submenu {
    opacity: 1; visibility: visible; pointer-events: auto;
    transform: translateX(-50%) translateY(0);
}
.nav-subitem {
    display: flex; align-items: center; gap: 10px;
    padding: 9px 12px; border-radius: 8px;
    font-size: 12px; font-weight: 600; color: #333A50;
    text-decoration: none; text-transform: uppercase; letter-spacing: .03em;
    transition: background .15s, color .15s; white-space: nowrap;
}
.nav-subitem svg { width: 15px; height: 15px; flex-shrink: 0; color: #9299ad; transition: color .15s; }
.nav-subitem:hover { background: #F6F7FB; color: #0D1B3E; }
.nav-subitem:hover svg { color: #F5A623; }

/* ── HAMBURGER ── */
.nav-hamburger {
    display: none; flex-direction: column; justify-content: center; gap: 5px;
    width: 36px; height: 36px; background: none; border: none; cursor: pointer;
    position: absolute; left: 5%; padding: 4px;
}
.nav-hamburger span {
    display: block; height: 2px; background: #0D1B3E;
    border-radius: 2px; transition: transform .25s, opacity .25s;
}
.nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-hamburger.open span:nth-child(2) { opacity: 0; }
.nav-hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ── MOBILE MENU ── */
.nav-mobile-menu {
    display: none; flex-direction: column;
    background: #fff; border-top: 1px solid #E8EAF0;
    padding: 8px 0 16px;
}
.nav-mobile-menu.open { display: flex; }
.mobile-item {
    padding: 14px 5%; font-size: 13px; font-weight: 700; color: #333A50;
    text-decoration: none; text-transform: uppercase; letter-spacing: .04em;
    border-left: 3px solid transparent; transition: color .2s, border-color .2s;
}
.mobile-item:hover, .mobile-item.active { color: #0D1B3E; border-left-color: #F5A623; }
/* ── MÓVIL ACORDEÓN CONTABILIDAD ── */
.mobile-accordion-trigger {
    width: 100%; display: flex; align-items: center; justify-content: space-between;
    background: none; border: none; cursor: pointer; text-align: left;
    padding: 14px 5%; font-size: 13px; font-weight: 700; color: #333A50;
    text-transform: uppercase; letter-spacing: .04em;
    border-left: 3px solid transparent; transition: color .2s, border-color .2s;
}
.mobile-accordion-trigger:hover,
.mobile-accordion.open .mobile-accordion-trigger { color: #0D1B3E; border-left-color: #F5A623; }
.mobile-chevron { width: 12px; height: 12px; flex-shrink: 0; transition: transform .2s; }
.mobile-accordion.open .mobile-chevron { transform: rotate(180deg); }

.mobile-subitems { display: none; flex-direction: column; background: #F6F7FB; }
.mobile-accordion.open .mobile-subitems { display: flex; }
.mobile-subitem {
    padding: 11px 5% 11px calc(5% + 20px);
    font-size: 12px; font-weight: 600; color: #5b607d;
    text-decoration: none; text-transform: uppercase; letter-spacing: .04em;
    border-left: 3px solid transparent; transition: color .2s, border-color .2s;
}
.mobile-subitem:hover { color: #0D1B3E; border-left-color: #F5A623; }

.mobile-auth {
    display: flex; gap: 10px; padding: 16px 5% 4px;
    border-top: 1px solid #E8EAF0; margin-top: 8px;
}
.mobile-auth-btn {
    flex: 1; text-align: center; font-family: 'Montserrat', sans-serif;
    font-size: 12px; font-weight: 700; padding: 10px 16px; border-radius: 6px;
    text-decoration: none; transition: all .2s;
}
.mobile-auth-btn.ghost { color: #0D1B3E; border: 1.5px solid #E8EAF0; }
.mobile-auth-btn.ghost:hover { border-color: #0D1B3E; }
.mobile-auth-btn.solid { color: #0D1B3E; background: #F5A623; }
.mobile-auth-btn.solid:hover { background: #E09415; }
.mobile-auth-btn.outline { color: #0D1B3E; border: 1.5px solid #E8EAF0; }

@media (max-width: 900px) {
    .nav-menu-row { display: none; }
    .nav-logo-row { padding: 12px 5%; }
    .nav-hamburger { display: flex; }
    .nav-auth { display: none; }
}
</style>

<script>
function toggleMobileNav() {
    const menu = document.getElementById('navMobileMenu');
    const btn  = document.getElementById('navHamburger');
    menu.classList.toggle('open');
    btn.classList.toggle('open');
}
function toggleAccordion(btn) {
    btn.closest('.mobile-accordion').classList.toggle('open');
}
</script>