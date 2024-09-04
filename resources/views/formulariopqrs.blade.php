<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario PQRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .content-section {
            padding: 2rem;
            background-color: #ffffff;
        }

        .card-form {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            padding: 2rem;
        }

        .card-form h3.subrayado {
            border-bottom: 2px solid #000000;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
            color: #000000;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #111A3A;
            border-color: #111A3A;
            border-radius: 0.25rem;
            padding: 0.75rem 1.25rem;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #004899;
            border-color: #004899;
        }

        .form-group textarea {
            min-height: 100px;
        }

    </style>
</head>

<body class="antialiased">
    <x-header />
    <x-menu />
    <main>
        <section class="content-section ">
            <div class="breadcumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcumb-inner text-center text-white p-4" style="background: #111A3A">
                                <h1>Formulario PQRS</h1>
                                <h3>Deja tus peticiones quejas y reclamos en nuestras manos</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="contact_section">
                <div class="container">
                    <div id="contact_section" class="shadows fonts heading_main heading_style_1 w-100 flex-column p-5">
                        <form action="enviar_correo.php" method="post">
                            <div class="card-form">
                                <div class="form1">
                                    <h3 class="subrayado">Información personal</h3><br>
                                    <div class="form-group">
                                        <input class="bordes shadows form-control" type="text" name="nombre" placeholder="Nombres y Apellidos Completos*" required="">
                                    </div><br>
                                    <div class="form-group">
                                        <input type="tel" placeholder="Número de documento*" name="numero-cc" class="form-control">
                                    </div><br>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="correo" placeholder="Email de contacto*" required="">
                                    </div><br>
                                    <div class="form-group">
                                        <input class="form-control" type="tel" name="tel" placeholder="Número de Teléfono de contacto">
                                    </div><br>
                                    <div class="form-group">
                                        <textarea class="form-control" name="mensaje" placeholder="Mensaje" required=""></textarea>
                                    </div><br>
                                </div>
                                <div class="form2">
                                    <h3 class="subrayado">Información de la PQRS</h3><br>
                                    <fieldset>
                                        <div class="form-group">
                                            <select class="form-control" name="selec-pqrs">
                                                <option class="hidden" selected disabled>Trámite a presentar*</option>
                                                <option>Petición</option>
                                                <option>Queja/Reclamo</option>
                                                <option>Recurso</option>
                                            </select>
                                        </div> <br>
                                        <div class="form-group">
                                            <select class="form-control" name="objeto-pqrs">
                                                <option class="hidden" selected disabled>Objeto de la PQR*</option>
                                                <option>Información</option>
                                                <option>Cambio de domicilio</option>
                                                <option>Cambio de suscriptor</option>
                                                <option>Cobertura</option>
                                                <option>Facturación</option>
                                                <option>Retiros de Productos/servicios</option>
                                                <option>Fallas técnicas</option>
                                                <option>Daños en las instalaciones</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            <textarea name="hechos-text-area" placeholder="Hechos en los cuales se fundamenta su PQR*" required=""></textarea>
                                        </div><br>
                                        <div class="form-group">
                                            <select class="form-control" name="tipo_documento">
                                                <option class="hidden" selected disabled>Tipo de documento*</option>
                                                <option>Cédula de ciudadanía</option>
                                                <option>Cédula Extranjera</option>
                                                <option>NIT</option>
                                                <option>Pasaporte</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            <select class="form-control" name="departamento">
                                                <option class="hidden" selected disabled>Departamento*</option>
                                                <option>Cauca</option>
                                            </select>
                                        </div> <br>
                                        <div class="form-group">
                                            <select class="form-control" name="ciudad">
                                                <option class="hidden" selected disabled>Ciudad*</option>
                                                <option>Popayán</option>
                                                <option>Guapi</option>
                                                <option>La Vega</option>
                                                <option>Silvia</option>
                                                <option>Inzá</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" placeholder="Dirección" required="" name="direccion" class="form-control">
                                        </div><br>
            
                                    </fieldset>
            
                                </div>
                                <div class="boton_enviar w-100">
                                    <button name="btn" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <x-footer />
    <x-modals />
    
    <!-- Modal -->
    @if(session('status'))
    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-white" style="background: #004899;">
                    <h5 class="modal-title" id="statusModalLabel">
                        @if(session('status') === 'success')
                        <i class="bi bi-check-circle"></i> Éxito
                        @else
                        <i class="bi bi-x-circle"></i> Error
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ session('message') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background: #004899;" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var statusModal = new bootstrap.Modal(document.getElementById('statusModal'));
            statusModal.show();
        });

    </script>
    @endif

    <!-- Bootstrap 5.3 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>

</html>
