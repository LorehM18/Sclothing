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
        <div class="seccion_m">
            <div class="div_filtro">
                <h2>Filtro por Categoría</h2>
                <label>
                    <input type="checkbox" value="jeanh" class="filter" /> Jean
                </label>
                <label>
                    <input type="checkbox" value="camisah" class="filter" /> Camisa
                </label>
                <label>
                    <input type="checkbox" value="chaquetah" class="filter" /> Chaqueta
                </label>
                <label>
                    <input type="checkbox" value="camisetah" class="filter" /> Camiseta
                </label>
                <label>
                    <input type="checkbox" value="pantalonh" class="filter" /> Pantalón
                </label>
                <label>
                    <input type="checkbox" value="buzoh" class="filter" /> Buzo
                </label>
            </div>
            <div class="div_img">
                <div class="div_item" data-categoria="chaquetah">
                    <img src="./images/chaqueta_h.jpg" alt="">
                    <p>Chaqueta</p>
                    <p>$320.000</p>
                </div>
                <div class="div_item" data-categoria="camisah">
                    <img src="./images/camisa_h.webp" alt="">
                    <p>Camisa</p>
                    <p>$99.000</p>
                </div>
                <div class="div_item" data-categoria="pantalonh">
                    <img src="./images/pantalon_h.jpg" alt="">
                    <p>Pantalon</p>
                    <p>$190.000</p>
                </div>
                <div class="div_item" data-categoria="buzoh">
                    <img src="./images/buzo_h.jpg" alt="">
                    <p>Buzo</p>
                    <p>$110.000</p>
                </div>
                <div class="div_item" data-categoria="jeanh">
                    <img src="./images/jean_h.jpg" alt="">
                    <p>Jean</p>
                    <p>$130.000</p>
                </div>
                <div class="div_item" data-categoria="camisetah">
                    <img src="./images/camiseta_h.webp" alt="">
                    <p>Camiseta</p>
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