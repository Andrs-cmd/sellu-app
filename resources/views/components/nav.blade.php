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
        <a href="{{ url('/abre-empresa') }}" class="nav-item {{ request()->is('abre-empresa') ? 'active' : '' }}">Abre tu empresa</a>
        <a href="{{ url('/contabilidad') }}" class="nav-item {{ request()->is('contabilidad') ? 'active' : '' }}">Contabilidad</a>
        <a href="{{ url('/amazon') }}" class="nav-item {{ request()->is('amazon') ? 'active' : '' }}">Vende en Amazon</a>
        <a href="{{ url('/marca') }}" class="nav-item {{ request()->is('marca') ? 'active' : '' }}">Registro de marca</a>
        <a href="{{ url('/envios') }}" class="nav-item {{ request()->is('envios') ? 'active' : '' }}">Envíos</a>
        <a href="{{ url('/sanitario') }}" class="nav-item {{ request()->is('sanitario') ? 'active' : '' }}">Registro sanitario</a>
        <a href="{{ url('/soporte') }}" class="nav-item {{ request()->is('soporte') ? 'active' : '' }}">Soporte</a>
    </nav>

    {{-- Menú móvil desplegable --}}
    <nav class="nav-mobile-menu" id="navMobileMenu">
        <a href="{{ url('/abre-empresa') }}" class="mobile-item {{ request()->is('abre-empresa') ? 'active' : '' }}">Abre tu empresa</a>
        <a href="{{ url('/contabilidad') }}" class="mobile-item {{ request()->is('contabilidad') ? 'active' : '' }}">Contabilidad</a>
        <a href="{{ url('/amazon') }}" class="mobile-item {{ request()->is('amazon') ? 'active' : '' }}">Vende en Amazon</a>
        <a href="{{ url('/marca') }}" class="mobile-item {{ request()->is('marca') ? 'active' : '' }}">Registro de marca</a>
        <a href="{{ url('/envios') }}" class="mobile-item {{ request()->is('envios') ? 'active' : '' }}">Envíos</a>
        <a href="{{ url('/sanitario') }}" class="mobile-item {{ request()->is('sanitario') ? 'active' : '' }}">Registro sanitario</a>
        <a href="{{ url('/soporte') }}" class="mobile-item {{ request()->is('soporte') ? 'active' : '' }}">Soporte</a>
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
</script>