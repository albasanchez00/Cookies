<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <article id="bloque-contenido">
        <h2 class="textoCentrado">Inicio de Sesión</h2>
        <form class="textoCentrado" action="lectura.php" method="POST">
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="Usuario" required>
            <br><br>
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
        <a class="textoCentrado boton-cookies" href="cerrarSesion.php">Salir y Borrar Cookies</a>
        <?php
        if (isset($_COOKIE['nombre'])) {
            echo "Hola, ya existe una cookie ". $_COOKIE['nombre'];
        }
        ?>
    </article>

</body>
</html>


