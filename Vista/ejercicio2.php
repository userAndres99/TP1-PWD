<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Horas de Cursada</title>
</head>
<body>
    <h1>Horas de Cursada - Programación Web Dinámica</h1>
    
    <form id="form2" name="form2" method="get" action="../control/verhoras.php">
        <label for="lunes">Lunes:</label>
        <input type="number" id="lunes" name="horas[lunes]" min="0" max="24" required><br>
        
        <label for="martes">Martes:</label>
        <input type="number" id="martes" name="horas[martes]" min="0" max="24" required><br>
        
        <label for="miercoles">Miércoles:</label>
        <input type="number" id="miercoles" name="horas[miercoles]" min="0" max="24" required><br>
        
        <label for="jueves">Jueves:</label>
        <input type="number" id="jueves" name="horas[jueves]" min="0" max="24" required><br>
        
        <label for="viernes">Viernes:</label>
        <input type="number" id="viernes" name="horas[viernes]" min="0" max="24" required><br>
        
        <label for="sabado">Sábado:</label>
        <input type="number" id="sabado" name="horas[sabado]" min="0" max="24" required><br>
        
        <label for="domingo">Domingo:</label>
        <input type="number" id="domingo" name="horas[domingo]" min="0" max="24" required><br>
        
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>