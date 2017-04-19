<?php require_once( "modelo/conexion.php");

$query="SELECT id_usuario,usuario,pass,nivel FROM t_usuarios" ;
$resultado=$mysqli ->query($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="assets/css/estilosGestion.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/estilosGestion.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Usuarios</title>
</head>

<body>
  <header>
      <?php require_once("vista/estaticas/header.php"); ?>
  </header>
<?php if(isset($_GET["estado"])){ 
        $accion=$_GET["estado"];
        switch ($accion) {
            case '1':
                echo '<div id="estado" style="display: block; margin-left: auto;
                            margin-right: auto; background-color: #00a577;
                            width: 30%; padding: 5px; border-radius: 20px;
                            font-size: 1.2em; color: #FAFAFA; text-align:center;
                            margin-bottom: 2%;" >
                        Proveedor eliminado exitosamente
                    </div>';
                break;
            case '2':
                echo '<div id="estado" style="display: block; margin-left: auto;
                            margin-right: auto; background-color: #00a577;
                            width: 30%; padding: 5px; border-radius: 20px;
                            font-size: 1.2em; color: #FAFAFA; text-align:center;
                            margin-bottom: 2%;" >
                        Proveedor modificado exitosamente
                    </div>';
                break;
            case '3':
                echo '<div id="estado" style="display: block; margin-left: auto;
                            margin-right: auto; background-color: #00a577;
                            width: 30%; padding: 5px; border-radius: 20px;
                            font-size: 1.2em; color: #FAFAFA; text-align:center;
                            margin-bottom: 2%;" >
                        Proveedor agregado exitosamente
                    </div>';
                break;
            
            default:
                echo "";
                break;
        }
    }
?>
    <div class="imagenAgregar">     
        <a href="?vista=nuevoUsuario">
            <img src="assets/agregar.png" class="">
        </a>
    </div>

    <center>
        <h1>Agregar nuevo usuario</h1></center>
    <center>
        <table id="registros">
            <thead>
                <tr>
                    <th>
                        Identificador
                    </th>
                    <th>
                        Usuario
                    </th>
                    <th>
                        Nivel
                    </th>
                    <th>
                        Editar
                    </th>
                    <th>
                    Eliminar
                    </th>

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
                        <a href="?vista=editarUsuario&id=<?php echo $row["id_usuario"];?>">
                            <i class="fa fa-pencil-square-o fa-lg"></i>
                        </a>   
                    </td>
                    <td>
                        <a href="?vista=eliminarUsuario&id=<?php echo $row["id_usuario"];?>">
                            <i class="fa fa-trash fa-lg"></i>
                        </a>   
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
