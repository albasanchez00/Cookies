<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vamos a validar el usuario y contraseña</h1>
</body>
</html>

<?php
//$_REQUEST -> Cuando no sabes si viene el dato por $_POST o $_GET
if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
    setcookie("nombre", $_REQUEST["username"], time()+10);
    setcookie("password", $_REQUEST["password"], time()+10);

    date_default_timezone_set("Europe/Madrid");
    $fecha = date("d-m-Y H:i:s"); //Los espacios los rellena con -> %
    // Para la hora....$hora=date("H:i:s")
    setcookie("ultimoAcceso", $fecha, time()+10);
}

if (isset($_COOKIE["ultimoAcceso"]) && isset($_COOKIE["nombre"])) {
    echo "Hola ".$_COOKIE["nombre"]." el ultimo acceso es: ".$_COOKIE["ultimoAcceso"];
    // LEE LAS COOKIES DEL NAVEGADOR.
}