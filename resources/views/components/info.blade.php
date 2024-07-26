<style>
    .container {
        perspective: 1000px;
        /* Perspectiva para el efecto 3D */
    }

    .card {
        position: relative;
        width: 100%;
        height: 30vh;
        /* Ajusta la altura automáticamente según el contenido */
        border-radius: 8px;
        overflow: hidden;
        /* Asegura que el contenido no sobresalga */
        transition: transform 0.6s;
        /* Transición suave para el efecto 3D */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        /*sombra a la tarjeta */
        border: none;
        /* Quita el borde de la tarjeta */
    }

    .card:hover .card-inner {
        transform: rotateY(180deg);
        /* Rotación de 180 grados al pasar el ratón */
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
        backface-visibility: hidden;
        /* Oculta la parte trasera cuando está oculta */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 15px;
        /* Ajusta el espaciado interno */
    }

    .card-front {
        background-color: #fff;
        /* Fondo blanco para la parte frontal */
    }

    .card-back {
        background-color: #FCBF00;
        /* Fondo gris claro para la parte trasera */
        color: #333;
        /* Color de texto para la parte trasera */
        transform: rotateY(180deg);
        /* Rota la parte trasera para que esté detrás de la frontal */
    }

    .card-img-top {
        width: 50%;
        /* Ajusta el tamaño de la imagen según tus necesidades */
        margin: 0 auto;
        /* Centra la imagen */
    }

</style>

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-12 col-md-4 mb-4">
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
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553" class="btn btn-primary" role="button" target="_blank">Ir a PSE</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <img src="{{ asset('images/soporte_icon.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Soporte Técnico</h5>
                        </div>
                    </div>
                    <div class="card-back">
                        <div class="card-body">
                            <h5 class="card-title">Soporte Técnico</h5>
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553" class="btn btn-primary" role="button" target="_blank">Ir a PSE</a>
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553" class="btn btn-primary" role="button" target="_blank">Ir a PSE</a>
                            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=6553" class="btn btn-primary" role="button" target="_blank">Ir a PSE</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4">
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
                            <h5 class="card-title">Información adicional 3</h5>
                            <p class="card-text">Detalles adicionales sobre atención PQR.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
