<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
    <link rel="apple-touch-icon" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
    <title>Política de Privacidad — Sell·U LATAM LLC</title>
    <meta name="description" content="Política de privacidad de Sell-U Latam. Conoce cómo recopilamos, usamos y protegemos tu información personal.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://sellu.co/pages/politica-de-privacidad">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:  #0D1B3E; --navy2: #122050;
            --gold:  #F5A623; --white: #FFFFFF;
            --gray:  #F5F6FA; --gray2: #E8EAF0;
            --text:  #333A50; --muted: #6B7394;
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Montserrat', sans-serif; color: var(--text); background: #EEF1F8; -webkit-font-smoothing: antialiased; }
        a { text-decoration: none; color: inherit; }

        .t-hero { background: var(--navy); padding: 48px 5% 40px; text-align: center; }
        .t-hero-eyebrow { display: inline-block; font-size: 11px; font-weight: 800; color: var(--gold); letter-spacing: .12em; text-transform: uppercase; margin-bottom: 14px; }
        .t-hero h1 { font-size: clamp(24px, 3vw, 36px); font-weight: 900; color: var(--white); line-height: 1.2; margin-bottom: 10px; }
        .t-hero-date { font-size: 13px; color: rgba(255,255,255,.5); }

        .t-wrap { max-width: 860px; margin: 0 auto; padding: 56px 20px 72px; }
        .t-intro { background: var(--white); border: 1px solid var(--gray2); border-radius: 12px; padding: 28px 32px; font-size: 14px; line-height: 1.8; color: var(--text); margin-bottom: 32px; }
        .t-intro p + p { margin-top: 12px; }

        .t-section { background: var(--white); border: 1px solid var(--gray2); border-radius: 12px; padding: 28px 32px; margin-bottom: 16px; }
        .t-section h2 { font-size: 16px; font-weight: 800; color: var(--navy); margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid var(--gold); display: inline-block; }
        .t-section h3 { font-size: 14px; font-weight: 700; color: var(--navy); margin: 16px 0 8px; }
        .t-section p { font-size: 14px; line-height: 1.8; color: var(--text); margin-bottom: 12px; }
        .t-section p:last-child { margin-bottom: 0; }
        .t-section ul { padding-left: 20px; margin: 8px 0 12px; }
        .t-section ul li { font-size: 14px; line-height: 1.8; color: var(--text); margin-bottom: 6px; }
        .t-section ul li::marker { color: var(--gold); }

        /* Tabla categorías */
        .t-table { width: 100%; border-collapse: collapse; margin-top: 16px; font-size: 13px; }
        .t-table th { background: var(--navy); color: var(--white); padding: 12px 16px; text-align: left; font-weight: 700; }
        .t-table td { padding: 12px 16px; border-bottom: 1px solid var(--gray2); vertical-align: top; line-height: 1.7; }
        .t-table tr:last-child td { border-bottom: none; }
        .t-table tr:nth-child(even) td { background: var(--gray); }

        .t-contact { background: var(--navy); border-radius: 12px; padding: 28px 32px; margin-top: 32px; }
        .t-contact h2 { font-size: 16px; font-weight: 800; color: var(--gold); margin-bottom: 12px; }
        .t-contact p { font-size: 14px; color: rgba(255,255,255,.75); line-height: 1.8; }
        .t-contact a { color: var(--gold); font-weight: 600; }

        .footer { background: var(--white); border-top: 1px solid var(--gray2); padding: 56px 5% 0; }
        .footer-inner { max-width: 1100px; margin: 0 auto; }
        .footer-top { display: grid; grid-template-columns: 1.4fr 1fr 1fr; gap: 60px; margin-bottom: 48px; }
        .footer-logo { display: block; margin-bottom: 16px; }
        .footer-logo img { height: 40px; width: auto; }
        .footer-brand-title { font-size: 13px; font-weight: 700; color: var(--navy); margin-bottom: 12px; }
        .footer-brand-info { font-size: 13px; color: var(--muted); line-height: 1.9; }
        .footer-brand-info a { color: var(--navy); font-weight: 600; }
        .footer-col-title { font-size: 12px; font-weight: 800; color: var(--navy); text-transform: uppercase; letter-spacing: .08em; margin-bottom: 18px; }
        .footer-col a { display: block; font-size: 13px; color: var(--muted); margin-bottom: 10px; transition: color .2s; }
        .footer-col a:hover { color: var(--navy); }
        .footer-payments { border-top: 1px solid var(--gray2); padding: 24px 0; display: flex; justify-content: flex-end; flex-wrap: wrap; gap: 8px; }
        .pay-badge { display: inline-flex; align-items: center; justify-content: center; height: 28px; padding: 0 10px; border: 1px solid var(--gray2); border-radius: 4px; font-size: 10px; font-weight: 700; color: var(--muted); background: var(--white); }
        .footer-bottom { border-top: 1px solid var(--gray2); padding: 24px 0; text-align: center; }
        .footer-made { font-size: 11px; font-weight: 800; color: var(--navy); text-transform: uppercase; letter-spacing: .1em; margin-bottom: 12px; }
        .footer-legal-text { font-size: 12px; color: var(--muted); line-height: 1.7; max-width: 680px; margin: 0 auto; }

        @media (max-width: 768px) {
            .t-section, .t-intro { padding: 22px 20px; }
            .t-table { font-size: 12px; }
            .t-table th, .t-table td { padding: 10px 12px; }
            .footer-top { grid-template-columns: 1fr; gap: 32px; }
            .footer-payments { justify-content: center; }
        }
    </style>
