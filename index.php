<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/estilosPrincipales.css">
    <title>Inicio ropa</title>
</head>

<body>
    <header>
        <div class="menu">
            <ul>
                <li><a href="#"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
                <li><a href="#"><i class="fa fa-user fa-fw"></i>Mi cuenta</a></li>
                <li><a href="#"><i class="fa fa-heart fa-fw"></i>Favoritos</a></li>
                <li><a href="#"><i class="fa fa-lock fa-fw"></i>Inicio sesión</a></li>
                <li><a href="#"><i class="fa fa-building fa-fw"></i>Empresa</a></li>
                <li><a href="#"><i class="fa fa-info fa-fw"></i>Contacto</a></li>
            </ul>
        </div>
    </header>
    <div class="capaLogo">
        <div class="logo">
            <img src="assets/logo.png" alt="GIFTS">
        </div>
        <div class="buscador">
            <input type="text" placeholder="buscador" id="txtBuscar">
        </div>
        <div class="carrito">
            <ul>
                <li><i class="fa fa-shopping-cart fa-2x" style="color:#00BED7;"></i> Mi carrito</li>
                <li style="color:#00BED7;">(0) elementos | $0.00</li>
            </ul>
        </div>
    </div>
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
            <?php for ($i=1 ; $i <=2 ; $i++) { $prodAleatorio=rand(1,55); $prodAleatorio2=rand(1,55); $prodAleatorio3=rand(1,55); $prodAleatorio4=rand(1,55); $prodAleatorio5=rand(1,55); ?>
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

            <div id="redesSociales">
               <ul>
                   <li><i class="fa fa-facebook-square fa-2x" style="color:#02527F;"></i> Facebook</li>
                
                   <li><i class="fa fa-twitter-square fa-2x" style="color: #006D95;"></i> Twitter</li>
                
                   <li><i class="fa fa-youtube-square fa-2x" style="color:#8C1825;"></i> Youtube</li>
               </ul>
                
            </div>
            <div id="informacion">
                <ul>
                    <li>Información sobre la tienda</li>
                    <li>Pc Store, Tecámac, Cp. 55749, Tecámac Estado de México</li>
                    <li>Llámanos ahora: 5588503194</li>
                    <li>Email: contacto@pcstore.com</li>
                </ul>
            </div>
        </footer>
    </section>



</body>

</html>