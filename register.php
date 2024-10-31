<?php
include 'db.php'; // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $sql = "INSERT INTO usuarios (username, password, nombre, apellido, correo, fecha_nacimiento) 
            VALUES ('$username', '$password', '$nombre', '$apellido', '$correo', '$fecha_nacimiento')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Cerrar la conexión
?>