</head>
<body>

<x-nav />

<section class="t-hero">
    <span class="t-hero-eyebrow">Documentos legales</span>
    <h1>Política de Privacidad</h1>
    <p class="t-hero-date">Última actualización: 9 de febrero de 2024</p>
</section>

<div class="t-wrap">

    <div class="t-intro">
        <p>Esta Política de privacidad describe cómo <strong>Sell-U Latam</strong> (en adelante, el "Sitio", "nosotros" o "nuestro") recopila, utiliza y divulga su información personal al visitar o utilizar nuestros servicios, al realizar una compra en <strong>sellu.co</strong> o al comunicarse con nosotros de cualquier otra manera con respecto al Sitio. A los efectos de la presente Política de privacidad, los términos "usted" y "su" hacen referencia a usted como usuario de los Servicios, ya sea en calidad de cliente, visitante del sitio web o como cualquier otro individuo cuya información hayamos recopilado de conformidad con la presente Política de privacidad.</p>
        <p>Lea atentamente la presente Política de privacidad. Al utilizar y acceder a cualquiera de los Servicios, usted acepta que se recopile, use y divulga su información tal como se describe en la presente Política de privacidad. Si no está de acuerdo con esta Política de privacidad, no utilice ni acceda a ninguno de los Servicios.</p>
    </div>

    <div class="t-section">
        <h2>Cambios en la presente Política de privacidad</h2>
        <p>Esta Política de privacidad se podrá actualizar puntualmente para reflejar cambios en nuestras prácticas o por cualesquiera otras razones operativas, legales o normativas. Publicaremos la Política de privacidad revisada en el Sitio, actualizaremos la fecha de "Última actualización" y tomaremos cualquier otra medida que pueda exigir la ley aplicable.</p>
    </div>

    <div class="t-section">
        <h2>Recopilación y utilización de su información personal</h2>
        <p>Para prestar los Servicios, recopilamos información personal sobre usted de una variedad de fuentes, como se indica a continuación. La información que recopilamos y utilizamos varía en función de cómo interactúa con nosotros.</p>
        <p>Además de los usos específicos que se establecen a continuación, podremos usar la información que recopilamos para comunicarnos con usted, proporcionarle o mejorar los Servicios, cumplir con cualquier obligación legal aplicable, hacer cumplir los términos de servicio aplicables y proteger o defender los Servicios, nuestros derechos, los de nuestros usuarios y los de otros.</p>
    </div>

    <div class="t-section">
        <h2>Información personal que recopilamos</h2>
        <p>Los tipos de información personal que obtenemos sobre usted dependen de cómo interactúa con nuestro Sitio y cómo utiliza nuestros Servicios. Las secciones siguientes describen las categorías y tipos específicos de información personal que recopilamos.</p>

        <h3>Información que recopilamos directamente de usted</h3>
        <p>La información que nos envía directamente a través de nuestros Servicios puede incluir lo siguiente:</p>
        <ul>
            <li><strong>Detalles de contacto:</strong> incluye su nombre, dirección, número de teléfono y correo electrónico.</li>
            <li><strong>Información del pedido:</strong> incluye su nombre, dirección de facturación, dirección de envío, confirmación de pago, dirección de correo electrónico y número de teléfono.</li>
            <li><strong>Información de la cuenta:</strong> incluye su nombre de usuario, contraseña, preguntas de seguridad y otra información utilizada con fines de seguridad de la cuenta.</li>
            <li><strong>Información de atención al cliente:</strong> incluye la información que usted elige incluir en las comunicaciones con nosotros.</li>
        </ul>
        <p>Algunas características de los Servicios pueden requerir que nos proporcione directamente cierta información sobre usted. Puede optar por no proporcionar estos datos; sin embargo, ello puede impedirle usar o acceder a estas funciones.</p>

        <h3>Información que recopilamos sobre su uso</h3>
        <p>También podemos recopilar automáticamente cierta información sobre su interacción con los Servicios ("Datos de uso"). Para ello, podemos utilizar cookies, píxeles y tecnologías similares. Los Datos de uso pueden incluir información sobre cómo accede y utiliza nuestro Sitio y su cuenta, incluida información del dispositivo, información del navegador, información sobre su conexión de red, su dirección IP y otra información sobre su interacción con los Servicios.</p>

        <h3>Información que obtenemos de terceros</h3>
        <p>Por último, podemos obtener información sobre usted de terceros, entre los que se incluyen:</p>
        <ul>
            <li>Empresas que respaldan nuestro Sitio y Servicios, como Shopify.</li>
            <li>Nuestros procesadores de pagos, que recopilan información de pago para procesar su pago y preparar sus pedidos.</li>
            <li>Tecnologías de seguimiento online como píxeles, balizas web, kits de desarrolladores de software, bibliotecas externas y cookies.</li>
        </ul>
        <p>Toda información que obtengamos de terceros se tratará de conformidad con la presente Política de privacidad.</p>
    </div>

    <div class="t-section">
        <h2>Utilización de su información personal</h2>
        <ul>
            <li><strong>Prestación de servicios y productos.</strong> Usamos su información personal para prestarle los Servicios, lo que incluye el procesamiento de sus pagos, la preparación de los pedidos, el envío de notificaciones relacionadas con su cuenta y otras transacciones.</li>
            <li><strong>Marketing y publicidad.</strong> Podemos utilizar su información personal con fines promocionales y de marketing, como el envío de comunicaciones por correo electrónico, mensaje de texto o correo postal.</li>
            <li><strong>Seguridad y prevención de fraude.</strong> Utilizamos su información personal para detectar, investigar o tomar medidas respecto a posibles actividades fraudulentas, ilegales o maliciosas.</li>
            <li><strong>Comunicaciones y mejora del servicio.</strong> Utilizamos su información personal para prestarle servicios de atención al cliente y mejorar nuestros Servicios.</li>
        </ul>
    </div>

    <div class="t-section">
        <h2>Cookies</h2>
        <p>Al igual que ocurre con muchos otros sitios web, nuestro Sitio también utiliza cookies. Usamos Cookies para operar y mejorar nuestro Sitio y nuestros Servicios, así como para realizar informes y estadísticas y comprender mejor la interacción del usuario con los Servicios.</p>
        <p>La mayoría de los navegadores aceptan las Cookies automáticamente de forma predeterminada, pero usted puede optar por configurar su navegador para que elimine o rechace las cookies. Tenga en cuenta que eliminar o bloquear las Cookies puede afectar negativamente a su experiencia de usuario y puede hacer que algunos de los Servicios funcionen de manera incorrecta o dejen de estar disponibles.</p>
    </div>

    <div class="t-section">
        <h2>Divulgación de su información personal</h2>
        <p>En determinadas circunstancias, podemos divulgar su información personal a terceros. Tales circunstancias pueden incluir las siguientes:</p>
        <ul>
            <li>Con proveedores u otros terceros que prestan servicios en nuestro nombre (gestión de TI, procesamiento de pagos, atención al cliente, almacenamiento en la nube).</li>
            <li>Con socios comerciales y de marketing para mostrarle publicidad y prestarle servicios.</li>
            <li>Cuando usted indica, solicita o consiente de cualquier otro modo que divulguemos cierta información a terceros.</li>
            <li>Con nuestros afiliados en el ámbito de nuestro grupo empresarial.</li>
            <li>En relación con transacciones comerciales o para cumplir con las obligaciones legales aplicables.</li>
        </ul>

        <table class="t-table">
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Categorías de destinatarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Identificadores como detalles básicos de contacto e información específica de pedidos y cuentas. Información comercial, como datos de pedidos e información de atención al cliente. Internet u otra actividad de red similar, como datos de uso. Datos de geolocalización.</td>
                    <td>Proveedores y terceros que prestan servicios en nuestro nombre (proveedores de servicios de Internet, procesadores de pagos, socios de cumplimiento, socios de atención al cliente). Socios comerciales y de marketing. Afiliados.</td>
                </tr>
            </tbody>
        </table>
        <p style="margin-top:14px;">No utilizamos ni divulgamos información personal confidencial sin su consentimiento o con el propósito de deducir características sobre usted.</p>
    </div>

    <div class="t-section">
        <h2>Sitios web y enlaces de terceros</h2>
        <p>Nuestro Sitio puede proporcionar enlaces a sitios web u otras plataformas online operadas por terceros. Si sigue enlaces a sitios no afiliados o que no están bajo nuestro control, debe revisar sus políticas de privacidad y seguridad, así como otros términos y condiciones. No garantizamos ni somos responsables de la privacidad o seguridad de dichos sitios.</p>
    </div>

    <div class="t-section">
        <h2>Datos de niños</h2>
        <p>Los Servicios no están destinados al uso por parte de niños, por lo que no recopilamos de manera intencionada ninguna información personal sobre niños. Si usted es padre o tutor de un niño que nos ha proporcionado su información personal, puede comunicarse con nosotros para solicitar su eliminación.</p>
        <p>A la fecha de entrada en vigor de la presente Política de privacidad, no tenemos conocimiento real de que "compartamos" o "vendamos" información personal de menores de 16 años.</p>
    </div>

    <div class="t-section">
        <h2>Seguridad y retención de su información</h2>
        <p>Tenga en cuenta que ninguna medida de seguridad es perfecta o impenetrable, por lo que no podemos garantizar una "seguridad perfecta". Recomendamos que no utilice canales inseguros para comunicar información sensible o confidencial.</p>
        <p>El tiempo de conservación de su información personal depende de diferentes factores, como si necesitamos la información para mantener su cuenta, prestar los Servicios, cumplir con obligaciones legales, resolver disputas o hacer cumplir otros contratos y políticas aplicables.</p>
    </div>

    <div class="t-section">
        <h2>Sus derechos</h2>
        <p>Dependiendo de dónde viva, es posible que tenga algunos o todos los derechos que se enumeran a continuación con respecto a su información personal:</p>
        <ul>
            <li><strong>Derecho de acceso/conocimiento:</strong> Solicitar acceso a la información personal que tenemos sobre usted.</li>
            <li><strong>Derecho de eliminación:</strong> Solicitar la eliminación de la información personal que conservamos sobre usted.</li>
            <li><strong>Derecho de corrección:</strong> Solicitar la corrección de la información personal errónea que conservamos sobre usted.</li>
            <li><strong>Derecho de portabilidad:</strong> Recibir una copia de la información personal que conservamos sobre usted.</li>
            <li><strong>Restricción de procesamiento:</strong> Solicitar que detengamos o restrinjamos el procesamiento de la información personal.</li>
            <li><strong>Revocación del consentimiento:</strong> Retirar el consentimiento para el procesamiento de su información personal.</li>
            <li><strong>Apelación:</strong> Apelar nuestra decisión si nos negamos a procesar su solicitud.</li>
            <li><strong>Gestión de las preferencias de comunicación:</strong> Darse de baja de correos electrónicos promocionales en cualquier momento.</li>
        </ul>
        <p>Puede ejercer cualquiera de estos derechos poniéndose en contacto con nosotros mediante los detalles de contacto que se proporcionan a continuación.</p>
    </div>

    <div class="t-section">
        <h2>Reclamaciones</h2>
        <p>Si tiene alguna reclamación sobre cómo procesamos su información personal, póngase en contacto con nosotros a través de los detalles de contacto que se proporcionan a continuación. Si no está satisfecho con la respuesta proporcionada, dependiendo de dónde viva, puede tener derecho a apelar nuestra decisión o a presentar su reclamación ante la autoridad local competente en materia de protección de datos.</p>
    </div>

    <div class="t-section">
        <h2>Usuarios internacionales</h2>
        <p>Tenga en cuenta que podemos transferir, almacenar y procesar su información personal fuera del país en el que vive. Su información personal también se procesará con personal y proveedores de servicios de terceros y socios de dichos países.</p>
        <p>Si transferimos su información personal fuera de Europa, utilizaremos mecanismos de transferencia reconocidos, como las Cláusulas Contractuales Estándar de la Comisión Europea o cualquier contrato equivalente emitido por la autoridad competente del Reino Unido, según corresponda.</p>
    </div>

    <div class="t-contact">
        <h2>Contacto</h2>
        <p>Si tiene alguna pregunta sobre nuestras prácticas de privacidad o sobre la presente Política de privacidad, o bien si desea ejercer cualquiera de sus derechos, puede contactarnos:</p>
        <br>
        <p>Correo electrónico: <a href="mailto:support@sellu.co">support@sellu.co</a><br>
        Teléfono: <a href="tel:+19542105455">+1 954 210 8455</a></p>
    </div>

