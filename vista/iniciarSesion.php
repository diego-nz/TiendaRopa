<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/estilosLogin.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Inicio de Sesión</title>
</head>

<body>
    <?php require_once( "vista/estaticas/header.php"); ?>
    <?php if(isset($_GET["estado"])){ 
        $accion=$_GET["estado"];
        switch ($accion) {
            case '6':
                echo '<div id="estado" style="display: block; margin-left: auto;
                            margin-right: auto; background-color: #00a577;
                            width: 30%; padding: 5px; border-radius: 20px;
                            font-size: 1.2em; color: #FAFAFA; text-align:center;
                            margin-bottom: 2%;" >
                        Se registró exitosamente, ahora puede iniciar sesión.
                    </div>';
                break;
            
            
            default:
                echo "";
                break;
        }
    }
    ?>
    <section>
        <div class="login">
            <span id="encabezado">Inicio de Sesión</span>
            <div id="respuesta"></div>
            <div id="cargando" style="display: block;"></div>
                <label for="txtUsuario">Usuario <i class="fa fa-user-circle fa-fw"></i></label>
                <input type="text" name="txtUsuario" id="txtUsuario" class="cajas" required/>
                <label for="txtContrasena">Contraseña <i class="fa fa-lock fa-fw"></i></label>
                <input type="password" name="txtContrasena" id="txtContrasena" class="form-control cajas" required/>
                <input type="submit" name="btnLogin" id="btnLogin" class="boton" value="Iniciar Sesión">
                <span id="registro"><a href="?vista=registro">Registrarme</a></span>
        </div>
    </section>
    <footer>
        <?php require_once( "vista/estaticas/footer.html"); ?>
    </footer>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="controlador/login.js"></script> 
</body>

</html>
