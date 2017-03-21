<?php
    if(isset($_POST["txtUsuario"]) || isset($_POST["txtContrasena"])){

            require_once ("modelo/conexion.php");
                $usuario=$_POST["txtUsuario"];
                $contrasena=$_POST["txtContrasena"];
                $contrasena = hash("sha512",$contrasena);

                $mysqli->real_query("SELECT usuarios.usuario,usuarios.pass,usuarios.nivel from usuarios WHERE " ."usuarios.usuario='".$usuario."' AND pass='".$contrasena."' ");
                $query=$mysqli->store_result();
                echo '<script type = text/javascript>
                                alert($query);

                                </script>';
                if($query){
                    while($row = $query->fetch_assoc()){
                            if($row["usuario"] == $usuario){
                                session_start();
                                $_SESSION['nombreUsuario'] = $row["usuario"];
                                $_SESSION['nivelUsuario'] = $row["nivel"];
                                header("Location: inicio.php");
                                echo '<script type = text/javascript>
                                alert("Usuario");

                                </script>';
                            }else{
                                echo '<script language = javascript>
                                alert("Usuario o Password incorrectos, por favor verifique.")
                                self.location = "iniciarSesion.php"
                                </script>';
                            }
                        }
                    }
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
