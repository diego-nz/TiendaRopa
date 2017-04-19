<?php
    if(isset($_GET["id"])){
	require_once('modelo/conexion.php');
    $id=$_GET['id'];

$query="SELECT empresa,contacto,telefono,correo,celular,id_estado,id_municipio,id_colonia,id_cp FROM t_proveedores WHERE id_proveedor ='$id'";
$resultado= $mysqli->query($query);
$row=$resultado->fetch_assoc();

if(isset($_POST["txtEmpresa"])){
    $id=$_POST['id'];
    $empresa=$_POST['txtEmpresa'];
    $contacto=$_POST['contacto'];
    $telefono=$_POST['txtTel'];
    $correo=$_POST['txtMail'];
    $celular=$_POST['txtCel'];
    $estado=$_POST['idEstado'];
    $municipio=$_POST['idMunicipio'];
    $colonia=$_POST['idColonia'];
    $cp=$_POST['idCp'];


               	
$query="UPDATE t_proveedores SET empresa='".$empresa."',contacto='".$contacto."',telefono='".$telefono."',correo='".$correo."',celular='".$celular."',id_estado='".$estado."',id_municipio='".$municipio."',id_colonia='".$colonia."',id_cp='".$cp."' WHERE id_proveedor='$id'";

    $resultado=$mysqli->query($query);
    
    
   header("Location:?vista=proveedores&estado=2");
  }//Envio de formulario
}//Llenar campos
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/estilosLogin.css">
    <link rel="stylesheet" href="assets/css/estilosGestion.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<title>Proveedores</title>
	</head>
	<body>
        <header>
            <?php require_once("vista/estaticas/header.php"); ?>
        </header>
		<center><h1>Modificar Informacion de proveedor</h1></center>
        <div class="formularioGestion">
            <form name="modificar_proveedor" method="POST" action="#">
            <br>
            <center>
            <table width=50%>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <td width="30"><b>Nombre de la empresa </b></td>
                    <td width="20"><input type="text" name="txtEmpresa" size="25" value="<?php echo $row['empresa']; ?>"/></td>
                </tr>
                <tr>
                    <td width="20"><b>Contacto</b></td>
                    <td width="30"><input  type="text" name="contacto" size="25" value="<?php echo $row['contacto']; ?>"></td>
                </tr>
                <tr>
                <td width="20"><b>Telefono</b></td>
                    <td width="30"><input  type="text" name="txtTel" size="25" value="<?php echo $row['telefono']; ?>"></td>
                </tr>
                <tr>
                    <td width="20"><b>Correo electronico</b></td>
                    <td width="30"><input  type="text" name="txtMail" size="25" value="<?php echo $row['correo']; ?>"></td>
                </tr>
                
                <tr>
                    <td width="20"><b>Celular </b></td>
                    <td width="30"><input  type="text" name="txtCel" size="25" value="<?php echo $row['celular']; ?>"></td>
                </tr>
                <tr>
                    <td width="20"><b>Estado </b></td>
                    
               <td>
                   <select name="idEstado">
             <?php 
                 $query="Select id_estado,estado from t_estados";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){ 
                                 
                 ?>
                     
                  <option id="idEstado" name="idEstado" value="<?php
                    echo $row['id_estado'];?>">
                      <?php echo $row['estado']; ?> </option>
                    </select>
                 </td>
                </tr>
            <?php
                }
            ?>
                <tr>
                    <td width="20"><b>Municipio </b></td>
               <td>
                   <select name="idMunicipio">
             <?php 
                 $query="Select id_municipio,municipio from t_municipios";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){ 
                                 
                 ?>
                     
                  <option id="idMunicipio" name="idMunicipio" value="<?php
                    echo $row['id_municipio'];?>">
                      <?php echo $row['municipio']; ?> </option>
                    </select>
                 </td>
                </tr>
            <?php
           }
         ?>
                <tr>
                    <td width="20"><b>Colonia </b></td>
               <td>
                   <select name="idColonia">
                <?php 
                 $query="Select id_colonia,colonia from t_colonias";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){                 
                 ?>  
                  <option id="idColonia" name="idColonia" value="<?php
                    echo $row['id_colonia'];?>">
                    <?php echo $row['colonia']; ?> </option>
                    </select>
                 </td>
              </tr>
            <?php
            }
          ?>
                <tr>
                    <td width="20"><b>Codigo Postal</b></td>
               <td>
                   <select name="idCp">
                <?php 
                 $query="Select id_cp,cp from t_cp";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){                 
                 ?>  
                  <option id="idCp" name="idCp" value="<?php
                    echo $row['id_cp'];?>">
                    <?php echo $row['cp']; ?> </option>
                    </select>
                 </td>
              </tr>
            <?php
            }
          ?>
                <tr>
                    <td colspan="2">
                     <center>
                         <input type=submit name="enviar" value="Enviar"/></center>
                    </td>   
                </tr>
                </table>
                </center>
            </form>
        </div>
        <footer>
            <?php require_once("vista/estaticas/footer.html"); ?>
        </footer>
	</body>
</html>