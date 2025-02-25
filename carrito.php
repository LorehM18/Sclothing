<?php
session_start(); // Iniciar la sesión
?>

    
   <?php  $mensaje='';?>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_producto = $_POST['id'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
        if(!isset($_SESSION['CARRITO'])){
            $prod=array('id_producto'=>$id_producto,
            'nombre'=>$nombre,
            'precio'=>$precio,
            'cantidad'=>$cantidad
             );
        $_SESSION['CARRITO'][0]=$prod;
        }else{
            $numeroProducto=count($_SESSION['CARRITO']);
            $prod=array('id_producto'=>$id_producto,
            'nombre'=>$nombre,
            'precio'=>$precio,
            'cantidad'=>$cantidad);
            $_SESSION['CARRITO'][$numeroProducto]=$prod;

        }
        
        $mensaje=print_r($_SESSION,true);
        echo $mensaje;
            
    }
        ?>
        
    <?php
   
    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
            case 'Agregar':
                if(is_numeric($_POST['id'])){
                    $mensaje="ok".$id_producto;
                }
            break;

            case 'Eliminar':
                if (isset($_POST['id']) && is_numeric($_POST['id'])){
                    $id=$_POST['id'];
                    print_r($id);
                    
                    
                 foreach($_SESSION['CARRITO'] as $indice=>$prod){
                  if($prod['id_producto']==$id){                   
                    unset($_SESSION['CARRITO'][$indice]);
                    $_SESSION['CARRITO'] = array_values($_SESSION['CARRITO']);
                    echo "<script>console.log('Elemento eliminado');</script>";
                    break;

                  } 

            
                }
                
            }
                break;
                
        }
    }

    
    ?>
    
       
    