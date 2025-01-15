<style>
    .container-intereses {
        background-color: #f1f1f1;
        padding: 30px;
        text-align: center;
    }

    .interest-card {
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        height: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .interest-card:hover {
        transform: rotate(5deg);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .interest-card img {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        width: 100%;
        height: 200px;
        height: 30vh;
        object-fit: cover;
        object-position: center;
    }

    .interest-card h5 {
        padding: 15px;
        margin-top: 15px;
    }

    .interest-card a {
        color: black;
        text-decoration: none;
    }

    @media (min-width: 768px) and (max-width: 992px) {
        .tercera-card {
            margin-top: 20px;
        }
    }
</style>

<div class="container-intereses">
    <h1 class="mb-4">Zona De Interés</h1>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
            <div class="interest-card">
                <a href="https://www.fiscalia.gov.co/colombia/" target="_blank">
                    <img src="{{ asset('/images/fiscalia_logo.png') }}" alt="Fiscalía General de la Nación" class="img-fluid">
                </a>
                <h5>Fiscalía General de la Nación</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
            <div class="interest-card">
                <a href="https://www.mintic.gov.co/portal/inicio/" target="_blank">
                    <img src="{{ asset('/images/mintic_logo.png') }}" alt="Ministerio de tecnologías de la información y las comunicaciones (MinTic)" class="img-fluid">
                </a>
                <h5>Ministerio de tecnologías de la información y las comunicaciones (MinTic)</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
            <div class="interest-card">
                <a href="https://www.sic.gov.co/" target="_blank">
                    <img src="{{ asset('/images/industria_comercio_logo.png') }}" alt="Superintendencia de Industria y Comercio (SIC)" class="img-fluid">
                </a>
                <h5>Superintendencia de Industria y Comercio (SIC)</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="interest-card">
                <a href="https://www.crcom.gov.co/es" target="_blank">
                    <img src="{{ asset('/images/comision_comunicacion.webp') }}" alt="Superintendencia de Industria y Comercio (SIC)" class="img-fluid">
                </a>
                <h5>Comisión de regulación de comunicaciones (Crc)</h5>
            </div>
        </div>
    </div>
</div>
