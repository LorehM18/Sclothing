<?php

include 'conexionProducto.php';
include 'carrito.php';
include 'headerp.php';
?>
<!DOCTYPE html>
<html lang="en">

<!--<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://kit.fontawesome.com/ee4011fd08.js" crossorigin="anonymous"></script>
    <title>Sclothing</title>
</head>

<body>
    
    <header>
        <nav class="nav_uno">
            <ul>
                <li><a href="./index.php">SCLOTHING</a></li>
                <li><a href="./mujer.php">MUJER</a></li>
                <li><a href="./hombre.php">HOMBRE</a></li>
                <li>OFERTAS</li>
            </ul>
        </nav>
        <nav class="nav_dos">
            <ul>
                <li><input type="text" placeholder="Buscar"></li>                
                <li><a href="mostrar_carrito.php">Carrito</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="index.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="-/registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>-->
    <section>
        <div class="seccion_m">
            <div class="div_filtro">
                <h2>Filtro por Categoría</h2>
                <label>
                    <input type="checkbox" value="jean_dama" class="filter" /> Jean
                </label>
                <label>
                    <input type="checkbox" value="camisa_dama" class="filter" /> Camisa
                </label>
                <label>
                    <input type="checkbox" value="gaban" class="filter" /> Gaban
                </label>
                <label>
                    <input type="checkbox" value="falda" class="filter" /> Falda
                </label>
                <label>
                    <input type="checkbox" value="pantalon_dama" class="filter" /> Pantalón                   
                </label>
            </div>
            <div class="div_img">
                <?php 
                $productosArray=array();
                if($consulta->num_rows>0){
                    while($row=$consulta->fetch_assoc()){
                        $productosArray[]=$row;
                    }
                    
                }
                $productosMujer = []; 
                foreach ($productosArray as $producto) {
                   if ($producto['categoria'] == 'mujer') {
                    $productosMujer[] = $producto;  
                   }
                }

                ?>
                <?php //foreach($productosMujer as $product): ?>
                    <?php foreach($productosMujer as $index => $product): ?>
    <div class="div_item" data-categoria="<?php echo $product['nombre']; ?>"> 
        <img src="./images/<?php echo strtolower($product['categoria']) . '_'.($index+1).'.png'; ?>" alt=""> 
        <p><?php echo $product['nombre_producto']; ?></p> 
        <p><?php echo '$' . number_format($product['precio'], 0, ',', '.'); ?></p> 
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $product['id_producto']; ?>">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo $product['nombre']; ?>">
            <input type="hidden" name="precio" id="precio" value="<?php echo $product['precio']; ?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo 1; ?>">
        <button class="ag_carrito" name="btnAccion" value="Agregar" type="submit">Añadir al carrito</button>
        </form>        
        
    </div>


                 <!--<div class="div_item" data-categoria="jean">
                    <img src="./images/mujer_1.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$79.000</p>
                 </div>
               
                <div class="div_item" data-categoria="jean">
                    <img src="./images/mujer_2.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$120.000</p>
                    <button class="ag_carrito" name="btnAccion" value="Agregar" type="submit">Añadir al carrito</button>
                </div>
                <div class="div_item" data-categoria="camisa">
                    <img src="./images/mujer_3.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$90.000</p>
                </div>
                <div class="div_item" data-categoria="gaban">
                    <img src="./images/mujer_4.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$279.000</p>
                </div>
                <div class="div_item" data-categoria="pantalon">
                    <img src="./images/mujer_5.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$310.000</p>
                </div>
                <div class="div_item" data-categoria="falda">
                    <img src="./images/mujer_6.png" alt="">
                    <p><?php //echo $product['nombre_producto']; ?></p>
                    <p>$89.000</p>
                </div>-->
                <?php endforeach; ?>
            </div>
        </div>
        
    </section>
    <footer>
        <hr>
        <div class="conte_foot2">
            <div class="cf1">
                <div>COMUNICATE CON NOSOTROS</div>
                <div>servicioalcliente@Sclothing.com.co</div>
                <div>Preguntas frecuentes</div>
                <div>PQR</div>
                <div>Rastreo de envio</div>
            </div>
            <div class="cf2">
                <div>CONDICIONES GENERALES DE VENTA</div>
                <div>Politicas de envio</div>
                <div>Politicas de garantia </div>
            </div>
            <div>
                <p>Telefono</p>
                <p>Whatsapp</p>
                <p>Cambios</p>
            </div>
        </div>

    </footer>
    <script src="operaciones.js"></script>
    <script src="operaciones2.js"></script>
</body>

</html>