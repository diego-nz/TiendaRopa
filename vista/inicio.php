<?php
session_start();
if(isset($_SESSION["nombreUsuario"])){
   echo "Bienvenido ".$_SESSION["nombreUsuario"]." ".$_SESSION["nivelUsuario"];
}
?>
<!DOCTYPE html>
<html lang="en">

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
            <li><a href="#">Más vendidos</a></li>
            <li><a href="#">Cumpleaños</a></li>
        </ul>
    </nav>
    <section>
        <!----Aqui va el slider--->
           <ul class="bxslider">
              <li><img src="imagenesSlider/1.jpg" /></li>
              <li><img src="imagenesSlider/2.jpg" /></li>
              <li><img src="imagenesSlider/3.jpg" /></li>
              <li><img src="imagenesSlider/4.jpg" /></li>
            </ul>


        <div class="categorias">
            <ul>
                <li class="centrado" style="background-color: #0090F7;"><a href="#" style="color: #FFFFFD;">Categorias</a></li>
                <li><a href="#">Dama</a></li>
                <li><a href="#">Caballero</a></li>
                <li><a href="#"> Niños</a></li>
                <li><a href="#">Calzado</a></li>
                <li><a href="">Accesorios</a></li>
            </ul>
        </div>

        <div class="productos">

            <?php
            require_once("modelo/conexion.php");
            //for ($i=1 ; $i <=2 ; $i++) {
                $mysqli->real_query("SELECT producto,p_venta,imagen from t_productos limit 0,10");
                $query=$mysqli->store_result();
                if($query){
                    while($row = $query->fetch_assoc()){

            ?>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="imagenesProductos/<?php echo $row['imagen']; ?>" alt="" /></a>
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
        <div id="productosPaginados">

        </div>

            <div id="paginacion">

               <span id="flechaIzquierda">
                <a href="#"><i class="fa fa-chevron-circle-left fa-5x"></i></a>
               </span>

                <!---AJAX consulta-->
                <?php

                    $mysqli -> real_query("SELECT count(id_producto)'total' FROM t_productos");
                    $query=$mysqli->store_result();
                    if($query){
                        $row = $query->fetch_assoc();
                            $total = intval($row['total']/10);
                            for($i=1;$i<=$total;$i++ ){
                ?>
                                <span id="paginas">
                                    <a href="#" id="<?php echo $i; ?>" class="numeroPagina" onclick="siguientePagina();"><?php echo $i; ?></a>
                                </span>
                <?php
                            }
                    }
                ?>

                <span id="flechaDerecha">
                    <a href="#"><i class="fa fa-chevron-circle-right fa-5x"></i></a>
                </span>



            </div>
        <footer>

            <?php require_once("estaticas/footer.html"); ?>
        </footer>
    </section>

</body>
</html>
