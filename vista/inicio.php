<?php
session_start();
if(isset($_SESSION["nombreUsuario"])){
   echo "Bienvenido ".$_SESSION["nombreUsuario"]." ".$_SESSION["nivelUsuario"];
}
?>
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
        <div id="resultadosBuscador"></div>
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
        
        <div class="" id="slider">
           <ul class="bxslider">
              <li><img src="imagenesSlider/1.jpg" /></li>
              <li><img src="imagenesSlider/2.jpg" /></li>
              <li><img src="imagenesSlider/3.jpg" /></li>
              <li><img src="imagenesSlider/4.jpg" /></li>
            </ul>
          </div>


        <div class="categorias">
            <ul>
                <li class="centrado" style="background-color: #0090F7;"><a href="#" style="color: #FFFFFD;">Categorias</a></li>
                <?php
                    require_once("modelo/conexion.php");
                    $mysqli->real_query("SELECT id_categoria,categoria from t_categorias");
                    $query=$mysqli->store_result();
                    if($query){
                        while($row = $query->fetch_assoc()){
                ?>
                <li><a href="#" id="<?php echo $row['id_categoria']; ?>" class="cate"><?php echo $row["categoria"];?></a></li>
                <?php  }
                    }
                ?>
            </ul>
        </div>

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
                <a href="?vista=producto&pro="<?php echo $row['id_producto']; ?>><img src="imagenesProductos/<?php echo $row['imagen']; ?>" alt="" /></a>
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

            <div id="paginacion">
                <?php

                $mysqli -> real_query("SELECT count(id_producto)'total' FROM t_productos");
                    $query=$mysqli->store_result();
                    if($query){
                        $row = $query->fetch_assoc();
                            $total = intval($row['total']/10);

                ?>
               <span id="flechaIzquierda" onclick="flechasPaginacion('izquierda');">
                <a href="#"><i class="fa fa-chevron-circle-left fa-5x"></i></a>
               </span>

                <!--AJAX consulta-->
                <?php
                            for($i=1;$i<=$total;$i++ ){
                ?>
                                <span id="paginas">
                                    <a href="#" id="<?php echo $i; ?>" class="numeroPagina" onclick="animacionScroll('.productos');"><?php echo $i; ?></a>
                                </span>
                <?php
                            }
                    }
                ?>

                <span id="flechaDerecha" onclick="flechasPaginacion('derecha'); animacionScroll('.productos')">
                    <a href="#"><i class="fa fa-chevron-circle-right fa-5x"></i></a>
                </span>



            </div>
        <footer>

            <?php require_once("estaticas/footer.html"); ?>
        </footer>
    </section>

</body>
</html>
