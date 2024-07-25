<style>
    /* Ajustar el ancho de los menús desplegables */
    .dropdown-menu {
        min-width: 305px;
        /* Ancho mínimo */
        max-width: 400px;
        /* Ancho máximo */
        width: auto;
        /* Permite que el menú se ajuste automáticamente */
    }

    /* Asegurarse de que el texto largo se ajuste dentro del menú */
    .dropdown-menu a {
        white-space: normal;
        /* Permite que el texto se divida en varias líneas si es necesario */
        word-wrap: break-word;
        /* Ajusta las palabras largas */
        text-overflow: ellipsis;
        /* Añade puntos suspensivos al texto que es demasiado largo */
        overflow: hidden;
    }

    /* Estilo para evitar que el texto se salga de la pantalla en menús desplegables */
    .dropdown-menu li a {
        display: block;
        padding: 5px 10px;
        /* Ajusta el padding según sea necesario */
        border-radius: 5px;
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex justify-content-evenly w-100">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Medidor de Velocidad</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegulacion" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Regulación</a>
                        <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdownRegulacion">
                            <li><a class="dropdown-item" href="#">Dignidad Infantil</a></li>
                            <li><a class="dropdown-item" href="#">Habeas data</a></li>
                            <li><a class="dropdown-item" href="#">Actualización o retiro de centrales de riesgo</a></li>
                            <li><a class="dropdown-item" href="#">Normatividad 2020 /covid- 19</a></li>
                            <li><a class="dropdown-item" href="#">Ley 1480 de 2011- Estatuto del consumidor</a></li>
                            <li><a class="dropdown-item" href="#">Resolución 5111 de 2017- Régimen de <br/> protección al usuario</a></li>
                            <li><a class="dropdown-item" href="#">Manual SST colombianet</a></li>
                            <li><a class="dropdown-item" href="#">Resolución 2258 de 2009 - Régimen de <br/> protección de los derechos de los suscriptores <br/> y/o usuarios de los servicios de telecomunicaciones</a></li>
                        </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Información para el Usuario
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdownInfo">
                        <li><a class="dropdown-item" href="#">Formulario de PQRS</a></li>
                        <li><a class="dropdown-item" href="#">Procedimiento Trámite de PQRS</a></li>
                        <li><a class="dropdown-item" href="#">Seguridad Plantas IP</a></li>
                        <li><a class="dropdown-item" href="#">Autoridades de control y Vigilancia</a></li>
                        <li><a class="dropdown-item" href="#">Factores que limitan tu conexión</a></li>
                        <li><a class="dropdown-item" href="#">Prácticas y gestión del tráfico</a></li>
                        <li><a class="dropdown-item" href="#">Mapa de cobertura</a></li>
                        <li><a class="dropdown-item" href="#">Recomendaciones de seguridad para uso de <br/> Internet</a></li>
                        <li><a class="dropdown-item" href="#">Centro de atención</a></li>
                        <li><a class="dropdown-item" href="#">Prevención Fraude y Riesgos Informáticos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>