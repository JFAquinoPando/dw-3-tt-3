<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Envío de datos a mi PC</h1>
    <form 
        action="http://192.168.100.38/dw-3-tt-3/recibir.php"
        method="get"
        enctype="multipart/form-data"
    >
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <input type="file" name="archivo" id="">
        </div>
        <!--  <input type="submit" value="Enviar al servidor"> -->
        <button>Enviar ya</button>

    </form>

    <!-- <h1>Consultas a Google</h1>
    <form action="https://google.com.py/search" method="get">

        <label for="nombre-campo">Escribe tu pregunta</label>
        <input type="text" id="nombre-campo" name="q">
    </form> -->
</body>

</html>