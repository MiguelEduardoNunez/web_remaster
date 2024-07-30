<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        /* Estilos específicos para la vista Nosotros */

        .content-section {
            padding: 2rem 0;
        }

        .content-section img {
            max-width: 100%;
            height: auto;
        }

        .content-section h3 {
            margin-bottom: 1rem;
        }

        .content-section .col-md-8 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-section .col-md-4 {
            display: flex;
            justify-content: center;
        }

        @media (max-width: 767.98px) {
            .content-section {
                padding: 1rem 0;
            }

            .content-section img {
                max-width: 100%;
                height: auto;
            }

            .content-section .row {
                margin-bottom: 1rem;
            }

            .content-section .col-md-8,
            .content-section .col-md-4 {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body class="antialiased">
    <x-header />
    <x-menu />
    <main>
        <section class="content-section">
            
            <div class="container">
                <h2>Conócenos</h2>
                <div class="row mb-4">
                    <!-- Misión -->
                    <div class="col-md-8 col-12 order-md-1 order-2">
                        <h3>Misión</h3>
                        <p>ColombiaNET Ingeniería y Telecomunicaciones es una empresa especializada en el desarrollo y ejecución de proyectos en telecomunicaciones, eléctricos, obras civiles y diferentes ramas de la ingeniería, contribuyendo a la competitividad de nuestros clientes.</p>
                    </div>
                    <div class="col-md-4 col-12 order-md-2 order-1">
                        <img src="{{ asset('images/img_mision.png') }}" alt="Misión">
                    </div>
                </div>

                <div class="row mb-4">
                    <!-- Visión -->
                    <div class="col-md-4 col-12 order-md-1 order-1">
                        <img src="{{ asset('images/img_vision.png') }}" alt="Visión">
                    </div>
                    <div class="col-md-8 col-12 order-md-2 order-2">
                        <h3>Visión</h3>
                        <p>Consolidarse a 2025 como una empresa líder en la prestación de servicios, brindando soluciones de óptima calidad buscando la satisfacción del cliente, avanzando a la par con el progreso tecnológico.</p>
                    </div>
                </div>

                <div class="row mb-4">
                    <!-- Políticas de calidad -->
                    <div class="col-md-8 col-12 order-md-1 order-2">
                        <h3>Políticas de calidad</h3>
                        <p>Ofrecer un servicio oportuno y de gran capacidad técnica en la construcción de proyectos de ingeniería en telecomunicaciones, obras civiles, eléctricas y otras, bajo las normas legales, cumpliendo con los plazos y programas establecidos por el cliente.</p>
                    </div>
                    <div class="col-md-4 col-12 order-md-2 order-1">
                        <img src="{{ asset('images/img_policas_privacidad.png') }}" alt="Políticas de calidad">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer />

    <!-- Bootstrap 5.3 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
