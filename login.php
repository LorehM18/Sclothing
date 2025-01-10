<?php
include 'conexion.php'; // Conectar a la base de datos
session_start(); // Iniciar sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Usar una consulta preparada para evitar inyecciones SQL
    $stmt = $conn->prepare("SELECT * FROM datos_usuarios WHERE username = ?");
    $stmt->bind_param("s", $username); // El "s" indica que el parámetro es una cadena
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verificar si el usuario existe y la contraseña es correcta
    if ($user && password_verify($password, $user['password'])) {
        // Guardar el usuario en la sesión
        $_SESSION['username'] = $user['username']; 
        // Redirigir al usuario a su panel o página principal
        header("Location: index.php"); // Redirige a la página de inicio
        exit(); // Asegura que no se ejecute más código después de la redirección
    } else {
        // Si el usuario o la contraseña son incorrectos
        echo "Usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $stmt->close();
}

$conn->close(); // Cerrar la conexión a la base de datos
?>
