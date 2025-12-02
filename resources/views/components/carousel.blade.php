<style>
    /* Tama�o del contenedor del carrusel */
    .carousel-container {
        width: 100%;
        display: flex;
        padding: 0;
        /* justify-content: center;
        align-items: center; */
        /* padding-top: 10px; */
    }

    /* Tama�o del carrusel */
    .carousel {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .carousel-inner {
        width: 100%;
    }

    /* Tama�o de las im�genes */
    .carousel-item {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* Estilos del �cono de reproducci�n */
    .play-icon {
        position: absolute;
        top: 60%;
        left: 77%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        z-index: 10;
    }

    /* Contenedor del �cono de reproducci�n */
    .padre-play {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Efecto de ondas */
    .padre-play::before,
    .padre-play::after {
        content: '';
        position: absolute;
        top: 60%;
        left: 77%;
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        z-index: 9;
        animation: ripple 1.5s infinite;
    }

    /* Segunda onda */
    .padre-play::after {
        animation-delay: 0.75s;
    }

    /* Animaci�n de ondas */
    @keyframes ripple {
        0% {
            transform: translate(-50%, -50%) scale(0.8);
            opacity: 1;
        }

        100% {
            transform: translate(-50%, -50%) scale(2.5);
            opacity: 0;
        }
    }

    /* Ajuste de tama�o */
    @media (min-width: 576px) {
        .carousel {
            width: 100%;
        }

    }

    @media (min-width: 768px) {
        .carousel {
            width: 100%;
        }

    }

    @media (min-width: 992px) {
        .carousel {
            width: 100%;
        }

    }
</style>

<div class="carousel-container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
        data-bs-wrap="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carrusel_1.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carroucel_amoryamistad.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <!-- <div class="carousel-item">
                <img src="{{ asset('images/carrousel_3.png') }}" class="d-block w-100" alt="Slide 3">
                <a href="#" class="padre-play" data-bs-toggle="modal" data-bs-target="#videoGrooming">
                    <img src="{{ asset('images/play_icon.png') }}" class="play-icon" alt="Play icon">
                </a>
            </div> -->
            <div class="carousel-item">
                <img src="{{ asset('images/carrusel_4.jpeg') }}" class="d-block w-100" alt="Slide 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Modal -->
    <!-- <div class="modal fade" id="videoGrooming" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Que es el Grooming?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
{{-- <div class="d-flex justify-content-center align-items-center mt-5">
    <img src="{{ asset('images/planes_escalofriantes.jpeg') }}" class="rounded-3 mr-3 flex-shrink-0" alt="Slide 2"
        style="width: 20%; height: auto;">
    <img src="{{ asset('images/hallowen_carusel.png') }}" class="rounded-3 mx-3" alt="Slide 2"
        style="width: 55%; height: auto;">
    <img src="{{ asset('images/codigoqr.jpeg') }}" class="rounded-3 mr-3 flex-shrink-0" alt="Slide 2"
        style="width: 20%; height: auto;">
</div> --}}
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var videoModal = document.getElementById('videoGrooming');
        var videoIframe = document.getElementById('videoIframe');
        var videoUrl = "https://www.youtube.com/embed/EzAaElaOaVE?autoplay=1";

        videoModal.addEventListener('show.bs.modal', function() {
            videoIframe.src = videoUrl;
        });

        videoModal.addEventListener('hide.bs.modal', function() {
            videoIframe.src = "";
        });
    });
</script> -->