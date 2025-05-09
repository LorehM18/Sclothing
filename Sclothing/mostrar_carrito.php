<?php
include 'carrito.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // Iniciar la sesión
//if (!isset($_SESSION['username'])) {
  //  header("Location: inicio_sesion.php"); // Redirige al login
    //exit();
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <li><a href="./ofertas.php">OFERTAS</a></li>
            </ul>
        </nav>
        <nav class="nav_dos">
            <ul>
                <li><input type="text" placeholder="Buscar"></li>                
                <li><a href="./mostrar_carrito.php">Carrito</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="index.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="./registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>

<h3>Lista del carrito</h3>   
<?php if(!empty($_SESSION['CARRITO'])) {?> 
<table class="table_carrito">
        <tbody>
            <tr>
                <th width="40%" class="text-center">Descripción</th>
                <th width="15%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%" class="text-center"></th>
            </tr>
            <?php $total=0?>
            <?php foreach($_SESSION['CARRITO'] AS $indice=>$prod) {?>
            <tr>
                <td width="40%" class="text-center"><?php echo $prod['nombre']?></td>
                <td width="15%" class="text-center">$<?php echo $prod['precio']?></td>
                <td width="20%" class="text-center"><?php echo $prod['cantidad']?></td>
                <td width="20%" class="text-center"><?php echo number_format($prod['precio']*$prod['cantidad'],2); ?></td>
                <td width="5%" >
                    <form action="" method='post'>
                        <input type="hidden" name="id" id="id" value="<?php echo $prod['id_producto'] ?>">
                        <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php $total=$total+($prod['precio']*$prod['cantidad'])?>   
            <?php }?>        
            <tr>                
            <td colspan="3" >Total</td>
            <td><?php echo number_format($total,2);?></td>
            <td></td>
            
        </tr>
            
        </tbody>
</table> 

<?php } else{ ?>    
    <div class="alert kasrt.succed">No hay productos en el carrito</div>
        
<?php }?>
       <section>

    <br>
    
    <table class="table">
  <thead class="table-light">
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
    </table>
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
                <p>Teléfono: 601(8450216)</p>
                <p>Whatsapp: 3204587233</p>
                <p>Cambios: cambios@sclothing.com.co</p>
            </div>
        </div>
        

    </footer>
    <script src="operaciones.js"></script>
    <script src="operaciones2.js"></script>
</body>

</html>