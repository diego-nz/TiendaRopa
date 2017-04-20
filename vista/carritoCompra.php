<?php
require_once("./modelo/conexion.php");

$id = $_POST['idProducto'];
$cantidad = $_POST['cantidad'];


//echo $id; 

if(isset($id) && isset($cantidad)){
    if($cantidad!=0){
        
        $querySelect = "SELECT * FROM t_productos WHERE id_producto=".$id; 
 $mysqli->real_query($querySelect);
     
       $query=$mysqli->store_result();
                    while($row = $query->fetch_assoc()){
                       $nomProducto = $row['producto'];
                        $pventa = $row['p_venta'];
                        
                        
                    }
        
        $subtotal=$pventa*$cantidad;
        //Primer producto
        //session_start();
        if(empty($_SESSION['carrito'])){
$_SESSION['carrito'] = array(array('id'=>$id,'nomPro'=>$nomProducto,'cantidad'=>$cantidad,'pventa'=>$pventa,'subtotal'=>$subtotal));
            
        }else{
            
            //apartir del segundo producto
            $carro = $_SESSION['carrito'];
            array_push($carro,array('id'=>$id,'nomPro'=>$nomProducto,'cantidad'=>$cantidad,'pventa'=>$pventa,'subtotal'=>$subtotal));
            $_SESSION['carrito']=$carro;
        }
        
        header("Location:?vista=mostrarCarrito&estado=4");
        
    }else{
    
            
       
       
    }
   
    
}else{
    echo "Las variables estan vacias";
    
}

?>