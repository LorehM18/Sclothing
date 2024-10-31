<?php
include 'db.php'; // Conectar a la base de datos
session_start(); // Iniciar sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM usuarios WHERE username='$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username']; // Guardar el usuario en sesión
        echo "Inicio de sesión exitoso. Bienvenido, " . $user['nombre'];
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}

$conn->close(); // Cerrar la conexión
?>
