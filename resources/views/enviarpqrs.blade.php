<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo PQRS</title>
</head>
<body>
    <h2>Información personal</h2>
    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Tipo de documento:</strong> {{ $tipo_documento }}</p>
    <p><strong>Número de documento:</strong> {{ $numero_cc }}</p>
    <p><strong>Email de contacto:</strong> {{ $correo }}</p>
    <p><strong>Teléfono de contacto:</strong> {{ $tel }}</p>
    <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
    <h2>Información de la PQRS</h2>
    <p><strong>Trámite a presentar:</strong> {{ $selec_pqrs }}</p>
    <p><strong>Objeto de la PQR:</strong> {{ $objeto_pqrs }}</p>
    <p><strong>Hechos:</strong> {{ $hechos }}</p>
    <p><strong>Departamento:</strong> {{ $departamento }}</p>
    <p><strong>Ciudad:</strong> {{ $ciudad }}</p>
    <p><strong>Dirección:</strong> {{ $direccion }}</p>
</body>
</html>
