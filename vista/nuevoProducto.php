<?php
 require_once("modelo/conexion.php");

	if(isset($_POST["txtNProducto"])){
    $producto=$_POST['txtNProducto'];
    $caracteristicas=$_POST['txtCaract'];
    $pVenta=$_POST['txtpVenta'];
    $pCompra=$_POST['txtpCompra'];
    $nombre_img = $_FILES['imagen']['name']; 
    $categoria=$_POST['idCategoria'];
    $proveedor=$_POST['idProveedor'];
    
    if ($_FILES["imagen"]["type"] == "image/jpeg" || $_FILES["imagen"]["type"] == "image/jpg" || $_FILES["imagen"]["type"] == "image/png"){
    $query="INSERT INTO t_productos(producto,caracteristicas,p_venta,p_compra,imagen,id_categoria,id_proveedor) 
    VALUES ('".$producto."','".$caracteristicas."','".$pVenta."','".$pCompra."','".$nombre_img."','".$categoria."','".$proveedor."')";
		
    $resultado=$mysqli->query($query);
    $destino = "imagenesProductos/".$nombre_img;
    move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);
	
   header("Location:?vista=productos");
    
 }//LLAVE DE IMAGEN
}//POST	
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
	<title>Agregar un nuevo producto</title>
</head>
<body>
<header>
	    <?php require_once("vista/estaticas/header.php"); ?>
	</header>
	<center>
		<h1>Agregar Productos</h1>
        <div class="formularioGestion">
            <form name="nuevoProducto" method="POST" action="#" enctype="multipart/form-data">
                <table width="50%">
                    <tr>
                        <td width="20"><b>Producto</b></td>
                        <td width="30"><input type=text name=txtNProducto size="25" required/></td>
                    </tr>
                    <tr>
                        <td width="20"><b>Caracteristicas</b></td>
                        <td width="30"><input type=text name=txtCaract size="25" required/></td>
                    </tr>
                     <tr>
                        
                     <tr>
                        <td width="20"><b>Precio Venta</b></td>
                        <td width="30"><input type=text name=txtpVenta size="25" required/></td>
                    </tr>
                     <tr>
                        <td width="20"><b>Precio Compra</b></td>
                        <td width="30"><input type=text name=txtpCompra size="25" required/></td>
                    </tr>
                    <tr>
                        <td width="20"><b>Imagen de Producto </b></td>
                        <td><input type="file" name="imagen" id="imagen" required/></td>
                    </tr>
                    
                    <tr>
                    <td width="20"><b>Categoria</b></td>
                         <td>
                          <select name="idCategoria">
                          <?php 
                         $query="select id_categoria,categoria from t_categorias group by 1";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){               
                         ?> 
                          <option id="idCategoria" name="idCategoria" value="<?php echo $row["id_categoria"]; ?>">
                              <?php echo $row["categoria"]; ?> 
                            </option>
                            <?php
                                }
                            ?>
                            </select>
                         </td>
                    </tr>
                    
                    <tr>
                        <td width="20"><b>Proveedor</b></td>
                         <td>
                           <select name="idProveedor">
                     <?php 
                         $query="Select id_proveedor,empresa from t_proveedores";
                         $resultado=$mysqli ->query($query);
                         while($row=$resultado->fetch_assoc()){ 
                                         
                         ?>
                             
                          <option id="idProveedor" name="idProveedor" value="<?php echo $row['id_proveedor'];?>">
                                   <?php echo $row['empresa']; ?> 
                            </option>
                             <?php
                        }
                    ?>
                            </select>
                         </td>
                    </tr>
                    
                        <tr>
                            <td colspan="2"><center><input type="submit" name="Guardar" value="Guardar"/></center></td>
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