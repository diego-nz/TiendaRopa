<?php
 require("modelo/conexion.php");
if(isset($_POST["txtNombre"])){
    $nombre=$_POST['txtNombre'];
    $nivel=$_POST['cmbNivel'];
	$contrasena=$_POST["txtContrasenia"];
	$contrasenia=hash("sha512", $contrasena);
    $query="INSERT INTO t_usuarios(usuario,nivel,pass) VALUES ('$nombre','$nivel','$contrasenia')";
    $resultado=$mysqli->query($query);
    
header("Location:?vista=usuarios&estado=3");
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
	<title>Agregar un nuevo usuario</title>
</head>
<body>
<header>
	<?php require_once("vista/estaticas/header.php"); ?>
</header>
	<center>
		<h1>Nuevo Usuario</h1>
		<div class="formularioGestion">
			<form name="nuevoUsuario" method="POST" action="#">
				<table width="50%">
					<tr>
						<td width="20"><b>Nombre de Usuario</b></td>
						<td width="30"><input type=text name=txtNombre size="25"/></td>
					</tr>
		             <tr>
						<td width="20"><b>Nivel</b></td>
		                 <td>
			                 <select name="cmbNivel" id="cmbNivel">
			                 	<option value="Administrador">Administrador</option>
			                 	<option value="Secretaria">Secretaria</option>
			                 </select>
		                 </td>
		            <tr>
						<td width="20"><b>Contraseña</b></td>
						<td width="30"><input type="password" name=txtContrasenia size="25"/></td>
					</tr>
					<tr>
						<td colspan="2"><center><input type=submit name="enviar" value="Registrar"/></center></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
	<footer>
		<?php require_once("vista/estaticas/footer.html"); ?>
	</footer>
</body>
</html>