<?php
	require_once('modelo/conexion.php');
	$query="SELECT cliente,telefono,celular,correo FROM t_clientes where id_usuario = '".$_SESSION['idUsuario']."' ";
	$resultado=$mysqli ->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <link rel="stylesheet" href="assets/css/estilosGestion.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<title>Clientes</title>
	</head>
	<body>
	<header>
		<?php require_once("vista/estaticas/header.php");?>
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
						Cliente eliminado exitosamente
					</div>';
				break;
			case '2':
				echo '<div id="estado" style="display: block; margin-left: auto;
    						margin-right: auto; background-color: #00a577;
    						width: 30%; padding: 5px; border-radius: 20px;
    						font-size: 1.2em; color: #FAFAFA; text-align:center;
    						margin-bottom: 2%;" >
						Cliente modificado exitosamente
					</div>';
				break;
			case '3':
				echo '<div id="estado" style="display: block; margin-left: auto;
    						margin-right: auto; background-color: #00a577;
    						width: 30%; padding: 5px; border-radius: 20px;
    						font-size: 1.2em; color: #FAFAFA; text-align:center;
    						margin-bottom: 2%;" >
						Cliente agregado exitosamente
					</div>';
				break;
			
			default:
				echo "";
				break;
		}
	}
	?>
	
	<center><h1>Clientes</h1></center>

	<center>
		<table id="clientes">
			<thead>
				<tr>
					<!--<td>
						<b>id_cliente</b>
					</td>-->
					<td >
						<b>Cliente</b>
					</td>
					<td>
						<b>Teléfono</b>
					</td>
					<td>
						<b>Celular</b>
					</td>
					<td>Correo</td>
				</tr>
				
			</thead>
			<tbody >
			<?php while($row=$resultado->fetch_assoc()){ ?>
				<tr>
					<!--<td><?php /*echo $row['id_cliente'];*/?></td>-->
					<td><?php echo $row['cliente'];?></td>
					<td><?php echo $row['telefono'];?></td>
					<td><?php echo $row['celular'];?></td>
                    <td><?php echo $row['correo'];?></td>
					<td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
     </center>
     <footer>
     	<?php require_once("estaticas/footer.html");?>
     </footer>
   </body>
</html>