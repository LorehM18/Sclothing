<?php
define("KEY","security12345678");
define("COD","AES-128-ECB");
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "usuarios"; 


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
