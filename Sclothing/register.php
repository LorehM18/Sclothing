<?php
include 'conexion.php'; // Conectar a la base de datos
//$mensaje='';

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
    //echo $password_hash;  // Muestra el hash generado
    $sql_check = "SELECT id FROM datos_usuarios WHERE username = ? OR correo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("ss", $username, $correo);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        header("Location: registro.php?error=dato_ocupado");
    }


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
           //echo '<script src="operaciones.js"></script>';
           //echo '<script>mostrarPopUpExito();</script>';
           header("Location: registro.php?exito=1");
           
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
