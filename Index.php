<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
    body {
        margin-top: 20%;
        margin-left: 40%;
    }

    form {
        max-width: 363px;
        width: 100%;
        padding: 20px;
        border: 1px solid #ccc;
    }

    label,
    input,
    button {
        font-size: 20px;
        font-family: "Calibri";
    }
    </style>
</head>

<body>
    <!--Creamos un formulario con el campo de texto y el botón de enviar que nos dirijira a otra página-->
    <form action="página_destino.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre aquí">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>