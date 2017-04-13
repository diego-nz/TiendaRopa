<?php
	require_once('modelo/conexion.php');
	$query="SELECT id_cliente,cliente,telefono,celular,correo,id_estado,id_municipio,id_colonia,id_cp FROM t_clientes";
	$resultado=$mysqli ->query($query);
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
		<title>Usuarios</title>
	</head>
	<body>
	
	
	<center>
	<div class="imagenAgregar">
		<a href="nuevoCliente.php">
			<img src="assets/agregar.png" >
		</a>
	</div>
	 </center>
	
		<center><h1>Clientes</h1></center>
	
	
	
	<center>
		<table id="clientes">
			<thead>
				<tr>
					<td >
						<b>id_Cliente</b>
					</td>
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
					<td>Estado</td>
                    <td>Municipio</td>
                    <td>Colonia</td>
                    <td>Código Postal</td>
                    <td></td>
					<td></td>
				</tr>
				
			</thead>
			<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_cliente'];?></td>
						<td><?php echo $row['cliente'];?></td>
						<td><?php echo $row['telefono'];?></td>
						<td><?php echo $row['celular'];?></td>
                        <td><?php echo $row['correo'];?></td>
                        <td><?php echo $row['id_estado'];?></td>
                         <td><?php echo $row['id_municipio'];?></td>
                        <td><?php echo $row['id_colonia'];?></td>
                        <td><?php echo $row['id_cp'];?></td>
						<td>
						<div class="imagenEditarEliminar">
							<a href="?vista=modificarProd&id=<?php echo $row["id_cliente"];?>">
								<i class="fa fa-pencil-square-o fa-lg"></i>
							</a>
						</div>
						</td>
						<td>
						<div class="imagenEditarEliminar">
							<a href="?vista=eliminarProd&id=<?php echo $row["id_cliente "];?>">
								<i class="fa fa-trash fa-lg"></i>
							</a>
						</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
     </center>
   </body>
</html>