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

    
    <section>

<form method="post" action="?vista=generador">

<?php
//session_start();
if(empty($_SESSION['carrito'])){
    echo '<center><h2 style="display: block; margin-left: auto;
                                margin-right: auto; background-color: #00a577;
                                width: 30%; padding: 5px; border-radius: 20px;
                                font-size: 1.2em; color: red; text-align:center;" 
                                margin-bottom: 2%;">>No ha agregado ningun articulo a su carrito</h2></center>';
 
}else if(isset($_GET["estado"])){
    
    $estado=$_GET["estado"];
    if($estado == 4){
     echo '<div id="estado" style="display: block; margin-left: auto;
                                margin-right: auto; background-color: #00a577;
                                width: 30%; padding: 5px; border-radius: 20px;
                                font-size: 1.2em; color: #FAFAFA; text-align:center;" 
                                margin-bottom: 2%;">
                                Se ha agregado el producto al carrito.
            </div>';
     ?>
    <center>
        <table >
        <thead>
            <tr>
           <th>Id producto</th>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Precio venta</th>
           <th>Subtotal</th>
           <th></th>
       </tr> 
        </thead>
       
        <?php
    foreach($_SESSION['carrito'] as $producto){
            
        ?>
        <tbody>
            <tr>
            <td><input name="idp" value="<?php echo $producto['id']?>"></td>
            <td><input name="pro" value="<?php echo $producto['nomPro']?>"></td>
            <td><input name="can" value="<?php echo $producto['cantidad']?>"></td>
            <td><input name="ven" value="<?php echo $producto['pventa']?>"></td>
            <td><input name="subt" value="<?php echo $producto['subtotal']?>"></td>
            <td><a href='?vista=eliminaCarrito&id=<?php echo $producto['id']?>'>Eliminar</a></td>
            
        </tr>
        </tbody>
        
        
        <?php } ?>
        
    </table>
    </center>
    
        <?php
    
}else if($estado == 5){
    echo '<div id="estado" style="display: block; margin-left: auto;
                                margin-right: auto; background-color: #00a577;
                                width: 30%; padding: 5px; border-radius: 20px;
                                font-size: 1.2em; color: #FAFAFA; text-align:center;" 
                                margin-bottom: 2%;>
                                Se ha eliminado el producto de su carrito.
            </div>';
            ?>
            <center>
                <table >
                <thead>
                     <tr>
           <th>Id producto</th>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Precio venta</th>
           <th>Subtotal</th>
           <th></th>
       </tr> 
                </thead>
      
        <?php
    foreach($_SESSION['carrito'] as $producto){
            
        ?>
        <tbody>
            <tr>
            <td><input name="idp" value="<?php echo $producto['id']?>"></td>
            <td><input name="pro" value="<?php echo $producto['nomPro']?>"></td>
            <td><input name="can" value="<?php echo $producto['cantidad']?>"></td>
            <td><input name="ven" value="<?php echo $producto['pventa']?>"></td>
            <td><input name="subt" value="<?php echo $producto['subtotal']?>"></td>
            <td><a href='?vista=eliminaCarrito&id=<?php echo $producto['id']?>'>Eliminar</a></td>
            
        </tr>
        </tbody>
        
        
        <?php } ?>
        
    </table>

            <?php
}
?>
<?php   
    }else if(!isset($_GET["estado"])){
        ?>
 <table >
 <thead>
     <tr>
           <th>Id producto</th>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Precio venta</th>
           <th>Subtotal</th>
           <th></th>
       </tr>
 </thead>
        
        <?php
    foreach($_SESSION['carrito'] as $producto){
            
        ?>
        <tbody>
            <tr>
            <td><input name="idp" value="<?php echo $producto['id']?>"></td>
            <td><input name="pro" value="<?php echo $producto['nomPro']?>"></td>
            <td><input name="can" value="<?php echo $producto['cantidad']?>"></td>
            <td><input name="ven" value="<?php echo $producto['pventa']?>"></td>
            <td><input name="subt" value="<?php echo $producto['subtotal']?>"></td>
            <td><a href='?vista=eliminaCarrito&id=<?php echo $producto['id']?>'>Eliminar</a></td>
            
        </tr>
        </tbody>
        
        
        <?php } ?>
        
    </table>
    </center>
        <?php
    
}else if($estado == 5){
    echo '<div id="estado" style="display: block; margin-left: auto;
                                margin-right: auto; background-color: #00a577;
                                width: 30%; padding: 5px; border-radius: 20px;
                                font-size: 1.2em; color: #FAFAFA; text-align:center;" 
                                margin-bottom: 2%;>
                                Se ha eliminado el producto de su carrito.
            </div>';
            ?>
            <center>
                <table >
                <thead>
                   <tr>
           <th>Id producto</th>
           <th>Producto</th>
           <th>Cantidad</th>
           <th>Precio venta</th>
           <th>Subtotal</th>
           <th></th>
       </tr>  
                </thead>
       
        <?php
    foreach($_SESSION['carrito'] as $producto){
            
        ?>
        <tbody>
             <tr>
            <td><input name="idp" value="<?php echo $producto['id']?>"></td>
            <td><input name="pro" value="<?php echo $producto['nomPro']?>"></td>
            <td><input name="can" value="<?php echo $producto['cantidad']?>"></td>
            <td><input name="ven" value="<?php echo $producto['pventa']?>"></td>
            <td><input name="subt" value="<?php echo $producto['subtotal']?>"></td>
            <td><a href='?vista=eliminaCarrito&id=<?php echo $producto['id']?>'>Eliminar</a></td>
            
        </tr>
        </tbody>

        
        <?php } ?>
        
    </table>
    </center>
        <?php

    }
    ?> 

    <hr color="blue"/>
      </form>
    </section>

</body>
</html>
