<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario PQRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('images/favicon1.ico') }}" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .content-section {
            padding: 0;
            background: transparent;
        }

        .breadcumb-area {
            position: relative;
            overflow: hidden;
        }

        .breadcumb-inner {
            background: linear-gradient(135deg, rgba(17, 26, 58, 0.95), rgba(0, 72, 153, 0.9)) !important;
            position: relative;
            padding: 2rem 2rem 8rem 2rem  !important;
            border-radius: 0;
        }

        .breadcumb-inner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translateX(0); }
            100% { transform: translateX(50px); }
        }

        .breadcumb-inner h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ffffff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            z-index: 2;
        }

        .breadcumb-inner h3 {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.9;
            margin-bottom: 0;
            position: relative;
            z-index: 2;
        }

        .contact_section {
            margin-top: -100px;
            position: relative;
            z-index: 3;
            padding: 0 1rem 2rem;
        }

        .card-form {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 
                0 32px 64px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 1200px;
            margin: 0 auto;
        }

        .card-form h3.subrayado {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f0f4f8;
            position: relative;
            color: #1a202c;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-form h3.subrayado::before {
            content: '';
            width: 48px;
            height: 48px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.2rem;
        }

        .card-form h3.subrayado:first-of-type::before {
            content: '👤';
        }

        .card-form h3.subrayado:last-of-type::before {
            content: '📋';
        }

        .card-form h3.subrayado::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 1px;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
            display: block;
        }

        .text-danger.fw-bold {
            color: #ef4444 !important;
            margin-left: 0.25rem;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 0.875rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #fafafa;
            width: 100%;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
            outline: none;
        }

        .form-control:hover:not(:focus) {
            border-color: #d1d5db;
            background: white;
        }

        select.form-control {
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            appearance: none;
        }

        select.form-control option.hidden {
            color: #9ca3af;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .text-danger {
            color: #ef4444 !important;
            font-size: 0.875rem;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
        }

        .text-danger::before {
            content: '⚠️';
            margin-right: 0.25rem;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            padding: 1rem 3rem;
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(102, 126, 234, 0.4);
            background: linear-gradient(45deg, #5a67d8, #6b46c1);
            border-color: transparent;
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .modal-content {
            border-radius: 16px;
            border: none;
            box-shadow: 0 24px 48px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: linear-gradient(45deg, #667eea, #764ba2) !important;
            border-radius: 16px 16px 0 0;
        }

        .modal-footer .btn {
            background: linear-gradient(45deg, #667eea, #764ba2) !important;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
        }

        /* Progress indicator */
        .card-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 24px 24px 0 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .breadcumb-inner h1 {
                font-size: 2.5rem;
            }
            
            .card-form {
                padding: 2rem 1.5rem;
                margin: -50px 1rem 2rem;
                border-radius: 20px;
            }
            
            .breadcumb-inner {
                padding: 3rem 1rem !important;
            }
            
            .contact_section {
                margin-top: -50px;
            }
        }

        /* Form Animation */
        .card-form {
            animation: slideInUp 0.6s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Input Focus Effects */
        .form-control:focus + .input-hint {
            opacity: 1;
            transform: translateY(0);
        }

        .input-hint {
            font-size: 0.75rem;
            color: #6b7280;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            margin-top: 0.25rem;
        }
    </style>
</head>

<body class="antialiased">
    <x-header />
    <x-menu />
    <main>
        <section class="content-section">
            <div class="breadcumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcumb-inner text-center text-white p-4">
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
                                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Ingresa tu nombre completo" value="{{ old('nombre') }}">
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
                                        @if ($errors->has('tipo_documento'))
                                            <span class="text-danger">{{ $errors->first('tipo_documento') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="numero_cc">Número de documento <span class="text-danger fw-bold">*</span></label>
                                        <input id="numero_cc" type="tel" name="numero_cc" class="form-control" placeholder="Número de documento" required value="{{ old('numero_cc') }}">
                                        @if ($errors->has('numero_cc'))
                                            <span class="text-danger">{{ $errors->first('numero_cc') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Email de contacto <span class="text-danger fw-bold">*</span></label>
                                        <input id="correo" class="form-control" type="email" name="correo" placeholder="correo@ejemplo.com" value="{{ old('correo') }}">
                                        @if ($errors->has('correo'))
                                            <span class="text-danger">{{ $errors->first('correo') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Número de Teléfono de contacto</label>
                                        <input id="tel" class="form-control" type="tel" name="tel" placeholder="(+57) 300 123 4567" value="{{ old('tel') }}">
                                        @if ($errors->has('tel'))
                                            <span class="text-danger">{{ $errors->first('tel') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje</label>
                                        <textarea id="mensaje" class="form-control" name="mensaje" placeholder="Información adicional que consideres relevante...">{{ old('mensaje') }}</textarea>
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
                                        @if ($errors->has('selec_pqrs'))
                                            <span class="text-danger">{{ $errors->first('selec_pqrs') }}</span>
                                        @endif
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
                                        @if ($errors->has('objeto_pqrs'))
                                            <span class="text-danger">{{ $errors->first('objeto_pqrs') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="hechos">Hechos en los cuales se fundamenta su PQR <span class="text-danger fw-bold">*</span></label>
                                        <textarea id="hechos" name="hechos" class="form-control" placeholder="Describe detalladamente los hechos que fundamentan tu PQRS...">{{ old('hechos') }}</textarea>
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
                                        @if ($errors->has('departamento'))
                                            <span class="text-danger">{{ $errors->first('departamento') }}</span>
                                        @endif
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
                                        @if ($errors->has('ciudad'))
                                            <span class="text-danger">{{ $errors->first('ciudad') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="direccion">Dirección</label>
                                        <input id="direccion" type="text" name="direccion" class="form-control" placeholder="Calle 12 # 34-56" value="{{ old('direccion') }}">
                                        @if ($errors->has('direccion'))
                                            <span class="text-danger">{{ $errors->first('direccion') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button name="btn" class="btn btn-primary">
                                    <i class="bi bi-send me-2"></i>Enviar
                                </button>
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
                <div class="modal-header text-white" style="background: linear-gradient(135deg, #111A3A, #004899);">
                    <h5 class="modal-title" id="statusModalLabel">
                        @if(session('status') === 'success')
                        <i class="bi bi-check-circle"></i> Éxito
                        @else
                        <i class="bi bi-x-circle"></i> Error
                        @endif
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ session('message') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn text-white" style="background: linear-gradient(135deg, #111A3A, #004899);" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var statusModal = new bootstrap.Modal(document.getElementById('statusModal'));
            statusModal.show();

            // Add form submission effect
            const form = document.querySelector('form');
            const submitBtn = document.querySelector('.btn-primary');
            
            form.addEventListener('submit', function() {
                submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Enviando...';
                submitBtn.disabled = true;
            });
        });
    </script>
    @endif

    <!-- Bootstrap 5.3 -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>