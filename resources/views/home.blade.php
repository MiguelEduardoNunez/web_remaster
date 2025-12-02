<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colombianet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/favicon1.ico') }}" type="image/x-icon">
    

    
    <!-- AOS (Animate On Scroll) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<style>
    *{
        font-family: 'Muli', sans-serif;
    }
</style>

<body style="background-color: #F1F1F1;">
    <x-header />
    <x-menu />
    <x-carousel />
    <x-info />
    <x-nuestros-servicios />
    <x-planesComponent />
    <x-zona-interes />
    <x-footer />
    <x-modals />

    <!-- Modal del apartado de las Noticias -->
    <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediaModalLabel">Noticias</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row g-3">
                        <!-- Video Principal -->
                        <div class="col-12">
                            <video src="{{ asset('media/noticia_vid.mp4') }}" class="d-block w-100 rounded shadow" autoplay loop muted></video>
                        </div>

                        <!-- Imagen horizontal principal (postnavidad.jpeg) -->
                        <div class="col-12">
                            <img src="{{ asset('images/postnavidad.jpeg') }}" class="img-fluid rounded shadow w-100" alt="Post Navidad">
                        </div>

                        <!-- Primera fila de imágenes (2 verticales) -->
                        <div class="col-6">
                            <img src="{{ asset('images/noticia_3.jpeg') }}" class="img-fluid rounded shadow" alt="Info Navidad">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/codigoqr.jpeg') }}" class="img-fluid rounded shadow" alt="Código QR">
                        </div>

                        <!-- Segunda fila de imágenes (2 verticales) -->
                        <div class="col-6">
                            <img src="{{ asset('images/noticia_2.jpeg') }}" class="img-fluid rounded shadow" alt="Noticia 2">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/noticia_4.jpeg') }}" class="img-fluid rounded shadow" alt="Noticia 4">
                        </div>

                        <!-- Video IPV6 -->
                        <div class="col-12">
                            <video class="img-fluid rounded shadow w-100" autoplay loop muted>
                                <source src="{{ asset('media/ipv6.mp4') }}" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>
                        </div>

                        <!-- Video con controles -->
                        <div class="col-12 mt-4">
                            <h5>Escanear canales de televisión</h5>
                            <video class="img-fluid rounded shadow w-100" controls>
                                <source src="{{ asset('media/busqueda_canales.mp4') }}" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>
                        </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('mediaModal'), {
                keyboard: false
            });
            myModal.show();
        });

        // Detener los videos al cerrar el modal
        var mediaModal = document.getElementById('mediaModal');
        mediaModal.addEventListener('hidden.bs.modal', function() {
            // Obtener todos los videos dentro del modal
            var videos = mediaModal.querySelectorAll('video');
            videos.forEach(function(video) {
                video.pause(); // Pausar el video
                video.currentTime = 0; // Reiniciar el video al inicio (opcional)
            });
        });
    </script>

    <!-- Bootstrap 5.3 -->
    <!-- Bootstrap JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
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
    });
</script>
</html>
