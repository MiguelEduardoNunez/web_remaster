<style>
/* Ajustes mínimos para el ícono del menú */
.navbar-toggler {
    border: none;
    outline: none;
}

.navbar-toggler-icon {
    background-image: url('{{ asset('images/menu_icon.svg') }}');
    background-size: contain;
    background-repeat: no-repeat;
    width: 30px;
    height: 30px;
}

</style>

<nav class="d-flex flex-wrap align-items-center justify-content-between p-3 border border-danger" aria-label="contenedor menu">
    <a href="/" class="flex-shrink-0">
        <img class="header_logo" src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Aquí usas tu ícono personalizado -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegulacion" role="button" data-bs-toggle="dropdown" aria-expanded="false">Regulación</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
</nav>
