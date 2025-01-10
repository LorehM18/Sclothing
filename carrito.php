<?php
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                <li><a href="#">Carrito</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="index.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="-/registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>
    <section>
       
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