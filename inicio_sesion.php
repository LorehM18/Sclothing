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
                <li>SCLOTHING</li>
                <li><a href="./mujer.php">MUJER</a></li>
                <li>HOMBRE</li>
                <li>OFERTAS</li>
            </ul>
        </nav>
        <nav class="nav_dos">
            <ul>
                <li><input type="text" placeholder="Buscar"></li>
                <!-- <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>-->
                <li><a href="#">Carrito</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
                <?php else: ?>
               <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="./registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>
    <section class="inicio">
        <div>
            <form action="login.php" method="post">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="pwd">Contraseña:</label><br>
            <input type="password" id="pwd" name="password"><br>
            <br>
            <button type="submit">Ingresar</button>            
          </form><br>
        </div>
          <div><a href="registro.php">Registrarse</a></div><br>
          <div><a href="">Olvide contraseña</a></div>
    </section>
    <footer>
        <div class="conte_foot1">
            <hr>
            <p>Regístrate y obtén un cupón</p>
            <input type="mail" placeholder="correo">
            <input type="button" value="Enviar">
            <p><input type="checkbox" name="" id="">Declaro que he leído la política de datos
            </p>
            <hr>
        </div>
        <div class="conte_foot2">
            <div class="cf1">
                <div>COMUNÍCATE CON NOSOTROS</div>
                <div>servicioalcliente@Sclothing.com.co</div>
                <div>Preguntas frecuentes</div>
                <div>PQR</div>
                <div>Rastreo de envÍo</div>
            </div>
            <div class="cf2">
                <div>CONDICIONES GENERALES DE VENTA</div>
                <div>Políticas de envio.</div>
                <div>Políticas de garantía. </div>
            </div>
            <div>
                <p>Teléfono</p>
                <p>Whatsapp</p>
                <p>Cambios</p>
            </div>
        </div>
        
    </footer>
</body>

</html>