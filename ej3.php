<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data" id="formPrograma">
        <span>Nombre</span>
        <input type="text" name="nombre" placeholder="Ingresa tu nombre">
        <br>
        <label for="mensaje">Click aquí</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"
            placeholder="Ingresa un mensaje"></textarea>
        <br><br>
        <button id="botonEnviar">Enviar</button>
        <button id="botonLimpiar">
            Limpiar
        </button>
        <button id="botonSalir">
            Salir
        </button>
    </form>
</body>

</html>