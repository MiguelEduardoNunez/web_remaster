<style>
    .container-servicios {
        background-color: #eab205;
        padding: 40px 30px 30px;
        text-align: center;
    }

    .container-servicios h5,
    .container-servicios h2 {
        color: #fff;
        margin-bottom: 20px;
    }

    .servicio-card {
        height: 100%;
        background-color: #eab205;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        margin-bottom: 20px;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .servicio-card:hover {
        transform: rotateX(180deg);
    }

    .servicio-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .card-front-services,
    .card-back-services {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
        box-sizing: border-box;
    }

    .card-front-services {
        background-color: #eab205;
        border-radius: 8px;
        border: 1px solid #504e4e;
        z-index: 2;
    }

    .card-back-services {
        border-radius: 8px;
        border: 1px solid #504e4e;
        height: 100%;
        color: #333;
        transform: rotateX(180deg);
    }

    .servicio-card-img-top {
        width: 15%;
        height: auto;
        margin-bottom: 20px;
    }

    .card-body {
        text-align: center;
        display: grid;
        align-items: center;
    }

    @media (max-width: 767px) {
        .servicio-card {
            height: 52vh;
            width: 100%;
            
        }
        .servicio-card-img-top {
        width: 30%;
        height: auto;
        margin-bottom: 20px;
        }
    }

    @media (min-width: 768px) {
        .servicio-card {
            height: 350px;
           
        }
        .servicio-card-img-top {
        width: 20%;
        height: auto;
        margin-bottom: 20px;
        }
    }

    @media (min-width: 992px) {
        .servicio-card {
            height: 45vh;
            width: 100%;
        }
    }
</style>

<div class="container-servicios" >
    <h5 class="text-black">Nuestros servicios</h5>
    <h2 class="text-black">Ofreciendo Siempre el mejor servicio</h2>

    <div class="container-servicios" id="nuestros-servicios">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-ISP">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio1.svg') }}" class="servicio-card-img-top" alt="Servicio 1">
                            <div class="card-body">
                                <h3 class="card-title">Servicio de ISP</h3>
                                <p class="card-text">Transmisión y tecnologías de acceso, xPON y punto a punto</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service1.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Pagos inteligentes</h5>
                                <p class="card-text text-white">El servicio de ISP consta del acceso o conectividad a Internet mediante una red de Routers interconectados con una salida internacional al backbone de Internet con fibra óptica como medio de transmisión y tecnologías de acceso, xPON y punto a punto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-CyD">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio2.svg') }}" class="servicio-card-img-top" alt="Servicio 2">
                            <div class="card-body">
                                <h3 class="card-title">Servicios de Conmutación y Datos</h3>
                                <p class="card-text">Servicio de transporte de datos transparente de un punto a otro a través de su red</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service2.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Servicios de Conmutación y Datos</h5>
                                <p class="card-text text-white">Colombianet ofrece el servicio de transporte de datos transparente de un punto a otro a través de su red garantizando una capacidad simétrica disponible entre los extremos donde se requiera la conectividad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-TV">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio3.svg') }}" class="servicio-card-img-top" alt="Servicio 3">
                            <div class="card-body">
                                <h3 class="card-title">Servicio de TV por suscripción</h3>
                                <p class="card-text">Registro habilitante ante el ministerio TIC para prestar el servicio de televisión por suscripción.</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service3.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Servicio de TV por suscripción</h5>
                                <p class="card-text text-white">Colombianet cuenta con registro habilitante ante el ministerio TIC para prestar el servicio de televisión por suscripción.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-VoIP">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio4.svg') }}" class="servicio-card-img-top" alt="Servicio 4">
                            <div class="card-body">
                                <h3 class="card-title">Servicio de VoIP</h3>
                                <p class="card-text">Ofrece la posibilidad de realizar llamadas a todo destino, nacional e internacional</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service1.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Servicio de VoIP</h5>
                                <p class="card-text text-white">Este servicio se encuentra en proceso de implementación, y se prestará sobre las redes físicas ya existentes, este servicio ofrece la posibilidad de realizar llamadas a todo destino, nacional e internacional, así como recepción de llamadas entrantes de cualquier destino</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-Telecomu">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio5.svg') }}" class="servicio-card-img-top" alt="Servicio 5">
                            <div class="card-body">
                                <h3 class="card-title">Servicios de Telecomunicaciones</h3>
                                <p class="card-text">Colombianet cuenta con un amplio conocimiento, experiencia y manejo en el sector de las Telecomunicaciones en labores</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service2.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Servicios de Telecomunicaciones</h5>
                                <p class="card-text text-white">• Instalación, configuración, y mantenimiento de radioenlaces de microondas.</p>
                                <p class="card-text text-white">• Instalación, configuración, y mantenimiento de estaciones satelitales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4" id="servicio-CentroDatos">
                <div class="servicio-card">
                    <div class="servicio-card-inner">
                        <div class="card-front-services">
                            <img src="{{ asset('images/servicio6.svg') }}" class="servicio-card-img-top" alt="Servicio 6">
                            <div class="card-body">
                                <h3 class="card-title">Construcción de Centros de Datos</h3>
                                <p class="card-text">Planeación e implementación de la infraestructura física óptima para los centros de datos.</p>
                            </div>
                        </div>
                        <div class="card-back-services" style="background: linear-gradient(rgba(12, 90, 219, 0.8),rgba(12, 90, 219, 0.8)),url('{{ asset('images/fondo_service3.jpeg') }}') center center no-repeat;background-size: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Construcción de Centros de Datos</h5>
                                <p class="card-text text-white">Colombianet ofrece servicio de planeación e implementación de la infraestructura física óptima para los centros de datos, teniendo en cuenta factores como ventilación, distribución eléctrica, iluminación, seguridad y conectividad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>