<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de Cursada</title>
</head>
<body>
    <h1>Total de Horas de Cursada por Semana</h1>
    <?php
    if (isset($_GET['horas'])) {
        $horas = $_GET['horas'];
        $totalHoras = 0;

        foreach ($horas as $dia => $hora) {
            $totalHoras += $hora;
        }

        echo "<p>La cantidad total de horas de cursada por semana es: <strong>$totalHoras horas</strong>.</p>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    ?>
    <br>
    <a href="../vista/ejercicio2.php">Volver al formulario</a>
</body>
</html>