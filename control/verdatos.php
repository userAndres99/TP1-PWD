<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
</head>
<body>
    <h1>Información Recibida</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];

        echo "<p>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</p>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>
    <br>
    <a href="../vista/ejercicio3.php">Volver al formulario</a>
</body>
</html>