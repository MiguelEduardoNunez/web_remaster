<style>
    :root {
        --cn-yellow: #EAB205;
        --cn-yellow-light: #F5C51B;
        --cn-blue: #0D4489;
        --cn-blue-light: #0754A4;
        --cn-blue-dark: #06376F;
        --cn-white: #FFFFFF;

        /* Medidas centralizadas: cambiar aquí ajusta todo */
        --card-height: 280px;
        --card-radius: 28px;
        --mascot-width: 200px;
    }

    /* =========================================
       CONTENEDOR Y GRID
    ========================================= */

    .custom-services-container {
        padding: 3rem 0 4rem;
        margin: 2rem 0;
        background: transparent;
    }

    .custom-services-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 30px;
        width: 100%;
        align-items: stretch;
    }

    /* La 4ta card se centra solo cuando hay 3 columnas */
    .custom-services-grid .pqr-card-container {
        grid-column: 2;
    }

    /* =========================================
       ESTRUCTURA DE LA CARD
    ========================================= */

    .custom-service-card {
        width: 100%;
        height: var(--card-height);
        perspective: 1400px;
    }

    .custom-service-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: var(--card-radius);
    }

    /* Volteo por clase (lo usan tanto móvil como el fallback JS) */
    .custom-service-card.is-flipped .custom-service-card-inner {
        transform: rotateY(180deg);
    }

    /* Hover y teclado SOLO en dispositivos con puntero real.
       En táctil el :hover se queda "pegado" y bloquea el volteo. */
    @media (hover: hover) and (pointer: fine) {

        .custom-service-card:hover .custom-service-card-inner,
        .custom-service-card:focus-within .custom-service-card-inner {
            transform: rotateY(180deg);
        }

        .custom-service-card:hover .custom-service-card-front,
        .custom-service-card:hover .custom-service-card-back,
        .custom-service-card:focus-within .custom-service-card-front,
        .custom-service-card:focus-within .custom-service-card-back {
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.18);
        }

        .custom-service-card:hover .custom-service-icon-wrapper {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .custom-service-card:hover .custom-service-arrow {
            transform: translateX(5px);
            box-shadow: 0 9px 20px rgba(0, 0, 0, 0.18);
        }

        .custom-service-card:hover .custom-service-mascot {
            transform: translateY(-8px) rotate(2deg) scale(1.03);
        }

        .custom-service-button:hover {
            background: var(--cn-white);
            color: var(--cn-blue);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            text-decoration: none;
        }
    }

    .custom-service-card-front,
    .custom-service-card-back {
        position: absolute;
        inset: 0;
        border-radius: var(--card-radius);
        overflow: hidden;

        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        /* Fuerza capa propia: evita que la cara frontal se
           transparente sobre la trasera en Android/iOS */
        transform: translateZ(0);
        -webkit-transform: translateZ(0);

        display: flex;
        flex-direction: column;

        color: var(--cn-white);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10);
        transition: box-shadow 0.3s ease;
    }

    /* =========================================
       CARA FRONTAL
    ========================================= */

    .custom-service-card-front {
        justify-content: center;
        align-items: flex-start;
        padding: 2rem;
        background: linear-gradient(135deg, var(--cn-yellow-light) 0%, var(--cn-yellow) 100%);
    }

    .custom-service-card-front::before,
    .custom-service-card-front::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .custom-service-card-front::before {
        width: 220px;
        height: 220px;
        right: -80px;
        top: -80px;
        background: rgba(255, 255, 255, 0.10);
    }

    .custom-service-card-front::after {
        width: 180px;
        height: 180px;
        right: 90px;
        bottom: -120px;
        background: rgba(255, 255, 255, 0.08);
    }

    .service-blue .custom-service-card-front {
        background: linear-gradient(135deg, var(--cn-blue) 0%, var(--cn-blue-light) 100%);
    }

    .service-blue .custom-service-card-front::before {
        background: rgba(255, 255, 255, 0.08);
    }

    .service-blue .custom-service-card-front::after {
        background: rgba(255, 255, 255, 0.06);
    }

    /* =========================================
       CONTENIDO DEL FRENTE
    ========================================= */

    .custom-service-content {
        position: relative;
        z-index: 5;
        width: 100%;
        padding-right: 42%;

        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .custom-service-icon-wrapper {
        width: 66px;
        height: 66px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(255, 255, 255, 0.95);
        border-radius: 50%;
        margin-bottom: 1rem;

        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .custom-service-icon {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .icon-wompi {
        padding: 6px;
        border-radius: 50%;
    }

    .custom-service-title {
        position: relative;
        z-index: 5;
        margin: 0 0 0.5rem;

        font-size: 1.4rem;
        line-height: 1.2;
        font-weight: 700;
        color: var(--cn-white);

        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .custom-service-text {
        position: relative;
        z-index: 5;
        margin: 0;

        font-size: 0.93rem;
        line-height: 1.45;
        color: rgba(255, 255, 255, 0.95);
    }

    .custom-service-arrow {
        position: relative;
        z-index: 10;
        margin-top: 1.1rem;

        width: 40px;
        height: 40px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;
        background: var(--cn-white);
        color: var(--cn-blue);

        font-size: 1.2rem;
        font-weight: 700;
        line-height: 1;

        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* =========================================
       MASCOTAS
    ========================================= */

    .custom-service-mascot {
        position: absolute;
        z-index: 4;

        width: var(--mascot-width);
        height: auto;
        max-height: 88%;
        object-fit: contain;
        object-position: bottom right;

        right: -12px;
        bottom: -18px;

        filter: drop-shadow(0 12px 12px rgba(0, 0, 0, 0.18));
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
    }

    .mascot-wompi   { --mascot-width: 200px; }
    .mascot-bbva    { --mascot-width: 205px; }
    .mascot-soporte { --mascot-width: 210px; }
    .mascot-pqr     { --mascot-width: 205px; }

    /* =========================================
       CARA TRASERA
    ========================================= */

    .custom-service-card-back {
        transform: rotateY(180deg) translateZ(0);
        -webkit-transform: rotateY(180deg) translateZ(0);

        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2rem 1.75rem;
        gap: 0.75rem;

        background: linear-gradient(135deg, var(--cn-blue) 0%, var(--cn-blue-dark) 100%);
    }

    .service-blue .custom-service-card-back {
        background: linear-gradient(135deg, var(--cn-blue-dark) 0%, #052A57 100%);
    }

    .custom-service-card-back .custom-service-title {
        margin: 0;
        font-size: 1.3rem;
    }

    .custom-service-card-back .custom-service-text {
        max-width: 34ch;
        font-size: 0.9rem;
    }

    /* =========================================
       BOTONES
    ========================================= */

    .custom-service-actions {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
        width: 100%;
        margin-top: 0.25rem;
    }

    .custom-service-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        width: 100%;
        max-width: 230px;
        min-height: 42px;
        padding: 0.55rem 1.1rem;

        background: rgba(255, 255, 255, 0.14);
        color: var(--cn-white);
        border: 1px solid rgba(255, 255, 255, 0.35);
        border-radius: 50px;

        font-size: 0.9rem;
        font-weight: 600;
        line-height: 1.2;
        text-decoration: none;

        transition: background 0.3s ease, color 0.3s ease,
                    transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* El blur solo donde no rompe el render 3D */
    @media (hover: hover) and (pointer: fine) {
        .custom-service-button {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
        }
    }

    .custom-service-button:focus-visible {
        outline: 2px solid var(--cn-white);
        outline-offset: 3px;
    }

    .custom-service-button:active {
        background: var(--cn-white);
        color: var(--cn-blue);
    }

    /* =========================================
       TABLET — 2 columnas
    ========================================= */

    @media (max-width: 991px) {

        .custom-services-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        .custom-services-grid .pqr-card-container {
            grid-column: auto;
        }

        :root { --card-height: 320px; }

        .custom-service-content { padding-right: 40%; }
        .custom-service-title   { font-size: 1.28rem; }

        .mascot-wompi   { --mascot-width: 175px; }
        .mascot-bbva    { --mascot-width: 178px; }
        .mascot-soporte { --mascot-width: 182px; }
        .mascot-pqr     { --mascot-width: 178px; }
    }

    /* =========================================
       MÓVIL — 1 columna
    ========================================= */

    @media (max-width: 700px) {

        .custom-services-container { padding: 2rem 0 2.5rem; }

        .custom-services-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 20px;
        }

        /* Más alto que antes: la trasera necesita aire */
        :root { --card-height: 300px; }

        .custom-service-card-front { padding: 1.6rem; }
        .custom-service-content    { padding-right: 44%; }

        .custom-service-icon-wrapper {
            width: 56px;
            height: 56px;
            margin-bottom: 0.7rem;
        }

        .custom-service-icon { width: 34px; height: 34px; }

        .custom-service-title { font-size: 1.15rem; }
        .custom-service-text  { font-size: 0.85rem; }

        .custom-service-arrow {
            width: 34px;
            height: 34px;
            font-size: 1rem;
            margin-top: 0.9rem;
        }

        .mascot-wompi   { --mascot-width: 165px; }
        .mascot-bbva    { --mascot-width: 168px; }
        .mascot-soporte { --mascot-width: 172px; }
        .mascot-pqr     { --mascot-width: 168px; }

        /* --- Trasera en móvil --- */

        .custom-service-card-back {
            padding: 1.5rem 1.25rem;
            gap: 0.6rem;
            /* Red de seguridad si el texto crece */
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .custom-service-card-back .custom-service-title {
            font-size: 1.12rem;
        }

        .custom-service-card-back .custom-service-text {
            font-size: 0.84rem;
            line-height: 1.4;
            max-width: 30ch;
        }

        .custom-service-actions {
            gap: 0.45rem;
            margin-top: 0.1rem;
        }

        .custom-service-button {
            max-width: 100%;
            min-height: 44px;
            font-size: 0.86rem;
            padding: 0.5rem 0.9rem;
        }
    }

    @media (max-width: 420px) {

        :root { --card-height: 290px; }

        .custom-service-content { padding-right: 46%; }
        .custom-service-title   { font-size: 1.05rem; }
        .custom-service-text    { font-size: 0.8rem; }

        .custom-service-card-back { padding: 1.35rem 1.1rem; }

        .custom-service-card-back .custom-service-title { font-size: 1.05rem; }
        .custom-service-card-back .custom-service-text  {
            font-size: 0.8rem;
            max-width: 28ch;
        }

        .custom-service-button { font-size: 0.83rem; }

        .mascot-wompi,
        .mascot-bbva,
        .mascot-soporte,
        .mascot-pqr { --mascot-width: 140px; }
    }

    /* =========================================
       ACCESIBILIDAD: movimiento reducido
    ========================================= */

    @media (prefers-reduced-motion: reduce) {

        .custom-service-card-inner,
        .custom-service-mascot,
        .custom-service-icon-wrapper,
        .custom-service-arrow,
        .custom-service-button {
            transition: none !important;
        }
    }
</style>


<div class="custom-services-container">
    <div class="container">
        <div class="custom-services-grid">

            <!-- ============ WOMPI ============ -->
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="custom-service-card" tabindex="0">
                    <div class="custom-service-card-inner">

                        <div class="custom-service-card-front">
                            <div class="custom-service-content">
                                <div class="custom-service-icon-wrapper">
                                    <img src="{{ asset('images/Wompi.svg') }}"
                                         class="custom-service-icon icon-wompi"
                                         alt="Wompi">
                                </div>

                                <h3 class="custom-service-title">Pagos en línea con Wompi</h3>
                                <p class="custom-service-text">Paga rápido y seguro desde tu banco.</p>

                                <div class="custom-service-arrow" aria-hidden="true">→</div>
                            </div>

                            <img src="{{ asset('images/mascota_wompi.png') }}"
                                 class="custom-service-mascot mascot-wompi"
                                 alt="" aria-hidden="true">
                        </div>

                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Transacciones seguras</h3>
                            <p class="custom-service-text">
                                Paga por nuestra pasarela Wompi. Compatible con
                                Bancolombia, Nequi, PSE y otras entidades del país.
                            </p>

                            <div class="custom-service-actions">
                                <a href="https://clientes.colombianet.tech/saldo/sepcom-comunicaciones-sas/"
                                   class="custom-service-button"
                                   target="_blank" rel="noopener">
                                    Pagar con Wompi
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ============ BBVA ============ -->
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="custom-service-card service-blue" tabindex="0">
                    <div class="custom-service-card-inner">

                        <div class="custom-service-card-front">
                            <div class="custom-service-content">
                                <div class="custom-service-icon-wrapper">
                                    <img src="{{ asset('images/bbva.png') }}"
                                         class="custom-service-icon"
                                         alt="BBVA">
                                </div>

                                <h3 class="custom-service-title">Pagos por BBVA</h3>
                                <p class="custom-service-text">Paga tu factura desde tu cuenta BBVA.</p>

                                <div class="custom-service-arrow" aria-hidden="true">→</div>
                            </div>

                            <img src="{{ asset('images/mascota_bbva.png') }}"
                                 class="custom-service-mascot mascot-bbva"
                                 alt="" aria-hidden="true">
                        </div>

                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Pagos seguros</h3>
                            <p class="custom-service-text">
                                Paga tus servicios de forma fácil y segura
                                a través de la plataforma BBVA.
                            </p>

                            <div class="custom-service-actions">
                                <a href="https://www.zonapagos.com/t_colombianetysepcom/pagos.asp"
                                   class="custom-service-button"
                                   target="_blank" rel="noopener">
                                    Pagar con BBVA
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ============ SOPORTE ============ -->
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="custom-service-card" tabindex="0">
                    <div class="custom-service-card-inner">

                        <div class="custom-service-card-front">
                            <div class="custom-service-content">
                                <div class="custom-service-icon-wrapper">
                                    <img src="{{ asset('images/soporte_icon.png') }}"
                                         class="custom-service-icon"
                                         alt="Soporte técnico">
                                </div>

                                <h3 class="custom-service-title">Soporte técnico</h3>
                                <p class="custom-service-text">Asistencia disponible 24/7.</p>

                                <div class="custom-service-arrow" aria-hidden="true">→</div>
                            </div>

                            <img src="{{ asset('images/mascota_soporte.png') }}"
                                 class="custom-service-mascot mascot-soporte"
                                 alt="" aria-hidden="true">
                        </div>

                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Canales de soporte</h3>

                            <div class="custom-service-actions">
                                <a href="https://api.whatsapp.com/send?phone=573174327901"
                                   class="custom-service-button"
                                   target="_blank" rel="noopener">
                                    Nivel I Popayán
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=573174274601"
                                   class="custom-service-button"
                                   target="_blank" rel="noopener">
                                    Nivel I Guapi
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=573162697428"
                                   class="custom-service-button"
                                   target="_blank" rel="noopener">
                                    Nivel II NOC
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ============ PQR ============ -->
            <div class="pqr-card-container" data-aos="fade-up" data-aos-delay="300">
                <div class="custom-service-card service-blue" tabindex="0">
                    <div class="custom-service-card-inner">

                        <div class="custom-service-card-front">
                            <div class="custom-service-content">
                                <div class="custom-service-icon-wrapper">
                                    <img src="{{ asset('images/peticion_icon.png') }}"
                                         class="custom-service-icon"
                                         alt="PQRS">
                                </div>

                                <h3 class="custom-service-title">Atención PQRS</h3>
                                <p class="custom-service-text">Radica y haz seguimiento a tus solicitudes.</p>

                                <div class="custom-service-arrow" aria-hidden="true">→</div>
                            </div>

                            <img src="{{ asset('images/mascota_pqrs.png') }}"
                                 class="custom-service-mascot mascot-pqr"
                                 alt="" aria-hidden="true">
                        </div>

                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Sistema PQRS</h3>
                            <p class="custom-service-text">
                                Registra tus peticiones, quejas o reclamos
                                de manera fácil y rápida.
                            </p>

                            <div class="custom-service-actions">
                                <a href="/formulario-pqrs" class="custom-service-button">
                                    Crear PQRS
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- Volteo por toque en móviles (ahí no existe hover) --}}
<script>
    (function () {
        var isTouch = !window.matchMedia('(hover: hover) and (pointer: fine)').matches;
        if (!isTouch) return;

        var cards = document.querySelectorAll('.custom-service-card');

        cards.forEach(function (card) {
            card.addEventListener('click', function (e) {
                // Si tocó un enlace de la trasera, dejar que navegue
                if (e.target.closest('a')) return;

                var wasFlipped = card.classList.contains('is-flipped');

                // Cierra las demás para que no queden varias abiertas
                cards.forEach(function (c) { c.classList.remove('is-flipped'); });

                if (!wasFlipped) card.classList.add('is-flipped');
            });
        });
    })();
</script>