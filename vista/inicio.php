<?php
    if(isset($_SESSION)){
        session_start();
        echo $_SESSION["nombreUsuario"];
        echo $_SESSION["nivelUsuario"];
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
        <?php require_once("estaticas/header.html"); ?>
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
             <li><img src="assets/slider/welcome.png" /></li>
              <li><img src="assets/slider/1.jpg" /></li>
              <li><img src="assets/slider/2.jpg" /></li>
              <li><img src="assets/slider/3.jpg" /></li>
              <li><img src="assets/slider/4.jpg" /></li>
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
            <?php for ($i=1 ; $i <=2 ; $i++) {
                $prodAleatorio=rand(1,55);
                $prodAleatorio2=rand(1,55);
                $prodAleatorio3=rand(1,55);
                $prodAleatorio4=rand(1,55);
                $prodAleatorio5=rand(1,55);
            ?>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="productos/<?php echo $prodAleatorio; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="productos/<?php echo $prodAleatorio2; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="productos/<?php echo $prodAleatorio3; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="productos/<?php echo $prodAleatorio4; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="?vista=producto&pro="><img src="productos/<?php echo $prodAleatorio5; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <?php } ?>

            <div id="paginacion">

               <span id="flechaIzquierda">
                <i class="fa fa-chevron-circle-left fa-5x"></i>
               </span>


                <span id="flechaDerecha">
                    <i class="fa fa-chevron-circle-right fa-5x"></i>
                </span>

            </div>
        </div>
        <footer>

            <?php require_once("estaticas/footer.html"); ?>
        </footer>
    </section>

</body>
</html>
