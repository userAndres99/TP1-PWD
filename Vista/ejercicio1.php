<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Formulario</title>
</head>
<body>
    <h1>Ingrese un número</h1>
    
    <form id="form1" name="form1" method="get" action="../control/vernumero.php">
        <label for="numero_form">Número:</label>
        <!-- Input para solicitar el número -->
        <input name="numero_form" type="number" id="numero_form" required step="1" min="-1000000" max="1000000" /> 
        <br />
        <!-- Botón para enviar el formulario -->
        <input type="submit" name="Submit" value="Aceptar" />
    </form>

</body>
</html>

