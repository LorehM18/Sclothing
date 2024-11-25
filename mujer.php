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
                <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
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
        <div class="seccion_m">
            <div class="div_filtro">
                <h2>Filtro por Categoría</h2>
                <label>
                    <input type="checkbox" value="jean" class="filter" /> Jean
                </label>
                <label>
                    <input type="checkbox" value="camisa" class="filter" /> Camisa
                </label>
                <label>
                    <input type="checkbox" value="gaban" class="filter" /> Gaban
                </label>
                <label>
                    <input type="checkbox" value="falda" class="filter" /> Falda
                </label>
                <label>
                    <input type="checkbox" value="pantalon" class="filter" /> Pantalón
                </label>
            </div>
            <div class="div_img">
                <div class="div_item" data-categoria="jean">
                    <img src="./images/mujer_1.png" alt="">
                    <p>Jean</p>
                    <p>$79.000</p>
                </div>
                <div class="div_item" data-categoria="jean">
                    <img src="./images/mujer_2.png" alt="">
                    <p>Jean tiro medio</p>
                    <p>$120.000</p>
                </div>
                <div class="div_item" data-categoria="camisa">
                    <img src="./images/mujer_3.png" alt="">
                    <p>Camisa</p>
                    <p>$90.000</p>
                </div>
                <div class="div_item" data-categoria="gaban">
                    <img src="./images/mujer_4.png" alt="">
                    <p>Gaban</p>
                    <p>$279.000</p>
                </div>
                <div class="div_item" data-categoria="pantalon">
                    <img src="./images/mujer_5.png" alt="">
                    <p>Pantalón</p>
                    <p>$310.000</p>
                </div>
                <div class="div_item" data-categoria="falda">
                    <img src="./images/mujer_6.png" alt="">
                    <p>Falda</p>
                    <p>$89.000</p>
                </div>
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
</body>

</html>