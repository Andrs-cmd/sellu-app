<style>
.sellu-footer { background: #fff; border-top: 1px solid #E8EAF0; padding: 56px 5% 0; }
.sellu-footer-inner { max-width: 1100px; margin: 0 auto; }
.sellu-footer-top { display: grid; grid-template-columns: 1.4fr 1fr 1fr; gap: 60px; margin-bottom: 48px; }
.sellu-footer-logo { display: block; margin-bottom: 16px; }
.sellu-footer-logo img { height: 40px; width: auto; }
.sellu-footer-brand-title { font-size: 13px; font-weight: 700; color: #0D1B3E; margin-bottom: 12px; }
.sellu-footer-brand-info { font-size: 13px; color: #6b6f7a; line-height: 1.9; }
.sellu-footer-brand-info a { color: #0D1B3E; font-weight: 600; text-decoration: none; }
.sellu-footer-col-title { font-size: 12px; font-weight: 800; color: #0D1B3E; text-transform: uppercase; letter-spacing: .08em; margin-bottom: 18px; }
.sellu-footer-col a { display: block; font-size: 13px; color: #6b6f7a; margin-bottom: 10px; text-decoration: none; transition: color .2s; }
.sellu-footer-col a:hover { color: #0D1B3E; }
.sellu-footer-payments { border-top: 1px solid #E8EAF0; padding: 24px 0; display: flex; justify-content: flex-end; flex-wrap: wrap; gap: 8px; }
.sellu-pay-badge { display: inline-flex; align-items: center; justify-content: center; height: 28px; padding: 0 10px; border: 1px solid #E8EAF0; border-radius: 4px; font-size: 10px; font-weight: 700; color: #6b6f7a; background: #fff; }
.sellu-footer-bottom { border-top: 1px solid #E8EAF0; padding: 24px 0; text-align: center; }
.sellu-footer-made { font-size: 11px; font-weight: 800; color: #0D1B3E; text-transform: uppercase; letter-spacing: .1em; margin-bottom: 12px; }
.sellu-footer-legal { font-size: 12px; color: #6b6f7a; line-height: 1.7; max-width: 680px; margin: 0 auto; }
@media (max-width: 768px) {
    .sellu-footer-top { grid-template-columns: 1fr; gap: 32px; }
    .sellu-footer-payments { justify-content: center; }
}
</style>

<footer class="sellu-footer">
    <div class="sellu-footer-inner">
        <div class="sellu-footer-top">
            <div>
                <a href="{{ url('/') }}" class="sellu-footer-logo">
                    <img src="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_2.png?v=1737756196" alt="Sell·U">
                </a>
                <p class="sellu-footer-brand-title">Oficina Principal Estados Unidos</p>
                <div class="sellu-footer-brand-info">
                    Ubicación: Spring Hill, Florida, Zipcode 34609<br>
                    Email: <a href="mailto:contacto@sellu.co">contacto@sellu.co</a><br>
                    Teléfono: +1 954 210 8455<br>
                    Horario de atención:<br>
                    Lunes – Sábado: 9:00 am – 6:00 pm EST
                </div>
            </div>
            <div class="sellu-footer-col">
                <p class="sellu-footer-col-title">Menú Principal</p>
                <a href="{{ url('/pages/crear-empresa-en-estados-unidos') }}">Abre tu empresa</a>
                <a href="{{ url('/pages/contabilidad') }}">Contabilidad</a>
                <a href="{{ url('/pages/apertura-marketplace') }}">Vende en Amazon</a>
                <a href="{{ url('/pages/registro-de-marca-ante-la-uspto') }}">Registro de marca</a>
                <a href="{{ url('/pages/almacenamiento-y-logistica') }}">Envíos</a>
                <a href="{{ url('/pages/registro-fda-de-alimentos') }}">Registro Sanitario</a>
                <a href="{{ url('/pages/canales-de-atencion') }}">Soporte</a>
            </div>
            <div class="sellu-footer-col">
                <p class="sellu-footer-col-title">Información Legal</p>
                <a href="{{ url('/pages/terminos-de-servicio') }}">Términos de Servicio</a>
                <a href="{{ url('/pages/politica-de-privacidad') }}">Política de privacidad</a>
                <a href="{{ url('/pages/politica-de-garantia') }}">Política de Garantía</a>
            </div>
        </div>
        <div class="sellu-footer-payments">
            <span class="sellu-pay-badge">AMEX</span>
            <span class="sellu-pay-badge">Apple Pay</span>
            <span class="sellu-pay-badge">Diners</span>
            <span class="sellu-pay-badge">Discover</span>
            <span class="sellu-pay-badge">Google Pay</span>
            <span class="sellu-pay-badge">Mastercard</span>
            <span class="sellu-pay-badge">PayPal</span>
            <span class="sellu-pay-badge">Shop Pay</span>
            <span class="sellu-pay-badge">Venmo</span>
            <span class="sellu-pay-badge">Visa</span>
        </div>
        <div class="sellu-footer-bottom">
            <p class="sellu-footer-made">Hecho con ♥ por el equipo de Sell-U LATAM LLC</p>
            <p class="sellu-footer-legal">
                © {{ date('Y') }} Empresa registrada en el estado de Florida, EE.UU. EIN: 84-3781816.
                Este sitio tiene fines informativos y no constituye asesoría legal o fiscal directa.
                Trabajamos con profesionales aliados debidamente autorizados.
            </p>
        </div>
    </div>
</footer>
