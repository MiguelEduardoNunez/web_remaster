<style>
    .custom-services-container {
        background-color: #F1F1F1;
        padding: 3rem 0;
        margin: 2rem 0;
    }

    .custom-service-card {
        height: 250px; /* Altura ajustada */
        perspective: 1000px;
        /* margin-bottom: 2rem; */
    }

    .custom-service-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        transform-style: preserve-3d;
        border-radius: 24px;
    }

    .custom-service-card-back .d-flex.flex-column {
        gap: 0.3rem; /* Espaciado reducido entre los botones */
    }

    .custom-service-card:hover .custom-service-card-inner {
        transform: rotateY(180deg);
    }

    .custom-service-card-front,
    .custom-service-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        background-size: 400% 400%;
        color: #FFFFFF;
    }

    .custom-service-card-front {
        background-color: #EAB205;
    }

    .custom-service-card-back {
        background-color: #0D4489;
        transform: rotateY(180deg);
    }

    .custom-service-icon {
        width: 80px; /* Tamaño más grande */
        height: 80px;
        margin-bottom: 0.5rem;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .custom-service-card:hover .custom-service-icon {
        transform: scale(1.1);
    }

    .custom-service-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    .custom-service-text {
        font-size: 0.85rem;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .custom-service-button {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        text-decoration: none;
        margin: 0.3rem;
        min-width: 120px;
        text-align: center;
        font-size: 0.9rem;
    }

    .custom-service-button:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
        color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .custom-service-card {
            height: 180px;
        }

        .custom-service-icon {
            width: 70px;
            height: 70px;
        }

        .custom-service-title {
            font-size: 0.9rem;
        }

        .custom-service-button {
            font-size: 0.8rem;
        }
    }
</style>

<div class="custom-services-container">
    <div class="container">
        <div class="row g-4">
            <!-- Tarjeta PSE -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="custom-service-card">
                    <div class="custom-service-card-inner">
                        <div class="custom-service-card-front">
                            <img src="{{ asset('images/pse_icon.svg') }}" class="custom-service-icon" alt="PSE">
                            <h3 class="custom-service-title">Pago PSE</h3>
                            <p class="custom-service-text">Realiza tus pagos de forma segura y rápida</p>
                        </div>
                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Pagos Seguros</h3>
                            <p class="custom-service-text">Utiliza nuestra plataforma PSE para realizar tus pagos de forma segura y eficiente</p>
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553"
                                class="custom-service-button" target="_blank">
                                Pagar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Soporte -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="custom-service-card">
                    <div class="custom-service-card-inner">
                        <div class="custom-service-card-front">
                            <img src="{{ asset('images/soporte_icon.png') }}" class="custom-service-icon" alt="Soporte">
                            <h3 class="custom-service-title">Soporte Técnico</h3>
                            <p class="custom-service-text">Asistencia profesional 24/7</p>
                        </div>
                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Canales de Soporte</h3>
                            <div class="d-flex flex-column w-100">
                                <a href="https://api.whatsapp.com/send?phone=573174327901" class="custom-service-button" target="_blank">
                                    Nivel I Popayán
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=573174274601" class="custom-service-button" target="_blank">
                                    Nivel I Guapi
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=573162697428" class="custom-service-button" target="_blank">
                                    Nivel II NOC
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta PQR -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="custom-service-card">
                    <div class="custom-service-card-inner">
                        <div class="custom-service-card-front">
                            <img src="{{ asset('images/peticion_icon.png') }}" class="custom-service-icon" alt="PQR">
                            <h3 class="custom-service-title">Atención PQR</h3>
                            <p class="custom-service-text">Gestiona tus solicitudes</p>
                        </div>
                        <div class="custom-service-card-back">
                            <h3 class="custom-service-title">Sistema PQR</h3>
                            <p class="custom-service-text">Realiza tus peticiones, quejas o reclamos de manera fácil y rápida</p>
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
