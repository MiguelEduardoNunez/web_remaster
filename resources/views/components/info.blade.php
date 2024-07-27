<style>
    .container {
        perspective: 1000px; /* Perspectiva para el efecto 3D */
    }

    .card {
        height: 32vh; /* Ajusta la altura de la card */
        border-radius: 8px;
        overflow: hidden; /*el contenido no se sobresalga */
        transition: transform 0.6s; /* Transición suave para el efecto 3D */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra a la tarjeta */
        border: none; /* Quita el borde de la tarjeta */
    }

    .card:hover .card-inner {
        transform: rotateY(180deg); /* Rotación de 180 grados al pasar el ratón */
    }

    .card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .card-front,
    .card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden; /* Oculta la parte trasera */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 15px; /* Ajusta el espaciado interno */
    }

    .card-front {
        background-color: #fff; /* Fondo blanco para la parte frontal */
    }

    .card-back {
        background-color: #FCBF00; /* Fondo amarillo para la parte trasera */
        color: #333; /* Color de texto para la parte trasera */
        transform: rotateY(180deg); /* Rota la parte trasera para que esté detrás de la frontal */
    }

    .card-img-top {
        width: 50%; /* Ajusta el tamaño de la imagen según tus necesidades */
        margin: 0 auto; /* Centra la imagen */
    }

    .btn-primary-custom {
        background-color: #004899; /* Color de fondo personalizado */
        color: white; /* Color del texto de los botones */
        transition: background-color 0.3s, color 0.3s; /* Transición para un efecto suave */
    }

    .btn-primary-custom:hover {
        background-color: #003366; /* Color de fondo al hacer hover */
        color: white; /* Color del texto al hacer hover */
    }

    @media (max-width: 767px) {
        .card {
            height: 27vh; /* Reduce la altura de la tarjeta en pantallas pequeñas */
        }

        .card-img-top {
            width: 35%; /* Ajusta el tamaño de la imagen en pantallas pequeñas */
        }

        .btn-primary-custom {
            height: auto; /* Ajusta la altura del botón */
            font-size: 14px; /* Tamaño de fuente del botón */
        }
    }
</style>

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="{{ asset('images/pse_icon.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paga tus facturas por PSE</h5>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="card-body">
                            <h5 class="card-title">Pagos inteligentes</h5>
                            <p class="card-text">Paga tus facturas por medios electrónicos como PSE</p>
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553" class="btn text-white btn-primary-custom" role="button" target="_blank">Ir a PSE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="{{ asset('images/soporte_icon.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Soporte Técnico</h5>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h5 class="card-title mb-3">Soporte Técnico</h5>
                            <a href="https://api.whatsapp.com/send?phone=573174327901" class="btn w-50 mb-2 text-white btn-primary-custom" role="button" target="_blank">Nivel 1 Popayán</a>
                            <a href="https://api.whatsapp.com/send?phone=573174274601" class="btn w-50 mb-2 text-white btn-primary-custom" role="button" target="_blank">Nivel 1 Guapi</a>
                            <a href="https://api.whatsapp.com/send?phone=573162697428" class="btn w-50 text-white btn-primary-custom" role="button" target="_blank">Nivel 2</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="{{ asset('images/peticion_icon.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Atención PQR</h5>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="card-body">
                            <h5 class="card-title">Atención PQR</h5>
                            <p class="card-text">Háganos sus peticiones quejas o reclamos</p>
                            <a href="#" class="btn text-white btn-primary-custom" role="button">Realizar PQRS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
