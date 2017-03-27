<div class="menu">
    <ul>
        <!----Sustituir los # con el nombre de la pagina a donde va ser dirigido--->
        <li><a href="?vista=inicio"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
        <li><a href="#"><i class="fa fa-user fa-fw"></i>Mi cuenta</a></li>
        <li><a href="#"><i class="fa fa-heart fa-fw"></i>Favoritos</a></li>
        <?php
        if(isset($_SESSION["nombreUsuario"])){?>
        <li><a href="?vista=cerrarSesion"><i class="fa fa-lock fa-fw"></i>Cerrar sesión</a></li>
        <?php }else{ ?>
        <li><a href="?vista=iniciarSesion"><i class="fa fa-lock fa-fw"></i>Inicio sesión</a></li>
        <?php }?>
        <li><a href="#" onclick="animacionScroll('#informacion');"><i class="fa fa-building fa-fw"></i>Empresa</a></li>
        <li><a href="#" onclick="animacionScroll('#informacion');"><i class="fa fa-info fa-fw"></i>Contacto</a></li>
    </ul>
</div>
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
 <?php
    if(isset($_SESSION["nivelUsuario"])){
        $nivel=$_SESSION["nivelUsuario"];
        if($nivel == "Administrador"){
            require_once( "menuAdministrador.html");
        }else if($nivel == "Secretaria"){
            require_once( "menuSecretaria.html");
        }else if($nivel == "Cliente"){
            require_once( "menuCliente.html");
        }
    }
    ?>
