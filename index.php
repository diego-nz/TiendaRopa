<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <title>Gifts</title>
</head>

<body>
    <header>
        <?php require_once("view/estaticas/header.html"); ?>
    </header>
    <section>

        <!----Aqui va el slider--->
        <div class="slider">

        </div>


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
                <a href="productos.php?pro="><img src="imagenes/productos/<?php echo $prodAleatorio; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="productos.php?pro="><img src="imagenes/productos/<?php echo $prodAleatorio2; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="productos.php?pro="><img src="imagenes/productos/<?php echo $prodAleatorio3; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="productos.php?pro="><img src="imagenes/productos/<?php echo $prodAleatorio4; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>
            <div class="imagenProducto">
                <a href="productos.php?pro="><img src="imagenes/productos/<?php echo $prodAleatorio5; ?>.png" alt="" /></a>
                <div class="precioProducto">
                    $200.00
                </div>
                <div class="nombreProducto">
                    Nombre
                </div>

                <a href="#" class="centrado btn">comprar</a>

            </div>

            <?php } ?>
        </div>
        <footer>

            <?php require_once("view/estaticas/footer.html"); ?>
        </footer>
    </section>



</body>

</html>
