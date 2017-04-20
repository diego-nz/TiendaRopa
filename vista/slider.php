<?php
	require_once('modelo/conexion.php');
	$query="SELECT id_imagen,imagen,descripcion FROM t_slider";
	$resultado=$mysqli ->query($query);
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<script type="text/javascript" src="assets/js/jquery.js"></script>
    	<script type="text/jscript" src="assets/js/jquery.bxslider.min.js"></script>
    	<link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    	<script type="text/javascript" src="controlador/eventosInicio.js"></script>
    	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    	<link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    	<link rel="stylesheet" href="assets/css/estilosMovil.css">
    	<link rel="stylesheet" href="assets/css/estilosGestion.css">
    	<title>ADMINISTRADOR DE SLIDER</title>
	</head>
	<body>
	<?php require_once("vista/estaticas/header.php"); ?>
		<center><h1>ADMINISTRADOR DE SLIDER</h1></center>
	
	<center>
	<div class="imagenAgregar">
		<a href="?vista=nuevoSlider">
			<img src="assets/agregar.png" >
		</a>
	</div>
	 </center>
	
		
	<center>
		<table id="slider">
			<thead>
				<tr>
					<td >
						<b>id_Slider</b>
					</td>
					<td >
						<b>Imagen</b>
					</td>
					<td>
						<b>Descripción</b>
					</td>
					<td >
						<b></b>
					</td>
				</tr>
				
			</thead>
			<tbody >
				<?php while($row=$resultado->fetch_assoc()){ ?>
					<tr>
					    <td><?php echo $row['id_imagen'];?></td>
					    <td><?php echo $row['imagen'];?></td>
						<td><?php echo $row['descripcion'];?></td>
						
						<td>
							<a href="?vista=borrarSlider&id=<?php echo $row["id_imagen"];?>"><img src="assets/eliminar.png"></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
		</table>
		</center>
		<?php require_once("vista/estaticas/footer.html"); ?>
   </body>
</html>