</div>

<footer class="footer">
    <div class="footer-inner">
        <div class="footer-top">
            <div>
                <a href="{{ url('/') }}" class="footer-logo">
                    <img src="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_2.png?v=1737756196" alt="Sell·U">
                </a>
                <p class="footer-brand-title">Oficina Principal Estados Unidos</p>
                <div class="footer-brand-info">
                    Ubicación: Spring Hill, Florida, Zipcode 34609<br>
                    Email: <a href="mailto:contacto@sellu.co">contacto@sellu.co</a><br>
                    Teléfono: +1 954 210 8455<br>
                    Horario de atención:<br>
                    Lunes – Sábado: 9:00 am – 6:00 pm EST
                </div>
            </div>
            <div class="footer-col">
                <p class="footer-col-title">Menú Principal</p>
                <a href="{{ url('/pages/crear-empresa-en-estados-unidos') }}">Abre tu empresa</a>
                <a href="{{ url('/pages/contabilidad') }}">Contabilidad</a>
                <a href="{{ url('/pages/apertura-marketplace') }}">Vende en Amazon</a>
                <a href="{{ url('/pages/registro-de-marca-ante-la-uspto') }}">Registro de marca</a>
                <a href="{{ url('/pages/almacenamiento-y-logistica') }}">Envíos</a>
                <a href="{{ url('/pages/registro-fda-de-alimentos') }}">Registro Sanitario</a>
                <a href="{{ url('/pages/canales-de-atencion') }}">Soporte</a>
            </div>
            <div class="footer-col">
                <p class="footer-col-title">Información Legal</p>
                <a href="{{ url('/pages/terminos-de-servicio') }}">Términos de Servicio</a>
                <a href="{{ url('/pages/politica-de-privacidad') }}" style="color:var(--gold);font-weight:700;">Política de privacidad</a>
                <a href="#">Política de Garantía</a>
            </div>
        </div>
        <div class="footer-payments">
            <span class="pay-badge">AMEX</span>
            <span class="pay-badge">Apple Pay</span>
            <span class="pay-badge">Diners</span>
            <span class="pay-badge">Discover</span>
            <span class="pay-badge">Google Pay</span>
            <span class="pay-badge">Mastercard</span>
            <span class="pay-badge">PayPal</span>
            <span class="pay-badge">Shop Pay</span>
            <span class="pay-badge">Venmo</span>
            <span class="pay-badge">Visa</span>
        </div>
        <div class="footer-bottom">
            <p class="footer-made">Hecho con ♥ por el equipo de Sell-U LATAM LLC</p>
            <p class="footer-legal-text">
                © {{ date('Y') }} Empresa registrada en el estado de Florida, EE.UU. EIN: 84-3781816.
                Este sitio tiene fines informativos y no constituye asesoría legal o fiscal directa.
                Trabajamos con profesionales aliados debidamente autorizados.
            </p>
        </div>
    </div>
</footer>

</body>
</html>
