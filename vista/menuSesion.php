<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Mi cuenta</title>
</head>

<body>
    <?php
    if(isset($_SESSION["nivelUsuario"])){
        $nivel=$_SESSION["nivelUsuario"];
        if($nivel == "administrador"){
            require_once( "estaticas/menuAdministrador.html");
        }else if($nivel == "secretaria"){
            require_once( "estaticas/menuSecretaria.html");
        }else if($nivel == "cliente"){
            require_once( "estaticas/menuCliente.html");
        }
    }else{
        echo "<h1>Inicia sesión por favor</h1>";
    }
    ?>
</body>

</html>
