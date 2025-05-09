<?php 
include 'conexionProducto.php';
include 'carrito.php';
include 'headerp.php';?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ofertas</title>
    </head>
    <body>       
    
<section>
        
                <?php 
                $productosArray=array();
                if($consulta->num_rows>0){
                    while($row=$consulta->fetch_assoc()){
                        $productosArray[]=$row;
                    }
                    
                }
                $productosOferta = []; 
                foreach ($productosArray as $producto) {
                   if ($producto['categoria'] == 'oferta') {
                    $productosOferta[] = $producto;  
                   }
                }

                ?>
                <?php //foreach($productosMujer as $product): ?>
                    <div class="div_cofertas">
                    <?php foreach($productosOferta as $index => $product): ?>
    
    <div class="div_ofertas" data-categoria="<?php echo $product['nombre']; ?>">         
        <img  class="img_oferta" src="./images/<?php echo strtolower($product['categoria']) . '_'.($index+1).'.jpg'; ?>" alt=""> 
        <p><?php echo $product['nombre_producto']; ?></p> 
        <p><?php echo '$' . number_format($product['precio'], 0, ',', '.'); ?></p> 
        <form action="mostrar_carrito.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $product['id_producto']; ?>">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo $product['nombre']; ?>">
            <input type="hidden" name="precio" id="precio" value="<?php echo $product['precio']; ?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
        <button class="ag_carrito" name="btnAccion" value="Agregar" type="submit">Añadir al carrito</button>
        </form>        
        
    </div>


    <?php endforeach; ?>
    
    </div>
        
        
    </section>

    </body>
    </html>