<?php
    if(isset($_POST["txtUsuario"]) || isset($_POST["txtContrasena"])){
        if (!isset($_SESSION)) {
            session_start();
        }
        $usuario=$_POST["txtUsuario"];
        $contrasena=$_POST["txtContrasena"];
        $contrasenaDesencriptada = hash("sha512",$contrasena);

        require_once("modelo/conexion.php");

        $mysqli->real_query("SELECT usuario,pass,nivel FROM t_usuarios WHERE "
                            ."usuario='".$usuario."' AND pass='".$contrasenaDesencriptada."' ");

        $query=$mysqli->store_result();

        if($query){
            while($row = $query->fetch_assoc()){
                $usuarioQuery=$row["usuario"];
                $passQuery=$row["pass"];
                    if($usuarioQuery == $usuario){
                        if($passQuery == $contrasenaDesencriptada){
                            $_SESSION['nombreUsuario'] = $row["usuario"];
                            $_SESSION['nivelUsuario'] = $row["nivel"];
                            header("Location: ?vista=inicio");
                            echo "bien";
                        }else{
                            echo "credenciales incorrectos";
                        }
                    }
            }
            echo "no hay";
        }
        echo "muy mal";
    }

?>
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
    <?php require_once( "vista/estaticas/header.html"); ?>

    <section>
        <div class="login">
            <span id="encabezado">Inicio de Sesión</span>
            <form action="#" method="POST">
                <label for="txtUsuario">Usuario <i class="fa fa-user-circle fa-fw"></i></label>
                <input type="text" name="txtUsuario" id="txtUsuario" class="cajas" required/>
                <label for="txtContrasena">Contraseña <i class="fa fa-lock fa-fw"></i></label>
                <input type="password" name="txtContrasena" id="txtContrasena" class="form-control cajas" required/>
                <input type="submit" name="btnEnviarLogin" id="btnEnviarLogin" class="boton" value="Iniciar Sesión">
            </form>
        </div>
    </section>
    <footer>
        <?php require_once( "vista/estaticas/footer.html"); ?>
    </footer>
</body>

</html>
