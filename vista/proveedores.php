<?php
	require('modelo/conexion.php');
	$query="SELECT id_proveedor,empresa,contacto,telefono,correo,celular,id_estado,id_municipio,id_colonia,id_cp FROM t_proveedores";
	$resultado=$mysqli ->query($query);
	?>

<!DOCTYPE html>
<html lang="es">
<head>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    	<link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    	<link rel="stylesheet" href="assets/css/estilosMovil.css">
    	<link rel="stylesheet" href="assets/css/estilosGestion.css">
    	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<title>Lista de Proveedores</title>
</head>
	<body>
		<header>
			<?php require_once("vista/estaticas/header.php");?>
		</header>
	<center>
		<div class="imagenAgregar">
			<a href="nuevoProveedor.php">
				<img src="assets/agregar.png" >
			</a>
		</div>
	 </center>

	 <center><h1>Agregar nuevo proveedor</h1></center>
	 <center>
		<table id="proveedores">
			<thead>
				<tr>
					<th>Identificador proveedor</th>
					<th>Empresa</th>
					<th>Contacto</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Celular</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Colonia</th>
                    <th>Código Postal</th>
                    <th>Editar</th>
					<th>Eliminar</th>
				</tr>
				
			</thead>
			<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_proveedor'];?></td>
						<td><?php echo $row['empresa'];?></td>
						<td><?php echo $row['contacto'];?></td>
						<td><?php echo $row['telefono'];?></td>
                        <td><?php echo $row['correo'];?></td>
                        <td><?php echo $row['celular'];?></td>
                        <td><?php echo $row['id_estado'];?></td>
                        <td><?php echo $row['id_municipio'];?></td>
                        <td><?php echo $row['id_colonia'];?></td>
                        <td><?php echo $row['id_cp'];?></td>
						<td>
								<a href="editarProveedor.php?id=<?php echo $row["id_proveedor"];?>"><i class="fa fa-pencil-square-o fa-lg"></i></a>
						</td>
						<td>
								<a href="eliminarProveedor.php?id=<?php echo $row["id_proveedor"];?>"><i class="fa fa-trash fa-lg"></i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
     </center>
     <footer>
     	<?php require_once("vista/estaticas/footer.html");?>
     </footer>
   </body>
</html>