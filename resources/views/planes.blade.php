<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes de Internet</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fuente Muli -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon1.ico') }}" type="image/x-icon">

    <!-- AOS (Animate On Scroll) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

    <style>
        * {
            font-family: 'Muli', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .title-section {
            padding: 4rem 0 2rem;
            text-align: center;
            background: linear-gradient(to right, #2c3e50, #3498db);
            margin-bottom: 3rem;
            color: white;
        }

        .title {
            font-weight: 600;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .subtitle {
            font-weight: 300;
            color: #e0e0e0;
            font-size: 1.2rem;
        }

        .plan-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            background: white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .plan-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .plan-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
            cursor: pointer;
        }

        .card-title {
            color: #2c3e50;
            font-weight: 600;
            font-size: 1.5rem;
            margin: 1rem 0;
            padding: 0 1rem;
        }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: calc(100% - 200px);
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }

        .feature-list li {
            margin: 0.5rem 0;
            color: #666;
            display: flex;
            align-items: center;
        }

        .feature-list li i {
            color: #3498db;
            margin-right: 0.5rem;
        }

        .btn-contratar {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 30px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            width: 100%;
        }

        .btn-contratar:hover {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            transform: scale(1.05);
            color: white;
        }

        .popular-badge {
            position: absolute;
            top: 20px;
            right: -35px;
            background: #e74c3c;
            color: white;
            padding: 5px 40px;
            transform: rotate(45deg);
            font-size: 0.8rem;
            font-weight: 500;
            z-index: 1;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }

            .plan-card {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body class="antialiased">
    <x-header />
    <x-menu />

    <div class="title-section">
        <div class="container">
            <h1 class="title">Planes de Internet Premium</h1>
            <p class="subtitle">Conectividad superior para su hogar y negocio</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row g-4 justify-content-center">
            <!-- Plan Estrato 1,2 y 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="plan-card">
                    <a href="{{ asset('images/estrato1,2y3.png') }}" class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset('images/estrato1,2y3.png') }}" alt="Planes Estrato 1, 2 y 3">
                    </a>
                    <div class="popular-badge">Popular</div>
                    <h4 class="card-title text-center">Planes Estrato 1, 2 y 3</h4>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Internet de alta velocidad</li>
                            <li><i class="bi bi-check-circle-fill"></i> Televisión incluida</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instalación gratuita</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=573183309330" target="blank" class="btn btn-contratar">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan Estrato 1,2 y 3 Sin TV -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="plan-card">
                    <a href="{{ asset('images/estrato1,2y3sintv.png') }}" class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset('images/estrato1,2y3sintv.png') }}" alt="Planes Estrato 1, 2 y 3 Sin TV">
                    </a>
                    <h4 class="card-title text-center">Internet sin TV</h4>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Internet de alta velocidad</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sin compromisos de TV</li>
                            <li><i class="bi bi-check-circle-fill"></i> Precio especial</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=573183309330" target="blank" class="btn btn-contratar">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan Estrato 4 en adelante -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="plan-card">
                    <a href="{{ asset('images/estrato4enadelante.png') }}" class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset('images/estrato4enadelante.png') }}" alt="Planes Estrato 4 en adelante">
                    </a>
                    <h4 class="card-title text-center">Premium Residencial</h4>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Máxima velocidad</li>
                            <li><i class="bi bi-check-circle-fill"></i> Atención prioritaria</li>
                            <li><i class="bi bi-check-circle-fill"></i> Beneficios exclusivos</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=573183309330" target="blank" class="btn btn-contratar">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan Guapi -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="plan-card">
                    <a href="{{ asset('images/guapi.png') }}" class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset('images/guapi.png') }}" alt="Planes Guapi">
                    </a>
                    <h4 class="card-title text-center">Planes Guapi</h4>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Cobertura especializada</li>
                            <li><i class="bi bi-check-circle-fill"></i> Soporte local</li>
                            <li><i class="bi bi-check-circle-fill"></i> Planes personalizados</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=573183309330" target="blank" class="btn btn-contratar">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>

            <!-- Plan Lagos de Morinda -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="plan-card">
                    <a href="{{ asset('images/lagosmorinda.png') }}" class="glightbox" data-gallery="gallery1">
                        <img src="{{ asset('images/lagosmorinda.png') }}" alt="Planes Lagos de Morinda">
                    </a>
                    <h4 class="card-title text-center">Lagos de Morinda</h4>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Cobertura especializada</li>
                            <li><i class="bi bi-check-circle-fill"></i> Soporte local</li>
                            <li><i class="bi bi-check-circle-fill"></i> Televisión incluida</li>
                        </ul>
                        <a href="https://api.whatsapp.com/send?phone=573183309330" target="blank" class="btn btn-contratar">
                            Solicitar Información
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
    <x-modals />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Z+l9Qk9y57tPbuh7DdS9lG0CxPw6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        AOS.init({
            duration: 800,  // Duración de la animación en milisegundos
            easing: "ease-in-out",
            once: false,  // La animación se repite al hacer scroll hacia arriba y hacia abajo
        });

        // Actualizar las animaciones cuando el usuario hace scroll
        window.addEventListener('scroll', function() {
            AOS.refresh();
        });

        // Inicializar GLightbox
        const lightbox = GLightbox({
            selector: '.glightbox'
        });
    });
</script>
</html>
