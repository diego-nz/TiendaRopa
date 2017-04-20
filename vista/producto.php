<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/jscript" src="assets/js/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <script type="text/javascript" src="controlador/eventosInicio.js"></script>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <link rel="stylesheet" href="assets/css/estilosMovil.css">
    <title>Gifts</title>
</head>

<body>
    <header>
        <?php require_once("estaticas/header.php"); ?>
        
    </header>

    <nav>
        <ul>
            <li><a href="#">Hogar</a></li>
            <li><a href="#">Joyeria y relojes</a></li>
            <li><a href="#">Aniversarios</a></li>
            <li><a href="#" id="masVendidos">Más vendidos</a></li>
            <li><a href="#">Cumpleaños</a></li>
        </ul>
    </nav>
    <section>
        
   <div class="productos">
    
       	<div>
				<div class="quienes">
					<div class="md7 s11" style="vertical-align:top;">
						<div class="md12 s12">
							
						</div>
						<div class="md2 s2" style="vertical-align:top;">
                           
                            <?php
                                require_once("modelo/conexion.php");
                                if(isset($_GET['pro'])){
                                $producto = $_GET['pro'];
                                $mysqli->real_query('SELECT id_producto,imagen,lado1,lado2,lado3 FROM t_productos 
                                where id_producto='.$_GET['pro']);
            
                                $query = $mysqli->store_result();
                                    if($query){
                 while ($row = $query->fetch_assoc()){
                            ?>
							     <a href="#" id="img" class="zoom" title="" onmouseover="img.src='imagenesProductos/<?php echo $row['imagen']; ?>'">
                                    <img width="78" height="99" src="imagenesProductos/<?php echo $row['imagen']; ?>">
							     </a>
							 <?php
                }
                                    }
                  
                            ?>
                            <?php }else{
                            echo "No esta funcionando";
                            } ?>
                            
                            <?php
                            require_once("modelo/conexion.php");
                            $mysqli->real_query('SELECT imagen,lado1,lado2,lado3 FROM t_productos 
                            where id_producto='.$_GET['pro']);
            
                            $query = $mysqli->store_result();
                            if($query){
                 while ($row = $query->fetch_assoc()){
                            ?>
                                <a href="#" class="zoom" title="" onmouseover="imgprincipal(lado1)">
								    <img width="78" height="99" src="imagenesProductos/<?php echo $row['lado1']; ?>" >
							     </a>
							
                             <?php
                }
                            }
                            ?>
                            
                            <?php
                            require_once("modelo/conexion.php");
                            $mysqli->real_query('SELECT imagen,lado1,lado2,lado3 FROM t_productos 
                            where id_producto='.$_GET['pro']);
            
                            $query = $mysqli->store_result();
                            if($query){
                 while ($row = $query->fetch_assoc()){
                            ?>
                                <a href="#" class="zoom" title="" onmouseover="imgprincipal('lado2')">
								    <img width="78" height="99" src="imagenesProductos/<?php echo $row['lado2']; ?>" >
							     </a>
							
                             <?php
                }
                            }
                              ?>
                             <?php
                            require_once("modelo/conexion.php");
                            $mysqli->real_query('SELECT imagen,lado1,lado2,lado3 FROM t_productos 
                            where id_producto='.$_GET['pro']);
            
                            $query = $mysqli->store_result();
                            if($query){
                 while ($row = $query->fetch_assoc()){
                            ?>
                                <a href="#" class="zoom" title="" onmouseover="this.src='imagenesProductos/<?php echo $row['lado3']; ?>';" >
								    <img width="78" height="99" src="imagenesProductos/<?php echo $row['lado3']; ?>" >
							     </a>
                            
                             <?php
                }
                            }
                             ?>
						</div>
                            <?php
                            require_once("modelo/conexion.php");
                            $mysqli->real_query('SELECT imagen,lado1,lado2,lado3 FROM t_productos 
                            where id_producto='.$_GET['pro']);
            
                            $query = $mysqli->store_result();
                            if($query){
                 while ($row = $query->fetch_assoc()){
                            ?>
						          <div class="md10 s10" id="principal">
							         <img zz height="425" src="imagenesProductos/<?php echo $row['lado3']; ?>" class=""/>
						          </div>
                            <?php
                 }
                            }
                            ?>
                        <script type="text/javascript">
							function imgprincipal(id){
								var capa = document.getElementsById("principal");
								capa.innerHTML = "<img width='400' height='425' src='imagenesProductos/"+id+".PNG'/>";
							}
						</script>
						
						
					</div>
                    
    <?php
            include "modelo/conexion.php";
 if(isset($_GET['pro'])){
        $producto = $_GET['pro'];
        

                 $mysqli->real_query('SELECT * FROM t_productos 
                 where id_producto='.$_GET['pro']);
            
                 $query = $mysqli->store_result();
        if($query){
                 while ($row = $query->fetch_assoc()){
?>
					<div class="md5 s11" style="vertical-align:top;">
						<div class="subtproducto">
							
                                                 
						</div>
						<div class="estrellas">
							<i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_border</i>
						</div>
						<div class="tituloprodu">
							<h1 class="nombreProducto"><?php echo $row["producto"]; ?></h1>
						</div>
						<div class="precio">
							<font><h1>$</i><?php echo $row["p_venta"]; ?></h1></font>
						</div>
						
						<div class="listdescri">
							<h1 class="caracteristicas"><?php echo utf8_encode($row["caracteristicas"]); ?></h1>
						</div>
						
						<form method="post" action="?vista=carritoCompra">
						    <input type="hidden" value="<?php echo $row['id_producto']?>" name="idProducto"/>
						    Cantidad: <input type="number" value="0" name="cantidad" min="0" max="10"/><br><br>
						    
						    <input type="submit" value="Agregar al carrito"/>
						    
						</form>
						
						<!--<div>
						  Cantidad:  <input type='number' name="cantidad" value="0" min="0" max="10"/>
						</div>
						<div class="btn"> 
						    <a href="?vista=carritoCompra">Agregar al carrito</a>
						</div>-->
						
					</div>
				</div>
			</div>
                   
                 <?php
                            }
        }
                   // }
            ?>          

<?php }else{
      echo "No esta funcionando";
    } ?>

        </div>  
        <h2>Productos Relacionados</h2>
        <div class="productos">
            <div id="cargando"></div>
            <?php
            //for ($i=1 ; $i <=2 ; $i++) {
                $mysqli->real_query("SELECT id_producto,producto,p_venta,imagen from t_productos order by rand() limit 0,10");
                $query=$mysqli->store_result();
                if($query){
                    while($row = $query->fetch_assoc()){

            ?>
            <!--vista se refiere al nombre de la pagina(sin .php) & significa otra variable y pro es la variable del id-->
            <div class="imagenProducto">
                <?php $prod = $row['id_producto'];?>
<a href="?vista=producto&pro=<?php echo $prod; ?>" > <img src="imagenesProductos/<?php echo $row['imagen']; ?>" alt="" /></a>
                
                <div class="precioProducto">
                    <?php echo '$'.$row["p_venta"]; ?>
                </div>
                <div class="nombreProducto">
                    <?php echo $row["producto"]; ?>
                </div>

                <a href="#" class="centrado btn">comprar</a>
            </div>

            <?php
                            }
                        }
                   // }
            ?>

        </div>


       
         <footer>

            <?php require_once("estaticas/footer.html"); ?>
        </footer>
    </section>
    </body>

</html>