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
    <script src="operaciones.js"></script>
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
                <li><input type="text" placeholder="Buscar" class="input_nav2"></li>
                <!--<li><a href="./inicio_sesion.php">Iniciar sesión</a></li>-->
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
    <section>
        <div class="carrusel">
            <div class="container" id="c1">
                <div class="img_1">
                    <img src="./images/chaqueta.webp" alt="">
                </div>
                <div class="flechas1">
                    <a href="#c3"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c2"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="container" id="c2">
                <div class="img_2">
                    <img src="./images/chaqueta.2.jfif" alt="">
                </div>
                <div class="flechas2">
                    <a href="#c1"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c3"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="container" id="c3">
                <div class="img_3">
                    <img src="./images/chaqueta3.webp" alt="">
                </div>
                <div class="flechas3">
                    <a href="#c2"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c1"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="aviso1">Nueva colección</div>

        <div class="container2">
            <div class="container_link">
                <a href="mujer.html">Mujer</a>
            </div>
            <div class="container_link2">
                <a href="ejemplos.html">Hombre</a>
            </div>
            <div class="container_link3">
                <a href="ejemplos.html">Ofertas</a>
            </div>


        </div>

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