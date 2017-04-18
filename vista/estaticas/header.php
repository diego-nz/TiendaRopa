<!--Boton menu movil-->
<input type="checkbox" id="btnMenu">
<label id="lblHamburguer" for="btnMenu"><i class="fa fa-bars fa-3x"></i></label>
<div class="menu">
    <ul>
        <!--Sustituir los # con el nombre de la pagina a donde va ser dirigido-->
        <?php 
            if(isset($_SESSION["nombreUsuario"])){
        ?>
        <div class="logeado" style="background-color: #00beda;margin-top: -20px;padding: 1px;">
            <?php echo "<h3><i class='fa fa-user-circle-o fa-lg'></i> Bienvenido ".$_SESSION["nombreUsuario"]."</h3>"; ?>
        </div>
        <?php } ?>
        <li><a href="?vista=inicio" id="inicio"><i class="fa fa-home fa-fw"></i>Inicio</a></li>
        <li><a href="#"><i class="fa fa-user fa-fw"></i>Mi cuenta</a></li>
        <li><a href="#"><i class="fa fa-heart fa-fw"></i>Favoritos</a></li>
        <li><a href="#" onclick="animacionScroll('#informacion');"><i class="fa fa-building fa-fw"></i>Empresa</a></li>
        <li><a href="#" onclick="animacionScroll('#informacion');"><i class="fa fa-info fa-fw"></i>Contacto</a></li>
        <?php
        if(isset($_SESSION["nombreUsuario"])){?>
        <li><a href="?vista=cerrarSesion"><i class="fa fa-lock fa-fw"></i>Cerrar sesión</a></li>
        <?php }else{ ?>
        <li><a href="?vista=iniciarSesion"><i class="fa fa-lock fa-fw"></i>Inicio sesión</a></li>
        <?php }?>
    </ul>
</div>
<div class="capaLogo">
    <div class="logo">
        <img src="assets/logo.png" alt="GIFTS">
    </div>
    <div class="buscador">
    <?php  if(!isset($_GET["vista"]) || $_GET["vista"]=="inicio"){ ?>
           <input type="text" placeholder="buscador" id="txtBuscar">
           <div id="resultadosBuscador" style="display: none;"></div>
    <?php }  ?>
    </div>
    <div class="carrito">
        <span><i class="fa fa-shopping-cart fa-2x" style="color:#00BED7;"></i>Mi carrito</span>
        <span style="color:#00BED7;">(0)elementos | $0.00</span>
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
