<?php
include 'conexion.php'; // Conectar a la base de datos


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $username = $_POST['usuario']; // Aquí debes asegurarte de que el campo en el HTML sea 'usuario'
    $password = $_POST['contraseña'];
    $rep_contraseña = $_POST['rep_contraseña'];

    // Verificar que las contraseñas coincidan
    if ($password !== $rep_contraseña) {
        die("Las contraseñas no coinciden.");
    }

    // Encriptar la contraseña
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Usar consultas preparadas para evitar inyección SQL
    $sql = "INSERT INTO datos_usuarios (username, password, nombre, apellido, correo, fecha_nacimiento) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    if ($stmt = $conn->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("ssssss", $username, $password_hash, $nombre, $apellido, $correo, $fecha_nacimiento);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            // "Registro exitoso"
            header("Location: inicio_sesion.php");
            exit();
        } else {
            echo "Error al registrar: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
