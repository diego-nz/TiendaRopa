<?php
	require_once('modelo/conexion.php');
	$query="select id_producto,producto,caracteristicas,id_categoria,id_proveedor,p_venta,p_compra,imagen FROM t_productos";
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
		<title>Productos</title>
	</head>
	<body>
	<header>
		<?php require_once("estaticas/header.php"); ?>
	</header>
	<center>
	<div class="imagenAgregar">
		<a href="?vista=nuevoProducto">
			<img src="assets/agregar.png" >
		</a>
	</div>		
	 </center>
		<center><h1>Agregar nuevo producto</h1></center>
	<center>
		<table id="productos">
			<tdead>
				<tr>
					<th>Identificador</th>
					<th>Producto</th>
					<th>Características</th>
					<th>Precio Venta </th>
                    <th>Precio Compra</th>
                    <th>Imagen</th>
                    <th>Editar</th>
					<th>Eliminar</th>
				</tr>
				
			</tdead>
			<tbody >
					<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_producto'];?></td>
						<td><?php echo $row['producto'];?></td>
						<td><?php echo $row['caracteristicas'];?></td>
                        <td><?php echo '$'.$row['p_venta'];?></td>
                         <td><?php echo '$'.$row['p_compra'];?></td>
                        <td>
                        	<img src="imagenesProductos/<?php echo $row['imagen'];?>" alt="">
                        	<?php echo $row['imagen'];?>
                        </td>
						<td>
							<a href="?vista=editarProducto&id=<?php echo $row["id_producto"];?>">
								<i class="fa fa-pencil-square-o fa-lg"></i>
							</a>
						</td>
						<td>
							<a href="?vista=eliminarProducto&id=<?php echo $row["id_producto"];?>">
								<i class="fa fa-trash fa-lg"></i>
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
     </center>
     <footer>
     	<?php require_once("estaticas/footer.html"); ?>
     </footer>
   </body>
</html>