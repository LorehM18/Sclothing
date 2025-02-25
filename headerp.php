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
                <li><a href="./ofertas.php">OFERTAS</a></li>
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
                <li><a href="./registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>
    </body>
</html>