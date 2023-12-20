<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="utiles/css/style.css">
</head>

<body>
    <h2>Formulario Registro</h2>
    <form action="index.php?ctl=login" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= $datos['nombre'] ?>">
            <label for="contrasenia">Contraseña:</label>
            <input type="text" id="contrasenia" name="contrasenia" value="<?= $datos['contrasenia'] ?>">
            <label for="correo">Correo:</label>
            <input type="text" id="correo" name="correo" value="<?= $datos['correo']  ?>">
            <input type="submit" name="enviar" value="Enviar">
    </form>

</body>

</html>