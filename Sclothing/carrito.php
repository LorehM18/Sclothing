<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // Iniciar la sesión


$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnAccion'])) {
        switch ($_POST['btnAccion']) {
            case 'Agregar':
                if (!isset($_SESSION['username'])) {
                    header("Location: inicio_sesion.php");
                    exit();
                }
                if (
                    isset($_POST['id']) && is_numeric($_POST['id']) &&
                    isset($_POST['nombre']) &&
                    isset($_POST['precio']) && is_numeric($_POST['precio']) &&
                    isset($_POST['cantidad']) && is_numeric($_POST['cantidad'])
                ) {
                    $id_producto = $_POST['id'];
                    $nombre = $_POST['nombre'];
                    $precio = $_POST['precio'];
                    $cantidad = $_POST['cantidad'];

                    $prod = array(
                        'id_producto' => $id_producto,
                        'nombre' => $nombre,
                        'precio' => $precio,
                        'cantidad' => $cantidad
                    );

                    if (!isset($_SESSION['CARRITO'])) {
                        $_SESSION['CARRITO'][0] = $prod;
                    } else {
                        $_SESSION['CARRITO'][] = $prod;
                    }

                    $mensaje = "Producto agregado correctamente.";
                } else {
                    $mensaje = "Datos inválidos para agregar.";
                }
                break;

            case 'Eliminar':
                if (isset($_POST['id']) && is_numeric($_POST['id'])) {
                    $id = $_POST['id'];

                    foreach ($_SESSION['CARRITO'] as $indice => $prod) {
                        if ($prod['id_producto'] == $id) {
                            unset($_SESSION['CARRITO'][$indice]);
                            $_SESSION['CARRITO'] = array_values($_SESSION['CARRITO']); // Reindexar
                            $mensaje = "Producto eliminado correctamente.";
                            break;
                        }
                    }
                } else {
                    $mensaje = "ID inválido para eliminar.";
                }
                break;
        }
    }
}



       
    