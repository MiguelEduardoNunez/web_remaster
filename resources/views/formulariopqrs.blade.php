<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario PQRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('images/favicon1.ico') }}" type="image/x-icon">
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
                    <div id="contact_section" class="card-form">
                        <form action="https://colombianet.tech/enviar-pqrs" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="subrayado">Información personal</h3>
                                    <div class="form-group">
                                        <label for="nombre">Nombres y Apellidos Completos <span class="text-danger fw-bold">*</span></label>
                                        <input id="nombre" class="form-control" type="text" name="nombre"  value="{{ old('nombre') }}">
					@if ($errors->has('nombre'))
            					<span class="text-danger">{{ $errors->first('nombre') }}</span>
        				@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo_documento">Tipo de documento <span class="text-danger fw-bold">*</span></label>
                                        <select id="tipo_documento" class="form-control" name="tipo_documento" required>
                                            <option class="hidden" selected disabled>Seleccione una opción</option>
                                            <option value="Cédula de ciudadanía" {{ old('tipo_documento') == 'Cédula de ciudadanía' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                                            <option value="Cédula Extranjera" {{ old('tipo_documento') == 'Cédula Extranjera' ? 'selected' : '' }}>Cédula Extranjera</option>
                                            <option value="NIT" {{ old('tipo_documento') == 'NIT' ? 'selected' : '' }}>NIT</option>
                                            <option value="Pasaporte" {{ old('tipo_documento') == 'Pasaporte' ? 'selected' : '' }}>Pasaporte</option>
                                        </select>
				 	@if ($errors->has('numero_cc'))
                                                <span class="text-danger">{{ $errors->first('tipo_documento') }}</span>
                                        @endif
				 	@if ($errors->has('numero_cc'))
                                                <span class="text-danger">{{ $errors->first('tipo_documento') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_cc">Número de documento <span class="text-danger fw-bold">*</span></label>
                                        <input id="numero_cc" type="tel" name="numero_cc" class="form-control" required value="{{ old('numero_cc') }}">
					@if ($errors->has('numero_cc'))
            					<span class="text-danger">{{ $errors->first('numero_cc') }}</span>
        				@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Email de contacto <span class="text-danger fw-bold">*</span></label>
                                        <input id="correo" class="form-control" type="email" name="correo" value="{{ old('correo') }}">
					@if ($errors->has('correo'))
            					<span class="text-danger">{{ $errors->first('correo') }}</span>
        				@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Número de Teléfono de contacto</label>
                                        <input id="tel" class="form-control" type="tel" name="tel" value="{{ old('tel') }}">
				        @if ($errors->has('correo'))
            					<span class="text-danger">{{ $errors->first('correo') }}</span>
        				@endif
				        @if ($errors->has('correo'))
            					<span class="text-danger">{{ $errors->first('correo') }}</span>
        				@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje</label>
                                        <textarea id="mensaje" class="form-control" name="mensaje">{{ old('mensaje') }}</textarea>
				        @if ($errors->has('mensaje'))
            					<span class="text-danger">{{ $errors->first('mensaje') }}</span>
        				@endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="subrayado">Información de la PQRS</h3>
                                    <div class="form-group">
                                        <label for="selec_pqrs">Trámite a presentar <span class="text-danger fw-bold">*</span></label>
                                        <select id="selec_pqrs" class="form-control" name="selec_pqrs" required>
                                            <option class="hidden" selected disabled>Seleccione una opción</option>
                                            <option value="Petición" {{ old('selec_pqrs') == 'Petición' ? 'selected' : '' }}>Petición</option>
                                            <option value="Queja/Reclamo" {{ old('selec_pqrs') == 'Queja/Reclamo' ? 'selected' : '' }}>Queja/Reclamo</option>
                                            <option value="Recurso" {{ old('selec_pqrs') == 'Recurso' ? 'selected' : '' }}>Recurso</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="objeto_pqrs">Objeto de la PQR <span class="text-danger fw-bold">*</span></label>
                                        <select id="objeto_pqrs" class="form-control" name="objeto_pqrs" required>
                                            <option class="hidden" selected disabled>Seleccione una opción</option>
                                            <option value="Información" {{ old('objeto_pqrs') == 'Información' ? 'selected' : '' }}>Información</option>
                                            <option value="Cambio de domicilio" {{ old('objeto_pqrs') == 'Cambio de domicilio' ? 'selected' : '' }}>Cambio de domicilio</option>
                                            <option value="Cambio de suscriptor" {{ old('objeto_pqrs') == 'Cambio de suscriptor' ? 'selected' : '' }}>Cambio de suscriptor</option>
                                            <option value="Cobertura" {{ old('objeto_pqrs') == 'Cobertura' ? 'selected' : '' }}>Cobertura</option>
                                            <option value="Facturación" {{ old('objeto_pqrs') == 'Facturación' ? 'selected' : '' }}>Facturación</option>
                                            <option value="Retiros de Productos/servicios" {{ old('objeto_pqrs') == 'Retiros de Productos/servicios' ? 'selected' : '' }}>Retiros de Productos/servicios</option>
                                            <option value="Fallas técnicas" {{ old('objeto_pqrs') == 'Fallas técnicas' ? 'selected' : '' }}>Fallas técnicas</option>
                                            <option value="Daños en las instalaciones" {{ old('objeto_pqrs') == 'Daños en las instalaciones' ? 'selected' : '' }}>Daños en las instalaciones</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="hechos">Hechos en los cuales se fundamenta su PQR <span class="text-danger fw-bold">*</span></label>
                                        <textarea id="hechos" name="hechos" class="form-control">{{ old('hechos') }}</textarea>
				        @if ($errors->has('hechos'))
            					<span class="text-danger">{{ $errors->first('hechos') }}</span>
        				@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="departamento">Departamento <span class="text-danger fw-bold">*</span></label>
                                        <select id="departamento" class="form-control" name="departamento" required>
                                            <option class="hidden" selected disabled>Seleccione una opción</option>
                                            <option value="Cauca" {{ old('departamento') == 'Cauca' ? 'selected' : '' }}>Cauca</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ciudad">Ciudad <span class="text-danger fw-bold">*</span></label>
                                        <select id="ciudad" class="form-control" name="ciudad" required>
                                            <option class="hidden" selected disabled>Seleccione una opción</option>
                                            <option value="Popayán" {{ old('ciudad') == 'Popayán' ? 'selected' : '' }}>Popayán</option>
                                            <option value="Guapi" {{ old('ciudad') == 'Guapi' ? 'selected' : '' }}>Guapi</option>
                                            <option value="La Vega" {{ old('ciudad') == 'La Vega' ? 'selected' : '' }}>La Vega</option>
                                            <option value="Silvia" {{ old('ciudad') == 'Silvia' ? 'selected' : '' }}>Silvia</option>
                                            <option value="Inzá" {{ old('ciudad') == 'Inzá' ? 'selected' : '' }}>Inzá</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <input id="direccion" type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
				        @if ($errors->has('direccion'))
            					<span class="text-danger">{{ $errors->first('direccion') }}</span>
        				@endif
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button name="btn" class="btn btn-primary">Enviar</button>
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
