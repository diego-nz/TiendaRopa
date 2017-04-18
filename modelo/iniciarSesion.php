<?php
    if(isset($_POST["txtUsuario"]) || isset($_POST["txtContrasena"])){
        session_start();
        $usuario=$_POST["txtUsuario"];
        $contrasena=$_POST["txtContrasena"];
        $contrasenaDesencriptada = hash("sha512",$contrasena);

        require_once("conexion.php");

        $mysqli->real_query("SELECT id_usuario,usuario,pass,nivel FROM t_usuarios WHERE "
                            ."usuario='".$usuario."' AND pass='".$contrasenaDesencriptada."' ");

        $query=$mysqli->store_result();

        if($query){
            if(mysqli_num_rows($query)>0){
                while($row = $query->fetch_assoc()){
                $usuarioQuery=$row["usuario"];
                $passQuery=$row["pass"];
                    if($usuarioQuery == $usuario){
                        if($passQuery == $contrasenaDesencriptada){
                            $_SESSION["idUsuario"]=$row["id_usuario"];
                            $_SESSION['nombreUsuario'] = $row["usuario"];
                            $_SESSION['nivelUsuario'] = $row["nivel"];
                            echo 1;
                            //header("Location: ?vista=inicio");
                        }
                    }
                }
            }else{
                echo 0;
            }
            
            
        }
    }
?>