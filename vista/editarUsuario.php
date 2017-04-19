<?php  
if(isset($_GET["id"])){
	require_once('modelo/conexion.php');
    $id=$_GET['id'];

$query="select usuario,nivel,pass FROM t_usuarios WHERE id_usuario ='$id' ";
$resultado= $mysqli->query($query);
$row=$resultado->fetch_assoc();

	if(isset($_POST["txtUsuario"])){
	    $id=$_POST['id'];
	    $usuario=$_POST['txtUsuario'];
		$nivel=$_POST['txtNivel'];
		$pass=$_POST['txtPass'];
		
			$query="UPDATE t_usuarios SET usuario='".$usuario."',pass='".$pass."',nivel='".$nivel."' WHERE id_usuario='$id' ";
			$resultado=$mysqli->query($query);
	        header("Location:?vista=usuarios&estado=2");
		
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
    <link rel="stylesheet" href="assets/css/estilosGestion.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<title>Usuarios</title>
	</head>
	<body>
	<header>
		<?php require_once("vista/estaticas/header.php"); ?>
	</header>

		<center><h1>Modificar datos de Usuario</h1></center>
		<div class="formularioGestion">
			<form name="modificarUsuarios" method="POST" action="#">
			<br>
			<center>
			<table>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Usuario </b></td>
					<td width="30"><input type="text" name="txtUsuario" size="25" value="<?php echo $row['usuario']; ?>"/></td>
				</tr>
				<tr>
					<td width="20"><b>Nivel </b></td>
					<td width="30">
					<select name="cmbNivel" id="cmbNivel">
					<?php 
						if($row["nivel"] == "Administrador"){
					?>
						<option value="<?php echo $row['nivel']; ?>"><?php echo $row['nivel']; ?></option>
						<option value="Cliente">Cliente</option>
						<option value="Secretaria">Secretaria</option>
						
						<?php }else if ($row["nivel"] == "Cliente"){ ?>
							<option value="<?php echo $row['nivel']; ?>"><?php echo $row['nivel']; ?></option>
							<option value="Administrador">Administrador</option>
							<option value="Secretaria">Secretaria</option>

						<?php }else if ($row["nivel"] == "Secretaria"){ ?>
							<option value="<?php echo $row['nivel']; ?>"><?php echo $row['nivel']; ?></option>
							<option value="Administrador">Administrador</option>
							<option value="Cliente">Cliente</option>
						<?php } ?>
					</select>
					</td>
				</tr>
				<tr>
				<td width="20"><b>Password </b></td>
					<td width="30"><input  type="text" name="txtPass" size="25" placeholder="*********"></td>
				</tr>
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/></center></td>
				</tr>
			</table>
			</center>
			</form>
		</div>
		
		<header>
			<?php require_once("vista/estaticas/footer.html"); ?>
		</header>
	</body>
</html>