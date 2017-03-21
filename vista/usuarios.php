<?php require_once( "modelo/conexion.php");
$query="SELECT id_usuario,usuario,pass,nivel FROM t_usuarios" ;
$resultado=$mysqli ->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="assets/css/estilosGestion.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <title>Usuarios</title>
</head>

<body>
  <header>
      <?php require_once("vista/estaticas/header.php"); ?>
  </header>
   <?php require_once("vista/menuSesion.php"); ?>
    <center>
        <a href="?vista=nuevo_usuario">
            <img src="assets/agregar.png">
        </a>
    </center>
    <center>
        <h1>Registro</h1></center>
    <center>
        <table id="registros">
            <thead>
                <tr>
                    <td>
                        <b>id_Usuario</b>
                    </td>
                    <td>
                        <b>Usuario</b>
                    </td>
                    <td>
                        <b>Nivel</b>
                    </td>
                    <td>
                    <b>Editar</b>
                    </td>
                    <td>
                    <b>Eliminar</b>
                    </td>

                </tr>

            </thead>
            <tbody>
                <?php while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td>
                        <?php echo $row[ 'id_usuario'];?>
                    </td>
                    <td>
                        <?php echo $row[ 'usuario'];?>
                    </td>
                    <td>
                        <?php echo $row[ 'nivel'];?>
                    </td>
                    <td>
                        <a href="?vista=modificar&id=<?php echo $row[" id_usuario "];?>"><img src="assets/edit.png"></a>
                    </td>
                    <td>
                        <a href="?vista=eliminar&id=<?php echo $row[" id_usuario "];?>"><img src="assets/eliminar.png"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
    <footer>
        <?php require_once("vista/estaticas/footer.html"); ?>
    </footer>
</body>

</html>
