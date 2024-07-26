<style>
    /*tamaño del contenedor del carrusel */
    .carousel-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 10px;
    }

    /*tamaño del carrusel */
    .carousel {
        width: 100%;
    }

    /*tamaño de las imágenes */
    .carousel-item img {
        width: 100%;
        height: auto;
    }

    /* Ajuste de tamaño */
    @media (min-width: 576px) {
        .carousel {
            width: 100%;
        }
    }

    @media (min-width: 768px) {
        .carousel {
            width: 87%;
        }
    }

    @media (min-width: 992px) {
        .carousel {
            width: 90%;
        }
    }

</style>

<div class="carousel-container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-wrap="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carrousel_1.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carrousel_2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carrousel_3.png') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
