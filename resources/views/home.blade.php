<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colombianet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link rel="icon" href="{{ asset('images/favicon1.ico') }}" type="image/x-icon">

</head>

<body class="antialiased">
    <x-header />
    <x-menu />
    <x-carousel />
    <x-info />
    <x-nuestros-servicios />
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
                    <div class="row">
                        <!-- Imágenes -->
                        <div class="col-12 mb-3">
                            <video src="{{ asset('media/noticia_vid.mp4') }}" class="d-block w-100" alt="Slide 4" autoplay loop muted >
                        </div>
                        </video>
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('images/noticia_1.jpeg') }}" class="img-fluid mb-3 rounded" style="box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);" alt="">
                            <img src="{{ asset('images/noticia_2.jpeg') }}" class="img-fluid mb-3 rounded" style="box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="{{ asset('images/noticia_3.jpeg') }}" class="img-fluid mb-3 rounded" style="box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);" alt="">
                            <img src="{{ asset('images/noticia_4.jpeg') }}" class="img-fluid mb-3 rounded" style="box-shadow: 0 0 10px rgba(1, 1, 1, 0.5);" alt="">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ asset('media/ipv6.mp4') }}" type="video/mp4">
                                Tu navegador no soporta el elemento de video.
                            </video>

                        </div>
                    </div>
                    <div class="my-3">
                        <!-- Video -->
                        <h5>Escanear canales de television</h5>
                        <video class="img-fluid" controls>
                            <source src="{{ asset('media/busqueda_canales.mp4') }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
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

    </script>

    <!-- Bootstrap 5.3 -->
    <!-- Bootstrap JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
