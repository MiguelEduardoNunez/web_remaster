<style>
    .services-section {
        position: relative;
        overflow: hidden;
    }

    @keyframes gradient-slide {
        0% {
            background-position: 100% 0;
        }

        100% {
            background-position: -100% 0;
        }
    }

    .services-header {
        text-align: center;
        margin-bottom: 1rem;
        position: relative;
    }

    .services-header h1 {
        color: #2d3748;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .services-header h3 {
        color: #282b30;
        font-size: 1.25rem;
        font-weight: 400;
        margin-bottom: 2rem;
    }

    .services-header h1::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #EAB205, #004499);
        border-radius: 2px;
    }

    .service-card {
        height: 400px;
        perspective: 2000px;
        margin-bottom: 30px;
    }

    .service-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        transform-style: preserve-3d;
        border-radius: 20px;
    }

    .service-card:hover .service-card-inner {
        transform: rotateY(180deg);
    }

    .card-front,
    .card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 20px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .card-front {
        /* background: linear-gradient(145deg, #ffffff, #f0f0f0); */
        background-color: #EAB205;
        border: 1px solid rgba(234, 178, 5, 0.2);
    }

    .card-front::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: #EAB205;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .service-card:hover .card-front::before {
        opacity: 1;
    }

    .card-back {
        background: linear-gradient(145deg, rgba(0, 68, 153, 0.95), rgba(0, 51, 115, 0.95));
        transform: rotateY(180deg);
        color: white;
    }

    .service-icon {
        width: 80px;
        height: 90px;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }

    .service-card:hover .service-icon {
        transform: scale(1.1);
    }

    .service-title {
        color: #2d3748;
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .service-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: #EAB205;
        border-radius: 1.5px;
    }

    .card-back .service-title {
        color: white;
    }

    .card-back .service-title::after {
        background: white;
    }

    .service-description {
        font-size: 1rem;
        line-height: 1.6;
        color: #000000;
        margin-bottom: 1.5rem;
    }

    .card-back .service-description {
        color: rgba(255, 255, 255, 0.9);
    }

    .service-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.1;
        object-fit: cover;
        z-index: -1;
    }

    @media (max-width: 768px) {
        .services-section {
            padding: 3rem 0;
        }

        .service-card {
            height: 350px;
        }

        .services-header h1 {
            font-size: 2rem;
        }

        .services-header h3 {
            font-size: 1.1rem;
        }

        .service-title {
            font-size: 1.25rem;
        }
    }
</style>

<section class="services-section">
    <div class="container">
        <div class="services-header">
            <h1>Nuestros Servicios</h1>
            <h3>Ofreciendo siempre la mejor calidad y tecnología</h3>
        </div>

        <div class="row g-4" id="servicio-isp">
            <!-- Servicio ISP -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio1.svg') }}" class="service-icon" alt="Servicio ISP">
                            <h3 class="service-title">Servicio de ISP</h3>
                            <p class="service-description">
                                Transmisión y tecnologías de acceso, xPON y punto a punto
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service1.jpeg') }}" class="service-background"
                                alt="Fondo ISP">
                            <h3 class="service-title">Conectividad Avanzada</h3>
                            <p class="service-description">
                                El servicio de ISP consta del acceso o conectividad a Internet mediante una red de
                                Routers interconectados con una salida internacional al backbone de Internet con fibra
                                óptica como medio de transmisión y tecnologías de acceso, xPON y punto a punto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio de Conmutación -->
            <div class="col-12 col-md-6 col-lg-4" id="conmutacion-datos">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio2.svg') }}" class="service-icon"
                                alt="Servicio de Conmutación">
                            <h3 class="service-title">Servicios de Conmutación y Datos</h3>
                            <p class="service-description">
                                Servicio de transporte de datos transparente de un punto a otro
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service2.jpeg') }}" class="service-background"
                                alt="Fondo Conmutación">
                            <h3 class="service-title">Transporte de Datos</h3>
                            <p class="service-description">
                                Colombianet ofrece el servicio de transporte de datos transparente de un punto a otro a
                                través de su red garantizando una capacidad simétrica disponible entre los extremos
                                donde se requiera la conectividad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio de TV por suscripción -->
            <div class="col-12 col-md-6 col-lg-4" id="servicio-tv">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio3.svg') }}" class="service-icon"
                                alt="Servicio de Conmutación">
                            <h3 class="service-title">Servicio de TV por suscripción</h3>
                            <p class="service-description">
                                Registro habilitante ante el ministerio TIC para prestar el servicio de televisión por
                                suscripción.
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service3.jpeg') }}" class="service-background"
                                alt="Fondo Conmutación">
                            <h3 class="service-title">Servicio de TV por suscripción</h3>
                            <p class="service-description">
                                Colombianet cuenta con registro habilitante ante el ministerio TIC para prestar el
                                servicio de televisión por suscripción. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicio de VoIP -->
            <div class="col-12 col-md-6 col-lg-4" id="servicio-voip">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio4.svg') }}" class="service-icon"
                                alt="Servicio de Conmutación">
                            <h3 class="service-title">Servicio de VoIP</h3>
                            <p class="service-description">
                                Ofrece la posibilidad de realizar llamadas a todo destino, nacional e internacional
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service1.jpeg') }}" class="service-background"
                                alt="Fondo Conmutación">
                            <h3 class="service-title">Servicio de VoIP</h3>
                            <p class="service-description">
                                Este servicio se encuentra en proceso de implementación, y se prestará sobre las redes
                                físicas ya existentes, este servicio ofrece la posibilidad de realizar llamadas a todo
                                destino, nacional e internacional, así como recepción de llamadas entrantes de cualquier
                                destino.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Servicios de Telecomunicaciones -->
            <div class="col-12 col-md-6 col-lg-4" id="telecomunicaciones">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio5.svg') }}" class="service-icon"
                                alt="Servicio de Conmutación">
                            <h3 class="service-title">Servicios de Telecomunicaciones</h3>
                            <p class="service-description">
                                Colombianet cuenta con un amplio conocimiento, experiencia y manejo en el sector de las
                                Telecomunicaciones en labores
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service2.jpeg') }}" class="service-background"
                                alt="Fondo Conmutación">
                            <h3 class="service-title">Servicios de Telecomunicaciones</h3>
                            <p class="service-description">
                                • Instalación, configuración, y mantenimiento de radioenlaces de microondas.
                            </p>
                            <p class="service-description">
                                • Instalación, configuración, y mantenimiento de estaciones satelitales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Construcción de Centros de Datos -->
            <div class="col-12 col-md-6 col-lg-4" id="construccion-datos">
                <div class="service-card">
                    <div class="service-card-inner">
                        <div class="card-front">
                            <img src="{{ asset('images/servicio6.svg') }}" class="service-icon"
                                alt="Servicio de Conmutación">
                            <h3 class="service-title">Construcción de Centros de Datos</h3>
                            <p class="service-description">
                                Planeación e implementación de la infraestructura física óptima para los centros de
                                datos.
                            </p>
                        </div>
                        <div class="card-back">
                            <img src="{{ asset('images/fondo_service3.jpeg') }}" class="service-background"
                                alt="Fondo Conmutación">
                            <h3 class="service-title">Construcción de Centros de Datos</h3>
                            <p class="service-description">
                                Colombianet ofrece servicio de planeación e implementación de la infraestructura física
                                óptima para los centros de datos, teniendo en cuenta factores como ventilación,
                                distribución eléctrica, iluminación, seguridad y conectividad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
