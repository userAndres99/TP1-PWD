<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
</head>
<body>
    <h1>Procesa</h1>
    <?php
    if ($_GET) {
        $numero = $_GET['numero_form'];
        echo "<h3>Número: $numero</h3><br />";
        
        if ($numero > 0) {
            echo "El número es positivo<br />";
        } elseif ($numero == 0) {
            echo "El número es cero<br />";
        } else {
            echo "El número es negativo<br />";
        }
    } else {
        echo "No se recibieron datos<br />";
    }
    ?>

    <a href="../vista/ejercicio1.php">Volver al formulario</a>
</body>
</html>

