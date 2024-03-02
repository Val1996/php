<!--Página de destino en la que se imprimira el mensaje en pantalla y el botón que eliminará las cookies y nos redijira al formulario(index)-->

<!--Con este condicional comprobamos si la solicitud se hizo con el metodo post, si es así se recoje el valor de "nombre"
y a continuación se muestra el mensaje en pantalla. Después se crea una cookie y se le asigna el valor de "nombre" recojido del formulario-->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    
    echo "<p style='font-size: 27px; font-family: Calibri;'>Hola " . $nombre . "</p";
    
    setcookie("nombre_cookie", $nombre, time()+ 300);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página destino</title>
    <style>
    body {
        margin-top: 20%;
        margin-left: 43%;
    }

    button {
        font-family: "Calibri";
        font-size: 16px;
    }
    </style>
</head>

<body>

    <!--Codigo para accionar un botón que nos redirigira a la página de formulario y destruira las cookies-->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="submit" name="destruir_cookies">Eliminar cookies y volver al formulario</button>
    </form>

    <!--A continuación verificamos si la solicitud se ha realizado con el metodo POST, e identiica si el botón ha sido presionado (si existe el campo "destruir_cookies".)
    Se crea un array de cookies para recorrerlo posteriormente.
    Se elimina cada cookie al establecer un tiempo pasado.
    Con Header redirigimos la pagina a index.php-->
    <?php

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["destruir_cookies"])){

    $cookies = $_COOKIE;

    foreach($cookies as $nombre_cookies => $valor_cookie){
        setcookie($nombre_cookies,"", time() - 300, "/");
    }

    header("Location: index.php");
    exit;
}
?>
</body>

</html>