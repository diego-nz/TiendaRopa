<?php
 require_once("modelo/conexion.php");
if(isset($_POST["txtNombre"])){
    $cliente=$_POST['txtNombre'];
    $telefono=$_POST['txtTel'];
  	$celular=$_POST["txtCel"];
  	$correo=$_POST["txtMail"];
  	$estado=$_POST["cmbIdEstado"];
  	$municipio=$_POST["cmbIdMuni"];
  	$colonia=$_POST["cmbIdCol"];
  	$cp=$_POST["cmbIdCp"];
    $contrasena=hash('sha512', $_POST["txtContrasena"]);

    $query2 = "INSERT INTO t_usuarios values(null,'".$correo."','".$contrasena."')";
    $r=$mysqli->query($query2);

    $query="INSERT INTO t_clientes(cliente,telefono,celular,correo,id_estado,id_municipio,id_colonia,id_cp,id_usuario) VALUES ('".$cliente."','".$telefono."','".$celular."','".$correo."','".$estado."','".$municipio."','".$colonia."','".$cp."','last_insert_id()')";
    $resultado=$mysqli->query($query);
    
header("Location:?vista=iniciarSesion&estado=6"); 
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
		<title>Registro</title>
	</head>
  <body>
  <header>
        <?php require_once("vista/estaticas/header.php"); ?>
    </header>
	<center>
		<h1>Registrarse</h1>
		 <div class="formularioGestion">
		<form name="nuevoUsuario" method="POST" action="#">
			<table width="50%">
				<tr>
					<td width="20"><b>Nombre del cliente</b></td>
					<td width="30"><input type="text" name="txtNombre" size="25" required="" /></td>
				</tr>
             <tr>
				 <td width="20"><b>Telefono</b></td>
                 <td width="30"><input type="tel" name="txtTel" size="25" required="" /></td>
			</tr>
            <tr>
				<td width="20"><b>Celular</b></td>
				<td width="30"><input type="tel" name="txtCel" size="25"/></td>
			</tr>
			<tr>
				<td width="20"><b>Correo Electronico</b></td>
                <td width="30"><input type="email" name="txtMail" size="25"/></td>
			</tr> 
          
      
           
            <tr>
				<td width="20"><b>Estado</b></td>
                <td>
				  <select name="cmbIdEstado"> 
             		<?php 
                 		$query="Select id_estado,estado from t_estados group by 1";
                 		$resultado=$mysqli ->query($query);
                 		while($row=$resultado->fetch_assoc()){ 
					  ?>
                     
                  <option id="cmbIdEstado" name="cmbIdEstado" value="<?php echo $row['id_estado'];?>">
                      <?php echo $row['estado']; ?> 
                  </option>
                   <?php
                }
            ?>
                    </select>
                 </td>
			</tr>
            
			
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
                      <?php echo $row['municipio']; ?> 
                      </option>
                      <?php
                }
            ?>	
                    </select>
                 </td>
			</tr>
            
            
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
                      <?php echo $row['colonia']; ?>
                       </option>
                        <?php
                }
            ?>
                    </select>
                 </td>
			</tr>
           
            
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
                      <?php echo $row['cp']; ?> 
                      </option>
                      <?php
                }
            ?>
                    </select>
                 </td>
			</tr>
      <tr>
        <td width="20"><b>Contraseña</b></td>
          <td width="30"><input type="password" name="txtContrasena" size="25"/></td>
      </tr> 
            	 
			<tr>
				<td colspan="2"><center><input type=submit name="enviar" value="Registrar"/></center></td>
			</tr>
		</table>
			
		</form>
		</div>
	</center>
</body>
</html>