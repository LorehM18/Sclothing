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
                <li><form action="/buscar"><a href="./index.php">SCLOTHING</a></form></li>
                <li><a href="./mujer.php">MUJER</a></li>
                <li><a href="./hombre.php">HOMBRE</a></li>
                <li><a href="./ofertas.php">OFERTAS</a></li>
            </ul>
        </nav>
        <nav class="nav_dos">
            <ul>
                <li><input type="text" placeholder="Buscar" class="input_nav2" id="buscador"></li>               
                <li><a href="./mostrar_carrito.php">Carrito</a></li>
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
                    <img src="./images/oferta_1.jpg" alt="">
                </div>
                <div class="flechas1">
                    <a href="#c3"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c2"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="container" id="c2">
                <div class="img_2">
                    <img src="./images/oferta_2.jpg" alt="">
                </div>
                <div class="flechas2">
                    <a href="#c1"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c3"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="container" id="c3">
                <div class="img_3">
                    <img src="./images/oferta_3.jpg" alt="">
                </div>
                <div class="flechas3">
                    <a href="#c2"><i class="fa-solid fa-chevron-left"></i></a>
                    <a href="#c1"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="aviso1">Ofertas</div>

        <div class="container2">
            <div class="container_link">
                <a href="mujer.php">Mujer</a>
            </div>
            <div class="container_link2">
                <a href="hombre.php">Hombre</a>
            </div>
            <div class="container_link3">
                <a href="ofertas.php">Ofertas</a>
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
    <script src="operaciones2.js"></script>
</body>

</html>