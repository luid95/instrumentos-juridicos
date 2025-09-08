<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contraseña actualizada</title>
</head>
<body>
    <h2>Hola {{ $user->name }},</h2>

    <p>Tu contraseña ha sido actualizada exitosamente en el sistema <strong>Instrumentos Jurídicos</strong>.</p>

    <p><strong>Usuario:</strong> {{ $user->email }}</p>
    <p><strong>Nueva contraseña:</strong> {{ $newPassword }}</p>

    <p>Si no realizaste este cambio, por favor contacta al administrador inmediatamente.</p>

    <br>
    <p>Saludos,</p>
    <p><strong>Equipo de Instrumentos Jurídicos</strong></p>
</body>
</html>
