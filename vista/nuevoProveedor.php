<?php
 require("conexion.php");

	if(isset($_POST["txtEmpresa"])){
    $empresa=$_POST['txtEmpresa'];
    $contacto=$_POST['txtContacto'];
    $telefono=$_POST['txtTel'];
    $correo=$_POST['txtMail'];
    $celular=$_POST['txtCel'];
    $estado=$_POST['cmbIdEstado'];
	$municipio=$_POST['cmbIdMuni'];
	$colonia=$_POST['cmbIdCol'];
	$cp=$_POST['cmbIdCp'];
	
    $query="INSERT INTO t_proveedores(empresa,contacto,telefono,correo,celular,id_estado,id_municipio,id_colonia,id_cp) VALUES ('".$empresa."','".$contacto."','".$telefono."','".$correo."','".$celular."','".$estado."','".$municipio."','".$colonia."','".$cp."')";
    $resultado=$mysqli->query($query);
  
	
	header("Location:?vista=proveedores");
    
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
    <link rel="stylesheet" href="assets/css/estilosGestion.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<title>Agregar un nuevo proveedor</title>
	</head>
<body>

    <header>
        <?php require_once("vista/estaticas/header.php"); ?>
    </header>

	<center>
		<h1>Agregar Proveedor</h1>
        <div class="formularioGestion">
            <form name="nuevoProveedor" method="POST" action="#">
            <table width="50%">
                    <tr>
                        <td width="20"><b>Empresa</b></td>
                        <td width="30"><input type=text name=txtEmpresa size="25"/></td>
                    </tr>
                    <tr>
                        <td width="20"><b>Contacto</b></td>
                        <td width="30"><input type=text name=txtContacto size="25"/></td>
                    </tr>
                     <tr>
                        <td width="20"><b>Telefono</b></td>
                        <td width="30"><input type=text name=txtTel size="25"/></td>
                    </tr>
                     <tr>
                        <td width="20"><b>Correo</b></td>
                        <td width="30"><input type=text name=txtMail size="25"/></td>
                    </tr>
                    
                    <tr>
                        <td width="20"><b>Celular</b></td>
                        <td width="30"><input type=text name=txtCel size="25"/></td>
                    </tr>
                    <tr>
                    <td width="20"><b>Estado</b></td>
                         <td>
                          <select name="cmbIdEstado"> 
                     <?php 
                         $query="Select id_estado,estado from t_estados";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){ 
                                         
                         ?>
                             
                          <option id="cmbIdEstado" name="cmbIdEstado" value="<?php echo $row['id_estado'];?>">
                              <?php echo $row['estado']; ?> </option>
                            </select>
                         </td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                    <tr>
                        <td width="20"><b>Municipio</b></td>
                         <td>
                           <select name="cmbIdMuni">
                     <?php 
                         $query="Select id_municipio,municipio from t_municipios";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){              
                         ?>
                             
                          <option id="cmbIdMuni" name="cmbIdMuni" value="<?php
                            echo $row['id_municipio'];?>">
                              <?php echo $row['municipio']; ?> </option>
                            </select>
                         </td>
                    </tr>
                    <?php
                        }
                    ?>  
                    
                  <tr>
                        <td width="20"><b>Colonia</b></td>
                         <td>
                           <select name="cmbIdCol">
                     <?php 
                         $query="Select id_colonia,colonia from t_colonias";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){              
                         ?>  
                          <option id="cmbIdCol" name="cmbIdCol" value="<?php
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
                           <select name="cmbIdCp">
                     <?php 
                         $query="Select id_cp,cp from t_cp";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){               
                         ?>
                          <option id="cmbIdCp" name="cmbIdCp" value="<?php
                            echo $row['id_cp'];?>">
                              <?php echo $row['cp']; ?> </option>
                            </select>
                         </td>
                    </tr>
                    <?php
                        }
                    ?>                                                                  
                    <tr>
                        <td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/></center></td>
                    </tr>   
            </table>
        </form>
        </div>
		
	</center>
    <header>
        <?php require_once("vista/estaticas/footer.html"); ?>
    </header>
</body>
</html>