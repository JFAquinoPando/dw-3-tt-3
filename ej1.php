<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="codigo.php" method="post">
        <div class="ejemplo">
            <label for="nombre">Nombre </label><input type="text" id="nombre" name="nombre" placeholder="Ej: Pedro">
        </div>
        <div>
            <label for="apellido">Apellido </label><input type="text" id="apellido" name="apellido" placeholder="Ej: Perez">
        </div>
        <div>
            <label for="ciudad">Ciudad </label><input type="text" id="ciudad" name="ciudad" placeholder="Encarnación">
        </div>
        <div>
            <label for="email">Email </label>
            <input type="email" name="email" id="email" required placeholder="ejemm@mail.net">
        </div>
        <div>
            <label for="mujer">Mujer </label>
            <input type="radio" name="sexo" id="mujer" value="mujer" required checked>
        </div>
        <div>
            <label for="hombre">hombre </label>
            <input type="radio" name="sexo" id="hombre" value="hombre" required>
        </div>
        <div>
            <input type="reset" value="Limpiar">
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>