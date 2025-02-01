<style>
    /* Animación de entrada con desplazamiento */
    .plan-card {
        border-radius: 15px;
        /* Bordes redondeados */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Sombra suave */
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .plan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Estilo de la lista */
    .plan-list .list-group-item {
        border: none;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 10px;
        font-weight: 600;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .plan-list .list-group-item:hover {
        background-color: #f0f0f0;
        transform: scale(1.05);
    }

    /* Estilo de los encabezados */
    .plan-header {
        padding: 20px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        font-weight: bold;
        color: white;
    }

    .plan-header-yellow {
        background-color: #EAB205;
    }

    .plan-header-blue {
        background-color: #004899;
    }

    .plan-header-red {
        background-color: #D32F2F;
    }

    /* Estilo del título principal */
    .main-title {
        color: #004899;
        font-weight: bold;
        margin-bottom: 30px;
    }

    /* Estilo del contenedor */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Estilo de los enlaces */
    .plan-list a {
        text-decoration: none;
        color: inherit;
    }

    .plan-list a:hover {
        text-decoration: underline;
    }
</style>

<div class="container my-5">
    <section class="row gy-4 justify-content-center">
        <nav class="w-100 text-center mb-4" data-aos="fade-up" data-aos-delay="0">
            <h1 class="main-title" style="color: #2d3748;">Nuestros Planes</h1>
        </nav>

        <!-- Planes Estrato 1, 2 y 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card plan-card text-center">
                <div class="plan-header plan-header-yellow">
                    <h5>Planes Estrato 1, 2 y 3</h5>
                </div>
                <ul class="list-group list-group-flush plan-list">
                    <a href="/planes" class="text-decoration-none text-dark">
                        <li class="list-group-item">📺 Planes con TV</li>
                        <li class="list-group-item">🚫 Planes sin TV</li>
                    </a>
                </ul>
            </div>
        </div>

        <!-- Planes Guapi y Lagos de Morinda -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card plan-card text-center">
                <div class="plan-header plan-header-blue">
                    <h5>Planes Guapi y Lagos de Morinda</h5>
                </div>
                <ul class="list-group list-group-flush plan-list">
                    <a href="/planes" class="text-decoration-none text-dark">
                        <li class="list-group-item">🌊 Planes Guapi</li>
                        <li class="list-group-item">🏞️ Planes Lagos de Morinda</li>
                    </a>
                </ul>
            </div>
        </div>

        <!-- Planes Estrato 4 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card plan-card text-center">
                <div class="plan-header plan-header-red">
                    <h5>Planes Estrato 4</h5>
                </div>
                <ul class="list-group list-group-flush plan-list">
                    <a href="/planes" class="text-decoration-none text-dark">
                        <li class="list-group-item">🏡 Planes Residenciales</li>
                    </a>
                </ul>
            </div>
        </div>



    </section>
</div>
