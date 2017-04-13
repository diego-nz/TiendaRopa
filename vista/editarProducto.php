<?php
if(isset($_GET["id"])){
	require_once('modelo/conexion.php');
    $id=$_GET['id'];

$query="select producto,caracteristicas,p_venta,p_compra,imagen,id_categoria,id_proveedor FROM t_productos WHERE id_producto ='$id' ORDER BY id_producto asc";
$resultado= $mysqli->query($query);
$row=$resultado->fetch_assoc();

	if(isset($_POST["txtProducto"])){
	    $id=$_POST['id'];
	    $producto=$_POST['txtProducto'];
	    $caract=$_POST['caract'];
	    $pVenta=$_POST['txtpVenta'];
	    $pCompra=$_POST['txtpCompra'];
	    $nombre_img = $_FILES['imagen']['name'];   
	    $categoria=$_POST['id_Categoria'];
	    $proveedor=$_POST['id_proveedor'];
	    
	    if ($_FILES["imagen"]["type"] == "image/jpeg" || $_FILES["imagen"]["type"] == "image/jpg" || $_FILES["imagen"]["type"] == "image/png"){    	
		$query="UPDATE t_productos SET producto='".$producto."',caracteristicas='".$caract."',p_venta='".$pVenta."',p_compra='".$pCompra."',imagen='".$nombre_img."',id_categoria='$categoria',id_proveedor='$proveedor' WHERE id_producto='$id' ";

			$resultado=$mysqli->query($query);
	        $destino = "imagenesProductos/".$nombre_img;
	        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);
	    
			header("Location:?vista=productos");
	    
	    }//llave de cierre de tipo de imagen
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
		<title>Productos</title>
	</head>
	<body>
	<header>
		<?php require_once("vista/estaticas/header.php"); ?>
	</header>
	<section class="contenedor">
			<center><h1>Modificar Información de Productos</h1></center>
		<form name="modificar_producto" method="POST" action="#" enctype="multipart/form-data">
		<br>
			<center>
			<div class="formularioGestion">
				<table width=50%>
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Producto: </b></td>
					<td width="30"><input type="text" name="txtProducto" size="25" value="<?php echo $row['producto']; ?>" required/></td>
				</tr>
				<tr>
					<td width="20"><b>Caracteristicas: </b></td>
					<td width="30">
					<input  type="text" name="caract" size="25" value="<?php echo $row['caracteristicas']; ?>" required/></td>
				</tr>
				<tr>
				<tr>
					<td width="20"><b>Categoria</b></td>
			   <td>
				   <select name="id_Categoria" required>
             	<?php 
                 $query="Select id_categoria,categoria from t_categorias";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){                 
                 ?>  
                	<option  value="<?php echo $row['id_categoria'];?>"><?php echo $row['categoria']; ?> </option>
                <?php
            		}
          		?>
                    </select>
                 </td>
			  </tr>
            
				<tr>
				<td width="20"><b>Proveedor</b></td>
			   <td>
				   <select name="id_proveedor" required>
             	<?php 
                 $query="Select id_proveedor,empresa from t_proveedores";
                 $resultado=$mysqli ->query($query);
                 while($row=$resultado->fetch_assoc()){                 
                 ?>  
                  <option  value="<?php
					echo $row['id_proveedor'];?>">
                    <?php echo $row['empresa']; ?> </option>
                    <?php
            }
          ?>
                    </select>
                 </td>
			  </tr>
            
				<tr>
					<td width="20"><b>Precio Venta: </b></td>
					<td width="30">
						<input  type="text" name="txtpVenta" size="25" value="<?php echo $row['p_venta']; ?>" required/>
					</td>
				</tr>
				<tr>
					<td width="20"><b>Precio Compra: </b></td>
					<td width="30">
						<input  type="text" name="txtpCompra" size="25" value="<?php echo $row['p_compra']; ?>" required/>
					</td>
				</tr>
				<tr>
				<td width="20"><b>Imagen de Producto </b></td>
				<td><input type="file" name="imagen" id="imagen" required/></td>
			</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/></center></td>
				</tr>
			</table>	
			</div>
			
			</center>
		</form>
	</section>
		
		<footer>
			<?php require_once("vista/estaticas/footer.html"); ?>
		</footer>
	</body>
</html>