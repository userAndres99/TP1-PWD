<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Personales</title>
    <link rel="stylesheet" href="ejercicio3style.css">
</head>
<body>

    <form method="post" action="../control/verdatos.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="1" required>
        
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>
        
        <input type="submit" value="Enviar">
    </form>

</body>
</html>