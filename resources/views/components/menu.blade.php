<style>
    .dropdown-menu {
        min-width: 305px;
        /* Ancho mínimo del menu*/
        max-width: 400px;
        /* Ancho máximo del menu*/
        width: auto;
        /*Para que el menú se ajuste automáticamente */
    }

    .dropdown-menu a {
        white-space: normal;
        /* Divide el texto en varias líneas si es necesario */
        word-wrap: break-word;
        /* Ajusta las palabras largas */
        overflow: hidden;
    }

    .dropdown-menu li a:hover {
        background-color: #004899;
        /* Color de fondo al pasar el puntero del mause */
        color: white;
        /* Color de la letra al pasar el puntero del mause */
    }

    .dropdown-menu li a {
        display: block;
        padding: 5px 10px;
        /* Ajusta el padding según sea necesario */
        border-radius: 5px;
        /* Bordes redondeados */
    }

    /* Ajustes específicos para pantallas grandes */
    @media (min-width: 768px) {
        .dropdown-menu {
            font-size: 16px;
        }
    }

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="/" class="flex-shrink-0 w-25">
            <img class="header_logo" src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex justify-content-evenly w-100">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://colombianet.speedtestcustom.com" target="blank">Medidor de Velocidad</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegulacion" role="button" data-bs-toggle="dropdown" aria-expanded="false">Regulación</a>
                    <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdownRegulacion">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#dignidadInfantilModal">Dignidad Infantil</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#habeasDataModal">Habeas data</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#centralRiesgoModal">Actualización o retiro de centrales de riesgo</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#normatividadCovidModal">Normatividad 2020 /covid- 19</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/Ley_1480_de_2011.pdf') }}" target="_blank">Ley 1480 de 2011- Estatuto del consumidor</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/Resolucion-5111-DE-2017.pdf') }}" target="_blank">Resolución 5111 de 2017- Régimen de <br /> protección al usuario</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/M-SST-01_MANUAL_SST_COLOMBIANET.pdf') }}" target="_blank">Manual SST colombianet</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/Resolucion-2258.pdf') }}" target="_blank">Resolución 2258 de 2009 - Régimen de <br /> protección de los derechos de los suscriptores <br /> y/o usuarios de los servicios de telecomunicaciones</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">Información para el Usuario</a>
                    <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdownInfo">
                        <li><a class="dropdown-item" href="/formularioPqrs">Formulario de PQRS</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/PROCEDIMIENTO Y TRAMITE DE PQRS.pdf') }}" target="_blank">Procedimiento Trámite de PQRS</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/Seguridad-en-plantas-IP.pdf') }}" target="_blank">Seguridad Plantas IP</a></li>
                        <li><a class="dropdown-item" href="{{ asset('archivos/AUTORIDADES-DE-CONTROL-Y-VIGILANCIA.pdf') }}" target="_blank">Autoridades de control y Vigilancia</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#factoresLimitacionModal">Factores que limitan tu conexión</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#gestionTraficoModal">Prácticas y gestión del tráfico</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#mapa">Mapa de cobertura</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#recomendacionSeguridadModal">Recomendaciones de seguridad para uso de Internet</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#centroAtencionModal">Centro de atención</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#prevencionFraudeModal">Prevención Fraude y Riesgos Informáticos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
